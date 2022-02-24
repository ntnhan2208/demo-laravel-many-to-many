<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Article</title>
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
            <h1>ADD</h1>
            <form action="{{route('admins.store')}}" method="post">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label>Name:</label>
                    <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input name="email" type="text" class="form-control" value="{{ old('email') }}">
                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input name="password" type="password" class="form-control" value="">
                    <small id="statusHelp" class="form-text text-muted">Password must have a capital letter, contain at
                        least one number and a punctuation mark. Remember it cannot have the word "password" in the
                        string.</small>
                    @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Status:</label>
                    <div class="radio">
                        <label><input type="radio" name="optradio" value="1" checked>Active</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio" value="0">Unactive</label>
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
