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
            <h1>ARTICLES</h1>
            <a href="{{route('articles.create')}}" type="submit" class="btn btn-primary">Add New Article</a>
            <hr>
            @foreach($articles as $article)
                <h3>{{$article->title}}</h3>
{{--                <h5><span>Sluck:</span> {{$article->sluck}}</h5>--}}
{{--                <span>Category:</span>--}}
{{--                @foreach($article->categories as $category)--}}
{{--                    <h5>- {{$category->title}}</h5>--}}
{{--                @endforeach--}}
{{--                <h5><span>Description: </span>{{$article->description}}</h5>--}}
{{--                <h5><span>Status: </span> {{$article->status}}</h5>--}}
                <br>
                <div class="buttons">
{{--                    <div class="col-sm-3">--}}
{{--                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit Article</a>--}}
{{--                    </div>--}}
                    <div class="col-sm-3">
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-success">Read More</a>
                    </div>
{{--                    <form method="post" action="{{route('articles.destroy',$article->id)}}">--}}
{{--                        @method('DELETE')--}}
{{--                        @csrf--}}
{{--                        <div class="col-sm-3">--}}
{{--                            <button type="submit" class="btn btn-danger">Delete Article</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
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
