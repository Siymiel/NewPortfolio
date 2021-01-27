<x-dashboard-layout>
    <div class="flex bg-gray-100">
        <x-dashboard.aside/>
            <div class="flex flex-col flex-1 w-full h-screen">
                <x-dashboard.header/>
                <main class="h-full overflow-y-auto mt-20 px-10">
                    <a class="mb-20" href="{{route('dashboard.projects.index')}}">
                        <x-button class="text-white px-2 py-1">
                            Go Back
                        </x-button>
                    </a>

                    
                    <div class="mt-5 border-t border-gray-600">
                        <h1 class="font-semibold text-3xl">{{$project->title}}</h1>
                        <p class="mt-4 font-semibold text-gray-600">{{$project->body}}</p>
                         <p class="mt-4 text-gray-600 text-sm">{{$project->technology}}</p>
                        {{-- Actions --}}
                        <div class="flex mt-10 border-t border-gray-600 pt-5 justify-end">
                            <div class="flex">
                                <x-button>
                                    <x-nav-link>
                                        <a href="{{route('dashboard.projects.edit', $project)}}" class="text-white text-md">Edit</a>
                                    </x-nav-link>
                                </x-button>
                                <form action="{{route('dashboard.projects.destroy', $project)}}" method="POST" class="ml-3 inline-flex rounded-md shadow-sm">
                                    @csrf
                                    @method('DELETE')
                                    <x-button class="text-white">
                                        Delete
                                    </x-button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
    </div>
</x-dashboard-layout>