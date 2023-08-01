@if (session()->has("success"))
    <div id="success" class="fixed right-2 top-4 border-10 text-sm bg-blue-700 p-4 text-white rounded">
        <p>{{ session()->get("success") }}</p>
    </div>
@endif
