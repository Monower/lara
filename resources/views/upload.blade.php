<h1>Upload File</h1>

<form action="upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"><br>
    <input type="submit" value="Upload File">
</form>