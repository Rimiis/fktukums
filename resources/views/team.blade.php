@extends('templates.layout')

@section('content')
<div class="container">
    <h3 class="display-4">Aizsargi</h3>
    <div class="card-deck">


        @foreach ($aizsargi as $speletajs)
        <div class="card border-success player-card" >
            <img class="card-img-top player-img" src="{{$speletajs->img_url}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">
                    <span id="playerName">

                        #{{$speletajs->nr}} {{$speletajs->vards}} {{$speletajs->uzvards}}
                    </span> </h4>

                <ul class="list-group list-group-flush ">
                    <li class="list-group-item">Vecums: {{$speletajs->vecums}}</li>
                    <li class="list-group-item">Spēles: {{$speletajs->speles}}</li>
                    <li class="list-group-item">Punkti: {{$speletajs->punkti}}</li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
    <h3 class="display-4">Vārtusargi</h3>
    @foreach ($vartusargi->chunk(5) as $speletaji)
    <div class="card-deck">
        @foreach ($speletaji as $speletajs)
        <div class="card border-success player-card" >
            <img class="card-img-top player-img" src="{{$speletajs->img_url}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><span id="playerName">

                        #{{$speletajs->nr}} {{$speletajs->vards}} {{$speletajs->uzvards}}
                    </span>
                </h4>


                <ul class="list-group list-group-flush">
                    <li class="list-group-item ">Vecums: {{$speletajs->vecums}}</li>
                    <li class="list-group-item ">Spēles: {{$speletajs->speles}}</li>


                </ul>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach



    <h3 class="display-4 ">Pussargi</h3>
    @foreach ($pussargi->chunk(5) as $speletaji)
    <div class="card-deck">
        @foreach ($speletaji as $speletajs)
        
        <div class="card border-success player-card" >
            <img class="card-img-top player-img" src="{{$speletajs->img_url}}" alt="Card image cap">
            
            <div class="card-body">
                <h4 class="card-title"><span id="playerName">

                 #{{$speletajs->nr}} {{$speletajs->vards}} {{$speletajs->uzvards}}
                    </span>
                </h4>


                <ul class="list-group list-group-flush">
                    <li class="list-group-item ">Vecums: {{$speletajs->vecums}}</li>
                    <li class="list-group-item ">Spēles: {{$speletajs->speles}}</li>
                    <li class="list-group-item ">Punkti: {{$speletajs->punkti}}</li>

                </ul>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

    <h3 class="display-4">Uzbrucēji</h3>




    @foreach ($uzbruceji->chunk(5) as $speletaji)
    <div class="card-deck">
        @foreach ($speletaji as $speletajs)
        <div class="card border-success player-card" >
            <img class="card-img-top player-img" src="{{$speletajs->img_url}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><span id="playerName">

                        #{{$speletajs->nr}} {{$speletajs->vards}} {{$speletajs->uzvards}}
                    </span>
                </h4>


                <ul class="list-group list-group-flush ">
                    <li class="list-group-item ">Vecums: {{$speletajs->vecums}}</li>
                    <li class="list-group-item ">Spēles: {{$speletajs->speles}}</li>
                    <li class="list-group-item ">Punkti: {{$speletajs->punkti}}</li>

                </ul>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

</div>





@endsection
