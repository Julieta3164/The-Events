<div>
    <div class="card card-home" style="width: 18rem;">
        <div class="img-card">
        <img src="{{ asset('./img/cons.jpg') }}" class="card-img-top" alt="...">
        </div>

        <div class="card-body">
            <div class="card-title2">
        <h5 class="card-title ">Titulo
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
    </div>
        <div class="button-cards">
        <a href="{{ url('/description') }}" class="btn btn-primary btn-primary1">Mas Información</a>
        <a href="" class="btn btn-primary btn-primary2">Solicitar Plaza</a>
    </div>
        </div>
    </div>
</div>