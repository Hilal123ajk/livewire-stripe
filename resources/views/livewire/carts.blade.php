<div>

    <div class="flex justify-end items-center m-6">
        <div>
            <a href="/checkout-form">
                <button class="py-2 px-4 rounded-md bg-blue-500 text-white">Checkout</button>
            </a>
        </div>
    </div>

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Sample row -->
                            @if($products->count() > 0)
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <img class="h-24 w-28 rounded-full" src="{{ asset('storage/images/'. $product->product->image) }}" alt="Product Image">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $product->product->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            $ {{ $product->product->price }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            Quantity: {{ $product->quantity }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button wire:click="removeFromCart({{ $product->id }})" class="text-red-600 hover:text-red-800 font-semibold">Remove</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <p class="my-3 mx-7 text-lg font-medium text-green-900">Cart Is Empty</p>
                            @endif    
                            <!-- Add more rows as needed -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                   <h3 class="text-xl font-serif font-medium text-gray-950">Total Price</h3>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    $ {{ $totalPrice }}
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>