<x-header/>

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eventos') }}
        </h2>
    </x-slot --}}>
    <div class="description-container">
    <div class="title-description">
        <h2>Añadir titulo Curso</h2>
    </div>

    <div class="description-container">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-4 rounded relative" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif  

                    {{-- <form action="/events" method="POST"> --}}
                        @csrf
                        <div class = "description-container">
                            <div class="title-description">
                                <h2>Añadir Título Curso</h2>
                                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                        </div>

                        {{-- <div class="mt-4 grid grid-flow-col grid-rows-1 grid-cols-2">
                            <div>
                                <x-label for="price" :value="__('Image')" />

                                <span>$ </span><x-input id="image" class="mt-1 w-20" type="image" name="image" :value="old('image')" required />
                            </div> --}}
                            <div class="text-description">
                                <h2>Descripción</h2>
                                <p class="datos">Descripción:</p>
                                <span> </span><x-input id="descripción" class="mt-1 w-full" type="text" name="descripción" :value="old('Descripción')" required />
                                
                                
                                <div class="mt-4 grid grid-flow-col grid-rows-1 grid-cols-2">
                                    <div>
                                        <p class="datos">Hora:</p>
        
                                        <span> </span><x-input id="hora" class="mt-1 w-full" type="text" name="hora" :value="old('Hora')" required />
                                    </div>
                                    <div class="mt-4 grid grid-flow-col grid-rows-1 grid-cols-2">
                                        <div>
                                            <p class="datos">Fecha:</p>
            
                                            <span> </span><x-input id="fecha" class="mt-1 w-full" type="text" name="fecha" :value="old('Fecha')" required />
                                        </div>
                                        <div class="mt-4 grid grid-flow-col grid-rows-1 grid-cols-2">
                                            <div>
                                                <p class="datos">Plaza:</p>
                
                                                <span> </span><x-input id="plaza" class="mt-1 w-full" type="text" name="plaza" :value="old('Plaza')" required />
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="btn-description">
        <button class="description-button">Guardar</button>
    </div>

{{-- </x-app-layout> --}}