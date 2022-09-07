<x-header/>
<x-buttonheader/>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<x-carousel/>
<br>
<br>
<br>
<br>

<br>
<div>
    @foreach ($event as $event)
    <div class="card card-home" style="width: 18rem;">
        <div class="img-card">
        <img src="{{ $event->image }}" class="card-img-top" alt="...">
        </div>

        <div class="card-body">
            <div class="card-title2">
        <h5 class="card-title ">Titulo
    </h5>
    <p>{{ $event->title }}</p>

        <p class="card-text"> Fecha
            <p>{{ $event->date }}</p>
        <p class="card-text">Hora
            <p>{{ $event->time }}</p>
        </p>
    </div>
        <div class="button-cards">
        <a href="{{ url('/description') }}" class="btn btn-primary btn-primary1">Mas Información</a>
        <a href="{{ route('add',['id'=>$event->id]) }}" class="btn btn-primary btn-primary2" method="POST">Solicitar Plaza</a>
    </div>
        </div>
    </div>
    @endforeach
</div>
<br>
<br>
<x-footer/>
