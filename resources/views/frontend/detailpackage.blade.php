<x-template-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="build/assets/app.css">
        <script src="build/assets/script.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">



        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <!-- detail -->

        <section id="location" class="pt-20 dark:bg-dark">
            <div class="container mx-auto px-4 py-8">
                <div class="flex flex-col lg:flex-row text-center lg:text-left">
                    <div class="w-full md:w-1/2 mr-16">
                        <div class="swiper-container z-[-100] overflow-hidden">
                            <div class="swiper-wrapper">
                                <div
                                    class="swiper-slide relative h-50   overflow-hidden rounded-lg bg-white group-hover:opacity-75 transition duration-300 ">
                                    <img src="{{asset('storage/'.$data->photo)}}" alt="Gambar 1"
                                        class="h-full w-full object-cover object-center">
                                </div>
                                <div
                                    class="swiper-slide relative h-50 overflow-hidden rounded-lg bg-white group-hover:opacity-75 transition duration-300 ">
                                    <img src="{{asset('storage/'.$data->photo)}}" alt="Gambar 2"
                                        class="w-full h-auto hidden-slide">
                                </div>
                                <div
                                    class="swiper-slide relative h-50 overflow-hidden rounded-lg bg-white group-hover:opacity-75 transition duration-300  ">
                                    <img src="{{asset('storage/'.$data->photo)}}" alt="Gambar 3"
                                        class="w-full h-auto hidden-slide">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>

                    <div class="w-full self-center dark:text-white md:flex-1 md:mr-10 mx-20 my-20 lg:my-20 lg:w-1/2">
                        <h1 class="text-4xl font-bold mb-4 font-pt-serif">{{$data->name}}</h1>
                        <div class="">
                            <h2 class="text-2xl font-bold text-primary ">{{$data->rate}}</h2>
                        </div>
                        <div class="flex items-center mr-2 mb-8">
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-gray-400">☆</span>
                        </div>
                        <p class="text-gray-700 mb-16">{{$data->desc}}</p>

                        <div class="mt-auto mb-4">
                            <a href="/kontak2"
                                class="bg-dark hover:bg-primary text-white px-4 py-2 rounded transition duration-300">Buy
                                Now</a>
                        </div>
                    </div>
                </div>
                <h3 class="text-2xl mt-20 font-bold mb-4">Comment</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white shadow-md rounded p-4">
                        <blockquote>
                            <p class="text-gray-800">"Paket ini benar-benar luar biasa! Saya sangat puas dengan layanan
                                yang diberikan."</p>
                            <cite class="text-gray-600">- Nama Klien 1</cite>
                        </blockquote>
                    </div>
                    <div class="bg-white shadow-md rounded p-4">
                        <blockquote>
                            <p class="text-gray-800">"Paket ini memberikan solusi yang lengkap untuk kebutuhan saya.
                                Sangat direkomendasikan!"</p>
                            <cite class="text-gray-600">- Nama Klien 2</cite>
                        </blockquote>
                    </div>
                </div>
            </div>

            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script>
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });

            </script>
        </section>

        <!-- detail ends -->
    </body>


    </html>
</x-template-layout>
