<x-admin-layout>

    <h2 class="font-bold text-xl mx-8 mb-4 mt-10 text-gray-800 leading-tight">
        {{$title}}
    </h2>


    <div>
        <div class="shadow px-6 py-4 mx-8 bg-white rounded-xl sm:px-1 sm:py-1">
            <div class="grid grid-cols-12">
                <div class="col-span-6 p-4">
                    <a href="{{route('paket.create')}}"><button
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
                            <th> Package id </th>
                            <th> Package Code</th>
                            <th> Package Name</th>
                            <th> Package Desc</th>
                            <th> Feature Image</th>
                            <th> Location id</th>
                            <th> Community id</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>

                            @foreach ($package as $pkg)
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td> {{$pkg -> package_id}}</td>
                            <td> {{$pkg -> package_code}}</td>
                            <td> {{$pkg -> package_name}}</td>
                            <td>{{$pkg -> package_desc}}</td>
                            <td>
                                <img src="{{asset('storage/'.$pkg->feature_img)}}" class="w-16" alt="">
                            </td>
                            <td>{{$pkg -> location_id}}</td>
                            <td>{{$pkg -> community_id}}</td>
                            <td>

                                <form action="{{route('paket.destroy', $pkg->package_id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{route('paket.edit', $pkg->package_id)}}"
                                        class="btn btn-xs p-2 rounded text-blue-600 font-semibold border border-blue-600 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none">Edit</a>
                                    <button type="submit"
                                        class="btn btn-xs p-2 rounded text-red-600 font-semibold border border-red-600 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none">Del</button>
                                </form>
                            </td>


                        </tr>

                        @endforeach

                    </tbody>



            </div>

        </div>
    </div>

</x-admin-layout>
