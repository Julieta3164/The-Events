@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                <a href="posts/create" class="btn btn-primary mb-2">Create Description</a> 
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>image</th>
                            <th>Description</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->image }}</td>
                            <td>{{ $event->description }}</td>
                            <td>
                            <a href="posts/{{$event->id}}" class="btn btn-primary">Show</a>
                            <a href="posts/{{$event->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="posts/{{$event->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
    </div>
</div>
@endsection