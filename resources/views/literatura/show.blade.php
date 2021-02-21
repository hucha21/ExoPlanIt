@extends('layouts.default')
@section('title', 'Prikaz Literatura')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Prikaz literature</h2>
            </div>
            <div class="pull-right">
            <a class="button primary" href="{{ route('literatura.index') }}"><i class="fas fa-arrow-left"></i> Nazad</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Naziv:</strong>
                {{ $literatura->naziv_literature }}
            </div>
        </div>
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Autor:</strong>
                {{ $literatura->autor }}
            </div>
        </div>
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Godina:</strong>
                {{ $literatura->godina }}
            </div>
        </div>
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Link:</strong>
                {{ $literatura->link_literature }}
            </div>
        </div>
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <strong>Slika:</strong>
                {{ $literatura->slika_literature }}
            </div>
        </div>
        <div class="col-6 col-12-xsmall">
            <div class="form-group">
                <img src="<?php echo url('/'); ?>/pictures/{{ $literatura->slika_literature }}" alt="#" height="300px">
            </div>
        </div>
    </div>
@endsection