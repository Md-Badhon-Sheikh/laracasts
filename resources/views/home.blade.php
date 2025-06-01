<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

<div class="flex justify-end mt-5 mx-20">
        <a href="/create" class="btn bg-green-700 py-1 px-4 text-white">Create New Post</a>
    </div>


    <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100 mx-20 mt-3">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
             @foreach($posts as $key => $post)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$post -> name}}</td>
                    <td>{{$post-> email}}</td>
                    <td>
                        <img class="w-14 h-14 rounded-4xl" src="images/{{$post->image}}" alt="">
                    </td>
                    <td class="gap-2">
                        <a class="bg-green-700 text-white font-semibold px-4 py-1 rounded" href="{{route('edit', $post->id)}}">Edit</a>

                        <a class="bg-red-600 text-white font-semibold px-4 py-1 rounded" href="{{route('delete', $post->id)}}">Delete</a>
                     
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
    </div>

</x-layout>