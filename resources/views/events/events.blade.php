<x-header/>



  <x-buttonevents/>


<div class="conten-events">

 
      @foreach ($event as $events)
      <div class="card2">
        <div class="btn-delete">
        <form   action="{{ route('events.destroy',['id'=>$events->id]) }}" method="POST">
          <button type="submit" class="btn-delete"><i class="bi bi-trash"></i></button>
            @csrf
          @method('DELETE')
        </form>
      </div> 

      <div class="img-card2">
        <img src="{{$events->image }}" class="card-img-top" alt="...">
      </div>
      
      <div class="btn-edit-event">
        <a class="btn-edit" href="/events/{{$events->id}}/edit" >Editar</a>
      </div>

     


    </div>






      @endforeach

    </div> 
