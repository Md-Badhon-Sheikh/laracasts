<x-layout>

    <x-slot:heading>
        Edit Page
    </x-slot:heading>

    <div>
        <div class="text-end mt-3 mx-12">
            <a href="/" class="btn bg-green-700 py-1 px-3 text-white font-semibold">Back to home</a>
        </div>

        <div class="my-10 px-20">
            <form action="{{route('update', $ourPost-> id)}}" method="POST" enctype="multipart/form-data">

                <div class="flex flex-col gap-4 border-2 border-green-600 py-3 px-8 rounded">
                    @csrf
                    <label for="name" class="font-semibold ">Name</label>
                    <input type="text" value="{{$ourPost->name}}" name="name" class="border-2 border-gray-300 py-2 px-2 rounded">
                   


                    <label for="email" class="font-semibold ">Email</label>
                    <input type="email" value="{{$ourPost->email}}" name="email" class="border-2 border-gray-300 py-2 px-2 rounded">
                 

                    <label for="image" class="font-semibold ">Image</label>
                    <input type="file" value="{{$ourPost->image}}" name="image" class="border-2 border-gray-300 py-2 px-2 rounded">
                   

                    <div>
                        <input type="submit" class="bg-green-700 text-white py-2 px-4 rounded font-semibold w-full mt-2" value="Update">
                    </div>

                </div>
            </form>
        </div>


    </div>

</x-layout>