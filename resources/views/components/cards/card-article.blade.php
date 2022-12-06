@props(['type', 'url_img', 'title', 'description'])

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
  <div class=" bg-gray-100 rounded-b">
    <p class="hidden">{{ $type }}</p>
    <img class="rounded-t-lg h-96 object-scale-down" src="{{ asset('storage/' . $url_img) }}" alt="">
    <div class="p-5">
      <p class="mb-2 text-lg font-bold tracking-tight text-gray-900">{{ $title }}</p>
      <p class="mb-3 font-normal text-gray-700 ">{{ Str::substr($description, 0, 40) }}</p>
    </div>
  </div>
</div>


