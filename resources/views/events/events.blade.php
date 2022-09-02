<x-header/>

  <table class="table  table-striped mt-8 table-event">
      @foreach ($event as $event)   
      <div class="img-card table-event">
        <button type="submit" class="btn-delete"><i class="bi bi-trash"></i></button>
      </div>

      <div>
        <img src="{{ asset('./img/cons.jpg') }}" class="card-img-top" alt="...">
      </div>

      <div>
        <form   action="{{ route('events.destroy',$event->id) }}" method="POST">
          <a class="btn-edit" href="/events/{{$event->id}}/edit" >Editar</a>         
            @csrf
            @method('DELETE')
        </form> 
      </div>
      
                    
      @endforeach   
    </tbody>
  </table>

