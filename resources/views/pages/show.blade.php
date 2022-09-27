<x-layouts.main-layout :title="$post->title">
    <div class="container">
        <img src="{{ $post->url_img }}" alt="{{ $post->title }}" class="pb-5 max-w-lg">
        <div>
            <p class="text-3xl font-black pb-10">{{ $post->title }}</p>
            <p class="max-w-4xl">{{ $post->content }}</p>
            <div class="pt-6">
                <x-btn-delete :post="$post"/>
            </div>
        </div>
    </div>
</x-layouts.main-layout>