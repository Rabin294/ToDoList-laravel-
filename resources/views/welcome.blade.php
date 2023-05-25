<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
       <!-- Bootstrap core CSS -->
    <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href = {{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet" />

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    </head>
    <body style="  text-align: center;  background-color: gray; " >
        
        <div >
            <div style="color: white"></div>
            
                <h1>To Do List</h1> <br>
                
                @foreach ($listItems as $listItem)
                <div class="flex" style="aligns-items: center;"></div>
                <p>Item.{{$listItem->id}}:{{$listItem->name}}</p>

                <form method="POST" action="/{{$listItem->id}}">
                    @csrf
                <button type="submit" name="is_complete" class="btn btn-primary">Mark Complete</button>
                </form>
            </div>
            @endforeach



            <br><br><br><br><br><br><br><br>
            
            <form method="POST" action="/">
                @csrf
                <div >
                    <label class="form-label">New Todo Item</label> <br>
                    <input type="text" name="listItem" class="form-control" >
                  
                  <br><br>
                  <button type="submit" class="btn btn-primary float-sm-start">Save item</button>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>
