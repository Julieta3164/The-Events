<x-header/>
<x-buttonevents/>

<div class="conten-events">
      @foreach ($event as $event)
  <div class="img-card ">
        <div class="img-events">
        <img src="{{ asset('./img/cons.jpg') }}" class="card-img-top" alt="...">
        </div>
        <div class="btn-edit-event">
          <a  href="/events/{{$event->id}}/edit"> <i class="bi bi-pencil"></i> Editar</a>
        </div>
  </div>




{{-- <form   action="{{ route('events.destroy',$event->id) }}" method="POST">
        <button type="submit" class="btn-delete"><i class="bi bi-trash"></i></button>
          @csrf
          @method('DELETE')
      </form>  --}}

     



       
                    
      @endforeach
</div>


