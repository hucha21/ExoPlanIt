
<?php $__env->startSection('title', 'ADMIN PANEL'); ?>
<?php $__env->startSection('content'); ?>

<?php 
if(Auth::check()){
    if(Auth::user()->name=='admin'){
?>
<b>Pozdrav <?php echo e(Auth::user()->name); ?></b></br>
<a href="profil">Nazad na profil</a>
<hr>
                  <div class="container">
   <h2>Unos Literature</h2>
    <div class="panel panel-primary">
      <div class="panel-body">
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block">
                <strong><?php echo e($message); ?></strong>
        </div>
        <?php endif; ?>
        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <strong>Oops!</strong> Postoji problem sa sadržajem.
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="row gtr-uniform gtr-50">
        <form action="<?php echo e(route('file.upload.post')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="col-md-6"><h4>UPLOAD DATOTEKE</h4> </div>
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="button primary">Upload datoteku</button>
                </div>
        </form>
        <form action="<?php echo e(route('picture.upload.post')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="col-md-6"><h3>UPLOAD SLIKE</h3> </div>
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="button primary">Upload Sliku</button>
                </div>
        </form>
    </div>
    
    <section>
								<h3>Podaci o Literaturi</h3>
                                <?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo e(session('status')); ?>

</div>
<?php elseif(session('failed')): ?>
<div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo e(session('failed')); ?>

</div>
<?php endif; ?>
								<form action = "<?php echo e(route('literatura.upload.post')); ?>" method = "post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="naziv" id="naziv" value="" placeholder="Naziv literature" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="autor" id="autor" value="" placeholder="Autor literature" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="godina" id="godina" value="" placeholder="Godina literature" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="link" id="link" value="" placeholder="Unesite naziv datoteke koju ste uploadovali (uključujući .pdf)" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="slika" id="slika" value="" placeholder="Unesite naziv slike koju ste uploadovali (uključujući ekstenziju)" />
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Unesi literaturu" class="primary" /></li>
												<li><input type="reset" value="Reset" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
      </div>
    </div>
</div>
    <?php  }
    else
        echo '<script type="text/javascript">
           window.location = "profil"
      </script>';}
else echo '<script type="text/javascript">
           window.location = "login"
      </script>'; ?>     
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ExoPlanIt\resources\views\pages\admin.blade.php ENDPATH**/ ?>