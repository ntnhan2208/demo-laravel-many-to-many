<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admins</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        span {
            font-weight: bold;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row content">
        <div class="col-sm-12">
            <h1>ADMINS</h1>
            <a href="{{route('admins.create')}}" type="submit" class="btn btn-primary">Add New Admin</a>
            <hr>
            @foreach($admins as $admin)
                <h3>{{$admin->name}}</h3>
                <h5>Articles of {{$admin->name}}:</h5>
                @foreach($admin->articles as $article)
                    <p>- {{$article->title}}</p>
                @endforeach
                <div class="buttons">
                    <div class="col-sm-3">
                        <a href="{{route('admins.edit', $admin->id)}}" class="btn btn-primary">Edit Admin</a>
                    </div>
                    <form method="post" action="{{route('admins.destroy',$admin->id)}}">
                        @method('DELETE')
                        @csrf
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-danger">Delete Admin</button>
                        </div>
                    </form>
                </div>
                <br>
                <hr>
            @endforeach
            <br>
        </div>
    </div>
</div>
</body>

</html>
