<h1>Here All User</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Operation</td>
    </tr>
    @foreach ($user as $users)
        <tr>
            <td>{{$users['id']}}</td>
            <td>{{$users['uname']}}</td>
            <td>{{$users['uemail']}}</td>
            <td>{{$users['upassword']}}</td>
            <td><a href="{{"edit/".$users['id']}}">Edit</a>
                <a href={{"delete/".$users['id']}}>Delete</a>
            </td>
        </tr>
    @endforeach
</table>