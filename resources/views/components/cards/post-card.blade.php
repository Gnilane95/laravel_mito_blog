@props([
    'url_img',
    'title',
    'content'
])
<div class="shadow-xl">
    <img src="{{ $url_img }}" alt="" class="w-full">
    <div class="p-5 min-h-[250px]">
        <p class="font-bold text-2xl pb-5">{{ $title }}</p>
        <p class="">{{ Str::substr($content, 0, 80) }}</p>
    </div>
    
</div>