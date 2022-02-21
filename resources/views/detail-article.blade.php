<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>

    </style>
</head>
<style>
    label{
        font-style: italic;
    }
</style>

<body>
<div class="container">
    <div class="row content">
        <div class="col-sm-12">
            <h1>DETAIL</h1>
            <hr>
            <h5><label>Title:</label> {{$article->title}}</h5>
            <h5><label>Sluck:</label> {{$article->sluck}}</h5>
            <label>Categories:</label>
            <div class="categories">
                @foreach($article->categories as $category)
                    <h5>- {{$category->title}}</h5>
                @endforeach
            </div>
            <h5><label>Desription:</label> {{$article->description}}</h5>
            <h5><label>Admin:</label> {{$article->admin['name']}}</h5>
            <h5><label>Status:</label> {{$article->status}}</h5>
            <div class="buttons">
                <div class="col-sm-3">
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit Article</a>
                </div>
                <form method="post" action="{{route('articles.destroy',$article->id)}}">
                    @method('DELETE')
                    @csrf
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger">Delete Article</button>
                    </div>
                </form>
            </div>
            <br>
            <hr>
        </div>
    </div>
</div>
</body>

</html>
