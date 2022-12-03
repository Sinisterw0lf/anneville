<x-layouts.main-layout title="Liens">
<div class="container py-20 grid mobile:grid-cols-1 tablet:grid-cols-2 grid-cols-3 gap-5" id="">
    @forelse ($liens as $liens)
      <a href="articles/{{ $liens->id }}">
        <x-cards.card-article :type="$liens->type" :url_img="$liens->url_img" :title="$liens->title" :description="$liens->description" />
      </a>
    @empty
      <p>Pas d'article disponible</p>
    @endforelse
    <div class="my-12 col-start-2 ">
      {{ $liens->links('pagination::tailwind') }}
    </div>
  </div>
</x-layouts.main-layout>