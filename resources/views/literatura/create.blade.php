@extends('layouts.default')
@section('title', 'Nova Literatura')
@section('content')
<?php 
if(Auth::check()){
    if(Auth::user()->name=='admin'){
?>
<div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Nova literatura</h2>
        </div>
        <div class="pull-right">
            <a class="button primary" href="{{ route('literatura.index') }}"><i class="fas fa-arrow-left"></i> Nazad</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Upozorenje!</strong> Provjerite slijedeće stavke<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('literatura.store') }}" method="POST">
    @csrf
     <div class="row gtr-uniform gtr-50">
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Naziv:</strong>
                <input type="text" id="naziv_literature" name="naziv_literature" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Autor:</strong>
                <input type="text" id="autor" name="autor" class="form-control" placeholder="Autor">
            </div>
        </div>
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Godina:</strong>
                <input type="text" id="godina" name="godina" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Link literature:</strong>
                <input type="text" id="link_literature" name="link_literature" class="form-control" placeholder="Link literature(ukljucujuci .pdf)">
            </div>
        </div>
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Slika literature:</strong>
                <input type="text" id="slika_literature" name="slika_literature" class="form-control" placeholder="Slika literature (ukljucujuci ekstenziju)">
            </div>
        </div></div>
        <div class="col-6 col-12-xsmall">
        <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
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
        <form action="{{ route('picture.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6"><h3>UPLOAD SLIKE</h3> </div>
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="button ">Upload Sliku</button>
            </div>
        </form></div>
    
    </div></br>
    <div  >
                <button type="submit" class="button primary "><i class="fas fa-plus"></i>Kreiraj</button>
        </div>
</form>
</div>
 <?php  }
    else
        echo '<script type="text/javascript">
           window.location = "profil"
      </script>';}
else echo '<script type="text/javascript">
           window.location = "login"
      </script>'; ?>  
@endsection