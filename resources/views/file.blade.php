{{-- <form action="{{route('file')}}" method="post" enctype="multipart/form-data">
@csrf
<input type="file" name="image">
<input type="submit" value="submit">
</form> --}}

<form action="{{route('file')}}" method="post" enctype="multipart/form-data">
    @csrf
    Name: <input type="text" name="name" placeholder="Enter Name"><br>
    Email: <input type="text" name="email" placeholder="enter mail"><br>
    Address: <input type="text" name="address" placeholder="enter address"><br>
    <input type="file" name="image">
    <button type="submit">submit</button>

</form>