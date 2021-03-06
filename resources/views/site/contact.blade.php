<x-site-layout>
    <x-site.header/>

    {{-- Contact Form --}}
    <section data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" >
      <x-site.flashmsg/>
        <div class="grid grid-cols-1 md:grid-cols-2 max-w-md sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto mt-20">
            
            <div class="bg-gray-800 px-10"> 
                <h1 class="font-bold text-4xl mb-8 text-gray-300 mt-10">Get in touch</h1>
                <p class="text-sm font-semibold text-gray-500">A successful website does three things. It attracts the right kind of visitors. Guides them to the main services or products you offer and collects contact details for future ongoing relations. Let me help you achieve it.</p>
                <div class="text-gray-400 text-base font-semibold mt-10">
                  <div class="flex items-center">
                    <svg class="h-5 w-5 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M11.229 11.229c-1.583 1.582-3.417 3.096-4.142 2.371-1.037-1.037-1.677-1.941-3.965-.102-2.287 1.838-.53 3.064.475 4.068 1.16 1.16 5.484.062 9.758-4.211 4.273-4.274 5.368-8.598 4.207-9.758-1.005-1.006-2.225-2.762-4.063-.475-1.839 2.287-.936 2.927.103 3.965.722.725-.791 2.559-2.373 4.142z"/>
                    </svg>
                    <p class="ml-3"><a href="tel:0797741435" class="hover:text-red-400">0797741435</a> ( make a direct call )</p>
                  </div>
                  <div class="flex items-center">
                      <svg class="h-5 w-5 mt-1 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M1.574 5.286l7.5 4.029c.252.135.578.199.906.199.328 0 .654-.064.906-.199l7.5-4.029c.489-.263.951-1.286.054-1.286H1.521c-.897 0-.435 1.023.053 1.286zm17.039 2.203l-7.727 4.027c-.34.178-.578.199-.906.199s-.566-.021-.906-.199-7.133-3.739-7.688-4.028C.996 7.284 1 7.523 1 7.707V15c0 .42.566 1 1 1h16c.434 0 1-.58 1-1V7.708c0-.184.004-.423-.387-.219z"/>
                      </svg>
                      <p class="mt-1 ml-3 hover:text-red-400"><a href="mailto:skinuthia77@gmail.com">skinuthia77@gmail.com</a></p>
                  </div>
                </div>
                <p class="text-gray-400 text-base font-semibold mt-5">68137 - 00200</p>
                <p class="text-gray-400 text-base font-semibold">Nairobi, Kenya</p>

                <div>
                  <p class="mt-10 mb-10 md:mb-0 text-red-400  hover:text-gray-300 font-semibold text-base"><a href="{{route('home')}}"><-- Back</a></p>
                </div>
            </div>
            <form action="{{route('contactstore')}}" method="POST" class="px-10 border-2 border-gray-200" >
              @csrf
                <h1 class="font-bold text-4xl mb-7 mt-10">Enter Details</h1>
                <div class="grid grid-cols-2 gap-8">
                    {{-- Full_name --}}
                    <div>
                        @error('full_name')
                          <span class="text-red-500 -ml-7 mt-2 text-xs font-mono">
                              * {{$message}}
                          </span>
                        @enderror
                        <label for="fullname" class="block text-base font-semibold text-gray-700">Full Name</label>
                        <div class="mt-1 rounded-md shadow-sm">
                          <input type="text" name="full_name" value="{{old('full_name')}}" id="fullname" class=" @error('full_name') border-red-500 @enderror focus:ring-green-400 focus:border-green-400 block w-full pl-7 pr-12 sm:text-sm rounded-md">
                        </div>
                    </div>
                    
                    {{-- Email --}}                  
                    <div>
                      @error('email')
                          <span class="text-red-500 mt-2 text-xs font-mono">
                              * {{$message}}
                          </span>
                        @enderror
                      <label for="email" class="block text-base font-semibold text-gray-700">Email</label>
                        <div class="mt-1 rounded-md shadow-sm">
                          <input type="email" name="email" value="{{old('email')}}" id="email" class=" @error('email') border-red-500 @enderror focus:ring-green-400 focus:border-green-400 block w-full pl-7 pr-12 sm:text-sm rounded-md">
                          </div>
                        </div>
                    </div>
                

                    {{-- Phone_number --}}           
                    <div class="mt-4">
                      @error('phone_number')
                          <span class="text-red-500 mt-2 text-xs font-mono">
                              * {{$message}}
                          </span>
                        @enderror                    
                      <label for="phonenumber" class="block text-base font-semibold text-gray-700">Phone Number</label>
                      <div class="mt-1 rounded-md shadow-sm">
                        <input type="tel" name="phone_number" value="{{old('phone_number')}}" id="phonenumber" class=" @error('phone_number') border-red-500 @enderror focus:ring-green-400  focus:border-green-400 block w-1/2 pl-7 pr-12 sm:text-sm rounded-md">
                      </div>
                    </div>
                

                    {{-- message --}}
                    <div class="mt-4"> 
                      @error('message')
                          <span class="text-red-500 mt-2 text-xs font-mono">
                              * {{$message}}
                          </span>
                        @enderror                  
                      <label for="message" class="block text-base font-semibold text-gray-700">Message</label>
                      <div class="mt-1 rounded-md shadow-sm">
                        <textarea name="message" id="message" rows="5" class=" @error('message') border-red-500 @enderror focus:ring-green-400 focus:border-green-400 block w-full pl-7 pr-12 sm:text-sm rounded-md">{{old('message')}}</textarea>                     
                    </div>
                </div>

                {{-- Submit btn --}}
                <div class="mt-5 mb-5">
                    <div class="mt-1 flex justify-end rounded-md shadow-sm">
                        <button type="submit" class="bg-gray-800 hover:bg-gray-300 text-gray-300 hover:text-gray-800 px-2 py-1 text-base font-semibold rounded-md">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <x-site.footer/>
</x-site-layout>