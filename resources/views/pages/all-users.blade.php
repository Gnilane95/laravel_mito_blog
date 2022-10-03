<x-layouts.main-layout title="users">
    <h1 class="text-center font-black text-4xl text-red-600 underline">Les users</h1>
    <div class="container mt-10">
        @include('partials._table-allUsers')
    </div>
    <div class="mx-56 mt-28 flex justify-end">
        {{ $users->links('pagination::tailwind') }}
    </div>
</x-layouts.main-layout>