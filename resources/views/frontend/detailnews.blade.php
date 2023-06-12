<x-template-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="build/assets/app.css">
        <script src="build/assets/script.js"></script>
        <title>kecak</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>



       

        <!-- Hero-->
        <section id="home" class="  dark:bg-dark pt-36 py-40  z-10 ">
            <div class="container ">
                <div class=" flex flex-col-reverse lg:flex-row text-center lg:text-left">
                    <div class="w-full dark:text-white self-center md:flex-1 md:mr-10  my-20 lg:w-1/2">
                        <h1 class="font-pt-serif text-5xl font-bold mb-7">
                            {{$news->title}}

                        </h1>
                        <p class="font-pt-serif md:text-xl font-normal lg:text-left text-center mb-10">
                            {{$news->desc}}
                        </p>

                        
                    </div>
                    <div class=" w-full self-center px-20 lg:w-1/2 ">
                        <div class="relative mt-10 lg:left-20 ">
                            <img src="{{asset('storage/'.$news->photo)}}" alt="gambar" class="max-w-full mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section ends-->

       


    </body>
</x-template-layout>
