<div class="description-container">
  @foreach ($event as $events)
    <div class="title-description">
        <h2>{{$events->title}}</h2>
    </div>
    <div class="description-container2">
    <div class="image-description"><img src="{{$events->image }}" alt=""></div>
    <div class="text-description">
        <h2>{{$events->description}}</h2>
        <p class="datos">Fecha: {{$events->date}}</p>
        <p class="datos">Hora: {{$events->time}}</p>
        <p class="datos">Plaza: {{$events->people}}</p>
    </div>
    </div>
    <div class="btn-description">
       <button class="description-button">Solicitar Plaza</button>
    </div>
   @endforeach
</div>