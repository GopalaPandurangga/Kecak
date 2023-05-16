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
        <section class ="sectionSize">
        <h1 class="text-center text-5xl font-bold pt-8 pb-10"> Our Galery</h1>
       <div class="column-3 gap-3 w-full space-y-3 pb-28">
        <div class=" break-inside-avoid"><img src="dist/assets/rama.jpeg" ></div>
        <div class=" break-inside-avoid"><img src="dist/assets/rahwana.jpeg" ></div>
        <div class=" break-inside-avoid"><img src="dist/assets/rama.jpeg" ></div>
        <div class=" break-inside-avoid"><img src="dist/assets/rama.jpeg" ></div>
        </section>
        
     

       </div>
        
        <!-- galery ends -->
    </body>
    </html>
</x-template-layout>