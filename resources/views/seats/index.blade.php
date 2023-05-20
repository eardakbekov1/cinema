<h2>Места</h2>
<br>
<div class="seatsContainer">
    @foreach($seats as $seat)
                <a href="#" class="seats" id="seat-{{$seat->id}}" data-id="{{$seat->id}}">
                    <div class="seatsVis">{{$seat->seat_number}}</div>
                </a>
    @endforeach
</div>
<style>
    .seatsVis{
        width: 50px;
        height: 50px;
        background-color: royalblue;
        color: black;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: bold;
        border: 3px Solid black;
    }

    .seatsContainer {
        display: flex;
        justify-content: space-around;
    }
</style>


