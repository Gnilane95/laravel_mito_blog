<x-layouts.main-layout title="Création d'articles">

    <div class="container">
        <h1 class="text-center text-indigo-500 font-black text-4xl mb-5">New post</h1>
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                {{-- Title --}}
                <input type="text" name="title" placeholder="Titre du post" id="" class="block w-full rounded-lg border-gray-400" value="{{ old('title') }}"> 
                <x-error-msg name="title" />
                {{-- Content --}}
                <textarea name="content" id="" cols="30" rows="10" class="mt-5 block w-full rounded-lg border-gray-400" placeholder="Votre contenu">
                    {{ old('content') }}
                </textarea>
                <x-error-msg name="content" />
                
                {{-- Image --}}
                <div class="">
                    <label for="url_img">Choisir une image :</label>
                    <input class="block w-full rounded-lg border-gray-400 mt-5" type="file" name="url_img" id="">
                    <x-error-msg name="url_img" />
                </div>
                {{-- <input type="text" name="url_img" placeholder="Url de votre image" id="" class="block w-full rounded-lg border-gray-400 mt-5" value="https://source.unsplash.com/640x480/?person?1"> --}}
                <button class="btn btn-primary mt-6 w-full"> Ajouter</button>

            </div>
        </form>
    </div>

</x-layouts.main-layout>
