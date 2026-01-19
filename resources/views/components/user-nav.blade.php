<nav class="bg-emerald-500 shadow-xl px-6 py-4 flex justify-between items-center mb-6 border border-pink-300">
  <h1 class="text-xl font-bold text-white">MyShop</h1>
  <div class="flex gap-4">
    <a href="{{ route('user.home') }}" class="text-white font-semibold hover:text-pink-100">Home</a>
    <a href="{{ route('user.dashboard') }}" class="text-gray-200 hover:text-white">Dashboard</a>
    <a href="{{ route('user.home') }}" class="relative text-gray-200 hover:text-white">
      Cart
      <span class="absolute -top-2 -right-3 bg-red-500 text-white text-xs rounded-full px-2">0</span>
    </a>
  </div>
</nav>