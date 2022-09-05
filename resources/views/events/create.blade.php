<x-header/>

 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eventos') }}
        </h2>
    </x-slot>


    <div class="description-container">
        <div class="title-description">
            <h2>Añadir Título Curso</h2>
            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                                required autofocus />
            <div class="description-container2">
                <div class="image-description"> <div class="row">


                    <div class="col-md-6">
    
                        <input type="file" name="file" class="form-control">
    
                    </div>
                </div>
                </div>
                
                

                     {{-- @if($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-4 rounded relative"
                            role="alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                     @endif --}}

                    {{-- <form action="{{ route('events.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf --}}
                        {{-- <div>
                            <x-label for="title" :value="__('Titulo')" />

                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                                required autofocus />
                         </div> --}}

                         {{--<div class="mt-4 grid grid-flow-col grid-rows-1 grid-cols-2">
                            <div>
                                <x-label for="price" :value="__('Image')" />

                                <x-input id="image" class="mt-1 w-20" type="image" name="image" :value="old('image')" required />
                            </div>  --}}
                            <div class="text-description">
                            <div>
                                <h2>Descripción</h2>

                                <x-input id="description" class="mt-1 w-full" type="text" name="description"
                                    :value="old('description')" required />
                            </div>
                            <div class="mt-4 grid grid-flow-col grid-rows-1 grid-cols-2">
                                <div>
                                    <p class="datos">Fecha:</p>

                                    <x-input id="time" class="mt-1 w-full" type="text" name="time" :value="old('time')"
                                        required />
                                </div>
                                <div class="mt-4 grid grid-flow-col grid-rows-1 grid-cols-2">
                                    <div>
                                        <p class="datos">Hora:</p>

                                        <x-input id="date" class="mt-1 w-full" type="text" name="date"
                                            :value="old('date')" required />
                                    </div>

                                    <div class="mt-4 grid grid-flow-col grid-rows-1 grid-cols-2">
                                        <div>
                                            <p class="datos">Plaza:</p>

                                            <x-input id="people" class="mt-1 w-full" type="text" name="people"
                                                :value="old('people')" required />
                                        </div>
                                        </div>
                                    </div>             
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-description">
        <button class="description-button">Aceptar</button>
    </div>

</x-app-layout>
