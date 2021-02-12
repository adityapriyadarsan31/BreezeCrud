<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($request->route()->named('contacts'))
                        @include('layouts.create')
                    @elseif($request->route()->named('create'))
                        @include('layouts.create')
                    @else
                        @include('layouts.update')
                    @endif
                    <br>
                    <table>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th colspan="2">Actions</th>
                    </tr>

                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td><form action="{{route('edit')}} method="post">
                                @csrf
                                <input type="hidden" name="editName" value="{{$contact->name}}">
                                <input type="hidden" name="editEmail" value="{{$contact->email}}">
                                <input type="submit" value="Edit">
                        </form>
                    </td>
                        <td>
                            <form action="{{route('delete')}} method="post">
                                @csrf
                                <input type="hidden" name="delName" value="{{$contact->name}}">
                                <input type="hidden" name="delEmail" value="{{$contact->email}}">
                                <input type="submit" value="Delete">
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>