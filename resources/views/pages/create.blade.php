<x-layouts.main-layout title="Créer article">
  <div>
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="container">
        <h1 class="text-center text-2xl font-bold">Création d'articles</h1>
        {{-- title --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Titre :</label>
        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="title" placeholder="Titre du post"
          value="{{ old('title') }}">
        <x-error-msg name="title" />
        {{-- description --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Description :</label>
        <textarea name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Votre description..."
          cols="30" rows="10">{{ old('description') }}</textarea>
        <x-error-msg name="description" />
        {{-- url_img --}}
        <div class="flex flex-col py-5 space-y-3">
          <label for="">Image :</label>
          <input type="file" name="url_img" id="">
          <x-error-msg name="url_img" />
        </div>
        {{-- description2 --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Description :</label>
        <textarea name="description2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Votre description..."
          cols="30" rows="10">{{ old('description2') }}</textarea>
        <x-error-msg name="description2" />
        {{-- type --}}
        <div class="py-3">
          <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Sélectionne le type
            d'article
          </label>
          <select name="type"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
            <option disabled selected>Choisir un type d'article</option>
            <option value="Actualités">Actualités</option>
            <option value="Agenda">Agenda</option>
            <option value="Cadre">Cadre de vie et démarches</option>
            <option value="Mairie">La mairie</option>
            <option value="Liens">Liens</option>
          </select>
          <x-error-msg name="type" />
        </div>

        <button type="submit"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Envoyer</button>
      </div>
    </form>
  </div>
</x-layouts.main-layout>
