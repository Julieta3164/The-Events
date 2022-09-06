<div>
    @foreach ($event as $events)
    <div class="card card-home" style="width: 18rem;">
        <div class="img-card">
            <img src="{{$events->image}}" class="card-img-top" alt="...">
        </div>

        <div class="card-body">
            <div class="card-title2">
        <h5  class="card-title ">Titulo: {{$events->title}}
{{--             @foreach ($events as $event)
                {{ $event->title}}
            @endforeach --}}
    </h5>

        <p class="card-text"> Fecha: {{$events->date}}
{{--             @foreach ($events as $event)
                {{ $event->Date}}
            @endforeach --}}
        </p>

        <p class="card-text">Hora: {{$events->time}}
{{--             @foreach ($events as $event)
                {{ $event->Hora}}
            @endforeach --}}
        </p>
        
    </div>
        <div class="button-cards">
        <a href="{{ url('/description') }}" class="btn btn-primary btn-primary1">Mas Información</a>
        <a href="#" class="btn btn-primary btn-primary2">Solicitar Plaza</a>
    </div>
        </div>
    </div>
    @endforeach
</div>