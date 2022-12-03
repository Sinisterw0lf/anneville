<x-layouts.main-layout :title="$article->title">
  <div class="container">
    <div class="">
      <div class="py-10 space-y-10 ">
        <p class="font-bold text-center p-2 text-xl">{{ $article->title }}</p>
        <p class="text-center">{!! nl2br(e($article->description)) !!}</p>
      </div>
      <div class="flex justify-center py-10">
        <img class="w-1/2 " src="{{ asset('storage/' . $article->url_img) }}" alt="{{ $article->title }}">
      </div>
      <div class="py-10">
        <p class="text-center">{{ $article->description2 }}</p>
      </div>
    </div>
  </div>

</x-layouts.main-layout>
