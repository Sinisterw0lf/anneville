<x-layouts.main-layout title="Modification article">
  <div class="container p-10">
    <h1 class="font-bold text-3xl ">Modifier article :</h1>
    <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="container">
        {{-- name --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Nom :</label>
        <input type="text"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          name="name" placeholder="Nom du nouvel utilisateur :" value="{{ old('name', $user->name) }}">
        <x-error-msg name="name" />
        {{-- email --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Email :</label>
        <input type="email"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          name="email" placeholder="Entrer l'adresse email :" value="{{ old('email', $user->email) }}">
        <x-error-msg name="email" />
        {{-- password --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Mot de passe (8 charactères
          minimum):</label>
        <input type="password"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="Entrez votre nouveau mot de passe :" name="password" minlength="8" required>
        {{-- type --}}
        <div class="py-3">
          <label for="is_admin" class="block mb-2 text-sm font-medium text-gray-900">Sélectionne le type
            d'article
          </label>
          <select name="is_admin"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
              <option disabled>Choisir un type d'utilisateur</option>
              <option {{ $user->is_admin == 'redacteur' ? 'selected' :'' }} value="redacteur">Redacteur</option>
              <option {{ $user->is_admin == 'admin' ? 'selected' :'' }} value="admin">Admin</option>
              <option {{ $user->is_admin == 'superadmin' ? 'selected' :'' }} value="superadmin">Super-Admin</option>
          </select>
          <x-error-msg name="is_admin" />
        </div>
        <div class="flex justify-center py-5 space-y-3">
          <button type="submit" class="rounded-md bg-[#416BE5] shadow-sm shadow-black p-3">Envoyer</button>
        </div>
      </div>

    </form>
  </div>
</x-layouts.main-layout>
