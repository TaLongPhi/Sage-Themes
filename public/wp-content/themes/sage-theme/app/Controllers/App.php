<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use App\Services\Queries;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        $title = "";
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            $title = get_the_archive_title();
        }
        if (is_search()) {
            $title = sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            $title = __('Not Found', 'sage');
        }
        if (empty($title)) {
            $title = get_the_title();
        }
        return $title;
    }

    public static function getLogo()
    {
        $logo = get_field('ns_header_logo', ACF_OPTION);
        $url = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/logo_sagetheme.svg';
        $logofooter = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/logo-footer.svg';
        $alt = ($logo && $logo['alt']) ? $logo['alt'] : 'logo';
        $href = home_url();
        return compact('url','logofooter', 'alt', 'href');
    }

    public static function getBanner()
    {
        $banner = get_field('ns_header_banner', ACF_OPTION);
        $BannerR = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/img_banner/banner.png';
        $Banner = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/img_banner/bg_banner.png';
        $Business = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/imgbusiness/GroupAll.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $alt1 = ($banner && $banner['alt']) ? $banner['alt'] : 'business';
        $href = home_url();
        return compact('Banner', 'Business', 'BannerR', 'alt', 'alt1', 'href');
    }

    public static function getIcon()
    {
        $icon = get_field('ns_header_Icon', ACF_OPTION);
        $icon1 = ($icon && $icon['url']) ? $icon['url'] : TEMPLATE_ASSETS_URL . '/images/imgERP/icon1.svg';
        $icon2 = ($icon && $icon['url']) ? $icon['url'] : TEMPLATE_ASSETS_URL . '/images/imgERP/icon2.svg';
        $icon3 = ($icon && $icon['url']) ? $icon['url'] : TEMPLATE_ASSETS_URL . '/images/imgERP/icon3.svg';
        $icon4 = ($icon && $icon['url']) ? $icon['url'] : TEMPLATE_ASSETS_URL . '/images/imgERP/icon4.svg';
        $alt = ($icon && $icon['alt']) ? $icon['alt'] : 'icon';
        $href = home_url();
        return compact('icon1', 'icon2', 'icon3', 'icon4', 'alt', 'href');
    }
    
    public static function getImg(){
        $img=get_field('ns_header_Img', ACF_OPTION);
        $imglast=($img && $img['url']) ? $img['url'] : TEMPLATE_ASSETS_URL . '/images/The-Lastest.jpg';
        $imgcp=($img && $img['url']) ? $img['url'] : TEMPLATE_ASSETS_URL . '/images/compac.png';
        $imgeco=($img && $img['url']) ? $img['url'] : TEMPLATE_ASSETS_URL . '/images/Ecosystem-gr.png';
        $img2town=($img && $img['url']) ? $img['url'] : TEMPLATE_ASSETS_URL . '/images/trusted/2Towns_PreferredFullColorLogoPNG.png';
        $imgadv=($img && $img['url']) ? $img['url'] : TEMPLATE_ASSETS_URL . '/images/trusted/Advance Beverage Company.png';
        $imgapb=($img && $img['url']) ? $img['url'] : TEMPLATE_ASSETS_URL . '/images/trusted/APB-RH Barringer.png';
        $imgrock=($img && $img['url']) ? $img['url'] : TEMPLATE_ASSETS_URL . '/images/trusted/Eagle Rock.png';
        $imgfire=($img && $img['url']) ? $img['url'] : TEMPLATE_ASSETS_URL . '/images/trusted/firestone_logo_small1.png';
        $imgwhi=($img && $img['url']) ? $img['url'] : TEMPLATE_ASSETS_URL . '/images/trusted/WhistlePig_Logo_Primary.png';
        $imgfooter=($img && $img['url']) ? $img['url'] : TEMPLATE_ASSETS_URL . '/images/bg-footer.png';
        $alt = ($img && $img['alt']) ? $img['alt'] : 'img';
        $href = home_url();
        return compact('imglast','imgcp','imgeco','img2town','imgadv','imgapb','imgrock','imgfire','imgwhi','imgfooter','alt', 'href');
    }
    public static function getFooterAddress()
    {
        return get_field('ns_footer_address', ACF_OPTION);
    }

    public static function getCopyRight()
    {
        return get_field('ns_copyright', ACF_OPTION);
    }

    public static function getTrackingCode($position = '')
    {
        if ($position) {
            switch ($position) {
                case 'in_head':
                    $code = get_field('ns_tracking_head', ACF_OPTION);
                    break;
                case 'after_open_body':
                    $code = get_field('ns_tracking_after_body', ACF_OPTION);
                    break;
                case 'before_close_body':
                    $code = get_field('ns_tracking_before_body', ACF_OPTION);
                    break;
                default:
                    $code = '';
                    break;
            }
            return $code;
        }
        return '';
    }

    public static function getFavicon()
    {
        $favicon = get_field('ns_favicon', ACF_OPTION);
        return $favicon ? $favicon : '';
    }

    public static function getAppleIcon()
    {
        $icon = get_field('ns_apple_touch_icon', ACF_OPTION);
        return $icon ? $icon : '';
    }
    /**
     * Get content 404.
     *
     * @return string
     */
    public static function getContent404()
    {
        return Queries::getOptionField('ns_404_page_content');
    }

    /**
     * Get Main Menu
     */
    public static function getMainNav()
    {
        $location = 'primary_navigation';
        if (has_nav_menu($location)) {
            return wp_nav_menu(array(
                THEME_LOCATION => $location,
                CONTAINER => false,
                DEPTH => 2,
                WALKER => new \App\Services\Nav\C8ThemeHeaderMenu(),
                'menu_class' => 'main-menu-ul navbar-nav list-none flex mb-0 p-0 text-white flex-col text-inherit
                lg:flex-row lg:justify-end',
                ECHO_TEXT => false,
            ));
        } else {
            return '';
        }
    }
    /**
     * Get Footer Menu
     */
    public static function getFooterNav()
    {
        $location = 'footer_navigation';
        if (has_nav_menu($location)) {
            return wp_nav_menu(array(
                THEME_LOCATION => $location,
                ITEMS_WRAP => '%3$s',
                CONTAINER => false,
                DEPTH => 2,
                WALKER => new \App\Services\Nav\C8ThemeFooterMenu(),
                ECHO_TEXT => false,
            ));
        } else {
            return '';
        }
    }
    public static function getNameModule($num)
    {
        $name = "module" . $num ;
        return $name;
    }
}
