<h2>Сеансы</h2>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Время сеанса</th>
    </tr>
    </thead>
    <tbody>
    @foreach($sessions as $session)
        <tr>
            <td>{{$session->id}}</td>
            <td>
                <a href="#" class="sessions" id="session-{{$session->id}}" data-id="{{$session->id}}">{{$session->session_time}}</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

