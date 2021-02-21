
<?php $__env->startSection('title', 'Profil'); ?>
<?php $__env->startSection('content'); ?>
<?php 
if(Auth::check()){
  if(Auth::user()->name!='admin'){
?>
<div class="card">
                <div class="card-header"><i class="fas fa-user"></i> <?php echo e(__('Profil')); ?></div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                   Pozdrav <?php echo e(Auth::user()->name); ?>, odaberite željenu opciju:<br><br>
                   <div class="row">
									<div class="col-6 col-12-xsmall">
										<ul class="actions fit">
											<li><a href="slika_api" class="button fit"><i class="fas fa-space-shuttle"></i> NASA slika dana</a></li>
											<li><a href="isslokacija" class="button fit"><i class="fas fa-globe-europe"></i> Gdje je ISS?</a></li>
                                            <li><a href="galerija" class="button fit"><i class="fa fa-images"></i> Galerija Slika</a></li>
											<li><a href="literatura_korisnik" class="button fit"><i class="fas fa-book-reader"></i> Preuzmi literaturu</a></li>
										</ul>
									</div>
				   </div>
				   </div><img src="<?php echo url('/'); ?>/images/space.jpg" alt="#" >
            </div>
            <?php  }
            else
        echo '<script type="text/javascript">
           window.location = "literatura"
      </script>';}
else echo '<script type="text/javascript">
           window.location = "login"
      </script>'; ?>
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ExoPlanIt\resources\views\pages\profil.blade.php ENDPATH**/ ?>