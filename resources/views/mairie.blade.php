<x-layouts.main-layout title="Mairie d'Anneville Ambourville et de Ambourville">
  <div class="container py-20 grid mobile:grid-cols-1 tablet:grid-cols-2 grid-cols-3 gap-5" id="">
    @forelse ($mairies as $mairie)
      <a href="articles/{{ $mairie->id }}">
        <x-cards.card-article :type="$mairie->type" :url_img="$mairie->url_img" :title="$mairie->title" :description="$mairie->description" />
      </a>
    @empty
      <p>Pas d'article disponible</p>
    @endforelse
    <div class="my-12 col-start-2 ">
      {{ $mairies->links('pagination::tailwind') }}
    </div>
  </div>
</x-layouts.main-layout>
