<html>
    <head>
        <meta charset= "UTF-8">
        <title>Post List</title>
    </head>
    <a href="{{ route('post.add') }}">Create New Content</a><p>
    <body>
        @if (Session::has('post_delete'))
        <span>{{Session::get('post_delete')}}</span>
        @endif
        @foreach($posts as $post)
        <div class="border-t border-gray-300 my-1 p-2">
        <h2 class="font-bold text-lg">ID: {{$post->id}}</h2>
        <h2 class="font-bold text-lg">Name: {{$post->name}}</h2>
        <h2 class="font-bold text-lg">Content: {{$post->content}}</h2>
        <a href="/edit-post/{{$post->id}}">Edit</a>&nbsp;&nbsp;
        <a href="/delete-post/{{$post->id}}">Delete</a>
        <p>
        ------------------
        </p>
        @endforeach
    </body>
</html>