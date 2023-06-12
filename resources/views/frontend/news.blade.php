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



       

        <!--About Detail-->
        <section id="home" class=" dark:bg-dark  py-36 w-full h-full bg-no-repeat bg-cover " style="background-image: url(''); ">

            <div class="container ">
            <div class="secondaryTitle bg-underline2 bg-100% font-bold text-primary dark:text-white text-center">
                    <h2>Berita Terbaru Seputar Ubud</h2>
                </div>
              <div class="" >
                <div class=" text-center text-dark lg:text-left">
                    @foreach ($news as $berita)
                    <div class="w-full self-center md:flex-1 md:mr-10  my-10 lg:w-1/2">
                        <h1 class="font-pt-serif text-3xl font-bold ">
                           {{$berita->title}} <br>
                        <p class="font-pt-serif text-lg font-normal   mt-8 ">
                        {{$berita->desc}}
                        </p>
                        <a class ="text-sm font-thin hover:text-primary"href="/detailnews/{{ $berita->news_id}}">Read More</a>

                       
                    </div>
                    <!-- <div class=" w-full self-end  lg:w-1/2 ">
                        <div class="relative  ">
                            <img src="dist/assets/taman kaja.png" alt="kecak" class="max-w-full mx-auto rounded-lg">
                        </div>
                    </div> -->
                    @endforeach
                </div>
                </div>
            </div>
        </section>
        <!--About Detail End-->

       


    </body>
</x-template-layout>
