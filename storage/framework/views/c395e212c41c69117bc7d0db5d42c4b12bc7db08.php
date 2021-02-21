
<?php $__env->startSection('title', 'Profil'); ?>
<?php $__env->startSection('content'); ?>

<?php 
if(Auth::check()){
?>
<p><h1>Pozdrav <?php echo e(Auth::user()->name); ?>, vaša astronomska slika dana je: </p></h1><br>
<a href="profil" class="button primary"><i class="fas fa-arrow-left"></i> Nazad na profil</a><br>
                <div id="output">
                    <h2 style="text-align: center" id="title"></h2>
                    <p style="text-align: center" id="autor"></p></br>
                    <div id="slika"></div>
                    <p id="opis">Molimo odaberite opciju u gornjem meniju</p></br>
                    </br><div id="google_translate_element"></div>
    			</div>
                 <?php  }
else echo '<script type="text/javascript">
           window.location = "login"
      </script>'; ?>
        
<?php $__env->stopSection(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $.ajax({
    url:"https://api.nasa.gov/planetary/apod?api_key=b5H1OCQ0tAb7bsVqagv8sUaCguOXetcXx1KOFdzc",
    success:function(rez){
    document.getElementById("slika").innerHTML="<img src='"+rez.url+"'style='height:30%;display: block;margin-left: auto;margin-right: auto;'/>";
    document.getElementById("title").innerHTML=rez.title;
    document.getElementById("opis").innerHTML=rez.explanation;
    document.getElementById("autor").innerHTML="Autor slike: "+rez.copyright;
    }
}
);
</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ExoPlanIt\resources\views\pages\slika_api.blade.php ENDPATH**/ ?>