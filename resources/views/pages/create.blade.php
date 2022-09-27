<x-layouts.main-layout title="Création d'articles">

    <div class="container">
        <h1 class="text-center text-indigo-500 font-black text-4xl">New post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div>
                {{-- Title --}}
                <input type="text" name="title" placeholder="Titre du post" id="" class="block w-full rounded-lg border-gray-400">
                {{-- Content --}}
                <textarea name="content" id="" cols="30" rows="10" class="mt-5 block w-full rounded-lg border-gray-400 mb-7" placeholder="Votre contenu"></textarea>
                {{-- Image --}}
                <input type="text" name="url_img" placeholder="Url de votre image" id="" class="block w-full rounded-lg border-gray-400" value="https://source.unsplah.com/400x400/?animals?1">
                <button class="btn btn-primary mt-6 w-full"> Ajouter</button>

            </div>
        </form>
    </div>

</x-layouts.main-layout>
