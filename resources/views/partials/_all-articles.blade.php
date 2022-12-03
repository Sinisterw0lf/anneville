<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th @disabled(true) scope="col" class="py-3 px-6">
          Numero
        </th>
        <th scope="col" class="py-3 px-6">
          Title
        </th>
        <th scope="col" class="py-3 px-6">
          Type
        </th>
        <th scope="col" class="py-3 px-6">
          Date
        </th>
        <th scope="col" class="py-3 px-6">
          Publier
        </th>
        <th scope="col" class="py-3 px-6">
          Modifier
        </th>
        <th scope="col" class="py-3 px-6">
          Supprimer
        </th>
      </tr>
    </thead>
    <tbody>
      @forelse($articles as $article)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          <th scope="row" class=" py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{ $article->id }}
          </th>
          <td class="py-4 px-6">
            {{ $article->title }}
          </td>
          <td class="py-4 px-6">
            {{ $article->type }}
          </td>
          <td class="py-4 px-6">
            {{ $article->created_at->format('d/m/Y') }}
          </td>
          @if ($article->is_published == 0)
            <td class="py-4 px-6">Non</td>
          @else
            <td class="py-4 px-6">Oui</td>
          @endif
          <td class="py-4 px-6">
            <a class="rounded-md p-2 text-xl shadow-sm shadow-black font-bold"
              href={{ route('articles.edit', $article->id) }}>Modifier</a>
          </td>
          <td class="py-4 px-6 text-right">
            <x-btn-delete :post="$article" />
          </td>
        </tr>
      @empty
        <tr>Pas de post actuellement</tr>
      @endforelse
    </tbody>
  </table>
</div>
