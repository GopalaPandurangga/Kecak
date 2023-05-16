<x-admin-layout>
    
        <h2 class="mx-20 mt-10 font-semibold text-xl text-gray-800 leading-tight">
            Input Testimonial
        </h2>
  

        <section id="Comment" class=" bg-white rounded-2xl shadow-2xl mt-10 mx-10 lg:mx-20">
            <div class="container">
                <div class="w-full mt-10 mpx-4">
                    <div class="secondaryTitle text-lg lg:text-3xl py-20 font-bold text-black text-center">
                        <h2>Write Visitors Testimonial</h2><br>
                        <p class="text-gray-700 lg:text-xl text-xs font-normal text-center">
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
                            <label for="name" class="text-base font-bolf text-black hover:text-primary">Visitors Name
                            </label>
                            <input type="text" name="title" class="w-full bg-gray-100 text-black
                                p-3 rounded-md focus:outline-none focus:ring-3 focus:border-primary"
                                placeholder="Gopala Pandurangga">
                        </div>

                        <div class="w-full px-4 mb-4">
                            <label for="testi" class="text-base font-bolf text-black hover:text-primary ">The
                                Testimonial
                            </label>
                            <textarea type="text" name="testimonial"
                                class="w-full bg-gray-100 text-black
                                    p-3 rounded-md focus:outline-none focus:ring-3 focus:border-primary h-32"></textarea>
                        </div>

                        <div class="w-full px-4 mb-4">
                            <label for="message" class="text-base font-bolf text-black hover:text-primary">Impression
                                Message
                            </label>
                            <textarea type="text" name="messages"
                                class="w-full bg-gray-100 text-black
                                        p-3 rounded-md focus:outline-none focus:ring-3 focus:border-primary h-32"></textarea>
                        </div>
                        <div class="w-full px-4 mb-4">
                            <label for="name" class="text-base font-bolf text-black hover:text-primary">Rate
                            </label>
                            <input type="text" name="rate" class="w-full bg-gray-100 text-black
                                p-3 rounded-md focus:outline-none focus:ring-3 focus:border-primary"
                                placeholder="9/10">
                        </div>
                        <div class="w-full px-4 pb-10">
                            <button type="submit" class="text-base font-semibold text-white bg-black py-3
                                        px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-300">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
</x-admin-layout>
