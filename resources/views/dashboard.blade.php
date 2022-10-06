@php
    $styleLink="font-bold hover:text-red-700 hover:underline underline-offset-4 block pb-5 text-blue-700"
@endphp
<x-layouts.main-layout title="Dashbord">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <h1 class="uppercase text-xl text-red-700 font-black">
            Bienvenue {{ Auth::user()->name }} sur ton Dashbord
        </h1>
        <div class="py-12">
            <a href="{{ route('posts.create') }}" class="{{ $styleLink }}">New post</a>
            <a href="{{ route('posts.all') }}" class="{{ $styleLink }}">La liste des posts</a>
            <a href="{{ route('users.all') }}" class="{{ $styleLink }}">La liste des users</a>
            <a href="" class="{{ $styleLink }}">Gérer les catégories</a>
        </div>
    </div>
</x-layouts.main-layout>
