<x-layouts.main-layout title="Accueil">
    <p class="text-5xl text-center font-bold text-red-500 pb-10">Hello world</p>
    @foreach ($posts as $post)
    <div class="pb-10">
        <p class="text-2xl font-bold pb-3">{{ $post->title }}</p>
        <p>{{ $post->content }}</p>
    </div>
    @endforeach
</x-layouts.main-layout>