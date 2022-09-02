{{-- <x-app-layout>
    <x-header/>
    @extends('layouts.baseevents') --}}

<a href="events/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
      <tr>
        <th scope="col">Título</th>
        <th scope="col">Descripción</th>
        <th scope="col">Fecha</th>
        <th scope="col">Hora</th>
        <th scope="col">Personas</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($event as $event)
          <td>{{$event->title}}</td>
          <td>{{$event->description}}</td>
          <td>{{$event->date}}</td>
          <td>{{$event->time}}</td>
          <td>{{$event->people}}</td>
          <td>
            <form action="{{ route('events.destroy',$event->id) }}" method="POST">
             <a href="/events/{{$event->id}}/edit" class="btn btn-info">Editar</a>         
                 @csrf
                 @method('DELETE')
             <button type="submit" class="btn btn-danger">Delete</button>
            </form>          
           </td>        
       </tr>
      @endforeach    
    </tbody>
  </table>