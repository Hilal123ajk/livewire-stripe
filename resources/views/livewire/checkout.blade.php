<div class="w-1/3 mx-auto my-5 bg-gray-100">
    <div class="w-full mx-auto p-6 bg-white rounded-md shadow-md">
      <h2 class="text-2xl font-semibold mb-4">Personal Details</h2>
      <form wire:submit.prevent="submit">
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
          <input wire:model="name" type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-blue-300">
          @error('name')
              <p class="text-red-500 text-sm font-medium">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
          <input wire:model="email" type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-blue-300">
          @error('email')
              <p class="text-red-500 text-sm font-medium">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-600">address</label>
            <input wire:model="address" type="text" id="address" name="address" class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-blue-300">
            @error('address')
                <p class="text-red-500 text-sm font-medium">{{ $message }}</p>
            @enderror
          </div>

        <div class="mb-4 flex justify-between">
          <div>
            <label for="city" class="block text-sm font-medium text-gray-600">City</label>
            <input wire:model="city" type="text" id="city" name="city" class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-blue-300">
            @error('city')
                <p class="text-red-500 text-sm font-medium">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label for="state" class="block text-sm font-medium text-gray-600">State</label>
            <input wire:model="state" type="text" id="state" name="state" class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-blue-300">
            @error('state')
                <p class="text-red-500 text-sm font-medium">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label for="postal" class="block text-sm font-medium text-gray-600">Postal Code</label>
            <input wire:model="postal" type="text" id="postal" name="postal" class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-blue-300">
            @error('postal')
                <p class="text-red-500 text-sm font-medium">{{ $message }}</p>
            @enderror
          </div>
        </div>
        
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
          Proceed
        </button>
      </form>
    </div>
</div>
  