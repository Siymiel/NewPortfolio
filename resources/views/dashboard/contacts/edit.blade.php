<x-dashboard-layout>
    <div class="flex bg-gray-100">
        <x-dashboard.aside/>
            <div class="flex flex-col flex-1 w-full">
                <x-dashboard.header/>
        <a class="mt-10 lg:ml-24 lg:mr-24" href="{{route('dashboard.contacts.index', $contact)}}">
            <x-button class="text-white px-2 py-1">
                Go Back
            </x-button>
        </a>


        <main class="h-full overflow-y-auto">
            <h1 class="font-semibold text-lg ml-12 lg:ml-24 mb-6 mt-6 ">Edit Contact</h1>
            <form method="POST" action="{{route('dashboard.contacts.update', $contact)}}">
                @method('PUT')
                @csrf
                <div class="max-w-sm lg:max-w-4xl mx-auto mb-20">
                    {{-- Contact Full_name --}}
                    <div>
                        @error('full_name')
                            <span class="text-red-500 mt-2 text-xs font-mono">
                                * {{$message}}
                            </span>
                        @enderror
                        <x-label for="title">
                            <p class="font-semibold text-base leading-5 tracking-wider mb-2">Full_Name</p>
                            <div>
                                <input type="text" name="full_name" value="{{old('full_name', $contact->full_name)}}" autocomplete="off" class=" @error('full_name') border-red-500 @enderror form-input block w-full mt-1 text-base p-2 transition duration-150 ease-in-out focus:border-indigo-300 sm:text-sm sm:leading-5 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                            </div>
                        </x-label>
                    </div>

                    {{-- Contact Email --}}
                    <div class="mt-8">
                       @error('email')
                           <span class="text-red-500 mt-2 text-xs font-mono">
                               * {{$message}}
                           </span>
                       @enderror
                       <x-label for="email">
                           <p class="font-semibold text-base leading-5 tracking-wider mb-2">Email</p>
                           <div>
                               <input type="email" name="email" value="{{old('email', $contact->email)}}" autocomplete="off" class=" @error('email') border-red-500 @enderror form-input block w-full mt-1 text-base p-2 transition duration-150 ease-in-out focus:border-indigo-300 sm:text-sm sm:leading-5 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                           </div>
                       </x-label>
                   </div>

                    {{-- Contact Phone_Number --}}
                    <div class="mt-8">
                        @error('phone_number')
                            <span class="text-red-500 mt-2 text-xs font-mono">
                                * {{$message}}
                            </span>
                        @enderror
                        <x-label for="phone_number">
                            <p class="font-semibold text-base leading-5 tracking-wider mb-2">Phone_Number</p>
                            <div>
                                <input type="tel" name="phone_number" value="{{old('phone_number', $contact->phone_number)}}" autocomplete="off" class=" @error('email') border-red-500 @enderror form-input block w-full mt-1 text-base p-2 transition duration-150 ease-in-out focus:border-indigo-300 sm:text-sm sm:leading-5 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                            </div>
                        </x-label>
                    </div>

                    {{-- Contact Message --}}
                    <div class="mt-8">
                        @error('message')
                            <span class="text-red-500 mt-2 text-xs font-mono">
                                * {{$message}}
                            </span>
                        @enderror
                        <x-label for="message">
                            <p class="font-semibold text-base leading-5 tracking-wider mb-2">Message</p>
                            <div>
                                <textarea id="message" rows="6" name="message" class="tiny-editor @error('message') border-red-500 @enderror form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{old('message', $contact->message)}}</textarea>
                            </div>
                        </x-label>
                    </div>

                    {{-- Contact Create Button --}}
                    <div class="mt-8 border-t border-gray-400 pt-5">
                        <div class="flex justify-end">
                            <span class="ml-3 inline-flex rounded-md shadow-sm">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-indigo-500 transition duration-150 ease-in-out">
                                    Update Contact
                                </button>
                            </span>
                        </div>
                    </div>
                    
                </div>
            </form>
        </main>
    </div>
</x-dashboard-layout>