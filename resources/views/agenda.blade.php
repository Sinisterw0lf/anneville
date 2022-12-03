<x-layouts.main-layout title="Agenda">
 <div class="container py-20 grid mobile:grid-cols-1 tablet:grid-cols-2 grid-cols-3 gap-5" id="">
      @forelse ($agendas as $agenda)
        <a href="articles/{{ $agenda->id }}">
          <x-cards.card-article :type="$agenda->type" :url_img="$agenda->url_img" :title="$agenda->title" :description="$agenda->description" />
        </a>
      @empty
        <p>Pas d'article disponible</p>
      @endforelse
      <div class="my-12 col-start-2 ">
        {{ $agendas->links('pagination::tailwind') }}
      </div>
    </div>
</x-layouts.main-layout>