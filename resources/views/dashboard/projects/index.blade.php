<x-dashboard-layout>
    <div class="flex">
        {{-- Desktop.Aside --}}
        <x-dashboard.aside/>   
        <div class="flex flex-col flex-1 w-full">
            <x-dashboard.header/>
            <main class="h-screen overflow-y-auto mt-10 mb-20">
                <div class="max-w-md sm:max-w-lg md:max-w-lg lg:max-w-2xl xl:max-w-5xl mx-auto">
                    
                        <h2 class="my-2 ml-10 md:ml-0 mb-8 text-xl md:text-2xl font-semibold text-gray-700 px-1">
                            Projects
                        </h2>
                        <x-button class="mb-5 float-right mr-1">
                            <x-nav-link>
                                <a href="{{route('dashboard.projects.create')}}" class="text-white text-xs lg:text-md">Add Project</a>
                            </x-nav-link>
                        </x-button>
                    <x-dashboard.table :columns="$columns" :data="$projects" route-prefix="dashboard.projects"/>
                </div>      
            </main>
        </div>
    </div>

</x-dashboard-layout>
