<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-400 p-6 rounded-xl">
            <h1 class="text-center font-bold text-2xl">Register</h1>
            <form method="POST" action="/register">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Full Name</label>
                    <input type="text" value="{{ old('name') }}" class="border border-gray-400 p-2 w-full" name="name" id="name" required="required">
                    @error("name")
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
                    <input type="text" value="{{ old('username') }}" class="border border-gray-400 p-2 w-full" name="username" id="username" required="required">
                    @error("username")
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                    <input type="email" value="{{ old('email') }}" class="border border-gray-400 p-2 w-full" name="email" id="email" required="required">
                    @error("email")
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                    <input type="password" value="{{ old('password') }}" class="border border-gray-400 p-2 w-full" name="password" id="password" required="required">
                    @error("password")
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full">
                    <button class="w-full text-center bg-blue-600 text-slate-100 p-3">Submit</button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
