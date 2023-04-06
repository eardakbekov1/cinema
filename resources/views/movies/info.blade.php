<h2>Фильмы</h2>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($movies as $movie)
    <tr>
        <td>{{$movie->id}}</td>
        <td>
            <button class="halls" id="hall-{{$movie->id}}" data-id="{{$movie->id}}">{{$movie->name}}</button>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
