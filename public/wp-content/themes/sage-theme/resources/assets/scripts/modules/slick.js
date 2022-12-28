$('.carousel').slick({
    prevArrow: '<span class="slick-prev icomoon icon-chevron-left"></span>',
    nextArrow: '<span class="slick-next icomoon icon-chevron-right"></span>',
});

$('.carousel2').slick({
    prevArrow: '<span class="slick2-prev icomoon icon-chevron-left"></span>',
    nextArrow: '<span class="slick2-next icomoon icon-chevron-right"></span>',
});

$('.carousel3').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows:true,
    // slide: '.SlideIcon__item',
    // appendArrows: $('.group_arrow'),
    infinite: true,
    responsive: [
        {
          breakpoint: 1440,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ],
    prevArrow:"<button type='button' class='slick-prev2 pull-left'><span class='icomoon  icon-chevron-left'></span></button>",
    nextArrow:"<button type='button' class='slick-next2 pull-right'><span class='icomoon icon-chevron-right'></span></button>"
})