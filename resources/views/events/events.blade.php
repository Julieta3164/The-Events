<x-header/>
<x-buttonevents/>

<div class="conten-events">
  
{{--   <div class="btn-clear">
    <form   action="{{ route('events.destroy',$event->id) }}" method="POST">
      <button type="submit" class="btn-delete"><i class="bi bi-trash"></i></button>
        @csrf
        @method('DELETE')
      </form>
  </div> --}}

      @foreach ($event as $event)
  <div class="img-card2">
        <div class="img-events">
        <img src="{{$event->image}}" class="card-img-top" alt="...">
        </div>
        <div class="btn-edit-event">
          <a  href="/events/{{$event->id}}/edit"> <i class="bi bi-pencil"></i> Editar</a>
        </div>
  </div>




     



       
                    
      @endforeach
</div>




