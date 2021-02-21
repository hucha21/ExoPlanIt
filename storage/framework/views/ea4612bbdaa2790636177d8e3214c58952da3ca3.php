
<?php $__env->startSection('title', 'Galerija'); ?>
<?php $__env->startSection('content'); ?>
<?php 
if(Auth::check()){
?>
<p><h1>Pozdrav <?php echo e(Auth::user()->name); ?> : </p></h1><br>
<a href="profil" class="button primary"><i class="fas fa-arrow-left"></i> Nazad na profil</a>
<!-- Main -->
                <div id="main" class="wrapper style1">
                    <div class="container">
                        <header class="major">
                            <h2>Galerija slika</h2>
                            <p id="demo"></p>
                        </header>
                            <section id="content">
                   <div class="box alt">
                                    <div class="row gtr-50 gtr-uniform" id="nekiDiv">
                                        <div class="col-12"><span class="image fit"><img src="https://mars.nasa.gov/system/feature_items/images/6037_msl_banner.jpg" alt="" /></span></div>
                                    </div>
                                </div></section>
    			</div>
				</div>
         <?php  }
else echo '<script type="text/javascript">
           window.location = "login"
      </script>'; ?>
<?php $__env->stopSection(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
     var currentTime = new Date();
  var day = currentTime.getDate()-1; //prekljucerasnji datum
  var month = currentTime.getMonth() + 1;
  var year = currentTime.getFullYear();

  if (day < 10){
  day = "0" + day;
  }

  if (month < 10){
  month = "0" + month;
  }
  var today_date = year + "-" + month + "-" + day;
    $.ajax({
    url:"https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?earth_date="+today_date+"&page=1&camera=NAVCAM&api_key=b5H1OCQ0tAb7bsVqagv8sUaCguOXetcXx1KOFdzc",
    success:function(data){
        $('#demo').append('Galerija slika za Rover Curiosity, za datum '+today_date);
data['photos'].forEach(function (d) {
        var link=d['img_src'];
        var name=d['rover'].name;
        var date=d['earth_date'];
        $('#nekiDiv').append('<div class="col-4 col-6-xsmall"><span class="image fit"><img src="'+link+'" alt="" /></span><p>'+"Rover: "+name.toString()+" , datum: "+date.toString()+'</p></div>');
    }
);
}
});
</script>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ExoPlanIt\resources\views\pages\galerija.blade.php ENDPATH**/ ?>