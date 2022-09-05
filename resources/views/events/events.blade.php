<x-header/>
<x-buttonevents/>

  <table class="table  table-striped mt-8 table-event" >
      @foreach ($event as $events)
      <div class="img-card ">
    

    
        <img src="{{$events->image }}" class="card-img-top" alt="...">


        <form   action="{{ route('events.destroy',['id'=>$events->id]) }}" method="POST">
          <button type="submit" class="btn-delete"> borrar{{-- <i class="bi bi-trash"></i> --}}</button>

          <a class="btn-edit" href="/events/{{$events->id}}/edit" >Editar</a>         
            @csrf
            @method('DELETE')
        </form> 


      @endforeach
    </tbody>
  </table>

