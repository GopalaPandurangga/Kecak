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



        <!--about-->
        <section id="About" class=" bg-black mt-10">
            
            <div class="relative">
                <video autoplay loop muted plays-inline class="hover:opacity-50 transition duration-300 w-screen">
                    <source src="dist/assets/trance.mp4" type="video/mp4">
                </video>
            </div>
            
        </section>
        <!--about-->

        <!--About Detail-->
        <section id="home" class=" bg-dark pt-36 py-36 w-full h-full bg-no-repeat bg-cover " style="background-image: url(''); ">
            <div class="container ">
              <div class="" >
                <div class=" flex flex-col-reverse lg:flex-row text-center text-white lg:text-left">
                    <div class="w-full self-center md:flex-1 md:mr-10  my-20 lg:w-1/2">
                        <h1 class="font-pt-serif text-3xl font-bold ">
                           About Taman Kaja <br>
                        <p class="font-pt-serif text-lg font-normal lg:text-left text-center lg:mr-96 mt-10 mb-10">
                        The Kecak firen and trance dance performances were formed against a backdrop of the economic crisis in Taman Kaja Village, Ubud.
                        At that time the village of Taman Kaja Ubud was experiencing an economic crisis, which created an initiative from the head of 
                        the village at that time, namely Mr. Sarna to make a performance to get income for the typical village.
                        </p>

                       
                    </div>
                    <!-- <div class=" w-full self-end  lg:w-1/2 ">
                        <div class="relative  ">
                            <img src="dist/assets/taman kaja.png" alt="kecak" class="max-w-full mx-auto rounded-lg">
                        </div>
                    </div> -->
                </div>
                </div>
            </div>
        </section>
        <!--About Detail End-->

        <!--About Detail-->
        <!-- Location-->
        <section id="location" class="pt-20 dark:bg-dark">
            <div class="container ">
                <div class="secondaryTitle bg-underline2 bg-100% font-bold text-black dark:text-white text-center">
                    <h2>Location of the show</h2>
                </div>

                <div class=" flex flex-wrap lg:text-left text-center ">
                    <div class=" max-w-full self-end px-20 lg:w-1/2 lg:bottom-10 ">
                        <div class="relative rounded-3xl mt-10 my-2 lg:my-10 ">
                            <img src="dist/assets/taman kaja.png" alt="taman" class="w-max rounded-3xl mx-auto">
                        </div>
                    </div>
                    <div class="w-full self-center dark:text-white md:flex-1 md:mr-10 mx-20 my-20 lg:my-20 lg:w-1/2">
                        <h1 class="font-pt-serif   text-base lg:text-xl font-bold mb-7">
                            Pura Dalem Desa Pakraman Taman Kaja

                        </h1>
                        <p class=" lg:text-lg text-base font-normal  mb-8 lg:mb-20">
                            Desa Pakraman Taman Kaja is a small village of
                            about 140 families and is situated just to the
                            north of Jalan Raya Ubud along Sriwedari and Sandat Street.
                            In this village there is a pura dalem,
                            where in this pura dalem the kecak fire dance and trance dance are performed.<br>

                        </p>

                        <a href="about" class="text-base  font-semibold text-white bg-black 
                        py-3 px-8 rounded-md hover:shadow-lg hover:bg-opacity-80 transition duration-300 ease-in-out">
                            View Via Google Maps </a>
                    </div>

                </div>
            </div>
        </section>
        <!-- Location end-->
       
      
        <!--About Detail-->


    </body>
</x-template-layout>
