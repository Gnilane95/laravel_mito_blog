<x-layouts.main-layout title="Modification d'articles">

    <div class="container">
        <h1 class="text-center text-indigo-500 font-black text-4xl mb-5">Update Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                {{-- Title --}}
                <input type="text" name="title" placeholder="Titre du post" id="" class="block w-full rounded-lg border-gray-400" value="{{ old('title', $post->title) }}"> 
                <x-error-msg name="title" />
                {{-- Content --}}
                <textarea name="content" id="" cols="30" rows="10" class="mt-5 block w-full rounded-lg border-gray-400" placeholder="Votre contenu">
                    {{ old('content', $post->content) }}
                </textarea>
                <x-error-msg name="content" />
                {{-- is_published --}}
                <div class="mt-5">
                    <label for="is_published">Publication</label>
                    <input @checked(old('is_published', $post->is_published)) type="checkbox" name="is_published" id="" value="is_published">
                </div>
                {{-- Image --}}
                <input type="text" name="url_img" placeholder="Url de votre image" id="" class="block w-full rounded-lg border-gray-400 mt-5" value="https://source.unsplash.com/640x480/?person?1">
                <button class="btn btn-primary mt-6 w-full"> Modifier</button>

            </div>
        </form>
    </div>

</x-layouts.main-layout>
