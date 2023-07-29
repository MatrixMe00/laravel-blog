@props(["value"=>"", "active"=>false])
@php
    $class = $active ? "bg-blue-500" : "";
@endphp
<option {{$attributes->merge(["class"=>"$class", "value"=>"$value"])}} data-query="{{http_build_query(request()->except('category','page'))}}">
    {{ $slot }}
</option>
