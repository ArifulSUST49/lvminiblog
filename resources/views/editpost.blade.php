<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight  p-10 m-auto text-align-centre">
        Edit Post
        </h2>
    <div class="py-12">
        <form class="" method="POST">
            @csrf
            @method('PUT')
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title
                        </label>
                        <input id="title" rows="4" name="title"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Title" value="{{$post->title}}">
                        <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body
                        </label>
                        <textarea id="body" rows="4" name="body"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Leave a post......"> {{$post->body}}
                        
                        </textarea>

                    </div>


                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <input type="submit"
                            class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                            value="Update">


                    </div>
                </div>
                @if(session()->has('status'))
                <div class="mt-5 shadow bg-purple-500 text-white font-bold py-2 px-4 rounded">
                    {{session('status')}}
                </div>
                @endif
            </div>
    </div>

    </form>



</x-app-layout>