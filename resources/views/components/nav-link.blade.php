@props (['active' => false])

<a class=" {{ $active ? 'text-white bg-gray-900 px-3 pt-1 pb-2 rounded':'text-gray-300 hover:bg-gray-700 hover:text-white px-3 pt-1 pb-2 rounded'}}  px-1 text-lg font-semibold" aria-current= "{{ $active ? 'page': 'false'}}" {{$attributes}} >{{$slot}}</a>