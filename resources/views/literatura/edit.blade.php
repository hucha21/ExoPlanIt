@extends('layouts.default')
@section('title', 'Edit Literatura')
@section('content')
<h3>Edit Literature</h3>

<div class="row">

   <div class="col-md-12 col-sm-12 col-xs-12">

     <!-- Alert message (start) -->
     @if(Session::has('message'))
     <div class="alert {{ Session::get('alert-class') }}">
        {{ Session::get('message') }}
     </div>
     @endif
     <!-- Alert message (end) -->

     <div class="actionbutton">
     <a class="button primary" href="{{ route('literatura.index') }}"><i class="fas fa-arrow-left"></i> Nazad</a>

     </div>

     <form action="{{route('literatura.update',[$literatura->id])}}" method="post" >
{{csrf_field()}}

       <div class="form-group">
         <label class="control-label col-6 col-12-xsmall" for="naziv_literature">Naziv <span class="required"></label>
         <div class="col-6 col-12-xsmall">
            <input id="naziv_literature" class="form-control col-md-12 col-xs-12" name="naziv_literature" placeholder="Unesite naziv" required="required" type="text" value="{{old('naziv_literature',$literatura->naziv_literature)}}">

            @if ($errors->has('naziv_literature'))
               <span class="errormsg">{{ $errors->first('naziv_literature') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-6 col-12-xsmall" for="autor">Autor
</label>
         <div class="col-6 col-12-xsmall">
            <textarea name='autor' id='autor' class='form-control' placeholder="Unesite autora">{{old('autor',$literatura->autor)}}</textarea>

            @if ($errors->has('autor'))
               <span class="errormsg">{{ $errors->first('autor') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-6 col-12-xsmall" for="godina">Opis
</label>
         <div class="col-6 col-12-xsmall">
            <textarea name='godina' id='godina' class='form-control' placeholder="Unesite godinu">{{old('godina',$literatura->godina)}}</textarea>

            @if ($errors->has('godina'))
               <span class="errormsg">{{ $errors->first('godina') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-6 col-12-xsmall" for="name">Link
</label>
         <div class="col-6 col-12-xsmall">
            <textarea name='link_literature' id='link_literature' class='form-control' placeholder="Unesite link sa ekstenzijom.pdf">{{old('link_literature',$literatura->link_literature)}}</textarea>

            @if ($errors->has('link_literature'))
               <span class="errormsg">{{ $errors->first('link_literature') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-6 col-12-xsmall" for="name">Slika
</label>
         <div class="col-6 col-12-xsmall">
            <textarea name='slika_literature' id='slika_literature' class='form-control' placeholder="Unesite sliku sa ekstenzijom">{{old('slika_literature',$literatura->slika_literature)}}</textarea>

            @if ($errors->has('slika_literature'))
               <span class="errormsg">{{ $errors->first('slika_literature') }}</span>
            @endif
         </div>
       </div>

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

       <div class="form-group">
          <div class="col-6 col-12-xsmall">
            <input type="submit" name="submit" value='Potvrda' class='button primary'>
          </div>
       </div>

     </form>

   </div>
</div>

@stop