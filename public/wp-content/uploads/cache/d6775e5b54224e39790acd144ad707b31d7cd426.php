<?php
 $class = 'h4' ; 
?>
<div class="container">
    <h3><?php echo e(App::getNameModule(1)); ?>: demo 1</h3>
    <?php echo $__env->make('partials\demo\item', 
    [
        'num1' => $data -> num1,
        'num2' => $data -> num2,
        'num3' => $data -> num3,
        'sub' => $data -> sub,
        'class' => $class,
        
    ]
    , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
</div>