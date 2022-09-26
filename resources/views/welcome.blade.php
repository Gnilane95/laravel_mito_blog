<x-layout title="Accueil">
    <div class="bg-white lg:mx-72 py-14 text-center text-black">
        <h1 class="uppercase font-black lg:text-5xl md:text-7xl">Jane Bloglife</h1>
        <h2 class="lg:text-sm md:text-lg pt-4 font-semibold">Welcome to the blog of <span class="text-white bg-black p-1">Jane's world</span></h2>
    </div>
    <div>
        <div class="lg:mx-72 max-w-5xl ">
            <img src="img/jane.jpeg" alt="Jane's picture" class="relative">
            <div class="absolute lg:bottom-32 md:bottom-0 text-white pl-5  ">
                <p class="lg:text-xl md:text-3xl">Jane's</p>
                <p class="uppercase lg:py-3 md:py-7 lg:text-4xl md:text-7xl">Fashion blog</p>
                <button class="btn bg-gray-300 text-black uppercase font-bold rounded-none lg:text-xl md:text-2xl">Subscribe</button>
            </div>
        </div>
    </div>
    @include('partials.contents._content')
</x-layout>