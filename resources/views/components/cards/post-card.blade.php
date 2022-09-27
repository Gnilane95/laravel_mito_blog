@props([
    'url_img',
    'title',
    'content'
])
<div class="bg-white lg:p-5 md:p-7">
    <img src="{{ $url_img }}" alt="" class="md:w-56">
    <div>
        <p class="font-bold text-2xl">{{ $title }}</p>
        <p class="">{{ $content }}</p>
    </div>
    
</div>