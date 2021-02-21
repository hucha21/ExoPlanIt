<!doctype html>
<html>
<head>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<!-- body -->
<body >
<div id="page-wrapper">
        <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
    
<!-- Scripts -->
<script src="<?php echo url('/'); ?>/assets/js/jquery.min.js"></script>
			<script src="<?php echo url('/'); ?>/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php echo url('/'); ?>/assets/js/jquery.dropotron.min.js"></script>
			<script src="<?php echo url('/'); ?>/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php echo url('/'); ?>/assets/js/browser.min.js"></script>
			<script src="<?php echo url('/'); ?>/assets/js/breakpoints.min.js"></script>
			<script src="<?php echo url('/'); ?>/assets/js/util.js"></script>
			<script src="<?php echo url('/'); ?>/assets/js/main.js"></script>
			<!-- Javascript files-->  
<script src="<?php echo url('/'); ?>/assetsjs/popper.min.js"></script> 
<script src="<?php echo url('/'); ?>/js/bootstrap.bundle.min.js"></script> 
<script src="<?php echo url('/'); ?>/js/jquery-3.0.0.min.js"></script> 
<script src="<?php echo url('/'); ?>/js/plugin.js"></script> 
<!-- sidebar --> 
<script src="<?php echo url('/'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="<?php echo url('/'); ?>/js/custom.js"></script>


</body>
</html>
</body>
</html><?php /**PATH C:\xampp\htdocs\ExoPlanIt\resources\views\literatura\layout.blade.php ENDPATH**/ ?>