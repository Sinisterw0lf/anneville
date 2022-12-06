<nav>
  <div class="px-20 py-5 mobile:px-5 font-semibold">
    <div class="">
      <div class="flex justify-between items-center">
        <img src="{{ asset('images/BlasonAnnevilleAmbourville.png') }}" alt="blason anneville"
          class="desktop:w-1/12 laptop:w-2/12 tablet:w-[18%] mobile:hidden" />
        <div class="text-xl space-y-5 text-center">
          <h1 class="font-bold text-3xl tablet:text-2xl mobile:text-lg">Anneville Ambourville</h1>
          <h2 class="mobile:text-sm">Un village où il fait bon vivre</h2>
        </div>
        <div class="space-x-5 mobile:space-x-0 mobile:pl-6 flex mobile:block">
          @guest
            <a class="mobile:text-sm" href="/login">Connexion</a>
          @endguest
          @auth
            <a href="/dashboard">Dashboard</a>
            <x-btn-logout />
          @endauth
        </div>
      </div>
      {{-- login/dashboard/logout --}}
    </div>
    <div class="py-10 mobile:py-2   ">
      {{-- dropdown --}}
      <button data-collapse-toggle="mobile-menu-2" type="button"
        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg desktop:hidden laptop:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd"></path>
        </svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
      </button>

      <div class="hidden bg-[#D82626] items-center justify-center p-5 rounded desktop:flex desktop:w-auto desktop:order-1 "
        id="mobile-menu-2">
        <ul class="flex flex-col mt-4 font-medium desktop:flex-row desktop:space-x-8 desktop:mt-0">
          <li 
            @if (Request::is('/')) class="text-black"
            @else
            class="text-[#EFEFEF]" @endif>
            <a href="/"
              class="block py-2 pr-4 pl-3  border-b border-gray-100  hover:bg-gray-300 desktop:hover:bg-transparent desktop:border-0 desktop:hover:text-gray-300 desktop:p-0 ">Accueil</a>
          </li>
          <li
            @if (Request::is('/actualités')) class="text-black"
            @else
            class="text-[#EFEFEF]" @endif>
            <a href="/actualités"
              class="block py-2 pr-4 pl-3  border-b border-gray-100  hover:bg-gray-300 desktop:hover:bg-transparent desktop:border-0 desktop:hover:text-gray-300 desktop:p-0 {{ Request::is('/actualités') ? 'text-black' : 'text-[#EFEFEF]' }}">Actualités</a>
          </li>
          <li>
            <a href="/agenda"
              class="block py-2 pr-4 pl-3  border-b border-gray-100  hover:bg-gray-300 desktop:hover:bg-transparent desktop:border-0 desktop:hover:text-gray-300 desktop:p-0 {{ Request::is('/agenda') ? 'text-black' : 'text-[#EFEFEF]' }}"
              aria-current="page">Agenda</a>
          </li>
          <li>
            <a href="/cadredevie"
              class="block py-2 pr-4 pl-3  border-b border-gray-100  hover:bg-gray-300 desktop:hover:bg-transparent desktop:border-0 desktop:hover:text-gray-300 desktop:p-0 {{ Request::is('/cadredevie') ? 'text-black' : 'text-[#EFEFEF]' }}">Cadre
              de vie et démarches</a>
          </li>
          <li>
            <a href="/mairie"
              class="block py-2 pr-4 pl-3  border-b border-gray-100  hover:bg-gray-300 desktop:hover:bg-transparent desktop:border-0 desktop:hover:text-gray-300 desktop:p-0 {{ Request::is('/mairie') ? 'text-black' : 'text-[#EFEFEF]' }}">La
              mairie</a>
          </li>
          <li>
            <a href="/liens"
              class="block py-2 pr-4 pl-3  border-b border-gray-100  hover:bg-gray-300 desktop:hover:bg-transparent desktop:border-0 desktop:hover:text-gray-300 desktop:p-0 {{ Request::is('/liens') ? 'text-black' : 'text-[#EFEFEF]' }}">Liens</a>
          </li>
        </ul>
        <div class="desktop:py-5">
          {{-- <form class="flex items-center">
            <label for="simple-search" class="sr-only">Recherche</label>
            <div class="relative w-full">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd"></path>
                </svg>
              </div>
              <input type="text" id="simple-search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                placeholder="Recherche" required>
            </div>
            <button type="submit"
              class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
              <span class="sr-only">Recherche</span>
            </button>
          </form> --}}
          @include('partials._search')
        </div>
      </div>
    </div>
  </div>
</nav>
