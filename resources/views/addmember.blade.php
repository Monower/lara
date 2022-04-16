<h1>Add members</h1>
<form action="add" method="post">
    @csrf
    Name: <input type="text" name="name" placeholder="Enter Name"><br>
    Email: <input type="text" name="email" placeholder="enter mail"><br>
    Address: <input type="text" name="address" placeholder="enter address"><br>
    <button type="submit">submit</button>

</form>