@props([
    'url_img',
    'title',
    'content',
    'created_at'
])
<div class="shadow-xl">
    <img src="{{ asset('storage/'.$url_img) }}" alt="{{ $title }}" class="w-full">
    <div class="p-5 min-h-[200px]">
        <p class="font-bold text-2xl pb-5">{{ $title }}</p>
        <p class="">{{ Str::substr($content, 0, 180) }}</p>
    </div>
    <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le {{ $created_at }}</p>
    
    
</div>