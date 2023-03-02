<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  @foreach($posts as $post)
                      {{$post->title}}
                      {{$post->body}}
                   @endforeach   
                   <br>

                </div>
            </div>
        </div>
    </div> -->



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        @if(session()->has('status'))
        <div class="mt-5 shadow bg-purple-500 text-white text-sm py-2 px-4">
            {{session('status')}}
        </div>
        @endif
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col-2" class="px-6 py-4 ml-4">
                        NAME
                    </th>
                    <th scope="col-3" class="px-6 py-3">
                        TITLE
                    </th>
                    <th scope="col-4" class="px-6 py-3">
                        BODY
                    </th>

                    <th scope="col-2" class="px-6 py-3">
                        Action
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td scope="col-2" class="px-6 py-4 ">
                        {{$post->user->name}}
                    </td>
                    <td scope="col-3" class="px-6 py-4">
                        {{$post->title}}
                    </td>
                    <td scope="col-4" class="px-6 py-4">
                        {{$post->body}}
                    </td>
                    <td scope="col-2" class=" px-6 py-4 whitespace-nowrap text-sm font-medium">

                        <a href="{{url('/post/edit',$post->id)}}"
                            class="bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white text-sm py-1 px-2 rounded">Edit</a>
                        <a href="{{url('/post/delete',$post->id)}}"
                            class="bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white text-sm py-1 px-2 rounded ml-5">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>




</x-app-layout>