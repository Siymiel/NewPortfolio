<x-site-layout>
    <x-site.header/>
    {{-- hero --}}
    <section class="max-w-md sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto mt-10 md:mt-20 border-r-2 border-gray-100" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
            <div class="flex md:order-last justify-center mb-3">
                    <x-application-heroimg/>
            </div>
            <div class="px-5">
                <p class="text-xl font-semibold tracking-wide">Hi! I'am <span class="text-red-400">Samuel Kinuthia</span> and</p>
                <div>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-5xl font-black capitalize tracking-wider leading-relaxed mt-3">I'll help you build</h1>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-5xl font-black capitalize tracking-wider">your website.</h1>
                </div>
                <p class="text-base md:text-lg font-semibold mt-5 text-gray-500">Would you like to have an elegant design for your website? I design engaging websites and deliver top SEO ranking, specializing in website design and custom web development.</p>
                <a href="{{route('contact')}}">
                    <p class="text-base md:text-lg text-red-400 hover:text-gray-800 font-semibold mt-5 border-b-2 border-red-400">
                        Connect with me! --->
                    </p>
                </a>
            </div>
        </div>
        {{-- icon-1 --}}
        <div class="mt-28 flex justify-center">
            <a class="smooth-scroll" href="#about">
                <svg class="fill-current text-red-600 hover:text-gray-900 w-7 h-7 animate-pulse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M12.505 8.698L10 11 7.494 8.698a.512.512 0 00-.718 0 .5.5 0 000 .71l2.864 2.807a.51.51 0 00.717 0l2.864-2.807a.498.498 0 000-.71.51.51 0 00-.716 0zM10 .4A9.6 9.6 0 00.4 10c0 5.303 4.298 9.6 9.6 9.6s9.6-4.297 9.6-9.6A9.6 9.6 0 0010 .4zm0 17.954c-4.615 0-8.354-3.74-8.354-8.354S5.385 1.646 10 1.646a8.354 8.354 0 010 16.708z"/>
                </svg>
            </a>
        </div>
    </section>



    {{-- About me --}}
     <section class="w-full mx-auto bg-gray-900">
        <section id="about" class="max-w-md sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-6xl mx-auto mt-32 pt-5 pb-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
             <div class="flex justify-center py-5">
                <x-application-sam/>   
            </div>
            <div class="px-5">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold capitalize tracking-wider leading-relaxed mt-3 text-gray-300">About <span class="text-xl sm:text-2xl lg:text-3xl xl:text-4xl">me<span></h1>
                    <p class="text-base md:text-lg font-semibold mt-5 text-gray-500">I am professional web designer and developer. I build and replicate front-end layouts and back-end services ( APIs ). My tool kits include: HTML, CSS ( TailwindCss, Bootstrap, Sass, PostCss ), JavaScript ( libraries ), Livewire and Laravel ( PHP ).</p>
                    <p class="text-base md:text-lg font-semibold mt-5 text-gray-500">I'm also the co-founder of <span class="text-gray-300"><a class="hover:text-red-400" href="https://snobole.com" target="_blank">Snobole Software</a></span> where I work as a technical lead but am still open to opportunities.</p>
                    <a href="{{route('contact')}}">
                        <p class="text-base md:text-lg hover:text-gray-300 text-red-400 font-semibold mb-5 mt-5 border-b-2 border-red-400">
                            Hire me! --->
                        </p>
                    </a>
            </div>
            </div>
        </section>
     </section>

    {{-- Services --}}
     <section id="services" class="max-w-md sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto mt-36">
        <div class="flex justify-between">
            <div class="ml-3">
                <p class="text-xl sm:text-2xl lg:text-3xl xl:text-4xl tracking-wide font-semibold leading-relaxed">My <span class="text-3xl sm:text-4xl lg:text-5xl">Services<span></p>
                <p class="text-base md:text-lg text-gray-500 tracking-wide font-semibold leading-relaxed mt-2">My main objective is when you as the client walks away, you're thinking, 'Wow, I love doing business with Sam, and I want to tell others about the experience'.</p>
            </div>
        </div>
    </section>
    <div class="splide max-w-lg sm:max-w-xl md:max-w-4xl lg:max-w-4xl xl:max-w-6xl mx-auto mt-12">
	<div class="splide__track">
		<ul class="splide__list">
            @foreach($services as $service)
            <li class="splide__slide">
                <div class="relative max-w-md md:max-w-2xl h-auto lg:max-w-3xl xl:max-w-5xl mx-auto py-10 px-8 shadow-lg rounded-lg bg-cover bg-center border-2 border-gray-400" style="background-image: url({{asset('images/pattern.jfif')}})">
                <div class="absolute inset-0 bg-gray-200 opacity-75"></div>
                <h2 class="text-red-500 relative text-2xl mt-2 md:mt-0 md:text-3xl font-semibold">{{$service->title}}</h2>
                <p class="mt-2 text-gray-900 relative font-semibold mb-2">{{$service->caption}}</p>
                </div>
            </li>
            @endforeach
		</ul>
	</div>
