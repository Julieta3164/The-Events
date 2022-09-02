<x-header/>
<x-buttonevents/>

  <table class="table  table-striped mt-8 table-event" >
      @foreach ($event as $event)
      <div class="img-card ">
        <button type="submit" class="btn-delete"> borrar{{-- <i class="bi bi-trash"></i> --}}</button>
    

    
        <img src="{{ asset('./img/cons.jpg') }}" class="card-img-top" alt="...">

        <form   action="{{ route('events.destroy',$event->id) }}" method="POST">
          <a class="btn-edit" href="/events/{{$event->id}}/edit" >Editar</a>         
            @csrf
            @method('DELETE')
        </form> 
  
      
                    
      @endforeach
    </tbody>
  </table>

