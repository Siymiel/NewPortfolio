<x-dashboard-layout>
    <div class="flex bg-gray-100">
        <x-dashboard.aside/>
            <div class="flex flex-col flex-1 w-full">
                <x-dashboard.header/>
        <a class="mt-10 lg:ml-24 lg:mr-24" href="{{route('dashboard.projects.index', $project)}}">
            <x-button class="text-white px-2 py-1">
                Go Back
            </x-button>
        </a>


        <main class="h-full overflow-y-auto">
            <h1 class="font-semibold text-lg ml-12 lg:ml-24 mb-6 mt-6 ">Edit Project</h1>
            <form method="POST" action="{{route('dashboard.projects.update', $project)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="max-w-sm lg:max-w-4xl mx-auto mb-20">
                    <div>
                        {{-- Destination Title --}}
                        @error('title')
                            <span class="text-red-500 mt-2 text-xs font-mono">
                                * {{$message}}
                            </span>
                        @enderror
                        <x-label for="title">
                            <p class="font-semibold text-base leading-5 tracking-wider mb-2">Title</p>
                            <div>
                                <input type="text" name="title" value="{{old('title', $project->title)}}" autocomplete="off" class=" @error('title') border-red-500 @enderror form-input block w-full mt-1 text-base p-2 transition duration-150 ease-in-out focus:border-indigo-300 sm:text-sm sm:leading-5 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                            </div>
                        </x-label>
                    </div>

                    {{-- Project Body --}}
                    <div class="mt-8">
                        @error('body')
                            <span class="text-red-500 mt-2 text-xs font-mono">
                                * {{$message}}
                            </span>
                        @enderror
                        <x-label for="body">
                            <p class="font-semibold text-base leading-5 tracking-wider mb-2">Body</p>
                            <div>
                                <textarea id="body" rows="10" name="body" class="tiny-editor @error('body') border-red-500 @enderror form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{old('body', $project->body)}}</textarea>
                            </div>
                        </x-label>
                    </div>

                    {{-- Project technology --}}
                    <div class="mt-8">
                        @error('technology')
                            <span class="text-red-500 mt-2 text-xs font-mono">
                                * {{$message}}
                            </span>
                        @enderror
                        <x-label for="body">
                            <p class="font-semibold text-base leading-5 tracking-wider mb-2">Technology</p>
                            <div>
                                <textarea id="technology" rows="2" name="technology" class="tiny-editor @error('technology') border-red-500 @enderror form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{old('technology', $project->technology)}}</textarea>
                            </div>
                        </x-label>
                    </div>

                    {{-- Project Link --}}
                     <div class="mt-8">
                        @error('link')
                            <span class="text-red-500 mt-2 text-xs font-mono">
                                * {{$message}}
                            </span>
                        @enderror
                        <x-label for="link">
                            <p class="font-semibold text-base leading-5 tracking-wider mb-2">Link</p>
                            <div>
                                <input type="url" name="link" value="{{old('link', $project->link)}}" autocomplete="off" class=" @error('link') border-red-500 @enderror form-input block w-full mt-1 text-base p-2 transition duration-150 ease-in-out focus:border-indigo-300 sm:text-sm sm:leading-5 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                            </div>
                        </x-label>
                    </div>

                    {{-- Project Image --}}
                    <div class="mt-8">
                        <x-label for="image">
                            <p class="text-blueGray-300 text-base font-semibold leading-5 tracking-wider mb-2">Image</p>
                            <div>
                                <input id="image" type="file" name="image" class=" @error('image') border-red-500 @enderror form-input block transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            @error('image')
                                <span class="text-red-500 mt-2 ml-2 font-xs font-mono italic">
                                    {{$message}}
                                </span>
                            @enderror
                            </div>
                            {{-- View current Project image --}}
                            @if ($img_link = $project->image_link)
                                <div class="mt-3">
                                    <img class="h-64 w-auto" src="{{$img_link}}"/>
                                </div>
                            @endif
                        </x-label>
                    </div>

                    {{-- Project Approval Status --}}
                    <div class="mt-8">
                        <p class="text-sm leading-5 text-blueGray-300 font-semibold">Mark Project as Approved</p>
                            <div class="mt-4 flex items-center">
                                <input id="active" name="active" type="radio" value="1" {{old('active', $project->active) ? 'checked="checked"' : ''}} class=" @error('active') border-red-500 @enderror form-radio h-4 w-4 text-green-500 transition duration-150 ease-in-out">
                                <label for="active" class="ml-3">
                                    <span class="block text-sm leading-5 font-medium text-gray-700">Approved</span>
                                </label>
                            </div>
                            <div class="mt-4 flex items-center">
                                <input id="not_active" name="active" type="radio" value="0" {{old('active', $project->active) ?  : 'checked="checked"'}} class=" @error('active') border-red-500 @enderror form-radio h-4 w-4 text-red-500 transition duration-150 ease-in-out">
                                <label for="not_active" class="ml-3">
                                    <span class="block text-sm leading-5 font-medium text-gray-700">Denied</span>
                                </label>
                            </div>
                            @error('active')
                                <span class="text-red-500 mt-2 font-xs font-mono italic">
                                    {{$message}}
                                </span>
                            @enderror
                    </div>

                    {{-- Project Create Button --}}
                    <div class="mt-8 border-t border-gray-400 pt-5">
                        <div class="flex justify-end">
                            <span class="ml-3 inline-flex rounded-md shadow-sm">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-indigo-500 transition duration-150 ease-in-out">
                                    Update Project
                                </button>
                            </span>
                        </div>
                    </div>
                    
                </div>
            </form>
        </main>
    </div>
</x-dashboard-layout>