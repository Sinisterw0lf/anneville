<x-layouts.main-layout title="Modification article">
  <div class="container p-10">
    <h1 class="font-bold text-3xl ">Modifier article :</h1>
    <form method="POST" action="{{ route('articles.update', $article->id) }}"  enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="py-5 px-10">
        <h1 class="text-center text-2xl font-bold">Modification d'article</h1>
        {{-- title --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Titre :</label>
        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="title" placeholder="Titre du post"
          value="{{ old('title', $article->title) }}">
        <x-error-msg name="title" />
        {{-- description --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Description :</label>
        <textarea name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Votre description..."
          cols="30" rows="10">{{ old('description', $article->description) }}</textarea>
        <x-error-msg name="description" />
        {{-- description2 --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Description :</label>
        <textarea name="description2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Votre description..."
          cols="30" rows="10">{{ old('description2', $article->description2) }}</textarea>
        <x-error-msg name="description2" />
        {{-- type --}}
        <div class="py-3">
          <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sélectionne le type
            d'article
          </label>
          <select name="type"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
            <option disabled selected>Choisir un type d'article</option>
            <option value="Actualités" {{ old('type', $article->type) == "Actualités" ? 'selected' : '' }}>Actualités</option>
            <option value="Agenda" {{ old('type', $article->type ) == "Agenda" ? 'selected' : '' }}>Agenda</option>
            <option value="Cadre" {{ old('type', $article->type) == "Cadre" ? 'selected' : '' }}>Cadre de vie et démarches</option>
            <option value="Mairie" {{ old('type', $article->type) == "Mairie" ? 'selected' : '' }}>La mairie</option>
            <option value="Liens" {{ old('type', $article->type) == "Liens" ? 'selected' : '' }}>Liens</option>
          </select>
          <x-error-msg name="type" />
        </div>
        {{-- is_published --}}
        <div>
          <label  for="">Publier l'article :  </label>
          <input @checked(old('is_published', $article->is_published)) name="is_published" type="checkbox" value='is_published'>
        </div>
        {{-- url_img --}}
        <div class="flex flex-col py-5 space-y-3">
          <label class="block my-2 text-sm font-medium text-gray-900" for="">Choisir une image :</label>
          <input {{ old('url_img', $article->url_img) }} type="file" name="url_img" id="">
          <x-error-msg name="url_img" />
        </div>
        <div class="flex justify-center py-5 space-y-3">
          <button type="submit" class="rounded-md bg-[#416BE5] shadow-sm shadow-black p-3">Envoyer</button>
        </div>
        
      </div>
    </form>
  </div>
</x-layouts.main-layout>
