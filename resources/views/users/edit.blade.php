<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit -{{$user->name}}-data
        </h2>
    </x-slot>

    <form action="/users/{{$user->id}}">
        @csrf
        @method('PATCH')

        @foreach($permissions as $permission)
            <div>
                <input
                    @if($user->hasPermissionTo($permission->name))
                        checked
                    @endif

                    type="checkbox" name="permissions[]" value="{{$permission->name}}">
            </div>
        @endforeach

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</x-app-layout>
