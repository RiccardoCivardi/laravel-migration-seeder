@extends('layouts.main')

@section('content')

    <h1>TRENI</h1>

    {{--
        Azienda
        Stazione di partenza
        Stazione di arrivo
        Orario di partenza
        Orario di arrivo
        Codice Treno
        Numero Carrozze
        In orario
        Cancellato
    --}}

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Numero di carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($trains as $train)
                <tr>
                    <td>{{$train->company}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->number_carriages}}</td>
                    <td>{{$train->is_on_time ? 'in orario' : 'in ritardo'}}</td>
                    <td>{{$train->is_delete ? 'cancellato' : ''}}</td>
                </tr>
            @endforeach

        </tbody>
      </table>

@endsection

@section('title')

    | Home

@endsection
