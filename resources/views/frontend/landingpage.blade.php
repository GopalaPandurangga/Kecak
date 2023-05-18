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
        <title>Kecak Fire and Trance Dance</title>

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
                            Kecak Fire <br>
                            <span class="bg-underline1 bg-right-bottom bg-no-repeat pb-2 bg-80%">
                                and Trance Dance
                            </span>
                        </h1>
                        <p class="font-pt-serif md:text-xl font-normal lg:text-left text-center mb-10">
                            The Sanghyang is a god-inspired trance-dance the function <br>
                            of which is to protect society against evil force and epidemics. <br>
                            It can take several form and the version here presented is the Sanghyang Djaran.
                        </p>

                        <a href="about"
                            class="text-base font-semibold text-white bg-black
                        py-3 px-8 rounded-full hover:shadow-lg hover:bg-opacity-80 transition duration-300 ease-in-out">Read
                            More</a>
                    </div>
                    <div class=" w-full self-end px-20 lg:w-1/2 ">
                        <div class="relative mt-10 lg:left-20 ">
                            <img src="dist/assets/kecak fix.png" alt="kecak" class="max-w-full mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section ends-->

        <!--galery-->
        <section id="galery" class="bg-dark dark:bg-white text-white sectionSize ">
            <div class="container ">
                <div class="secondaryTitle dark:text-black bg-underline2 bg-100% text-center font-bold">
                    <h2>Welcome to our Galery</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pt-20 ">

                    <div class="relative overflow-hidden group mr-[30px] ">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white shadow-2xl group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src='dist/assets/rama.jpeg' alt="rama sinta"
                                class="h-80 w-full object-cover object-center">
                        </div>

                    </div>

                    <div class="relative overflow-hidden group mr-[30px]">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white shadow-2xl group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src='dist/assets/hanoman.jpeg' alt="hanoman"
                                class="h-full w-full object-cover object-center">
                        </div>

                    </div>

                    <div class="relative overflow-hidden group mr-[30px]">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white shadow-2xl group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src='dist/assets/rahwana.jpeg' alt="rahwana"
                                class="h-full w-full object-cover object-center">
                        </div>

                        </p>
                    </div>


                </div>



            </div>
            <div class="secondaryTitle mt-10 font-bold text-white dark:text-black text-center">
                <h2>In The Kecak Show</h2><br>
                <p class="text-gray-200 dark:text-gray-800 lg:text-xl text-sm font-normal text-center">
                    Allmost all adult members of the Villagers have <br>been involved in
                    one way or another in the presentation tonight</p>

            </div>
            <a href="galery"
                class="text-base  font-semibold text-black bg-white dark:text-white dark:bg-black
                        py-3 px-8 rounded-full hover:shadow-lg hover:bg-opacity-80 transition duration-300 ease-in-out">
                View More</a>
            </div>
        </section>
        <!--galery ends-->

        <!--maincast-->
        <section id="maincast" class="sectionSize pt-40 dark:bg-dark">
            <div class="container ">
                <div class="secondaryTitle bg-underline2 bg-100% font-bold text-black text-center dark:text-white">
                    <h2>Main Cast in the Kecak Show</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pt-20 ">

                    <div class="relative overflow-hidden group mr-[30px] ">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white shadow-2xl group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src='dist/assets/rama.jpeg' alt="rama sinta"
                                class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-md font-bold text-black dark:text-white">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Rama Shinta
                            </a>
                        </h3><br>
                        <p class="text-base font-semibold text-gray-900">
                            Prince Rama, heir to the throne of the kingdom of Ayodya,
                            and his Wife Sita have been banished from the Kingdom by
                            King Dasarata as a result of trickery by Rama’s stepmom</p>
                    </div>

                    <div class="relative overflow-hidden group mr-[30px]">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white shadow-2xl group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src='dist/assets/hanoman.jpeg' alt="hanoman"
                                class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-md font-bold text-black dark:text-white">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Hanooman
                            </a>
                        </h3><br>
                        <p class="text-base font-semibold text-gray-900">
                            Hanuman (/ˈhʌnʊˌmɑːn/; Sanskrit:, IAST: Hanumān)[8], also called Anjaneya
                            (Sanskrit:)[9], is a Hindu god and a divine vanara companion of the god Rama.</p>
                    </div>

                    <div class="relative overflow-hidden group mr-[30px]">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white shadow-2xl group-hover:opacity-75 transition duration-300 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src='dist/assets/rahwana.jpeg' alt="rahwana"
                                class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-md font-bold dark:text-white">
                            <a href="#">
                                <span class="absolute inset-0  "></span>
                                Rahwana
                            </a>
                        </h3>
                        <br>
                        <p class="text-base font-semibold text-gray-900">
                            Ravana is described to be the eldest son of sage Vishrava and rakshasi Kaikesi.
                            He abducted Prince Rama's wife Sita and took her to his kingdom of Lanka,
                            he held her in the Ashok Vatika.
                        </p>
                    </div>


                </div>
            </div>
        </section>
        <!--maincast end-->

        <!-- package -->
        <section id="package" class=" dark:bg-dark">
            <div class="container items-center justify-center mx-auto py-36">
                <div class="flex flex-col items-center gap-3">
                    <h1 class="text-black dark:text-white font-pt-serif font-bold text-3xl mb-2">Package</h1>
                    <h1 class=" font-sans font-semibold text-3xl text-center text-gray-500 dark:text-white mb-4 ">Several Package Option
                    </h1>
                    <p class="lg:w-1/2 text-center text-xl dark:text-white">Here we summarize the package options that are most often purchased by website visitors</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pt-20">
                    <div
                        class="group relative items-center justify-center overflow-hidden cursor-pointer  hover:shadow-xl rounded-lg transition-shadow">
                        <div class="h-72 w-full relative overflow-hidden  ">
                            <img class="h-72 w-full object-cover object-center group-hover:scale-110 transition-transform duration-300"
                                src="dist/assets/package.jpeg" alt="">

                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-dark lg:to-dark/30 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70  ">
                        </div>
                        <div
                            class="absolute inset-0 flex flex-col items-start justify-start translate-y-[65%] lg:items-center lg:justify-center px-4 lg:px-9 lg:text-center lg:translate-y-[75%] lg:group-hover:translate-y-10 transition-all duration-300">
                            <h1 class="text-base lg:text-2xl text-white font-bold">Reguler Package </h1>
                            <p class="text-sm lg:text-lg text-gray-100 font-normal mb-2 lg:mb-4">Lorem ipsum dolor sit
                                amet consectetur adipisicing elit. Vitae, excepturi.</p>
                            <a href="package"
                                class="rounded-full  lg:bg-dark lg:py-2 lg:px-3.5 text-sm capitalize text-white font-bold">See
                                More</a>
                        </div>
                    </div>
                    <div
                        class="group relative items-center justify-center overflow-hidden cursor-pointer  hover:shadow-xl rounded-lg transition-shadow">
                        <div class="h-72 w-full relative overflow-hidden  ">
                            <img class="h-72 w-full object-cover object-center group-hover:scale-110 transition-transform duration-300"
                                src="dist/assets/package.jpeg" alt="">

                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-dark lg:to-dark/30 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70    ">
                        </div>
                        <div
                            class="absolute inset-0 flex flex-col items-start justify-start translate-y-[65%] lg:items-center lg:justify-center px-4 lg:px-9 lg:text-center lg:translate-y-[75%] lg:group-hover:translate-y-10 transition-all duration-300">
                            <h1 class="text-base lg:text-2xl text-white font-bold">Prince Package</h1>
                            <p class="text-sm lg:text-lg text-gray-100 font-normal mb-2 lg:mb-4">Lorem ipsum dolor sit
                                amet consectetur adipisicing elit. Vitae, excepturi.</p>
                            <a href="package"
                                class="rounded-full  lg:bg-dark lg:py-2 lg:px-3.5 text-sm capitalize text-white font-bold">See
                                More</a>
                        </div>
                    </div>
                    <div
                        class="group relative items-center justify-center overflow-hidden cursor-pointer  hover:shadow-xl rounded-lg transition-shadow">
                        <div class="h-72 w-full relative overflow-hidden  ">
                            <img class="h-72 w-full object-cover object-center group-hover:scale-110 transition-transform duration-300"
                                src="dist/assets/package.jpeg" alt="">

                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-dark lg:to-dark/30 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70    ">
                        </div>
                        <div
                            class="absolute inset-0 flex flex-col items-start justify-start translate-y-[65%] lg:items-center lg:justify-center px-4 lg:px-9 lg:text-center lg:translate-y-[75%] lg:group-hover:translate-y-10 transition-all duration-300">
                            <h1 class="text-base lg:text-2xl text-white font-bold">God Package</h1>
                            <p class="text-sm lg:text-lg text-gray-100 font-normal mb-2 lg:mb-4">Lorem ipsum dolor sit
                                amet consectetur adipisicing elit. Vitae, excepturi.</p>
                            <a href="package"
                                class="rounded-full  lg:bg-dark lg:py-2 lg:px-3.5 text-sm capitalize text-white font-bold">See
                                More</a>
                        </div>
                    </div>

                </div>


            </div>
        </section>

        <!-- package -->

        <!-- Location-->
        <section id="location" class="dark:bg-dark">
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
                            View More</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- Location end-->

        <!-- Testimonial -->
        <section id="testimonial" class="sectionSize dark:bg-dark">
            <div class="container  ">
                <div class=" flex  flex-wrap text-center lg:text-left">
                    <div class="w-full self-center dark:text-white md:flex-1 md:mr-10 mx-10  lg:w-1/2">
                        <h1 class="font-pt-serif text-lg font-bold mb-5">
                            Visitors Testimonial <br>
                            <div class="text-sm font-montserrat text-gray-500">Gopala Pandurangga</div>
                        </h1>
                        <p class="md:text-xl text-black font-bold  lg:text-left text-center mb-7">
                            The Show is just to cool, love it, <br>
                            if some day i have time to go ubud again, <br>
                            i want to watch this show again
                        </p>
                        <p class="md:text-xl font-normal lg:text-left text-center mb-10 lg:mb-5">
                            Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus
                            ridiculus mus. Donec quam felis, ultricies nec,
                            pellentesque eu, pretium quis, sem.
                        </p>
                        <p class="font-pt-serif text-md font-bold lg:text-left text-center ">
                            Rate 
                            <div class="flex items-center mr-2 mb-8">
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-gray-400">☆</span>
                        </div>

                        <a href="testi" class="text-base font-semibold text-white bg-black
                        py-3 px-8 rounded-md hover:shadow-lg hover:bg-opacity-80 transition duration-300 ease-in-out">
                            Show More</a>
                    </div>
                    <div class=" w-0 lg:max-w-full self-end  lg:w-1/2 lg:bottom-10 mb-20">
                        <div class="relative rounded-3xl lg:my-10 ">
                            <img src="dist/assets/taman kaja.png" alt="taman" class=" w-50 mx-auto">
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- Testimonial end  -->

        <!--Should-->
        <section id="should" class="dark:bg-dark ">
            <div class="container">
                <div class="secondaryTitle text-center dark:text-white lg:text-5xl text-xl bg-100% font-bold">
                    <h2 class="mb-10">You'll love and enjoy the show</h2>
                    <p class="text-xs lg:text-xl font-normal text-center ">Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit.
                        Aenean commodo ligula eget dolor. <br>
                        Aenean massa. Cum sociis natpoque penatibus et magnis dis parturient</p>
                </div>
                <div class="relative ">
                    <img src="dist/assets/maxresdefault.jpeg" alt="foto" class="w-fit shadow-2xl">
                </div>
            </div>




        </section>
        <!--Should end-->

        <!-- Comment Session -->
        <section id="Comment" class="py-20 px-10 lg:px-20 dark:bg-dark">
            <div class="container">
                <div class="w-full px-4">
                    <div class="secondaryTitle text-lg lg:text-3xl font-bold text-black dark:text-white text-center">
                        <h2>Write Your Opinion About The Show</h2><br>
                        <p class="text-gray-700 dark:text-gray-100 lg:text-xl text-xs font-normal text-center">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
                            Sequi numquam beatae vel praesentium atque culpa ab earum

                    </div>
                </div>
                <form action="{{(isset($berita))?route('berita.update', $berita->id) :route('berita.store')}}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @if (isset($berita))
                    @method('PUT')

                    @endif
                    <div class="w-full lg:w-2/3 lg:mx-auto">

                        <div class="w-full px-4 mb-4">
                            <label for="name"
                                class="text-base font-bolf text-black dark:text-white dark:hover:text-primary hover:text-primary">Your
                                Name
                            </label>
                            <input type="text" name="title" class="w-full bg-gray-100 text-black
                                p-3 rounded-md focus:outline-none focus:ring-3 focus:border-primary"
                                placeholder="Gopala Pandurangga">
                        </div>

                        <div class="w-full px-4 mb-4">
                            <label for="testi"
                                class="text-base font-bolf text-black dark:text-white dark:hover:text-primary hover:text-primary ">Your
                                Testimonial
                            </label>
                            <textarea type="text" name="testimonial"
                                class="w-full bg-gray-100 text-black
                                    p-3 rounded-md focus:outline-none focus:ring-3 focus:border-primary h-32"></textarea>
                        </div>

                        <div class="w-full px-4 mb-4">
                            <label for="message"
                                class="text-base font-bolf text-black dark:text-white dark:hover:text-primary hover:text-primary">Impression
                                Message
                            </label>
                            <textarea type="text" name="messages"
                                class="w-full bg-gray-100 text-black
                                        p-3 rounded-md focus:outline-none focus:ring-3 focus:border-primary h-32"></textarea>
                        </div>
                        <div class="w-full px-4 mb-4">
                            <label for="name"
                                class="text-base font-bolf text-black dark:text-white dark:hover:text-primary hover:text-primary">Rate
                            </label>
                            <input type="text" name="rate" class="w-full bg-gray-100 text-black
                                p-3 rounded-md focus:outline-none focus:ring-3 focus:border-primary"
                                placeholder="9/10">
                        </div>
                        <div class="g-recaptcha px-4" data-sitekey="6LfhNqkjAAAAABsBsprA9qtu598vmFA1bNqCGgxJ"></div>
                        <br>


                        <div class="w-full px-4">
                            <button type="submit"
                                class="text-base font-semibold text-white bg-black py-3
                                        px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-300">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Comment Session End -->

        <!-- Back To Start -->
        <a href="#home"
            class="fixed hidden justify-center items-center z-[9999] bottom-4 right-4 rounded-full h-14 w-14 bg-primary p-4 hover:animate-pulse transition duration-300 ease-in-out"
            id="to-top">
            <span class="block w-5 h-5 border-t-2 border-l-2 rotate-45 mt-2"></span>
        </a>

        <!-- Back To Start end -->



    </body>
</x-template-layout>
