<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stripe Payment | Laravel</title>

    {{-- Tailwind + Livewire --}}
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-200 overflow-x-hidden">
    
    <div class="flex justify-between bg-white py-4 items-center">
        <div class="mx-8">
            <ul class="flex">
                
                <li class="bg-slate-300 py-1 px-3 rounded-md">
                    <a href="/products">Products</a>
                </li>
            </ul>
        </div>
        <div class="mx-8">
            @guest
                <ul class="flex gap-x-3">
                    <li>
                        <a href="/login">Login</a>
                    </li>
                    <li>
                        <a href="/register">Register</a>
                    </li>
                </ul>
            @endguest

            @auth
                <ul class="flex gap-x-3 items-center">
                    <a href="/cart" class="relative">
                        <img class="w-5 h-5 cursor-pointer" src="{{ asset('storage/images/cart.png') }}" alt="">
                        @livewire('show-cart')
                    </a>
                    <li>
                        <a href="">{{ Auth::user()->name }}</a>
                    </li>
                    <li>
                        <a href="/logout">Logout</a>
                    </li>
                </ul>
            @endauth
            
        </div>
    </div>

    {{ $slot }}

    @livewireScripts

    {{-- Sweet Alert CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener("swal:model", function (e) {
            Swal.fire(
                'Success',
                'You are registered',
                'success'
            )
        });

        document.addEventListener("swal:cart", function (e) {
            Swal.fire(
                'Added',
                'Product Added To Cart',
                'success'
            )
        });

        document.addEventListener("swal:remove", function (e) {
            Swal.fire(
                'Removed',
                'Prdouct Removed From Cart',
                'success'
            )
        });
    </script>
</body>
</html>