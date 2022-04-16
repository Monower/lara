<h2>Edit member data</h2>
<form action="/editdata" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    Name: <input type="text" name="name" value="{{$data['name']}}"><br>
    Email: <input type="email" name="email" value="{{$data['email']}}"><br>
    Addresss: <input type="text" name="address" value="{{$data['address']}}"><br>
    <button type="submit">Update</button>
</form>