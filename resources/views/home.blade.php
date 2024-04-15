@extends('layouts/app')

@section('content')


<div class="container py-5">
    <h1>Treni Boolean</h1>

    
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Azienda</th>
          <th scope="col">Stazione di Partenza</th>
          <th scope="col">Stazione di Arrivo</th>
          <th scope="col">Orario di Partenza</th>
          <th scope="col">Orario di Arrivo</th>
          <th scope="col">Codice Treno</th>
          <th scope="col">Numero Carrozze</th>
          <th scope="col">In Orario</th>
          <th scope="col">Cancellato</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach ($trains as $train)
          <tr>
            <td>{{$train->agency}}</td>
            <td>{{$train->departure}}</td>
            <td>{{$train->arrival}}</td>
            <td>{{$train->departure_time}}</td>
            <td>{{$train->arrival_time}}</td>
            <td>{{$train->train_code}}</td>
            <td>{{$train->carriages}}</td>
            <td>{{$train->is_on_time ? 'Si' : 'No'}}</td>
            <td>{{$train->is_canceled ? 'Si' : 'No'}}</td>
          </tr>
            
        @endforeach

      </tbody>
    </table>
    
    {{-- @dump($trains) --}}
    
  </div>

  
  @endsection