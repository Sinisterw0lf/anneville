<x-layouts.main-layout title="Contact">
  <div class="container">
    <form method="GET" action="mailto:bellec.cyril@laposte.net" enctype="multipart/form-data">
      @csrf
      <div>
        {{-- email --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Email :</label>
        <input type="email"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          name="email" placeholder="Entrer l'adresse email :" value="{{ old('email') }}">
        <x-error-msg name="email" />
        {{-- subject --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Sujet :</label>
        <input type="text"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          name="name" placeholder="Nom du sujet :" value="{{ old('subject') }}">
        <x-error-msg name="subject" />
        {{-- message --}}
        <label class="block my-2 text-sm font-medium text-gray-900" for="">Message :</label>
        <textarea name="message"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="Votre message..." cols="30" rows="10">{{ old('message') }}</textarea>
        <x-error-msg name="message" />
        <div class="py-3">
          <button class="bg-blue-500 rounded-md p-2 text-xl shadow-sm shadow-black font-bold" type="submit">Envoyez</button>
          <button class="bg-yellow-500 rounded-md p-2 text-xl shadow-sm shadow-black font-bold" type="reset">Réinitialiser</button>
        </div>
      </div>
    </form>
  </div>
</x-layouts.main-layout>
