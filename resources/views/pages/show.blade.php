<x-layouts.main-layout :title="$post->title">
    <img src="{{ $post->url_img }}" alt="{{ $post->title }}" class="pb-5">
    <div>
        <p class="text-5xl font-black text-red-500 pb-10">{{ $post->title }}</p>
        <p class="max-w-4xl">{{ $post->content }}</p>
    </div>
</x-layouts.main-layout>