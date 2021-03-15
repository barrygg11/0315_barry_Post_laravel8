<html>
    <head>
        <meta charset= "UTF-8">
        <title>Add Post</title>
    </head>

    <body>
        @if (Session::has('post_add'))
        <span>{{Session::get('post_add')}}</span>
        @endif
        <form method="post" action="{{ route('save.post') }}">
            @csrf
            Name: <input type="text" name="name" value=""><p>
            Content: <textarea name="content"></textarea><p>
            <input type="submit" value="Submit"><p>
            <a href="{{ route('post.post') }}">Show All</a>
        </form>
    </body>
</html>