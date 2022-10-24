<div class="container bg-[#D8BA8E] m-4 p-4 m-auto rounded " >
  <form action="{{ route('home-testimonial.destroy', $reviews->all()) }}" method='post'>
    @csrf
    @method('DELETE')
    <div class="mb-6">      
      <label for="slider" class="block mb-2 text-sm font-medium text-white dark:text-white ">Select Testimonial</label>
        <select name="title" id="slider" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          @foreach ($reviews as $review)
            <option value="{{$review->id}}">{{$review->name}}</option>
          @endforeach
        </select>
    </div>
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto  dark:border-gray-500 m-2 px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800">Delete</button>
  </form>
</div>
  