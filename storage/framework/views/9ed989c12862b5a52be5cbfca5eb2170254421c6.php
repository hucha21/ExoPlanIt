
<?php $__env->startSection('title', 'Edit Literatura'); ?>
<?php $__env->startSection('content'); ?>
<h3>Edit Literature</h3>

<div class="row">

   <div class="col-md-12 col-sm-12 col-xs-12">

     <!-- Alert message (start) -->
     <?php if(Session::has('message')): ?>
     <div class="alert <?php echo e(Session::get('alert-class')); ?>">
        <?php echo e(Session::get('message')); ?>

     </div>
     <?php endif; ?>
     <!-- Alert message (end) -->

     <div class="actionbutton">
     <a class="button primary" href="<?php echo e(route('literatura.index')); ?>"><i class="fas fa-arrow-left"></i> Nazad</a>

     </div>

     <form action="<?php echo e(route('literatura.update',[$literatura->id])); ?>" method="post" >
<?php echo e(csrf_field()); ?>


       <div class="form-group">
         <label class="control-label col-6 col-12-xsmall" for="naziv_literature">Naziv <span class="required"></label>
         <div class="col-6 col-12-xsmall">
            <input id="naziv_literature" class="form-control col-md-12 col-xs-12" name="naziv_literature" placeholder="Unesite naziv" required="required" type="text" value="<?php echo e(old('naziv_literature',$literatura->naziv_literature)); ?>">

            <?php if($errors->has('naziv_literature')): ?>
               <span class="errormsg"><?php echo e($errors->first('naziv_literature')); ?></span>
            <?php endif; ?>
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-6 col-12-xsmall" for="autor">Autor
</label>
         <div class="col-6 col-12-xsmall">
            <textarea name='autor' id='autor' class='form-control' placeholder="Unesite autora"><?php echo e(old('autor',$literatura->autor)); ?></textarea>

            <?php if($errors->has('autor')): ?>
               <span class="errormsg"><?php echo e($errors->first('autor')); ?></span>
            <?php endif; ?>
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-6 col-12-xsmall" for="godina">Opis
</label>
         <div class="col-6 col-12-xsmall">
            <textarea name='godina' id='godina' class='form-control' placeholder="Unesite godinu"><?php echo e(old('godina',$literatura->godina)); ?></textarea>

            <?php if($errors->has('godina')): ?>
               <span class="errormsg"><?php echo e($errors->first('godina')); ?></span>
            <?php endif; ?>
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-6 col-12-xsmall" for="name">Link
</label>
         <div class="col-6 col-12-xsmall">
            <textarea name='link_literature' id='link_literature' class='form-control' placeholder="Unesite link sa ekstenzijom.pdf"><?php echo e(old('link_literature',$literatura->link_literature)); ?></textarea>

            <?php if($errors->has('link_literature')): ?>
               <span class="errormsg"><?php echo e($errors->first('link_literature')); ?></span>
            <?php endif; ?>
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-6 col-12-xsmall" for="name">Slika
</label>
         <div class="col-6 col-12-xsmall">
            <textarea name='slika_literature' id='slika_literature' class='form-control' placeholder="Unesite sliku sa ekstenzijom"><?php echo e(old('slika_literature',$literatura->slika_literature)); ?></textarea>

            <?php if($errors->has('slika_literature')): ?>
               <span class="errormsg"><?php echo e($errors->first('slika_literature')); ?></span>
            <?php endif; ?>
         </div>
       </div>

       <div class="col-6 col-12-xsmall">
        <form action="<?php echo e(route('file.upload.post')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="col-md-6"><h3>UPLOAD DATOTEKE</h3> </div>
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="button">Upload datoteku</button>
                </div>
        </form>
        </div>
        <div class="col-6 col-12-xsmall">
        <form action="<?php echo e(route('picture.upload.post')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="col-md-6"><h3>UPLOAD SLIKE</h3> </div>
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="button ">Upload Sliku</button>
            </div>
        </form></div>

       <div class="form-group">
          <div class="col-6 col-12-xsmall">
            <input type="submit" name="submit" value='Potvrda' class='button primary'>
          </div>
       </div>

     </form>

   </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ExoPlanIt\resources\views\literatura\edit.blade.php ENDPATH**/ ?>