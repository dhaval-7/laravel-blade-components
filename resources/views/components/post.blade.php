<tr>
    <td>{{ $key + 1 + 5 * $pageNo - 5}}</td>
    <td>{{ $post->name }}</td>
    <td>{{ $post->detail }}</td>
    <td>
        <form action={{ route('posts.destroy', $post->id) }} method="POST">
            <a class="btn btn-info" href={{ route('posts.show', $post->id) }}>Show</a>
            <a class="btn btn-primary" href={{ route('posts.edit', $post->id) }}>Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
</tr>
