<h1>User List</h1>

<table border="1">
    <tr>
        <td>UserId</td>
        <td>Id</td>
        <td>Title</td>
        <td>Body</td>
    </tr>
    @foreach ($usercol as $item)
    <tr>
        <td>{{$item->userId}}</td>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->body}}</td>
    </tr>
    @endforeach
</table>