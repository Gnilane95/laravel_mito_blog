<x-layouts.main-layout :title="$post->title">
    <div class="container">
        <img src="{{ asset('storage/'.$post->url_img) }}" alt="{{ $post->title }}" class="pb-5 max-w-lg">
        <div>
            <p class="text-3xl font-black pb-10">{{ $post->title }}</p>
            <p class="max-w-4xl">{!! nl2br(e($post->content)) !!}</p>
            @auth
                <div class="pt-6 flex gap-10">
                    <x-btn-delete :post="$post"/>
                    <a href="{{ $post->id }}/edit" class="btn btn-success">Modifier</a>
                </div>
            @endauth
        </div>
    </div>
</x-layouts.main-layout>