<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>E-commerce Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200">


    <!-- NAVBAR -->
    <nav class="bg-white shadow px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">MyShop</h1>
        <div class="flex gap-4">
            <a href="/user/dashboard" class="text-gray-600 hover:text-black">Dashboard</a>
            <a href="#" class="relative text-gray-600 hover:text-black">
                Cart
                <span class="absolute -top-2 -right-3 bg-red-500 text-white text-xs rounded-full px-2">0</span>
            </a>
        </div>
    </nav>


    <!-- HERO -->
    <div class="bg-indigo-600 text-white text-center py-12">
        <h2 class="text-3xl font-bold">Shop Trending Products</h2>
        <p class="mt-2">Shop Now</p>
    </div>


    <!-- PRODUCTS GRID -->
<div class="p-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
    @foreach($products as $product)
    <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl group">

        <!-- Image -->
        <div class="overflow-hidden rounded-t-2xl bg-gray-50">
            <img 
                src="{{ $product['image'] }}" 
                alt="{{ $product['title'] }}"
                class="w-full h-52 object-contain p-4 transition-transform duration-300 group-hover:scale-110"
            >
        </div>

        <!-- Content -->
        <div class="p-4 space-y-2">

            <!-- Category -->
            <span class="inline-block text-xs px-2 py-1 rounded-full bg-indigo-100 text-indigo-600">
                {{ ucfirst($product['category']) }}
            </span>

            <!-- Title -->
            <h3 class="font-semibold text-sm leading-snug line-clamp-2">
                {{ $product['title'] }}
            </h3>

            <!-- Price -->
            <p class="text-lg font-bold text-gray-900">
                ₹ {{$product['price'] * 80 }}
            </p>

            <!-- Button -->
            <button
                class="w-full mt-2 bg-indigo-600 text-white py-2 rounded-xl 
                       hover:bg-indigo-700 active:scale-95 transition">
                Add to Cart
            </button>
        </div>

    </div>
    @endforeach
</div>



</body>

</html>