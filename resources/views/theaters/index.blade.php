@extends('theaters.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Кинотеатры</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('theaters.create') }}">Создать новый кинотеатр</a>
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
            <th>Название кинотеатра</th>
        </tr>
        @foreach ($theaters as $theater)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $theater->name }}</td>
                <td>
                    <form action="{{ route('theaters.destroy',$theater->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('theaters.show',$theater->id) }}">Показать</a>

                        <a class="btn btn-primary" href="{{ route('theaters.edit',$theater->id) }}">Изменить</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $theaters->links() !!}

@endsection
