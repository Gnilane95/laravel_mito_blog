<x-layouts.main-layout title="Accueil">
    <p class="text-xl font-bold text-red-500">Hello world</p>
    @foreach ($arrs as $arr)
        <li>{{ $arr }}</li>
    @endforeach
    @foreach ($arrGames as $arrGame)
        <li>{{ $arrGame }}</li>
    @endforeach
</x-layouts.main-layout>