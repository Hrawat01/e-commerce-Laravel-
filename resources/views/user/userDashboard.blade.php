<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 ">



     <x-user-nav />
     <div class="p-6">

    <!-- USER HEADER -->
    <div class="bg-white p-6 rounded-xl shadow mb-6 flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold">Welcome, {{ $user['name'] }}</h1>
            <p class="text-gray-500">{{ $user['email'] }}</p>
        </div>
        <div class="text-right">
            <p class="text-sm text-gray-500">Wallet Balance</p>
            <p class="text-xl font-bold text-green-600">₹ {{ number_format($user['wallet']) }}</p>
        </div>
    </div>


    <!-- STATS -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="bg-white p-4 rounded-xl shadow">
            <p class="text-gray-500">My Orders</p>
            <p class="text-xl font-bold">{{ $stats['orders'] }}</p>
        </div>
        <div class="bg-white p-4 rounded-xl shadow">
            <p class="text-gray-500">Wishlist</p>
            <p class="text-xl font-bold">{{ $stats['wishlist'] }}</p>
        </div>
        <div class="bg-white p-4 rounded-xl shadow">
            <p class="text-gray-500">Cart Items</p>
            <p class="text-xl font-bold">{{ $stats['cart'] }}</p>
        </div>
    </div>


    <!-- RECENT ORDERS -->
    <div class="bg-white p-4 rounded-xl shadow">
        <h2 class="text-lg font-semibold mb-4">Recent Orders</h2>
        <table class="w-full text-sm">
            <thead>
                <tr class="text-left text-gray-500 border-b">
                    <th class="py-2">Order ID</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recentOrders as $order)
                <tr class="border-b last:border-none">
                    <td class="py-2">{{ $order['id'] }}</td>
                    <td>{{ $order['date'] }}</td>
                    <td>
                        <span class="px-2 py-1 rounded text-xs
{{ $order['status'] == 'Delivered' ? 'bg-green-100 text-green-700' : '' }}
{{ $order['status'] == 'Shipped' ? 'bg-blue-100 text-blue-700' : '' }}
{{ $order['status'] == 'Cancelled' ? 'bg-red-100 text-red-700' : '' }}">
                            {{ $order['status'] }}
                        </span>
                    </td>
                    <td>₹ {{ number_format($order['total']) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 <form method="POST" action="{{ route('userlogout') }}" class="flex justify-center items-center">
@csrf
        <button type="submit" class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600 mt-6 ">
            Logout
        </button>
    </form>
     </div>
</body>

</html>