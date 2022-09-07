<div class="contenedor-cartas">
 @foreach ($event as $event)
  <div class="card card-home" style="width: 18rem;">

    <div class="img-card">
    <img src="{{$event->image}}" class="card-img-top" alt="...">
    </div>

    <div class="card-body">
      <div class="card-title2">
        <h5  class="card-title ">Titulo: {{$event->title}}</h5>
        <p class="card-text"> Fecha: {{$event->date}}</p>
        <p class="card-text">Hora: {{$event->time}}</p> 
      </div>

      <div class="button-cards">
        <a href="/description/{{$event->id}}') }}" class="btn btn-primary btn-primary1">Mas Información</a>
        <a href="" class="btn btn-primary btn-primary2">Solicitar Plaza</a>
      </div>
    </div>
  </div>
    @endforeach
</div>
