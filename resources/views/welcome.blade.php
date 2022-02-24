<!DOCTYPE html>
<html lang="en">

<head>
    <title>Manager</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        #id1{
            margin: 0 10%;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row content">
        <h1>Manager</h1>
        <form method="post" action="{{route('logoutmanual')}}">
            @method('GET')
            @csrf
            <div class="col-sm-3">
                <button type="submit" class="btn btn-danger">Logout</button>
            </div>
        </form>
        <br>
        <hr>
        <div class="col-sm-12" id="id1">
            <div class="col-sm-4">
                <a href="{{route('articles.index')}}" class="btn btn-primary">Articles</a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('categories.index')}}" class="btn btn-primary">Categories</a>
            </div>
            <div class="col-sm-4">
                <a href="{{route('admins.index')}}" class="btn btn-primary">Admins</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
`
