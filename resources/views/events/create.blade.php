<x-header/>

{{-- @if($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-4 rounded relative"
                            role="alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                     @endif  --}}
    
<div class="create-container">

   <form action="{{ route('events.save') }}" method="POST" enctype="multipart/form-data">
         @csrf
        <div class="title-create">
            <x-label class="text-create" for="title" :value="__('Añadir Titulo Curso')" />
            <x-input id="title" class="input-title" type="text" name="title" :value="old('title')"
            required autofocus />
        </div>

                        
        <div class="conte-pricipal">
            <div class="create-container1">
                <div class="image-create">
                    <input type="file" name="file" class="form-control">
            </div>
            <div>                  
                <x-input id="image" class="mt-1 w-20" type="image" name="image" :value="old('image')" required />
            </div> 
            </div>
        </div>

        <div class="create-container2">
            <div>
                <x-label for="price" :value="__('Descripción:')" />    
                <x-input id="description" class="mt-1 w-20" type="text" name="description"
                    :value="old('description')" required />
            </div>

            <div>
                <x-label for="price" :value="__('Fecha:')" />     
                <x-input id="time" class="mt-1 w-20" type="text" name="time" :value="old('time')"
                    required />
            </div>

            <div>
                <x-label for="price" :value="__('Hora:')" /> 
                <x-input id="date" class="mt-1 w-20" type="text" name="date"
                    :value="old('date')" required />
            </div>

            <div>
                <x-label for="price" :value="__('Plaza:')" /> 
                <x-input id="people" class="mt-1 w-20" type="text" name="people"
                    :value="old('people')" required />
            </div>

        </div>    
                             
         {{--    <div class="my-auto">
                <button class="ml-3 float-right">
                  {{ __('Guardar') }}
                 </button>
            </div>  --}} 

    </form>
          
</div>


