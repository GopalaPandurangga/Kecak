<x-template-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="build/assets/app.css">
        <script src="build/assets/script.js"></script>
        

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <!-- detail -->
     
        <section id="location" class="pt-20 dark:bg-dark">
            <div class="container ">
                

                <div class=" flex flex-wrap lg:text-left text-center ">
                    <div class=" max-w-full self-end px-20 lg:w-1/2 lg:bottom-10 ">
                        <div class="relative rounded-3xl mt-10 my-2 lg:my-10 ">
                            <img src="dist/assets/taman kaja.png" alt="taman" class="w-max rounded-3xl mx-auto">
                        </div>
                    </div>
                    <div class="w-full self-center dark:text-white md:flex-1 md:mr-10 mx-20 my-10 lg:my-20 lg:w-1/2">
                        <h1 class="font-pt-serif   text-base lg:text-xl font-bold ">
                            Reguler Package

                        </h1>
                        <p class ="text-primary text-3xl font-bold ">
                            Rp 100.000
                        </p>
                        <p class=" lg:text-lg text-base font-normal pt-8  mb-8 lg:mb-20">
                            Desa Pakraman Taman Kaja is a small village of
                            about 140 families and is situated just to the
                            north of Jalan Raya Ubud along Sriwedari and Sandat Street.
                            In this village there is a pura dalem,
                            where in this pura dalem the kecak fire dance and trance dance are performed.<br>

                        </p>

                        <a href="kontak2" class="text-base  font-semibold text-white bg-black 
                        py-3 px-8 rounded-md hover:shadow-lg hover:bg-opacity-80 transition duration-300 ease-in-out">
                            Order Ticket</a>
                    </div>

                </div>
            </div>
        </section>
        
        <!-- detail ends -->
    </body>
    </html>
</x-template-layout>