<x-site-layout>
    <x-site.header/>
    {{-- hero --}}
    <section class="max-w-md sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto mt-10 md:mt-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
            <div class="flex md:order-last justify-center mb-3">
                    <x-application-heroimg/>
            </div>
            <div class="px-5">
                <p class="text-xl font-semibold tracking-wide">Hi! I'am <span class="text-red-400">Samuel Kinuthia</span> and</p>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-5xl font-black capitalize tracking-wider leading-relaxed mt-3">I'll help you build</h1>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-5xl font-black capitalize tracking-wider">your website.</h1>
                <p class="text-base md:text-lg font-semibold mt-5 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos iure vel, dolore doloribus quaerat! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia explicabo labore saepe dolores, aut nam.</p>
                <a href="/contact">
                    <p class="text-base md:text-lg text-red-400 hover:text-gray-800 font-semibold mt-5 border-b-2 border-red-400">
                        Connect with me! --->
                    </p>
                </a>
            </div>
        </div>
    </section>


    {{-- icon-1 --}}
    <div class="mt-28 flex justify-center">
        <svg class="fill-current w-7 h-7 hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M12.505 8.698L10 11 7.494 8.698a.512.512 0 00-.718 0 .5.5 0 000 .71l2.864 2.807a.51.51 0 00.717 0l2.864-2.807a.498.498 0 000-.71.51.51 0 00-.716 0zM10 .4A9.6 9.6 0 00.4 10c0 5.303 4.298 9.6 9.6 9.6s9.6-4.297 9.6-9.6A9.6 9.6 0 0010 .4zm0 17.954c-4.615 0-8.354-3.74-8.354-8.354S5.385 1.646 10 1.646a8.354 8.354 0 010 16.708z"/>
        </svg>
    </div>

    {{-- About me --}}
     <section class="w-full mx-auto bg-gray-900">
        <section id="about" class="max-w-md sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-6xl mx-auto mt-32 pt-5 pb-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
             <div class="flex justify-center py-5">
                <svg class="h-64 w-64 md:h-72 md:w-72 lg:h-80 lg:w-80" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 335 404">
                    <g id="Group_4" data-name="Group 4" transform="translate(-377 -403.51)">
                        <g id="Rectangle_1" data-name="Rectangle 1" transform="translate(377 403.51)" fill="#f8f8f8" stroke="rgba(248,113,113,0.83)" stroke-width="2">
                        <rect width="335" height="404" rx="35" stroke="none"/>
                        <rect x="1" y="1" width="333" height="402" rx="34" fill="none"/>
                        </g>
                        <g id="Group_2" data-name="Group 2" transform="translate(384 439.51)">
                        <g id="Group_3" data-name="Group 3" transform="translate(0 0)">
                            <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(0 0)" fill="rgba(232,231,231,0.93)" stroke="rgba(178,185,180,0.88)" stroke-width="1">
                            <ellipse cx="162" cy="161.5" rx="162" ry="161.5" stroke="none"/>
                            <ellipse cx="162" cy="161.5" rx="161.5" ry="161" fill="none"/>
                            </g>
                            <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="134" cy="99" rx="134" ry="99" transform="translate(29 125)" fill="rgba(28,23,35,0.78)"/>
                            <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="53.5" cy="56.5" rx="53.5" ry="56.5" transform="translate(108 50)" fill="rgba(214,61,61,0.78)"/>
                        </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="px-5">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold capitalize tracking-wider leading-relaxed mt-3 text-gray-300">About <span class="text-xl sm:text-2xl lg:text-3xl xl:text-4xl">me<span></h1>
                    <p class="text-base md:text-lg font-semibold mt-5 text-gray-500">I am Professional Web Designer and Developer. I build backend services (APIs) with a focus on high availability, a low latency, and scalability. My core language is PHP-Laravel.</p>
                    <p class="text-base md:text-lg font-semibold mt-5 text-gray-500">I'm the co-founder of <span class="text-gray-300">Snobole Software</span> where I work as a technical lead but am still open to opportunities.</p>
                    <a href="/contact">
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
    <div class="splide max-w-lg sm:max-w-xl md:max-w-4xl lg:max-w-4xl xl:max-w-6xl mx-auto mt-24">
	<div class="splide__track">
		<ul class="splide__list">
            @foreach($services as $service)
            <li class="splide__slide">
                <div class="max-w-sm sm:max-w-md md:max-w-2xl lg:max-w-3xl xl:max-w-5xl mx-auto py-10 px-8 shadow-lg rounded-lg bg-gray-900">
                <h2 class="text-red-400 text-2xl mt-2 md:mt-0 md:text-3xl font-semibold">{{$service->title}}</h2>
                <p class="mt-2 text-gray-500 font-semibold mb-2">{{$service->caption}}</p>
                </div>
            </li>
            @endforeach
		</ul>
	</div>
</div>

    {{-- Projects --}}
    <section class="max-w-sm sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto mt-36">
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
                <div class="bg-white lg:mx-8 md:flex max-w-sm mx-auto md:max-w-3xl sm:max-w-lg lg:max-w-4xl xl:max-w-5xl lg:shadow-lg lg:rounded-lg">
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
    <section class="max-w-sm sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto mt-36">
    <div class="flex justify-between">
        <div>
            <p class="text-base md:text-lg lg:text-3xl tracking-wide font-semibold leading-relaxed">What <span class="text-4xl lg:text-5xl">Clients</span> say</p>
        </div>
    </div>
      
    </section>
    <section class="lg:flex max-w-sm sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto space-x-4">
        @foreach($clients as $client)
        <div class="max-w-md sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto py-4 px-8 shadow-lg rounded-lg mt-16 bg-gray-200">
            <div class="flex justify-center sm:justify-end -mt-14">
                <img class="w-20 h-20 object-cover object-center rounded-full border-2 border-gray-500" alt="Client's avatar" src="{{$client->image_link}}">
            </div>
    
            <h2 class="text-gray-800 text-2xl mt-2 md:mt-0 md:text-3xl font-semibold">{{$client->title}}</h2>
    
            <p class="mt-2 mb-1 text-gray-500 font-semibold">{{$client->body}}</p>
        </div>
        @endforeach
    </section>

   
    
    <x-site.footer/>
</x-site-layout>