<table>
    <thead>
    <tr>
        <th>#</th>
        <th>title</th>
        <th>actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($roles as $role)
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->title}}</td>
            <td></td>
        </tr>
    @endforeach
    <a href="{{route('roles.create')}}"></a>
    </tbody>
</table>
