<x-layouts.main-layout title="Accueil">
    <p class="text-5xl text-center font-bold text-red-500 pb-10">Hello world</p>
    @foreach ($posts as $post)
        <p class="text-2xl font-bold">{{ $post->name }}</li>
        <p>{{ $post->description }}</li>
    @endforeach
</x-layouts.main-layout>