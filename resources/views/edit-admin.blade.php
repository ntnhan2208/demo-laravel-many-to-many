<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Article</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>

    </style>
</head>

<body>
<div class="container">
    <div class="row content">
        <div class="col-sm-12">
            <h1>EDIT</h1>
            <form action="{{route('admins.update', $admin)}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Name:</label>
                    <input name="name" type="text" class="form-control" value="{{$admin->name}}">
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input name="email" type="text" class="form-control" value="{{$admin->email}}" readonly>
                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Status:</label>
                    <div class="radio">
                        <label><input type="radio" name="optradio" value="1" @if($admin->active==1) checked @endif>Active</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio" value="0" @if($admin->active==0) checked @endif>Unactive</label>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
