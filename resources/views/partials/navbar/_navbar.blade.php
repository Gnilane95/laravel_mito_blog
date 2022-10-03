@php
    $styleLink="font-semibold hover:text-orange-600 hover:underline underline-offset-4"
@endphp
<nav class="shadow-xl flex justify-between p-5 mb-10 text-blue-600">
    <div id="logo">
        <a href="/" class="font-black text-3xl">MitoBlog</a>
    </div>
    <div class="space-x-5 flex items-center" id="navBar">
        @guest
            <a href="{{ route('login') }}" class="{{ $styleLink }}">Se connecter</a>
            <a href="{{ route('register') }}" class="{{ $styleLink }}">S'inscrire</a>
            @endguest
        @auth
            <a href="{{ route('dashboard') }}" class="{{ $styleLink }}">Dashbord</a>
            <div class="flex justify-center gap-7 items-center">
                <p>{{ Auth::user()->name }}</p>
                <x-btn-logout/>
            </div>
        @endauth
    </div>
</nav>