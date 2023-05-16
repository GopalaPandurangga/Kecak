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

        <!-- Testimonial -->

        <section id="testimonial" class="sectionSize dark:bg-dark">
            <div class="container lg:mx-20 lg:my-20 my-2 ">
                <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pt-20 ">
                @foreach ($berita as $ber )
                    <div class=" group relative items-start justify-start overflow-hidden  cursor-pointer  shadow-xl rounded-lg transition-shadow ">
                   
                   
                        <h1 class="font-pt-serif dark:text-white  text-lg font-bold px-4 pt-4 mb-5">
                            Visitors Testimonial <br>
                            <div class="text-sm font-montserrat dark:text-gray-100 text-gray-500">{{$ber -> title}}</div>
                        </h1>
                        <p class="md:text-xl  text-black dark:text-white font-bold px-4 text-start mb-7">
                            {{$ber -> testimonial}}
                        </p>
                        <p class="md:text-xl font-normal dark:text-white px-4   text-start mb-5">
                            {{$ber -> messages}}
                        </p>
                        <p class="font-pt-serif text-md dark:text-white font-bold px-4  text-start mb-5 ">
                            Rate <br> <span
                                class="font-montserrat text-primary font-bold text-md">{{$ber -> rate}}</span>
                        </p>

                       
                       
                    </div>
                    @endforeach
                    </div>

                </div>
            </div>

        </section>

        <!-- Testimonial End -->

    </body>
</x-template-layout>
