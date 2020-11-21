@extends('app')

@section('content')
    <h1 class="text-center my-5">
        Create Todos
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Create New Todos
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $item)
                            <li>
                                {{ $item }}
                            </li>
                        @endforeach
                       @endif 
                    </div>
                    <form action="/newTodo" method="POST">
                        @csrf
                        <input type="text" class="form-control" name="name" placeholder="name">
                        <br>    
                        <textarea name="description" id="" cols="5" rows="5" class="form-control" placeholder="Description"></textarea>
                        <br>
                        <button class="btn btn-success text-center">Create Todo</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection