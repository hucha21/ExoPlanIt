
<?php $__env->startSection('title', 'Literatura'); ?>
<?php $__env->startSection('content'); ?>
<?php 
$literatura = DB::select('select * from literatura');
if(Auth::check()){
?>
<p><h1>Pozdrav <?php echo e(Auth::user()->name); ?> : </p></h1>
<a href="profil" class="button primary"><i class="fas fa-arrow-left"></i> Nazad na profil</a><br><br>
                    <h3>Dostupna literatura</h3>
<table class="alt">
     <tr>
   <?php $i=0; ?>
<?php $__currentLoopData = $literatura; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php 
if ($i == 2) {
$i=0;
echo '</tr><tr>';
}
?>
    <td>
    <td>
    <img src="pictures/<?php echo e($lit->slika_literature); ?>" alt="Slika" height="300">
</td>
<td><div class="col-12"><b><?php echo e($lit->naziv_literature); ?></b></br><?php echo e($lit->autor); ?></br><?php echo e($lit->godina); ?></p></br>
<a class="button primary icon solid fa-download" href="downloadFile/<?php echo e($lit->link_literature); ?>">Preuzmi</a></div>
</td><td><p style="color:transparent;">asa</p></td></td><?php $i=$i+1; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</tr>
      <?php  }
else echo '<script type="text/javascript">
           window.location = "login"
      </script>'; ?>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ExoPlanIt\resources\views\pages\literatura.blade.php ENDPATH**/ ?>