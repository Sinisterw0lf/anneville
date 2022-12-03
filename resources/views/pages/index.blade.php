<x-layouts.main-layout title="Accueil">
  <x-hero.hero />
  <div class="px-20 py-10 mobile:px-5 mobile:py-4">
    <div class="bg-[#416BE5] w-full font-bold text-center p-3 rounded">
      <h2>Actualités</h2>
    </div>
    <div class=" py-20 grid mobile:grid-cols-1 tablet:grid-cols-2 grid-cols-3 gap-5" id="">
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
    <div class="py-20">
      <a href="/actualités">Autres actualités -></a>
    </div>
  </div>
  <div class="px-20 py-10 mobile:px-5 mobile:py-4">
    <div class="bg-[#416BE5] w-full font-bold text-center p-3 rounded">
      <h2>Agenda</h2>
    </div>
    <div class=" py-20 grid mobile:grid-cols-1 tablet:grid-cols-2 grid-cols-3 gap-5" id="">
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
    <div class="py-20">
      <a href="/agenda">Autres evenements -></a>
    </div>
  </div>
  <div class="container ">
    <iframe 
      src="https://www.openstreetmap.org/export/embed.html?bbox=0.883852243423462%2C49.4615260280538%2C0.8865344524383546%2C49.462805611589495&amp;layer=mapnik&amp;marker=49.462165823998475%2C0.8851933479309082"
       class="scroll-m-0 mh-100 mw-100 container block justify-center desktop:w-[2000px] desktop:h-[450px] laptop:w-[900px] laptop:h-[400px] tablet:w-[600px] tablet:h-[400px] mobile:w-[300px] mobile:h-[300px]"></iframe><br /><small><a
        href="https://www.openstreetmap.org/?mlat=49.46217&amp;mlon=0.88519#map=19/49.46217/0.88519" class="container text-center">Afficher une carte
        plus grande</a></small>
  </div>

</x-layouts.main-layout>
