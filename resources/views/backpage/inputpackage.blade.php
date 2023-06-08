<x-admin-layout>

    <h2 class="mx-6 mt-10 mb-10 font-semibold text-xl text-gray-800 leading-tight">
        Input Package
    </h2>


    <div>
        <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1">
            <form action="{{(isset($package))?route('paket.update', $package->package_id) :route('paket.store')}}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($package))
                @method('PUT')

                @endif
                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <!-- <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">
                                    Package Id</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    
                                    <input type="text" name="package_id  " rows="2 "
                                        value="{{(isset($package))?$package->package_id:old('package_id')}}"
                                        class="@error('package_id') border-red-500 @enderror block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="jonathan cristie">
                                </div>
                                <div class="text-xs text-red-600">@error('package_id'){{$message}} @enderror </div>
                            </div>
                        </div> -->

                        <div>
                            <label for="package_code" class="block text-sm font-medium text-gray-700">
                                Package Code</label>
                            <div class="mt-1">
                                <textarea name="package_code" rows="2"
                                    value="{{(isset($package))?$package->package_code:old('package_code')}}"
                                    class="@error('package_code') border-red-500 @enderror mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="ig : @palzyganteng"></textarea>
                            </div>
                            <div class="text-xs text-red-600">@error('package_code'){{$message}} @enderror </div>
                        </div>
                        <div>
                            <label for="package_name" class="block text-sm font-medium text-gray-700">
                                Package Name</label>
                            <div class="mt-1">
                                <textarea name="package_name" rows="2"
                                    value="{{(isset($package))?$package->package_nane:old('package_name')}}"
                                    class="@error('package_name') border-red-500 @enderror mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="ig : @palzyganteng"></textarea>
                            </div>
                            <div class="text-xs text-red-600">@error('package_name'){{$message}} @enderror </div>
                        </div>
                        
                            <label for="package_desc" class="block text-sm font-medium text-gray-700">
                                Package Description</label>
                            <div class="mt-1">
                                <textarea name="package_desc" rows="2"
                                    value="{{(isset($package))?$package->package_desc:old('package_desc')}}"
                                    class="@error('package_desc') border-red-500 @enderror mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="ig : @palzyganteng"></textarea>
                            </div>
                            <div class="text-xs text-red-600">@error('package_desc'){{$message}} @enderror </div>
                        </div>


                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Cover photo</label>
                            <div
                                class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                <div class="space-y-1 text-center">
                                    @if (isset($package) && $package->feature_img!='')
                                    <img src="{{asset('storage/'.$package->feature_img)}}"
                                        class="w-25 rounded rounded-xl" alt="">
                                    @else
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48" aria-hidden="true">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    @endif

                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <span>Upload a file</span>
                                            <input id="file-upload" name="cover" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div>
                            <label for="about" class="block text-sm font-medium text-gray-700">
                                Location Id</label>
                            <div class="mt-1">
                                <textarea name="location_id" rows="2"
                                    value="{{(isset($package))?$package->location_id:old('location_id')}}"
                                    class="@error('location_id') border-red-500 @enderror mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="ig : @palzyganteng"></textarea>
                            </div>
                            <div class="text-xs text-red-600">@error('location_id'){{$message}} @enderror </div>
                        </div> -->
                        <!-- <div class="col-span-3 sm:col-span-2">
                                <label for="comunities" class="block text-sm font-medium text-gray-700">
                                   Comunity</label>
                                   <select name="comunity_id" id="comunity_id" class="mt-1 block
                                   w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                   <option value="">Select Comunities</option>
                               
                                <div class="text-xs text-red-600">@error('comunity_id'){{$message}} @enderror </div>
                            </div>
                        <div> -->
                       
                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
