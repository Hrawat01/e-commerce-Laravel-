<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>E-commerce Dashboard</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">


    <h1 class="text-2xl font-bold mb-6">E-commerce Dashboard</h1>


    <!-- STATS -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-4 rounded-xl shadow">
            <p class="text-gray-500">Total Sales</p>
            <p class="text-xl font-bold">₹ {{ $totalSales }}</p>
        </div>
        <div class="bg-white p-4 rounded-xl shadow">
            <p class="text-gray-500">Orders</p>
            <p class="text-xl font-bold">{{ $ordersCount }}</p>
        </div>
        <div class="bg-white p-4 rounded-xl shadow">
            <p class="text-gray-500">Customers</p>
            <p class="text-xl font-bold">{{ $customersCount }}</p>
        </div>
        <div class="bg-white p-4 rounded-xl shadow">
            <p class="text-gray-500">Products</p>
            <p class="text-xl font-bold">{{ $productsCount }}</p>
        </div>
    </div>


    <!-- RECENT ORDERS -->
    <div class="bg-white p-4 rounded-xl shadow">
        <h2 class="text-lg font-semibold mb-4">Recent Orders</h2>
        <table class="w-full text-sm">
            <thead>
                <tr class="text-left text-gray-500 border-b">
                    <th class="py-2">Order ID</th>
                    <th>Customer</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recentOrders as $order)
                <tr class="border-b last:border-none">
                    <td class="py-2">{{ $order['id'] }}</td>
                    <td>{{ $order['customer'] }}</td>
                    <td>
                        <span class="px-2 py-1 rounded text-xs
{{ $order['status'] == 'Completed' ? 'bg-green-100 text-green-700' : '' }}
{{ $order['status'] == 'Pending' ? 'bg-yellow-100 text-yellow-700' : '' }}
{{ $order['status'] == 'Cancelled' ? 'bg-red-100 text-red-700' : '' }}">
                            {{ $order['status'] }}
                        </span>
                    </td>
                    <td>₹ {{ $order['total'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <form method="get" action="{{ route('admin.login') }}" class="flex justify-center items-center">

        <button type="submit" class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600 mt-6 ">
            Logout
        </button>
    </form>

</body>

</html>