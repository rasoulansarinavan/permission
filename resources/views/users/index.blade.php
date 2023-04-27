<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @can('read user')
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table class="border-separate border border-slate-400 w-full">
                            <thead>
                            <tr>
                                <th class="border border-slate-300">id</th>
                                <th class="border border-slate-300">name</th>
                                <th class="border border-slate-300">email</th>
                                <th class="border border-slate-300">edit</th>
                                <th class="border border-slate-300">delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="p-5 border border-slate-300">{{$user->id}}</td>
                                    <td class="p-5 border border-slate-300">{{$user->name}}</td>
                                    <td class="p-5 border border-slate-300">{{$user->email}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                @endcan
            </div>
        </div>
    </div>
</x-app-layout>
