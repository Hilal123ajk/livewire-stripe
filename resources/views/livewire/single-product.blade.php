<div>
    <div class="max-w-screen-lg mx-auto my-10 p-6 bg-white rounded-lg shadow-md border border-gray-300">
        <div class="mb-6 mx-auto">
            <img class="w-1/3 mx-auto h-60 object-cover" src="{{ asset('storage/images/'. $product->image) }}" alt="{{ $product->name }}" loading="lazy">
        </div>
        <div class="mb-6">
            <h2 class="text-2xl font-bold mb-2">{{ $product->name }}</h2>
            <p class="text-gray-700 w-1/2">{{ $product->detail }}</p>
        </div>
        <div>
            <h3 class="text-xl font-bold text-gray-600">$ {{ $product->price }}</h3>
        </div>
        <form wire:submit.prevent="submit({{ $product->id }})">
            <div class="flex justify-between items-center my-5">
                <div class="flex items-center">
                    <h3 class="text-base font-medium">Quantity</h3>
                    <input wire:model="quantity" class="border border-gray-600 py-1 px-2 mx-3" id="quantity" value="1" type="number" min="0" max="3">
                </div>
                <button class="py-2 px-4 rounded-md bg-blue-800 hover:bg-blue-700 text-white">Add To Cart</button>
            </div>
        </form>
    </div>
    
</div>
