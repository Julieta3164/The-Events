<x-header/>



    <div class="conten-create">
        @if($errors->any())
            <div 
            role="alert">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif 
        <form action="{{ route('events.save') }}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="tile-create">
            <x-label class="text-title-c" for="title" :value="__('Añadir Titulo')" />
            <x-input id="title" class="input-tilte-create" type="text" name="title" :value="old('title')" required autofocus />
            </div>



            <div class="principal-create">
                <div class="create-1">
                    <input type="file" name="file" class="btn-img-c">
                </div>

                <div class="create-2">
                    <div class="text-des-create">
                        <x-label for="price" :value="__('')" />
                        <span>Descrición:</span>
                        <x-input id="description"  type="text" name="description" :value="old('description')" required />
                    </div>

                    <div class="text-des-create">
                        <x-label for="price" :value="__('')" />
                        <span>Hora:</span>
                        <x-input id="time"  type="text" name="time" :value="old('time')" required />
                    </div>

                    <div class="text-des-create">
                        <x-label for="price" :value="__('')" />
                        <span>Fecha:</span>
                        <x-input id="date"  type="text" name="date" :value="old('date')" required />
                    </div>

                    <div class="text-des-create">
                        <x-label for="price" :value="__('')" />
                        <span>Plazas:</span>
                        <x-input id="people"  type="text" name="people" :value="old('people')" required />
                    </div>


                </div>
            </div>

            <div class="my-auto">
                <button class="ml-3 float-right">
                    {{ __('Guardar') }}
                </button>
            </div>
        </form>
    </div>
