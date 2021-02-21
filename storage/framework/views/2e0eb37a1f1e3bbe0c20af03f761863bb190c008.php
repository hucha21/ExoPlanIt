
<?php $__env->startSection('title', 'Početna'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1><?php echo e(__('Postavite pitanje')); ?></h1></div>
                <div class="card-body">
				<?php if(session('status')): ?>
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success ! </strong>  &nbsp; <?php echo e(session('status')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <?php endif; ?>
								<form method="post" action="<?php echo e(route('addContact')); ?>" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="name" id="name" value="" placeholder="Ime" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="email" name="email" id="email" value="" placeholder="Email" />
										</div>
										<div class="col-12">
											<textarea name="message" id="message" placeholder="Vaša poruka" rows="6"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Pošalji" class="primary" /></li>
												<li><input type="reset" value="Obriši" /></li>
											</ul>
										</div>
									</div>
								</form>
                </div>
                </div>
        </div>
    </div>
</div><br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ExoPlanIt\resources\views\pages\kontakt.blade.php ENDPATH**/ ?>