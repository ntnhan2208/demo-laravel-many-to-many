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
            <form action="{{route('articles.store')}}" method="post">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input name="title" type="text" class="form-control" value="{{old('title')}}">
                    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Sluck</label>
                    <input name="sluck" type="text" class="form-control" value="{{old('sluck')}}">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input name="description" type="text" class="form-control" value="{{old('description')}}">
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Categories</label>
                    <div class="categories">
                        @foreach ($categories as $category)
                            <input name="categories[]" class="form-check-input" type="checkbox"
                                   value="{{$category->id}}">
                            <label>{{$category->title}}</label>
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <label>Admin: </label>
                    <div class="admins">
                        <select class="form-control" name="admin_id" id="admins">
                            @foreach($admins as $admin)
                                <option value="{{$admin->id}}" selected>{{$admin->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input name="status" type="text" class="form-control" value="">
                    <small id="statusHelp" class="form-text text-muted">1=Active - 0=Unactive</small>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