</div>

    {{-- Projects --}}
    <section id="projects" class="max-w-md sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto mt-36">
        <div class="flex justify-between">
            <div>
                <p class="text-base md:text-lg lg:text-3xl tracking-wide font-semibold leading-relaxed"><span class="text-4xl lg:text-5xl">Projects</span> I've build and</p>
                <p class="text-base md:text-lg lg:text-3xl tracking-wide font-semibold leading-relaxed">businesses I've collaborated with.</p>
            </div>
        </div>
    </section>

    {{-- Projects --}}
    @foreach($projects as $project)
        <section>
            <article class="md:py-4 md:flex md:justify-center mt-8">
                <div class="bg-white lg:mx-8 md:flex max-w-md mx-auto md:max-w-3xl sm:max-w-lg lg:max-w-4xl xl:max-w-5xl shadow-lg lg:rounded-lg border-t-2  border-b-2 border-gray-400">
                    <div class="md:w-1/2">
                        <div class="h-64 bg-cover bg-center md:h-full" style="background-image:url('{{$project->image_link}}')"></div>
                    </div>
        
                    <div class="py-12 px-10 max-w-xl sm:max-w-lg md:max-w-3xl lg:max-w-5xl md:w-1/2 bg-gray-200">
                        <h2 class="text-2xl text-gray-800 font-bold md:text-3xl">{{$project->title}}</h2>
                        <p class="mt-4 text-gray-500 font-semibold">{{$project->body}}</p>
                        <p class="mt-2 text-red-400 font-semibold">{{$project->technology}}</p>
                        <div class="mt-10">
                            <a href="{{$project->link}}" target="_blank" class="border-2 border-gray-800 text-gray-800 px-4 py-2 font-semibold rounded hover:text-gray-300 hover:bg-gray-800">Visit Site</a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    @endforeach

    {{-- testimonials --}}
    <section class="max-w-md sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto mt-36">
    <div class="flex justify-between">
        <div>
            <p class="text-base md:text-lg lg:text-3xl tracking-wide font-semibold leading-relaxed">What <span class="text-4xl lg:text-5xl">Clients</span> say</p>
        </div>
    </div>
      
    </section>
    <section class="lg:flex max-w-md sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto md:space-x-4">
        @foreach($clients as $client)
        <div class="max-w-md sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto py-4 px-8 shadow-lg rounded-lg mt-16 bg-gray-200 border-2 border-gray-400">
            <div class="flex justify-center sm:justify-end -mt-14">
                <img class="w-20 h-20 object-cover object-center rounded-full border-2 border-red-400" alt="Client's avatar" src="{{$client->image_link}}">
            </div>
    
            <h2 class="text-gray-800 text-2xl mt-2 md:mt-0 md:text-3xl font-semibold">{{$client->title}}</h2>
    
            <p class="mt-2 mb-1 text-gray-500 font-semibold">{{$client->body}}</p>
        </div>
        @endforeach
    </section>

    {{-- icon-2 --}}
    <div class="mt-28 flex justify-center">
        <a class="smooth-scroll" href="#header">
            <svg class="fill-current w-7 h-7 text-red-600 hover:text-gray-900 animate-pulse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M10.359 7.785a.51.51 0 00-.717 0l-2.864 2.807a.498.498 0 000 .71.51.51 0 00.717 0L10 9l2.506 2.302a.512.512 0 00.718 0 .5.5 0 000-.71l-2.865-2.807zM10 .4A9.6 9.6 0 00.4 10c0 5.303 4.298 9.6 9.6 9.6s9.6-4.297 9.6-9.6A9.6 9.6 0 0010 .4zm0 17.954c-4.615 0-8.354-3.74-8.354-8.354S5.385 1.646 10 1.646a8.354 8.354 0 010 16.708z"/>
            </svg>
        </a>
    </div>
   
    <div class="max-w-sm sm:max-w-md md:max-w-xl mx-auto mt-14 italic">
        <p class="text-lg md:text-2xl text-gray-400 font-semibold"> 
            " Our greatest fear should not be of failure, but of succeeding at things in life that don't really matter. "
        </p>
    </div>

    <div class="max-w-sm sm:max-w-md md:max-w-xl mx-auto flex italic">
        <p class="text-base md:text-xl text-gray-400 font-medium">--Anonymous--</p>
    </div>
    <x-site.footer/>
</x-site-layout>