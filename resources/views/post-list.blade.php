<html>
    <head>
        <meta charset= "UTF-8">
        <title>Post List</title>
    </head>
    <a href="{{ route('post.add') }}">Create New Content</a>
    <body>
        @foreach($posts as $post)
        <div class="border-t border-gray-300 my-1 p-2">
        <h2 class="font-bold text-lg">ID: {{$post->id}}</h2>
        <h2 class="font-bold text-lg">Name: {{$post->name}}</h2>
        <h2 class="font-bold text-lg">Content: {{$post->content}}</h2>
        <p>
        ------------------
        </p>
        @endforeach
        {{ $posts->links() }}
    </body>
</html>