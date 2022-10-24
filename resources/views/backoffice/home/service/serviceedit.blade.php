<div class="container bg-[#D8BA8E] mt-4 p-4 m-auto rounded">
<form enctype="multipart/form-data" method="post" action="{{ route('home-service.update', $services->all()) }}">
  @method('PATCH') 
  @csrf
    <div class="mb-6">
      <label for="text" class="block mb-2 text-sm font-medium text-white dark:text-white">Title</label>
      <input type="text" id="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
    </div>
    <div class="mb-6">
      <label for="text" class="block mb-2 text-sm font-medium text-white dark:text-white">Description</label>
      <input type="text" id="text" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-20" required="">
    </div>
    <div class="mb-6">
        <label class=" block mb-2 text-sm font-medium text-white dark:text-white" for="user_avatar">Upload Image</label>
        <input name="image" class=" block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
        <div class=" mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
      </div>
      <div class="mb-6">      
        <label for="image" class="block mb-2 text-sm font-medium text-white dark:text-white ">Select Icon</label>
         <div class="flex flex-wrap justify-center p-5">
          @foreach ($icons as $icon)
          <label class="flex-col flex items-center gap-2 m-2" for="">
                <span class="{{$icon->name}}" style="color: black; font-size: 30px;"></span>
                <input value="{{$icon->name}}" name="icon" type="radio">
          </label>
          @endforeach
        </div>
      </div>
      <div class="flex justify-center">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto  dark:border-gray-500 m-2 px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800">Save</button>
    </div>
  </form>
  <form action="{{ route('home-service.destroy', $services->all()) }}" method='post'>
      @csrf
      @method('DELETE')
      <div class="mb-6">      
        <label for="slider" class="block mb-2 text-sm font-medium text-white dark:text-white ">Select Service</label>
          <select name="title" id="slider" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach ($services as $service))
              <option value="{{$service->id}}">{{ $service->title}}</option>
            @endforeach
          </select>
      </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto  dark:border-gray-500 m-2 px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800">Delete</button>
    </form>
    
</div>
  