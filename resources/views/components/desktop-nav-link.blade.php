@props([
    'route',
])

<a href="{{route($route)}}"
   class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md focus:outline-none transition ease-in-out duration-150
    {{Request::routeIs($route) ? 'text-white bg-gray-900 focus:bg-gray-700' : 'text-gray-300 hover:text-white hover:bg-gray-700 focus:text-white focus:bg-gray-700'}}
">
    {{$slot}}
</a>
