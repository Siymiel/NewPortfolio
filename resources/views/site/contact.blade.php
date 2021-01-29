<x-site-layout>
    <x-site.header/>

    {{-- Contact Form --}}
    <section>
      <x-site.flashmsg/>
        <div class="grid grid-cols-1 md:grid-cols-2 max-w-md sm:max-w-lg md:max-w-3xl lg:max-w-4xl xl:max-w-5xl mx-auto mt-20">
            
            <div class="bg-gray-800 px-10"> 
                <h1 class="font-bold text-4xl mb-8 text-gray-300 mt-10">Get in touch</h1>
                <p class="text-sm font-semibold text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolorum explicabo ducimus esse debitis adipisci officia cupiditate deserunt?</p>
                <div class="text-gray-400 text-base font-semibold mt-10">
                  <div class="flex items-center">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path fill="#FFF" d="M11.229 11.229c-1.583 1.582-3.417 3.096-4.142 2.371-1.037-1.037-1.677-1.941-3.965-.102-2.287 1.838-.53 3.064.475 4.068 1.16 1.16 5.484.062 9.758-4.211 4.273-4.274 5.368-8.598 4.207-9.758-1.005-1.006-2.225-2.762-4.063-.475-1.839 2.287-.936 2.927.103 3.965.722.725-.791 2.559-2.373 4.142z"/>
                    </svg>
                    <p class="ml-3">0797741435</p>
                  </div>
                  <div class="flex items-center">
                    <svg class="h-5 w-5 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path fill="#FFF" d="M1.574 5.286l7.5 4.029c.252.135.578.199.906.199.328 0 .654-.064.906-.199l7.5-4.029c.489-.263.951-1.286.054-1.286H1.521c-.897 0-.435 1.023.053 1.286zm17.039 2.203l-7.727 4.027c-.34.178-.578.199-.906.199s-.566-.021-.906-.199-7.133-3.739-7.688-4.028C.996 7.284 1 7.523 1 7.707V15c0 .42.566 1 1 1h16c.434 0 1-.58 1-1V7.708c0-.184.004-.423-.387-.219z"/>
                    </svg>
                    <p class="mt-1 ml-3">skinuthia77@gmail.com</p>
                  </div>
                </div>
                <p class="text-gray-400 text-base font-semibold mt-5">68137 - 00200</p>
                <p class="text-gray-400 text-base font-semibold">Nairobi, Kenya</p>

                {{-- Social Icons --}}
                <div class="flex space-x-5 mt-16">
                  {{-- Facebook --}}
                  <a href="https://www.facebook.com/samuel.kinuthia.71271/" target="_blank">
                    <svg class="fill-current text-gray-200 hover:text-red-400" width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zm2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443v1.581z"/>
                    </svg>
                  </a>
                  {{-- Twitter --}}
                  <a href="https://twitter.com/SamuelKinuthiaK?s=08" target="_blank">
                    <svg class="fill-current text-gray-200 hover:text-red-400" width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zm3.905 7.864c.004.082.005.164.005.244 0 2.5-1.901 5.381-5.379 5.381a5.335 5.335 0 01-2.898-.85c.147.018.298.025.451.025.886 0 1.701-.301 2.348-.809a1.895 1.895 0 01-1.766-1.312 1.9 1.9 0 00.853-.033 1.892 1.892 0 01-1.517-1.854v-.023c.255.141.547.227.857.237a1.89 1.89 0 01-.585-2.526 5.376 5.376 0 003.897 1.977 1.891 1.891 0 013.222-1.725 3.797 3.797 0 001.2-.459 1.9 1.9 0 01-.831 1.047 3.799 3.799 0 001.086-.299 3.834 3.834 0 01-.943.979z"/>
                    </svg>
                  </a>
                  {{-- Linkedin --}}
                  <a href="https://www.linkedin.com/in/samuel-kinuthia/" target="_blank">
                    <svg class="fill-current text-gray-200 hover:text-red-400" width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zM7.65 13.979H5.706V7.723H7.65v6.256zm-.984-7.024c-.614 0-1.011-.435-1.011-.973 0-.549.409-.971 1.036-.971s1.011.422 1.023.971c0 .538-.396.973-1.048.973zm8.084 7.024h-1.944v-3.467c0-.807-.282-1.355-.985-1.355-.537 0-.856.371-.997.728-.052.127-.065.307-.065.486v3.607H8.814v-4.26c0-.781-.025-1.434-.051-1.996h1.689l.089.869h.039c.256-.408.883-1.01 1.932-1.01 1.279 0 2.238.857 2.238 2.699v3.699z"/>
                    </svg>
                  </a>
                  {{-- Gmail --}}
                  <a href="mailto:skinuthia77@gmail.com" target="_blank">
                    <svg class="fill-current text-gray-200 hover:text-red-400" width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zM6.231 7h7.52c.399 0 .193.512-.024.643-.217.13-3.22 1.947-3.333 2.014s-.257.1-.403.1a.793.793 0 01-.402-.1L6.255 7.643C6.038 7.512 5.833 7 6.231 7zM14 12.5c0 .21-.252.5-.444.5H6.444C6.252 13 6 12.71 6 12.5V8.853c0-.092-.002-.211.172-.11l3.417 2.015a.69.69 0 00.402.1c.146 0 .252-.011.403-.1l3.434-2.014c.174-.102.172.018.172.11V12.5z"/>
                    </svg>
                  </a>
              </div>
            </div>
            <form action="{{route('contactstore')}}" method="POST" class="px-10 border-2 border-gray-200">
              @csrf
                <h1 class="font-bold text-4xl mb-7 mt-10">Enter Details</h1>
                <div class="grid grid-cols-2 gap-8">
                  {{-- full_name --}}
                    <div>
                        @error('full_name')
                          <span class="text-red-500 -ml-7 mt-2 text-xs font-mono">
                              * {{$message}}
                          </span>
                        @enderror
                        <label for="fullname" class="block text-base font-semibold text-gray-700">Full Name</label>
                        <div class="mt-1 rounded-md shadow-sm">
                          <input type="text" name="full_name" value="{{old('full_name')}}" id="fullname" class=" @error('full_name') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm rounded-md">
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
                          <input type="email" name="email" value="{{old('email')}}" id="email" class=" @error('email') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm rounded-md">
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
                        <input type="tel" name="phone_number" value="{{old('phone_number')}}" id="phonenumber" class=" @error('phone_number') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 pl-7 pr-12 sm:text-sm rounded-md">
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
                        <textarea name="message" id="message" rows="5" class=" @error('message') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm rounded-md">{{old('message')}}</textarea>                     
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