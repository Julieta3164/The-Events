<x-header/>




<div  class="conten-edit">

{{--     @if ($errors->any())
    <div class="msj-eror" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    <form method="POST" action="{{route('events.update', $event)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="title-edit">
            <x-label for="title" :value="__('')" />
            <span class="text-title">Editar Titulo del Curso </span>

            <x-input id="title" class="input-tilte-edit" type="text" name="title" :value="old('title') ?? $event->title" required />
        </div>

<div class="conten2">
<div class="descrip-edit2">

    <div class="img-edit">
        <img src="{{ old('image') ?? $event->image }}" />
    </div>
    <div class="btn-img">
            <input type="file" name="file" class="form-control">
    </div> 
        
</div>

<div class="descrip-edit">

    <div class="text-des-edit">
            <x-label for="price" :value="__('')" />
            <span>Descripción:</span><x-input id="description" class="mt-1 w-24" type="text" name="description" :value="old('description') ?? $event->description" required />
        </div>

        <div class="text-des-edit">
            <x-label for="price" :value="__('')" />
            <span>Fecha:</span><x-input id="date" class="mt-1 w-24" type="text" name="date" :value="old('date') ?? $event->date" required />
        </div>

        <div class="text-des-edit">
            <x-label for="price" :value="__('')" />
            <span>Hora:</span><x-input id="time" class="mt-1 w-24" type="text" name="time" :value="old('time') ?? $event->time" required />
        </div>

        <div class="text-des-edit">
            <x-label for="price" :value="__('')" />
            <span>Plazas:</span><x-input id="people" class="mt-1 w-24" type="text" name="people" :value="old('people') ?? $event->people" required />
        </div>
</div>

</div>



            <div class="my-auto">
                <button class="ml-3 float-right">
                    {{ __('Actualizar') }}
                </button>
            </div>
        
    </form>



                    
                    










</div>