<div class="container bg-[#D8BA8E] mt-4 p-4 m-auto rounded" >
  <form  enctype="multipart/form-data" method="post" action="{{ route('home-restaurantbg.update', $restaurantbgs->all()) }}">
    @method('PATCH') 
    @csrf
    <div class=" mb-6">
      <label class=" block mb-2 text-sm font-medium text-white dark:text-white" for="user_avatar">Upload Background Image</label>
      <input name="bg" class=" block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
      <div class=" mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
  </div>
  <div class="flex justify-center">
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto  dark:border-gray-500 m-2 px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800">Save</button>
  </div>
  </form>
  <form enctype="multipart/form-data" method="post" action="{{ route('home-restaurant.update', $restaurants->all()) }}">
    @method('PATCH') 
    @csrf
    <div class=" mb-6">
        <label class=" block mb-2 text-sm font-medium text-white dark:text-white" for="user_avatar">Upload Image</label>
        <input name="image" class=" block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
        <div class=" mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
    </div>
      <div class="mb-6">
        <label for="text" class="block mb-2 text-sm font-medium text-white dark:text-white">Title</label>
        <input name="title" type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
      </div>   
      <div class="mb-6">
        <label for="text" class="block mb-2 text-sm font-medium text-white dark:text-white">Price</label>
        <input name="price" type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
      </div>   
      <div class="mb-6">
        <label for="text" class="block mb-2 text-sm font-medium text-white dark:text-white">Description</label>
        <input name="description" type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-20" required="">
      </div>
      <div class="flex justify-center">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto  dark:border-gray-500 m-2 px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800">Save</button>
      </div>
    </form>
    <form action="{{ route('home-restaurant.destroy', $restaurants->all()) }}" method='post'>
      @csrf
      @method('DELETE')
      <div class="mb-6">      
        <label for="slider" class="block mb-2 text-sm font-medium text-white dark:text-white ">Select Food</label>
          <select name="title" id="slider" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach ($restaurants as $restaurant)
              <option value="{{$restaurant->id}}">{{$restaurant->title}}</option>
            @endforeach
          </select>
      </div>
      <div class="flex justify-center">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto  dark:border-gray-500 m-2 px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800">Delete</button>
      </div>
    </form>
  </div>
    