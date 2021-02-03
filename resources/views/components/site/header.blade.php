<x-slot name="header">
    <div class="max-w-md sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto">
        <div class="hidden md:flex justify-between items-center py-2">
            {{-- Logo --}}
            <a class="flex items-center" href="{{route('home')}}">
                <div>
                    <x-application-logo/>
                </div>
                <p class="text-gray-800 text-xl font-bold md:text-2xl hover:text-gray-700 ml-1">Samuel Kinuthia</p>
            </a>
    
            <nav>
                <ul class="flex justify-end md:space-x-2 text-gray-600 font-bold lg:font-semibold text-sm lg:text-lg">
                    <li><a class="text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-3" href="{{route('home')}}">About</a></li>
                    <li><a class="text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-3" href="{{route('contact')}}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>

     {{-- mobile sidebar --}}
    <div class="md:hidden flex justify-between mx-5 py-3">
        {{-- Logo --}}
        <a class="flex items-center" href="{{route('home')}}">
            <div>
                <x-application-logo/>
            </div>  
            <p class="text-gray-800 text-xl font-bold md:text-2xl hover:text-gray-700 ml-1">Samuel Kinuthia</p>   
        </a>
        <!-- Hamburger -->
        <div class="-mr-2 flex items-center md:hidden">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    <aside class="w-64 md:hidden" x-show="open" @click.away="open = false">
        <nav>
            <ul class="ml-10 mb-5 space-y-5 mt-4 font-bold text-sm">
                <li><a class="my-1 text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-4 md:my-0" href="{{route('home')}}">About</a></li>
                <li><a class="my-1 text-sm text-gray-700 font-semibold hover:text-red-400 md:mx-4 md:my-0" href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
    </aside>
</x-slot>