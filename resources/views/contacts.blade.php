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
                            <div class="alert">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                Contact created succesfully!
                            </div>
                            <br>
                             @include('layouts.create')
                        @elseif($request->route()->named('update'))
                        <div class="alert">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                Contact updated successfully!
                            </div>
                            <br>
                             @include('layouts.create')
                        @elseif($request->route()->named('delete'))
                            <div class="alert">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                Contact deleted successfully!
                            </div>
                            <br>
                             @include('layouts.create')
                        @else
                            @include('layouts.update')
                        @endif
                    
                    <br>
                    <table>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>

                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td><a href="{{route('edit',['id'=>$contact->id])}}" class="editlink">Edit</a>
                            <a href="{{route('delete',['id'=>$contact->id])}}" class="deletelink">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>