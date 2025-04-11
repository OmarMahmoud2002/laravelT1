<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<style>
    
</style>
</head>

<body>
<a href="/posts/create" class="btn btn-info btn-sm">Add Post</a>

<table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created By</th>
            <th>Actions</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['title'] }}</td>
                <td>{{ $post['content'] }}</td>
                <td>{{ $post['created_by'] }}</td>
                <td>
                    <a href="/posts/{{ $post['id'] }}" class="btn btn-info btn-sm">View</a>
                    <a href="/posts/{{ $post['id'] }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/posts/{{ $post['id'] }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{ $posts->links('pagination::bootstrap-4') }}
</div>





</body>
</html>
