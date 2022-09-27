<x-layouts.main-layout title="Accueil">
    <div class="">
        <p class="text-5xl text-center font-black text-red-500 pb-10">Blog Mito Laravel</p>
        <div class="grid grid-cols-4 gap-5">
            @foreach($posts as $post)
            <a href="posts/{{ $post->id }}">
                <x-cards.post-card :url_img="$post->url_img" :title="$post->title" :content="$post->content" />
            </a>
            @endforeach
        </div>
    </div>
</x-layouts.main-layout>

