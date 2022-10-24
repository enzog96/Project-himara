<div class="container bg-[#D8BA8E] mt-4 p-4 m-auto rounded" >
    <form method="post" action="{{ route('home-back.update', $contact->id) }}">
      @method('PATCH') 
      @csrf
        <div class="mb-6">
          <label for="text" class="block mb-2 text-sm font-medium text-white dark:text-white">Location</label>
          <input type="text" name="location" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
        </div>   
        <div class="mb-6">
          <label for="text" class="block mb-2 text-sm font-medium text-white dark:text-white">Phone</label>
          <input type="text" name="phone" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
        </div>   
        <div class="mb-6">
          <label for="text" class="block mb-2 text-sm font-medium text-white dark:text-white">Fax</label>
          <input type="text" name="fax" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
        </div>   
        <div class="mb-6">
          <label for="text" class="block mb-2 text-sm font-medium text-white dark:text-white">Website</label>
          <input type="text" name="website" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
        </div>   
        <div class="mb-6">
          <label for="text" class="block mb-2 text-sm font-medium text-white dark:text-white">Email</label>
          <input type="text" name="email" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
        </div>   
        <div class="flex justify-center">
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto  dark:border-gray-500 m-2 px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800">Update</button>
        </div>
    </form>
</div>
