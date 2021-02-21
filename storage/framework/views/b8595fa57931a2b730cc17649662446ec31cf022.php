
<?php $__env->startSection('title', 'Literatura'); ?>
<?php $__env->startSection('content'); ?>
<?php 
if(Auth::check()){
    if(Auth::user()->name=='admin'){
?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dostupna literatura</h2>
            </div>
            <div class="pull-right">
                <a class="button primary small" href="<?php echo e(route('literatura.create')); ?>"> Unesi novu literaturu</a>
            </div></br>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table >
        <tr>
            <th>Id</th>
            <th>Naziv literature</th>
            <th>Slika literature</th>
            <th>Link literature</th>
            <th>Autor</th>
            <th>Godina</th>
            <th>Akcije</th>
        </tr>
        <?php $__currentLoopData = $literatura; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($lit->id); ?></td>
            <td><?php echo e($lit->naziv_literature); ?></td>
            <td><?php echo e($lit->slika_literature); ?></td>
            <td><?php echo e($lit->link_literature); ?></td>
            <td><?php echo e($lit->autor); ?></td>
            <td><?php echo e($lit->godina); ?></td>
            <td width="350px">
                <form action="<?php echo e(route('literatura.destroy',$lit->id)); ?>" method="POST">
   
                    <a class="button small" href="<?php echo e(route('literatura.show',$lit->id)); ?>">Prikaži</a>
    
                    <a class="button small" href="<?php echo e(route('literatura.edit',$lit->id)); ?>">Edituj</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="button primary small">Obriši</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
       <?php  }
    else
        echo '<script type="text/javascript">
           window.location = "profil"
      </script>';}
else echo '<script type="text/javascript">
           window.location = "login"
      </script>'; ?>     
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ExoPlanIt\resources\views\literatura\index.blade.php ENDPATH**/ ?>