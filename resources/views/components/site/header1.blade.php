<x-slot name="header1">
    <nav>
        <div class="container mx-auto px-6 py-3 md:flex md:justify-between md:items-center">
            <div class="flex justify-between items-center">
                {{-- logo --}}
                <div class="flex items-center">
                    <a href="{{route('home')}}">
                        <x-application-logo/>
                    </a>
                    <a href="{{route('home')}}">
                    <p class="text-gray-800 text-xl font-bold md:text-2xl hover:text-gray-700 ml-1">Samuel Kinuthia</p>
                    </a>
                </div>
                <div class="hidden md:flex items-center">
                    <div class="flex flex-col md:flex-row md:mx-6">
                        <a class="my-1 text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-4 md:my-0" href="/">Home</a>
                        <a class="my-1 text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-4 md:my-0" href="#about">About</a>
                        <a class="my-1 text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-4 md:my-0" href="#services">Services</a>
                        <a class="my-1 text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-4 md:my-0" href="/contact">Contact</a>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button @click="open = true" type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="md:flex items-center" x-show="open" @click.away="open = false">
                <div class="flex flex-col md:flex-row md:mx-6">
                    <a class="my-1 text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-4 md:my-0" href="/">Home</a></a>
                    <a class="my-1 text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-4 md:my-0" href="#about">About</a>
                    <a class="my-1 text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-4 md:my-0" href="#services">Services</a>
                    <a class="my-1 text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-4 md:my-0" href="/contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>
</x-slot>