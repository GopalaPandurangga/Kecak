<div>
    <div class="col-md-8 mb-2">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('error') }}
        </div>
        @endif
        @if($addPost)
        @include('livewire.create')
        @endif
        @if($updatePost)
        @include('livewire.update')
        @endif
    </div>
    <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1">
        <div class="card">
            <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1">
            <div class="col-span-6 p-4">
                 @if(!$addPost)

                <button wire:click="addPost()" class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-black hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">Add</button>
                <a href=""><button class="px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green-600 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none">Publish</button></a>
                    <a href=""><button class="px-4 py-1 text-sm rounded text-red-600 font-semibold border border-red-600 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none">Delete</button></a>
                @endif
                <div>
                <div class="shadow overflow-hidden border-b vorder-gray-200 sm:rounded-lg m-3">
                    <table class="min-w-full divide-y divide-gray-200 p-2">
                        <thead class="bg-gray-50">
                            <tr class="text-lg text-left">
                                <th class="w-1"> Checklist </th>
                                <th> No </th>
                                <th> Contact Name</th>
                                <th> Description</th>
                                <th> Photo</th>
                                <th> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($posts) > 0)
                            <?php $no=1;?>
                            @foreach ($posts as $post)
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td> {{$no}}</td>
                                <td>
                                    {{$post->title}}
                                </td>
                                <td>
                                    {{$post->description}}
                                </td>
                                <td>
                                    {{$post->photo}}
                                </td>
                                <td>
                                    <button wire:click="editPost({{$post->id}})"
                                    class="btn btn-xs p-2 rounded text-blue-600 font-semibold border border-blue-600 hover:text-white hover:bg-blue-600 hover:border-transparent focus:outline-none">Edit</button>
                                    <button wire:click="deletePost({{$post->id}})"
                                    class="btn btn-xs p-2 rounded text-red-600 font-semibold border border-red-600 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none">Del</button>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="3" align="center">
                                    No Posts Found.
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
