<html>
    <head>
        <meta charset= "UTF-8">
        <title>Edit Post</title>
    </head>

    <body>
        @if (Session::has('post_update'))
        <span>{{Session::get('post_update')}}</span>
        @endif
        <form method="post" action="{{ route('update.post') }}">
            @csrf
            <input type="hidden" name="id" value="{{$post->id}}">
            Name: <input type="text" name="name" value="{{ $post->name }}"><p>
            Content: <textarea name="content">{{ $post->content }}</textarea><p>
            <input type="submit" value="Submit"><p>
            <a href="{{ route('post.post') }}">Show All</a>
        </form>
    </body>
</html>