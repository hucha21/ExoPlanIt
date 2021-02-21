<?php $__env->startComponent('mail::message'); ?>
# <?php echo e('Pitanje'); ?>


## <?php echo e($message); ?>


Javite mi se putem <?php echo e($email); ?>


S poštovanjem,<br>
<?php echo e($fullname); ?>


<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\ExoPlanIt\resources\views\template\client\contactform.blade.php ENDPATH**/ ?>