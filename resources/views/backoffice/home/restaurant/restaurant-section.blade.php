<section class="m-0 p-0 my-9 w-11/12 shadow-2xl m-auto">
   
    <div class="bg-[#D8BA8E] rounded my-5 w-72 h-14 flex justify-center items-center m-auto">
        <h1 class="text-white text-center">Edit Restaurant</h1>
    </div>

    <div class="md:flex sm:flex-wrap p-5">
        <div class="container md:w-9/12 sm:w-11/12">
            @include('backoffice.home.restaurant.restaurant')
        </div>
        
        <div class="container md:w-3/12 sm:w-11/12 m-auto">
            @include('backoffice.home.restaurant.restaurantedit')
        </div>
    </div>
          
</section>
