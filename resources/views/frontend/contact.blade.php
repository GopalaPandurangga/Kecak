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

        <!-- Contact -->

        <section id="contact" class="sectionSize bg-white">
           
            <div class="container  mx-20 my-20">
                <div class="secondaryTitle bg-underline2 bg-100% font-bold text-black text-center">
                    <h2>Agen Contact</h2>
                </div>
               
                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                @foreach ($contact as $contacts)
                    <div class="group relative h-full w-full overflow-hidden rounded-lg bg-white shadow-2xl">
                        <div
                            class="flex  h-80 w-full overflow-hidden  bg-violet-300 shadow-2xl group-hover:bg-black transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src='dist/assets/rama.jpeg' alt="rama sinta"
                                class="mx-auto my-10 rounded-full shadow-2xl w-40 h-40 object-cover border-4 border-white">
                        </div>
                        <div class="px-4 my-4">
                            <h3 class="mt-6 font-pt-serif text-2xl font-bold text-black">
                                <a href="https://wa.me/6287755777241">
                                    <span class="absolute inset-0 "></span>
                                    {{$contacts -> contact_name}}
                                </a>
                            </h3><br>
                            <p class="text-base font-semibold text-gray-900">
                            {{$contacts -> description}}</p>
                        </div>
                        <button class="h-10 px-6 mb-6 mx-4 shadow-2xl  font-semibold rounded-lg bg-black text-white" type="submit">
                            Contact Now
                        </button>

                    </div>

                    @endforeach
                </div>
                
            </div>
           

            

        </section>

        <!-- Contact End -->

    </body>
</x-template-layout>
