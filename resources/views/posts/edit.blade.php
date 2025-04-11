<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<h2>Edit Post</h2>
<form action="/posts/{{ $post['id'] }}" method="post" >
    @method('PUT')
    @csrf
    <input type="text" placeholder="Title" name="title" value="{{ $post['title'] }}"><br>
    <input type="text" placeholder="Content" name="content" value="{{ $post['content'] }}"><br>
    <input type="text" placeholder="Created By" name="created_by" value="{{ $post['created_by'] }}"><br>
    <input type="submit" value="Update">
    <a href="/posts" class="btn btn-primary">Back</a>

</form>