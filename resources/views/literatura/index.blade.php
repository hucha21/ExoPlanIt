@extends('layouts.default')
@section('title', 'Literatura')
@section('content')
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
                <a class="button primary small" href="{{ route('literatura.create') }}"> Unesi novu literaturu</a>
            </div></br>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
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
        @foreach ($literatura as $lit)
        <tr>
            <td>{{ $lit->id }}</td>
            <td>{{ $lit->naziv_literature }}</td>
            <td>{{ $lit->slika_literature }}</td>
            <td>{{ $lit->link_literature }}</td>
            <td>{{ $lit->autor }}</td>
            <td>{{ $lit->godina }}</td>
            <td width="350px">
                <form action="{{ route('literatura.destroy',$lit->id) }}" method="POST">
   
                    <a class="button small" href="{{ route('literatura.show',$lit->id) }}">Prikaži</a>
    
                    <a class="button small" href="{{ route('literatura.edit',$lit->id) }}">Edituj</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="button primary small">Obriši</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
       <?php  }
    else
        echo '<script type="text/javascript">
           window.location = "profil"
      </script>';}
else echo '<script type="text/javascript">
           window.location = "login"
      </script>'; ?>     
@endsection