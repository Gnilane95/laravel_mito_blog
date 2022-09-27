<x-layouts.main-layout title="Accueil">
    <div class="">
        <p class="text-5xl text-center font-bold text-red-500 pb-10">Hello world</p>
        <div class="grid grid-cols-4 gap-3">
            @foreach($posts as $post)
                <x-cards.post-card :url_img="$post->url_img" :title="$post->title" :content="$post->content" />
            @endforeach
        </div>
    </div>
</x-layouts.main-layout>

