@extends('theaters.layout')

<style>

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>

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
                    <button id="theater-{{$theater->id}}" class="theater-show" data-id="{{$theater->id}}">Показать</button>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $theaters->links() !!}

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="hallsList"></div>
            <div id="moviesList"></div>
        </div>

    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        $('.theater-show').click(function(){
            let id = $(this).data('id');
            // When the user clicks the button, open the modal
            modal.style.display = "block";

                $.ajax({
                    url: '{{route('halls.index')}}',
                    type: 'GET',
                    data: {id: id},
                    success: function (data){
                        $('#hallsList').html(data.view);
                    },
                    fail: function (data){
                        alert('error');
                    }
                });
        });

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

@endsection
