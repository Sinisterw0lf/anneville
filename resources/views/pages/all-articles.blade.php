<x-layouts.main-layout title="Tous les articles">
  <div class="container py-5">
    <h1 class="pb-5 text-2xl font-black">Tous mes articles</h1>
    @include('partials._all-articles')
    <div class="my-12 flex justify-center">
      {{ $articles->links('pagination::tailwind') }}
    </div>
  </div>


</x-layouts.main-layout>