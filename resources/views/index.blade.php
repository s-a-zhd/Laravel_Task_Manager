<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Todo</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Todo Page</h1>
    <div class="row justify-content-center">
       <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
    
             Todos
                
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($todos as $todo)
                    <li class="list-group-item">{{ $todo->name }}
                        <a href="/todo/{{ $todo->id }}" class="btn btn-primary btn-sm float-right">View</a>
                    </li>
                     
                   @endforeach
                </ul>
                
            </div>
        </div>
       </div>
    </div>
    </div>
    
</body>
</html>