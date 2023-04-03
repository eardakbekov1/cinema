@extends('theaters.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Создание нового Кинотеатра</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('theaters.index') }}">Назад</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            Возникли проблемы при обработке Вашего запроса.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('theaters.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <label for="theaterNameStoreFormControl">Название Кинотеатра:</label>
                    <input id="theaterNameStoreFormControl" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" required placeholder="Введите название Кинотеатра">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>

    </form>
@endsection

