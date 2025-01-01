<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Contact Page</h1>

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