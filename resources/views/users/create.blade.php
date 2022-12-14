<x-layouts.main-layout title="Création de compte utilisateur">
  <div class="container p-10">
    <h1 class="font-bold text-3xl">Créer un utilisateur :</h1>
    <form action="{{ route('users.store') }}" method="post">
      @csrf
      <div class="container">
        {{-- name --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Nom :</label>
        <input type="text"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          name="name" placeholder="Nom du nouvel utilisateur :" value="{{ old('name') }}">
        <x-error-msg name="name" />
        {{-- email --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Email :</label>
        <input type="email"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          name="email" placeholder="Entrer l'adresse email :" value="{{ old('email') }}">
        <x-error-msg name="email" />
        {{-- password --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Mot de passe (8 charactères
          minimum):</label>
        <input type="password"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="Entrez votre mot de passe :" name="password" minlength="8" required>
        <div class="my-2">
          <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Envoyer</button>
        </div>

      </div>


    </form>
  </div>
</x-layouts.main-layout>
