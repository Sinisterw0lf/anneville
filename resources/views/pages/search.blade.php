<x-layouts.main-layout title="Résultats de recherche">
  @php
    $index = 1;
  @endphp
  <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <!-- head -->
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th></th>
          <th scope="col" class="py-3 px-6">Titre</th>
          <th scope="col" class="py-3 px-6">Type</th>
        </tr>
      </thead>
      <tbody>
        <!-- row 1 -->
        @forelse ($articles as $article)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class=" py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              {{ $index++ }}</th>
            <td class="py-4 px-6">{{ $article->title }}</td>
            <td class="py-4 px-6">{{ $article->type }}</td>
          </tr>
        @empty
          <tr>
            <td>Pas d'articles trouvé !</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</x-layouts.main-layout>
