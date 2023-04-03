@extends('movies.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Фильмы</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('movies.create') }}">Создать новый фильм</a>
            </div>
            <p></p>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>№</th>
            <th>Название фильма</th>
        </tr>
        @foreach ($movies as $movie)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $movie->name }}</td>
                <td>
                    <form action="{{ route('movies.destroy',$movie->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('movies.show',$movie->id) }}">Показать</a>

                        <a class="btn btn-primary" href="{{ route('movies.edit',$movie->id) }}">Изменить</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $movies->links() !!}

@endsection
