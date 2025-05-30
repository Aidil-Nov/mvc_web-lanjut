<header class="bg-green-700 text-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <a href="#" class="text-xl font-bold">Sampahbijak</a>
        <button class="md:hidden block" id="nav-toggle">
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <nav id="nav-menu" class="hidden md:flex space-x-6 text-sm font-medium">
            <a class="navbar-brand" href="{{ route(name: 'home') }}">Home</a>
            <a class="navbar-brand" href="{{ route('gallery') }}">Gallery</a>
            <a class="navbar-brand" href="{{ route('about') }}">About</a>
            <a class="navbar-brand" href="#">Artikel</a>
            <a class="navbar-brand" href="{{ route('contact.create') }}">Contact</a>
        </nav>
    </div>

    <!-- Mobile menu -->
    <div id="nav-mobile" class="md:hidden hidden px-4 pb-4 space-y-2 text-sm font-medium bg-green-600">
        <a class="navbar-brand" href="{{ route(name: 'home') }}">Home</a>
        <a class="navbar-brand" href="{{ route('gallery') }}">Gallery</a>
        <a class="navbar-brand" href="{{ route('about') }}">About</a>
        <a class="navbar-brand" href="#">Artikel</a>
        <a class="navbar-brand" href="{{ route('contact.create') }}">Contact</a> 
    </div>
</header>

<script>
    // Toggle menu for mobile
    document.getElementById('nav-toggle').addEventListener('click', function () {
        const navMenu = document.getElementById('nav-menu');
        const navMobile = document.getElementById('nav-mobile');
        navMobile.classList.toggle('hidden');
    });
</script>