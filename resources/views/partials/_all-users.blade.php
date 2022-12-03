@php
  $index = 1;
@endphp
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <!-- head -->
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th></th>
        <th scope="col" class="py-3 px-6">Nom</th>
        <th scope="col" class="py-3 px-6">Email</th>
        <th scope="col" class="py-3 px-6">Roles</th>
        <th scope="col" class="py-3 px-6">Date inscription</th>
        <th scope="col" class="py-3 px-6">
          Modifier
        </th>
        <th scope="col" class="py-3 px-6">
          Supprimer
        </th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      @forelse ($users as $user)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          <th scope="row" class=" py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{ $index++ }}</th>
          <td class="py-4 px-6">{{ $user->name }}</td>
          <td class="py-4 px-6">{{ $user->email }}</td>
          <td class="py-4 px-6">{{ $user->is_admin }}</td>
          <td class="py-4 px-6">{{ $user->created_at->format('d/m/Y') }}</td>
          <td class="py-4 px-6">
            <a class="rounded-md p-2 text-xl shadow-sm shadow-black font-bold"
              href={{ route('users.edit', $user->id) }}>Modifier</a>
          </td>
          <td class="py-4 px-6 text-right">
            <x-btn-userdelete :post="$user" />
          </td>
        </tr>
      @empty
        <tr>
          <td>Pas de user actuellement !</td>
        </tr>
      @endforelse

    </tbody>
  </table>
</div>
<div class="py-5">
  <a class="rounded-md p-2 text-xl shadow-sm shadow-black font-bold" href={{ route('users.create') }}>Nouvel
    utilisateur</a>
</div>
