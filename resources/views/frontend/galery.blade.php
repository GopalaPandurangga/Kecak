<x-template-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }} width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="build/assets/app.css">
        <script src="build/assets/script.js"></script>
        

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <!-- galery -->
        
        <section id="maincast" class="sectionSize  dark:bg-dark">
            <div class="container pt-20" data-aos="zoom-in" data-aos-duration="1000">
                <div >
                    <h2 class="text-3xl font-montserrat font-bold text-black text-left dark:text-white">Welcome To Our Galery</h2>
                    <p class ="text-primary mt-10 text-2xl font-bold font-pt-serif pb-2">In The Kecak Show</p>
                    <p class="text-gray-800 dark:text-gray-800 lg:text-xl text-xs font-normal font-sans text-left">
                    Allmost all adult members of the Villagers have <br>been involved in
                    one way or another in the presentation tonight</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pt-10 ">
                    @foreach ($galeries as $data)
                    <div class="relative overflow-hidden group mr-[5px] ">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white shadow-2xl group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="{{asset('storage/'.$data->photo)}}" alt="rama sinta"
                                class="h-full w-full object-cover object-center">
                        </div>
                        <!-- <h3 class="mt-6 text-md font-bold text-black dark:text-white">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                {{$data->title}}
                            </a>
                        </h3><br>
                        <p class="text-base font-semibold text-gray-900">
                            {{$data->desc}}</p> -->
                    </div>


                    @endforeach

                </div>
            </div>
        </section>
        <!--maincast end-->
        
        <!-- galery ends -->
    </body>
    </html>
</x-template-layout>