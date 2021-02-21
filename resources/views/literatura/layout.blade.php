<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<!-- body -->
<body >
<div id="page-wrapper">
        @include('includes.header')
          @yield('content')
        @include('includes.footer')
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
</html>