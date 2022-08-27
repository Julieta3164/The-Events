<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eventos') }}
        </h2>
    </x-slot>



    <div class="py-12">
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

                    <form method="POST" action="{{route('events.update', $product)}}">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-label for="title" :value="__('Title')" />

                            <x-input id="title" class="block mt-1 w-full" type="text" name="name" :value="old('title') ?? $product->title" required autofocus />
                        </div>

                        <div class="mt-4 grid grid-flow-col grid-rows-1 grid-cols-2">
                            <div>
                                <x-label for="price" :value="__('Image')" />

                                <span>$ </span><x-input id="image" class="mt-1 w-24" type="text" name="image" :value="old('image') ?? $product->image" required />
                            </div>
                            div>
                                <x-label for="price" :value="__('Description')" />

                                <span>$ </span><x-input id="description" class="mt-1 w-24" type="text" name="description" :value="old('description') ?? $product->description" required />
                            </div>
                            div>
                                <x-label for="price" :value="__('Date')" />

                                <span>$ </span><x-input id="date" class="mt-1 w-24" type="text" name="date" :value="old('date') ?? $product->date" required />
                            </div>
                            div>
                                <x-label for="price" :value="__('Time')" />

                                <span>$ </span><x-input id="time" class="mt-1 w-24" type="text" name="time" :value="old('time') ?? $product->time" required />
                            </div>
                            div>
                                <x-label for="price" :value="__('People')" />

                                <span>$ </span><x-input id="people" class="mt-1 w-24" type="text" name="people" :value="old('people') ?? $product->people" required />
                            </div>
                            <div class="my-auto">
                                <x-button class="ml-3 float-right">
                                    {{ __('Actualizar') }}
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>