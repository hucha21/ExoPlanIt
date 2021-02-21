@extends('layouts.default')
@section('title', 'Literatura')
@section('content')
<?php 
$literatura = DB::select('select * from literatura');
if(Auth::check()){
?>
<p><h1>Pozdrav {{ Auth::user()->name }} : </p></h1>
<a href="profil" class="button primary"><i class="fas fa-arrow-left"></i> Nazad na profil</a><br><br>
                    <h3>Dostupna literatura</h3>
<table class="alt">
     <tr>
   <?php $i=0; ?>
@foreach ($literatura as $lit)
<?php 
if ($i == 2) {
$i=0;
echo '</tr><tr>';
}
?>
    <td>
    <td>
    <img src="pictures/{{$lit->slika_literature}}" alt="Slika" height="300">
</td>
<td><div class="col-12"><b>{{ $lit->naziv_literature }}</b></br>{{ $lit->autor }}</br>{{ $lit->godina }}</p></br>
<a class="button primary icon solid fa-download" href="downloadFile/{{$lit->link_literature}}">Preuzmi</a></div>
</td><td><p style="color:transparent;">asa</p></td></td><?php $i=$i+1; ?>

@endforeach
</table>
</tr>
      <?php  }
else echo '<script type="text/javascript">
           window.location = "login"
      </script>'; ?>   
@stop