<x-admin-layout>

    <h2 class="font-bold text-xl mx-8 mb-4 mt-10 text-gray-800 leading-tight">
        {{$title}}
    </h2>


    <div>
        <div class="shadow px-6 py-4 mx-8 bg-white rounded-xl sm:px-1 sm:py-1">
            <div class="grid grid-cols-12">
                <div class="col-span-6 p-4">
                    <a href="{{route('berita.create')}}"><button
                            class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-black hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">Add</button></a>
                    <a href=""><button
                            class="px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green-600 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none">Publish</button></a>
                    <a href=""><button
                            class="px-4 py-1 text-sm rounded text-red-600 font-semibold border border-red-600 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none">Delete</button></a>
                </div>

                <div class="col-span-6 p-4 flex justify-end">
                    <input type="text"
                        class="px-4 py-2 focus:ring-indigo-500 border rounded-none rounded-1-md sm:text-sm border-black"></input>
                    <button
                        class="rounded-r-md border border-1-0 px-4 py-1 border-gray-300 bg-gray-50 text-gray-500  hover:text-white hover:bg-blue-600">Search</button>
                </div>

            </div>
            <div class="shadow overflow-hidden border-b vorder-gray-200 sm:rounded-lg m-3">
                <table class="min-w-full divide-y divide-gray-200 p-2">
                    <thead class="bg-gray-50">
                        <tr class="text-lg text-left">
                            <th class="w-1 px-2"> Checklist </th>
                            <th> No </th>
                            <th> Name</th>
                            <th> Testimonial</th>
                            <th> Message</th>
                            <th> Rate</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <?php $no=1;?>
                            @foreach ($berita as $berit)
                        <tr>
                            <td class="px-2"><input type="checkbox" name="" id=""></td>
                            <td> {{$no}}</td>
                            <td> {{$berit -> title}}</td>
                            <td>{{$berit -> testimonial}}</td>
                            <td>{{$berit -> messages}}</td>
                            <td>{{$berit -> rate}}</td>
                            <td>

                                <form action="{{route('berita.destroy', $berit->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{route('berita.edit', $berit->id)}}"
                                        class="btn btn-xs p-1 rounded text-blue-600 font-semibold border border-blue-600 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none">Edit</a>
                                    <button type="submit"
                                        class="btn btn-xs p-1 rounded text-red-600 font-semibold border border-red-600 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none">Del</button>
                                </form>
                            </td>

                        </tr>
                        <?php $no++; ?>
                        @endforeach

                    </tbody>

            </div>

        </div>
    </div>

</x-admin-layout>
