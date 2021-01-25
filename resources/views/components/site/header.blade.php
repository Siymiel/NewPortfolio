<x-slot name="header">
    <nav>
        <div class="container mx-auto px-6 py-3 md:flex md:justify-between md:items-center">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="#">
                        <x-application-logo/>
                    </a>
                    <p class="text-gray-800 text-xl font-bold md:text-2xl hover:text-gray-700 ml-2">Samuel Kinuthia</p>
                </div>
                
                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="md:flex items-center">
                <div class="flex flex-col md:flex-row md:mx-6">
                    <a class="my-1 text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-4 md:my-0" href="#">About</a>
                    <a class="my-1 text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-4 md:my-0" href="#">Portfolio</a>
                    <a class="my-1 text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-4 md:my-0" href="#">Blog</a>
                    <a class="my-1 text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-4 md:my-0" href="#">Contact</a>
                </div>
            </div>
        </div>
    </nav>
</x-slot>