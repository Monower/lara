<h1>Members list</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Enail</td>
        <td>Address</td>
        {{-- <td>Operation</td> --}}
    </tr>
    @foreach ($members as $member)
            <tr>
                <td>{{$member->id}}</td>
                <td>{{$member->name}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->address}}</td>
                {{-- <td><a href={{'del/'.$member['id']}}>delete</a> <a href={{'edit/'.$member['id']}}>Edit</a></td> --}}
            </tr>
    @endforeach


</table>