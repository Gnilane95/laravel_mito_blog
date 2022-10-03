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
        <div class="my-14 bg-blue-100 p-5">
            <h2 class="text-3xl font-black pb-5">Conmentaires</h2>
            @guest
                <p class="text-center py-6">Connecte toi pour poster un commentaire.</p>
            @endguest
            @auth
                <form action="{{ route('comment.store', $post->id) }}" method="POST">
                @csrf
                <input type="text" placeholder="Votre commentaire" name="content" class="">
                <button class="btn btn-primary rounded-none" type="submit">Envoyer</button>
                <x-error-msg name="content" />
                </form>
            @endauth
            <div class="mt-10">
                @forelse ($post->comments as $comment)
                    <div class="bg-gray-50 p-4 mb-2">
                        <p class="pb-2 font-bold">{{ $comment->content }}</p>
                        <p class="text-gray-400">{{ $comment->created_at->format('d/m/Y') }}</p>
                    </div>
                @empty
                    <p class="bg-gray-50 p-4 mb-2">Soyez le premier à commenter ce post</p>
                @endforelse
            </div>
        </div>
    </div>
</x-layouts.main-layout>