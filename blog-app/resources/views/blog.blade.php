<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Blogs</span>
    </div>
    </nav>
    <a href="#" class='btn btn-success'>create post </a>
    <table class="table container mt-5">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">posted by</th>
            <th scope="col">created by</th>
            <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
            <th scope="row">{{$post['id']}}</th>
            <td>{{$post['title']}}</td>
            <td>{{$post['posted by']}}</td>
            <td>{{$post['created-at']}}</td>
            <td>
                <a href="#" class='btn btn-info'>view</a>
                <a href="#" class='btn btn-primary'>edit</a>
                <a href="#" class='btn btn-danger'>delete</a>
            </td>
            </tr>
        @endforeach  
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
