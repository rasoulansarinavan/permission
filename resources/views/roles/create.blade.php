<form action="{{route('roles.store')}}" method="post">
    @csrf
    <label for="">Role Title</label>
    <input type="text" name="title">
    @foreach($permissions as $permission)

        <label>{{$permission->name}}<input type="checkbox" name="permissions[]" value="{{$permission->id}}"></label>
    @endforeach
</form>
