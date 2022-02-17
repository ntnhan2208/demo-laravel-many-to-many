<!DOCTYPE html>
<html lang="en">

<head>
    <title>Articles</title>
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
                <h1>CATEGORIES</h1>
                <a href="{{route('categories.create')}}" type="submit" class="btn btn-primary">Add New Category</a>
                <hr>
                @foreach($categories as $category)
                <h2>{{$category->title}}</h2>
                <h5>Articles of {{$category->title}}:</h5>
                @foreach($category->articles as $article)
                <p>- {{$article->title}}</p>
                @endforeach
                <div class="buttons">
                    <div class="col-sm-3">
                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary">Edit Category</a>
                    </div>
                    <form method="post" action="{{route('categories.destroy',$category->id)}}">
                        @method('DELETE')
                        @csrf
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-danger">Delete Category</button>
                        </div>
                    </form>
                </div>
                <br>
                <hr>
                @endforeach
                <br>
            </div>
        </div>
</body>

</html>