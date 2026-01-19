<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>E-commerce Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-indigo-100">


    <!-- NAVBAR -->
    <x-user-nav />


<!-- HERO -->
<div class="bg-gradient-to-r from-indigo-500 via-pink-500  to-purple-600 text-white py-14">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="text-4xl font-bold mb-3">
            Discover Trending Products
        </h2>
        <p class="text-indigo-100 mb-8">
            Search, filter and shop your favourite items
        </p>

        <!-- SEARCH BAR -->
        <form class="bg-white rounded-2xl p-3 flex flex-col md:flex-row gap-3 shadow-lg">

            <!-- Search Input -->
            <input
                type="text"
                placeholder="Search for products..."
                class="flex-1 px-4 py-3 rounded-xl text-gray-700 focus:outline-none"
            >

            <!-- Category Dropdown -->
            <select
            class="px-4 py-3 rounded-xl text-gray-700 focus:outline-none">
            <option value="">All Categories</option>
            @foreach ($products->unique('category') as $category)
            <option value="{{$category['category']}}">{{ucfirst($category['category'])}}</option>
            @endforeach
              
            </select>

            <!-- Search Button -->
            <button
                type="submit"
                class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl transition">
                Search
            </button>
        </form>

    </div>
</div>








    <!-- PRODUCTS GRID -->
<div class="p-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
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
<span class="inline-block text-xs px-2 py-1 rounded-full bg-blue-100 text-blue-600">
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
  class="w-full mt-2 bg-blue-600 text-white py-2 rounded-xl 
         hover:bg-blue-700 active:scale-95 transition">
  Add to Cart
</button>


        </div>

    </div>
    @endforeach
</div>



</body>

</html>