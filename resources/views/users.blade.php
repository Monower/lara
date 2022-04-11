{{--@include('inner')
<h1>users page</h1>

@if($user =="sadaf")
    <h2>hello {{$user}}</h2>
@elseif($user== 'sam')
    <h2>hello {{$user}}</h2>
@else 
    <h2>Hello unknown</h2>
@endif

@for($i=0;$i<10;$i++)
    {{$i}} </br>
@endfor

@foreach($user as $users=>$val)
    [{{$users}}]={{$val}} </br>
@endforeach
@csrf


<script>
    let data=@json($user);
    console.log(data);
</script>


<h1>User Login</h1>
{{$errors}}
<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Please enter user id"><br><br>
    <input type="password" name="userpassword" placeholder="Enter user password"><br><br>
    <button type="submit">Login</button>
</form> --}}

{{--<h3>this is the users page</h3>--}}

{{-- <h1>User List</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile Photo</td>
    </tr>
    @foreach ($data as $a)
        <tr>
            <td>{{$a['id']}}</td>
            <td>{{$a['first_name']}}</td>
            <td>{{$a['email']}}</td>
            <td><img src={{$a['avatar']}} alt="image"></td>
        </tr>
    @endforeach
</table> --}}

<h1>User login</h1>

<form action="users" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter name"> <br>
    <input type="password" name="pass" placeholder="enter password"> <br>
    <button type="submit">Login</button>
</form>