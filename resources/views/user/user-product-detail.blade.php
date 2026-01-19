<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $product['title'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-indigo-100 via-purple-100 to-pink-100 h-full overflow-x-hidden">

<x-user-nav />

<div class="max-w-6xl mx-auto sm:px-6 ">

    <!-- PRODUCT CARD -->
    <div class="bg-white rounded-3xl shadow-xl overflow-hidden">

        <div class="grid grid-cols-1 lg:grid-cols-2">

            <!-- IMAGE SECTION -->
            <div class="bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center p-6 sm:p-8">
                <img 
                    src="{{ $product['image'] }}" 
                    alt="{{ $product['title'] }}"
                    class="max-h-[280px] sm:max-h-[350px] lg:max-h-[420px]
                           object-contain transition hover:scale-105 duration-300"
                >
            </div>

            <!-- CONTENT SECTION -->
            <div class="p-6 sm:p-8 space-y-4 sm:space-y-5">

                <!-- Category -->
                <span class="inline-block bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-xs sm:text-sm font-medium">
                    {{ ucfirst($product['category']) }}
                </span>

                <!-- Title -->
                <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 leading-snug">
                    {{ $product['title'] }}
                </h1>

                <!-- Rating -->
                <div class="flex items-center gap-2 text-sm">
                    <div class="text-yellow-400">⭐⭐⭐⭐☆</div>
                    <span class="text-gray-500">(4.3 reviews)</span>
                </div>

                <!-- Price -->
                <div class="flex items-end gap-3 flex-wrap">
                    <p class="text-2xl sm:text-3xl font-extrabold text-indigo-600">
                        ₹ {{ $product['price'] * 80 }}
                    </p>
                    <p class="text-gray-400 line-through text-sm sm:text-base">
                        ₹ {{ ($product['price'] * 80) + 500 }}
                    </p>
                </div>

                <!-- Description -->
                <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                    {{ $product['description'] }}
                </p>

                <!-- Quantity -->
                <div class="flex items-center gap-3">
                    <span class="font-semibold text-gray-700 text-sm">Quantity</span>
                    <div class="flex items-center border rounded-xl overflow-hidden">
                        <button class="px-3 py-2 bg-gray-100 hover:bg-gray-200">−</button>
                        <input 
                            type="number" 
                            value="1" 
                            min="1"
                            class="w-14 text-center text-sm focus:outline-none"
                        >
                        <button class="px-3 py-2 bg-gray-100 hover:bg-gray-200">+</button>
                    </div>
                </div>

                <!-- ACTION BUTTONS -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button
                        class="w-full sm:w-1/2 bg-indigo-600 text-white py-3 rounded-xl text-sm sm:text-base font-semibold
                               hover:bg-indigo-700 active:scale-95 transition">
                        🛒 Add to Cart
                    </button>

                    <button
                        class="w-full sm:w-1/2 bg-gradient-to-r from-pink-500 to-purple-600 
                               text-white py-3 rounded-xl text-sm sm:text-base font-semibold
                               hover:opacity-90 active:scale-95 transition">
                        ⚡ Buy Now
                    </button>
                </div>

                <!-- Extra Info -->
                <div class="pt-4 grid grid-cols-2 gap-3 text-xs sm:text-sm text-gray-600">
                    <p>🚚 Free Delivery</p>
                    <p>🔁 7-Day Return</p>
                    <p>💳 Secure Payment</p>
                    <p>⭐ Top Rated Product</p>
                </div>

            </div>
        </div>
    </div>

</div>

</body>
</html>
