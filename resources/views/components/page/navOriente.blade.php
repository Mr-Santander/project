<nav class="bg-transparent px-2  border-gray-200 fixed top-0 z-10 w-full" x-data="{
  open:false,
}">

  <div class="menu mx-auto flex">
    <a href="/" class="flex ">
      <img src="{{asset('img/oriente-noticias.png')}}" class="mt-3 ml-8 lg:h-12 h-12 md:h-12 sm:h-12" alt="Logo">
    </a>
    <button @click=" open = !open" type="button" class=" inline-flex justify-center items-center text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500">
      <span class="sr-only"></span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    

    <div :class="{
      'hidden': !open,
    }"class="w-full md:block md:w-auto flex-1" id="mobile-menu">

      <ul class="flex items-center p-4">
        @foreach ($items as $item)
          <li @class([
              'ml-auto mr-5' => $loop->iteration == 8,
              'mr-5' => $loop->iteration <= 6,
              'bg-green-700 hover:bg-green-500 text-white font-bold py-2 px-4 rounded' => $loop->iteration == 9
            ])>
            <x-page.actnav :href="$item->link()" :active="request()->routeIs($item->route)">
                {{$item->title}}
            </x-page.actnav>
          </li>
        @endforeach
      </ul>

      
    </div>
    

   
  </div>

  </nav>
  