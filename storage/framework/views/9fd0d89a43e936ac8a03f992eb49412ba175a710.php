
<?php $__env->startSection('title', 'Prikaz Literatura'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Prikaz literature</h2>
            </div>
            <div class="pull-right">
            <a class="button primary" href="<?php echo e(route('literatura.index')); ?>"><i class="fas fa-arrow-left"></i> Nazad</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Naziv:</strong>
                <?php echo e($literatura->naziv_literature); ?>

            </div>
        </div>
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Autor:</strong>
                <?php echo e($literatura->autor); ?>

            </div>
        </div>
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Godina:</strong>
                <?php echo e($literatura->godina); ?>

            </div>
        </div>
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Link:</strong>
                <?php echo e($literatura->link_literature); ?>

            </div>
        </div>
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Slika:</strong>
                <?php echo e($literatura->slika_literature); ?>

            </div>
        </div>
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <img src="<?php echo url('/'); ?>/pictures/<?php echo e($literatura->slika_literature); ?>" alt="#" height="300px">
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ExoPlanIt\resources\views\literatura\show.blade.php ENDPATH**/ ?>