<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Category</title>
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
                <form action="{{route('categories.store')}}" method="post">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" type="text" class="form-control" value="">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
