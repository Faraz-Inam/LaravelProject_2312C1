<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>This is Contact Page</h1>

    @if($done = Session::get('success'))
    <div class="alert alert-success">
        {{$done}}
    </div>
    @endif

    <form action="/create" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name"> <br><br>
        <label for="">Email</label>
        <input type="email" name="email"> <br><br>
        <label for="">Image</label>
        <input type="file" name="image"> <br><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>