<x-layouts.main-layout title="Cadre de vie et démarches">
  <div class="container py-20 grid mobile:grid-cols-1 tablet:grid-cols-2 grid-cols-3 gap-5" id="">
    @forelse ($cadredevies as $cadredevie)
      <a href="articles/{{ $cadredevie->id }}">
        <x-cards.card-article :type="$cadredevie->type" :url_img="$cadredevie->url_img" :title="$cadredevie->title" :description="$cadredevie->description" />
      </a>
    @empty
      <p>Pas d'article disponible</p>
    @endforelse
    <div class="my-12 col-start-2 ">
      {{ $cadredevies->links('pagination::tailwind') }}
    </div>
  </div>
</x-layouts.main-layout>
