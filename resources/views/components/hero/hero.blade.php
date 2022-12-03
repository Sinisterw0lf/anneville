<div id="default-carousel" class="relative px-20 pt-5 pb-10 mobile:px-5" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative h-[40rem] overflow-hidden rounded-lg tablet:h-96 mobile:h-96">
    <!-- Item 1 -->
    <div class="hidden duration-1000  ease-in-out" data-carousel-item>
      <span
        class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 mobile:text-3xl dark:text-gray-800">First
        Slide</span>
      <img src="{{ asset('images/1.jpg') }}"
        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        <div class="absolute bottom-0 w-full px-5 py-10 text-xl bg-black/40 text-center text-white">Les dernières actualités : <a class="underline underline-offset-2" href="/actualités">Les articles</a></div>
    </div>
    <!-- Item 2 -->
    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
      <img src="{{ asset('images/2.jpg') }}"
        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      <div class="absolute bottom-0 w-full px-5 py-10 bg-black/40 text-center text-xl text-white">Les dernièrs évenements de la commune : <a class="underline underline-offset-2" href="/agenda">Les articles</a></div>
    </div>
    <!-- Item 3 -->
    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
      <img src="{{ asset('images/3.jpg') }}"
        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      <div class="absolute bottom-0 w-full px-5 py-10 text-xl bg-black/40 text-center text-white">Vos démarches et les dernières informations de santé : <a class="underline underline-offset-2" href="/cadredevie">Les articles</a></div>
    </div>
    <!-- Item 4 -->
    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
      <img src="{{ asset('images/4.jpg') }}"
        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      <div class="absolute bottom-0 w-full px-5 py-10 text-xl bg-black/40 text-center text-white">Les dernières actualités de la mairie et de l'équipe municipale : <a class="underline underline-offset-2" href="/mairie">Les articles</a></div>
    </div>
    <!-- Item 5 -->
    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
      <img src="{{ asset('images/5.jpg') }}"
        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      <div class="absolute bottom-0 w-full px-5 py-10 text-xl bg-black/40 text-center text-white">Les dernières actualités de l'administration : <a href="/liens" class="underline underline-offset-2">Les articles</a></div>
    </div>
  </div>
  <!-- Slider indicators -->
  <div class=" absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 mobile:hidden">
    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
      data-carousel-slide-to="0"></button>
    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
      data-carousel-slide-to="1"></button>
    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
      data-carousel-slide-to="2"></button>
    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
      data-carousel-slide-to="3"></button>
    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
      data-carousel-slide-to="4"></button>
  </div>
  <!-- Slider controls -->
  <button type="button"
    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-20 mobile:px-5 cursor-pointer group focus:outline-none"
    data-carousel-prev>
    <span
      class="inline-flex items-center justify-center w-8 h-8 rounded-full mobile:w-10 mobile:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
      <svg aria-hidden="true" class="w-5 h-5 text-white mobile:w-6 mobile:h-6 dark:text-gray-800" fill="none"
        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
      </svg>
      <span class="sr-only">Previous</span>
    </span>
  </button>
  <button type="button"
    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-20 mobile:px-5 cursor-pointer group focus:outline-none"
    data-carousel-next>
    <span
      class="inline-flex items-center justify-center w-8 h-8 rounded-full mobile:w-10 mobile:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
      <svg aria-hidden="true" class="w-5 h-5 text-white mobile:w-6 mobile:h-6 dark:text-gray-800" fill="none"
        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
      </svg>
      <span class="sr-only">Next</span>
    </span>
  </button>
</div>
