<div {{$attributes}}>
    <div class="w-full overflow-hidden rounded-lg shadow-lg max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl xl:max-w-5xl mx-auto">
        <div class="w-full overflow-x-auto">
          <table class="w-full whitespace-no-wrap">
              {{-- Table Head --}}
            <thead class="bg-gray-600">
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-200 uppercase border-b">
                    @foreach($table_columns as $field_name => $field_type)
                        <th class="px-4 py-3">{{$field_name}}</th>
                    @endforeach
                        <th class="px-4 py-3">Actions</th>
                </tr>
            </thead>

            {{-- Table Body --}}
            <tbody class="bg-white divide-y">
                @foreach($table_data as $data)
                    <tr class="text-gray-700 dark:text-gray-400">
                        @foreach($table_columns as $field_name => $field_type)
                            <td class="px-4 py-3">
                                @switch($field_type)
                                    @case('string')
                                        <span class="font-semibold p-1 leading-tight rounded-full text-xs {{$data->$field_name ? 'text-green-700' : 'text-red-700'}} {{$data->$field_name ? 'bg-green-100' : 'bg-red-100'}}">
                                            @if($data->$field_name)
                                               Yes
                                            @else
                                                No
                                            @endif
                                        </span>
                                        @break
                                    @case('relationship')
                                        <div class="py-2">
                                            <p class="font-semibold text-xs lg:text-sm">{{$data->$field_name->title ?? 'undefined'}}</p>
                                        </div>
                                        @break
                                    @default
                                        <div class="py-2">
                                            <p class="text-xs lg:text-sm font-semibold text-gray-600">{{$data->$field_name}}</p>
                                        </div>
                                @endswitch
                            </td>
                        @endforeach
                        {{-- Table Data 5 --}}
                        {{-- Action Icons --}}
                        <td class="px-4 py-3">
                            <div class="flex items-center space-x-2 lg:space-x-4 text-xs lg:text-sm">
                                {{-- Show --}}
                                @if(Route::has($route_prefix.'.show'))
                                    <a href="{{route($route_prefix.'.show', $data)}}">
                                        <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                            <svg class="w-5 h-5 text-blue-600 hover:text-blue-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10,4.4C3.439,4.4,0,9.232,0,10c0,0.766,3.439,5.6,10,5.6c6.56,0,10-4.834,10-5.6C20,9.232,16.56,4.4,10,4.4
                                                        z M10,14.307c-2.455,0-4.445-1.928-4.445-4.307S7.545,5.691,10,5.691s4.444,1.93,4.444,4.309S12.455,14.307,10,14.307z M10,10
                                                        c-0.407-0.447,0.663-2.154,0-2.154c-1.228,0-2.223,0.965-2.223,2.154S8.772,12.154,10,12.154c1.227,0,2.223-0.965,2.223-2.154
                                                        C12.223,9.453,10.346,10.379,10,10z"/>
                                            </svg>
                                        </button>
                                    </a>
                                @endif
                                {{-- Edit --}}
                                @if(Route::has($route_prefix.'.edit'))
                                    <a href="{{route($route_prefix.'.edit', $data)}}">
                                        <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                            <svg class="w-5 h-5 text-green-600 hover:text-green-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                            </svg>
                                        </button>
                                    </a>
                                @endif
                                {{-- Destroy --}}
                                @if(Route::has($route_prefix.'.destroy'))
                                        <form method="POST" action="{{route($route_prefix.'.destroy', $data)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                                <svg class="w-5 h-5 text-red-600 hover:text-red-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </form>
                                @endif

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
</div>
