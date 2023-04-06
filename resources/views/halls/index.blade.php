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
            <button class="halls" id="hall-{{$hall->id}}" data-id="{{$hall->id}}">{{$hall->name}}</button>
        </td>
        <td>{{$hall->theater_id}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

<script>

    $('.halls').click(function(){

        let hallId = $('.halls').data('id');

        $.ajax({
            url: '{{route('movies.info')}}',
            type: 'GET',
            data: {hallId: id},
            success: function (data){
                $('#moviesList').html(data.view);
            },
            fail: function (data){
                alert('error');
            }
        });

    });

</script>
