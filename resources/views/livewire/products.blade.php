<div>
            
        <section class="grid grid-cols-1 mx-auto gap-3 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 max-w-7xl sm:mx-5 my-5">
              
            @foreach ($products as $product)
              <div class="max-w-sm mx-auto rounded overflow-hidden shadow-md border border-gray-300">
                <img class="w-full h-60 object-cover" src="{{ asset('storage/images/'. $product->image) }}" alt="Sunset in the mountains" loading="lazy">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2 cursor-pointer">
                    <a href="/product/{{ $product->id }}">{{ $product->name }}</a>
                  </div>
                  <p class="text-gray-700 text-base">
                    {{ $product->detail }}
                  </p>
                  <div class="flex justify-between my-5">
                    <h3 class="text-base font-bold text-gray-600 mt-2 -mb-3">$ {{ $product->price }}</h3>
                    <a class="py-1 px-2 rounded-md bg-gray-800 hover:bg-gray-700 text-white" href="/product/{{ $product->id }}">Details</a>
                  </div>
                </div>
                
              </div>
            @endforeach
        </section>
            
</div>
