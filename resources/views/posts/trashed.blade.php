@extends('layout.app')
@section('title')
        Trashed Post
@endsection
<div class="container mt-5">
    <h2 class="mb-4">🗑️ Trashed Posts</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($posts->count())
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Deleted At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $index => $post)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->deleted_at->format('Y-m-d H:i') }}</td>
                        <td class="d-flex gap-2">
                            <form action="{{ route('posts.restore', $post->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-sm btn-success">Restore</button>
                            </form>

                            <form action="{{ route('posts.forceDelete', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure? This cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete Permanently</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $posts->links() }}

    @else
        <div class="alert alert-info">No trashed posts found.</div>
    @endif
    <a href="/posts" class="btn btn-secondary">Back to Posts</a>
</div>