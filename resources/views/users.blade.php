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

<h3>this is the users page</h3>