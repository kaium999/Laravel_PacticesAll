<table border="1">
    @foreach ($data as $userdata)
        <tr>
            <td>{{$userdata->id}}</td>
            <td>{{$userdata->u_name}}</td>
            <td>{{$userdata->u_email}}</td>
            <td>{{$userdata->u_password}}</td>
        </tr>
       
    @endforeach
</table>