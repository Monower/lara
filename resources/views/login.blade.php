<h1>User Login</h1>
<form action="user" method="POST">
    @csrf
    Name: <input type="text" name="user" placeholder="enter user name"><br><br>
    Password: <input type="password" name="pass" placeholder="enter password"><br><br>
    <button type="submit">Login</button>
</form>