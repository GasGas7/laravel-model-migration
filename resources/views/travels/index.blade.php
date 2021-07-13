@extends('layout.app')

@section('title', 'B.T.C.- Travels')

@section('content')

    <div class="container-xl">
        <div class="row">
            @foreach ($travels as $travel)
             <div class="col-4 d-flex flex-column text-center">
                <h3>{{$travel['titolo']}}</h3>
                <h5>{{$travel['destinazione']}}</h5>
                <p>Partenza : {{$travel['partenza']}}</p>
                <p>Ritorno : {{$travel['ritorno']}}</p>
            </div>   
            @endforeach
            
        </div>
    </div>
    
@endsection