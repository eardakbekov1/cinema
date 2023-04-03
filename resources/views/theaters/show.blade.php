@extends('theaters.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Кинотеатр: {{ $theater->name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('theaters.index') }}">Назад</a>
            </div>
        </div>
    </div>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Название кинотеатра:</strong>
                {{ $theater->name }}
            </div>
        </div>
    </div>
@endsection
