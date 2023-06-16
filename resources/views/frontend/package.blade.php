<x-template-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="build/assets/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <script src="build/assets/script.js"></script>
        <title>Package</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <!--maincast-->
        <section id="maincast" class="sectionSize bg-gray-200 pt-20 dark:bg-dark">
            <div class="container ">

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px] pt-20 ">
                    @foreach ($data as $datas)
                    <div class="relative overflow-hidden bg-white rounded-xl group mr-[30px] ">
                        <div
                            class="relative h-80 w-full overflow-hidden  bg-white  group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="{{asset('storage/'.$datas->photo)}}" alt="paket"
                                class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4  text-md pl-4 font-bold text-black dark:text-white">
                            <a href="/detailpackage/{{ $datas->package_id}}">
                                <span class="absolute inset-0"></span>
                                {{$datas->name}}
                            </a>
                        </h3>
                        <p class ="text-primary pl-4 font-bold mb-4 ">
                        Rp {{$datas->rate}}
                        </p>
                        <p class="text-base pl-4   pr-4 font-semibold text-gray-900">
                        {{$datas->desc}}
                        </p>
                        <p class="text-sm pl-4 mb-8 mt-4  pr-4 font-reguler text-gray-900"> {{$datas->location}}</p>
                        
                    </div>

                  
                    @endforeach

                </div>
            </div>
        </section>
        <!--maincast end-->
    </body>

    </html>
</x-template-layout>
