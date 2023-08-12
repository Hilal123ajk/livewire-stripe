<div class="flex justify-center items-center my-10">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-semibold mb-4">Login</h2>
        <form wire:submit.prevent="submit">
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input wire:model="email" type="email" id="email" name="email" class="mt-1 px-4 py-2 w-full border rounded-md focus:ring focus:ring-blue-200">
                @error('email')
                    <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input wire:model="password" type="password" id="password" name="password" class="mt-1 px-4 py-2 w-full border rounded-md focus:ring focus:ring-blue-200">
                @error('password')
                    <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200">Login</button>
        </form>
    </div>
</div>
