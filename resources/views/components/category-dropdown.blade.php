<!--  Category -->
<div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
    <x-dropdown>
        <x-dropdown-item value="" :active="request()->routeIs('home')">All</x-dropdown-item>
        @foreach($categories as $category)
        <x-dropdown-item value="{{$category->slug}}" :active="isset($currentCategory) && $currentCategory == $category->slug">{{ucwords($category->name)}}</x-dropdown-item>
        @endforeach
    </x-dropdown>
</div>
