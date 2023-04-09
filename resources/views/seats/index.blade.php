<h2>Места</h2>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Место</th>
    </tr>
    </thead>
    <tbody>
    @foreach($seats as $seat)
        <tr>
            <td>{{$seat->id}}</td>
            <td>
                <a href="#" class="seats" id="seat-{{$seat->id}}" data-id="{{$seat->id}}">{{$seat->seat_number}}</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

