<x-layouts.main-layout title="Accueil">
    <div class="mx-10">
        <p class="text-5xl text-center font-black text-red-500 pb-10">Blog Mito Laravel</p>
        <div class="grid grid-cols-4 gap-5" id="containerGrid">
            @forelse ($posts as $post)
                <a href="posts/{{ $post->id }}">
                    <x-cards.post-card :url_img="$post->url_img" :title="$post->title" :content="$post->content" :created_at="$post->created_at->format('d/m/Y')"/>
                </a>
            @empty
                <p>Pas d'articles disponibles</p>
            @endforelse
        </div>
        <div class="my-12 mx-auto flex justify-end">
            {{ $posts->links('pagination::tailwind') }}
        </div>
    </div>
</x-layouts.main-layout>

