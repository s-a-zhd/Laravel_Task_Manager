@extends('app')

   
        @section('content')
        <h1 class="text-center my-5">
            {{ $todos->name }}
        </h1>
    <div class="row justify-content-center">
       <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
    
             Details
                
            </div>
            <div class="card-body">
                {{ $todos->description }}
            </div>
            
        </div>
        <a href="/todo/{{ $todos->id }}/edit" class="btn btn-info btn-lg my-3">Edit</a>
        <a href="/todo/{{ $todos->id }}/delete" class="btn btn-danger btn-lg my-3">Delete</a>
       </div>
    </div>

        @endsection
    
    
