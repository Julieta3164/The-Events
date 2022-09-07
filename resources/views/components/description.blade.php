<div class="description-container">
  <form method="POST" action="{{route('description.update', $event)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="title-description">
        <h2>{{$event->title}}</h2>
    </div>
    <div class="description-container2">
    <div class="image-description"><img src="{{$event->image }}" alt=""></div>
    <div class="text-description">
        <h2>{{$event->description}}</h2>
        <p class="datos">Fecha: {{$event->date}}</p>
        <p class="datos">Hora: {{$event->time}}</p>
        <p class="datos">Plaza: {{$event->people}}</p>
    </div>
    </div>
    <div class="btn-description">
       <button href="" class="description-button">Solicitar Plaza</button>
    </div>
</div>