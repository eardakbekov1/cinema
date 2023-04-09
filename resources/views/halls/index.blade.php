<h2>Залы</h2>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Theater_id</th>
    </tr>
    </thead>
    <tbody>
    @foreach($halls as $hall)
    <tr>
        <td>{{$hall->id}}</td>
        <td>
            <a href="#" class="halls" id="hall-{{$hall->id}}" data-id="{{$hall->id}}">{{$hall->name}}</a>
        </td>
        <td>{{$hall->theater_id}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

