@props(['routeName', 'itemId', 'linkName'])
@auth 
    <a href="{{ route($routeName, $itemId) }}" class="btn btn-outline-info btn-sm">{{ $linkName }}</a>
@endauth