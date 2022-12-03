@php
  $styleLink = 'font-bold hover:underline hover:underline-offset-4';
@endphp
<x-layouts.main-layout title="Dashboard">
  {{-- <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
    <x-btn-logout />
  </x-slot> --}}

  <div class="container p-12">
    <h1 class="text-center py-5 text-3xl font-black underline underline-offset-4">Bienvenue <span
        class="text-blue-600">{{ Auth::user()->name }}</span> sur ton Dashboard</h1>
    <div class="grid justify-center">
      @auth
        @if (Auth::user()->is_admin === "superadmin")
          <a class="{{ $styleLink }}" href="{{ route('articles.create') }}">Nouvel article</a>
          <a class="{{ $styleLink }}" href="{{ route('articles.all') }}">La liste des articles</a>
          <a class="{{ $styleLink }}" href="{{ route('users.all') }}">La liste des utilisateurs</a>
        @elseif(Auth::user()->is_admin === "admin")
          <a class="{{ $styleLink }}" href="{{ route('articles.create') }}">Nouvel article</a>
          <a class="{{ $styleLink }}" href="{{ route('articles.all') }}">La liste des articles</a>
        @else
        <a class="{{ $styleLink }}" href="{{ route('articles.create') }}">Nouvel article</a>
        @endif
      @endauth
    </div>



  </div>
</x-layouts.main-layout>
