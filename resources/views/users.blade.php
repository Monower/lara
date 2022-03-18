<h1>users page</h1>

<!-- @if($user =="sadaf")
    <h2>hello {{$user}}</h2>
@elseif($user== 'sam')
    <h2>hello {{$user}}</h2>
@else 
    <h2>Hello unknown</h2>
@endif -->

<!-- @for($i=0;$i<10;$i++)
    {{$i}} </br>
@endfor -->

@foreach($user as $users=>$val)
    [{{$users}}]={{$val}} </br>
@endforeach