<h1>Here All User</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Person Name</td>
        <td>Person Email</td>
        <td>Person Mobile</td>
        <td>Operation</td>
    </tr>
    @foreach ($data as $dataperson)
        <tr>
            <td>{{$dataperson->id}}</td>
            <td>{{$dataperson->tname}}</td>
            <td>{{$dataperson->temail}}</td>
            <td>{{$dataperson->tmobile}}</td>
            <td><a href="{{"edit/".$dataperson['id']}}">Edit</a>
                <a href={{"delete/".$dataperson['id']}}>Delete</a>
            </td>
          
        </tr>
    @endforeach
</table>