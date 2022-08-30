<div>
    <div class="card card-home" style="width: 18rem;">
        <img src="{{ asset('./img/cons.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title card-title2">Titulo
{{--             @foreach ($events as $event)
                {{ $event->title}}
            @endforeach --}}
    </h5>

        <p class="card-text"> Fecha
{{--             @foreach ($events as $event)
                {{ $event->Date}}
            @endforeach --}}
        </p>

        <p class="card-text">Hora
{{--             @foreach ($events as $event)
                {{ $event->Hora}}
            @endforeach --}}
        </p>
        <a href="#" class="btn btn-primary">Mas Información</a>
        <a href="#" class="btn btn-primary">Solicitar Plaza</a>
        </div>
    </div>
</div>