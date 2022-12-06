<x-layouts.main-layout title="Actualités">
  <div class="container py-20 grid mobile:grid-cols-1 tablet:grid-cols-2 grid-cols-3" id="">
    @forelse ($actualites as $actualite)
      <a href="articles/{{ $actualite->id }}">
        <x-cards.card-article :type="$actualite->type" :url_img="$actualite->url_img" :title="$actualite->title" :description="$actualite->description" />
      </a>
    @empty
      <p>Pas d'article disponible</p>
    @endforelse
    <div class="my-12 col-start-2">
      {{ $actualites->links('pagination::tailwind') }}
    </div>
  </div>
</x-layouts.main-layout>
