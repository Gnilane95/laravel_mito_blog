<x-layouts.main-layout title="Tous mes articles">
    <h1 class="text-center font-black text-4xl text-red-600 underline">Tous mes articles</h1>
    <div class="container mt-10">
        @include('partials._table-allPosts')
    </div>
    <div class="mx-56 mt-28 flex justify-end">
        {{ $posts->links('pagination::tailwind') }}
    </div>
</x-layouts.main-layout>