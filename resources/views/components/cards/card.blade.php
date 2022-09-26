@props([
    'h3',
    'h4',
    'date',
    'url_img',
    'titledesc',
    'description',
    'paragraph',
    'repliesNum'
])
<div class="bg-white lg:p-5 md:p-7">
    <div class="text-center">
        <h3 class="text-2xl pb-3">{{ $h3 }}</h3>
        <h4 class="pb-5">{{ $h4 }}, <span class="text-gray-400">{{ $date }}</span></h4>
    </div>
    <img src="img/{{ $url_img }}" alt="picture card1" class="md:w-full">
    <p class="py-5"><span class="font-bold text-black">{{ $titledesc }}</span> {{ $description }}</p>
    <p class="pb-7">{{ $paragraph }}</p>
    <div class="flex justify-between">
        <div class="flex align-items-center space-x-2 py-2 px-5 border-solid border-2">
            <i class="fa-solid fa-thumbs-up"></i>
            <p>Like</p>
        </div>
        <p class="bg-black p-2 px-5"><span class="text-white">Replies</span> <span class="bg-white p-1 px-2 text-black">{{ $repliesNum }}</span></p>
    </div>
    <div>
        {{ $slot }}
    </div>
</div>