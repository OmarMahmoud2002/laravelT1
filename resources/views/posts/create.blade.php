<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<h1>Add New Post</h1>
<form action="/posts" method="post" >
    @csrf
    <input type="text" placeholder="Title" name="title" ><br>
    <input type="text" placeholder="Content" name="content" ><br>
    <input type="text" placeholder="Created By" name="created_by" ><br>
    <input type="submit" value="Add">
    <a href="/posts" class="btn btn-primary">Back</a>

</form>