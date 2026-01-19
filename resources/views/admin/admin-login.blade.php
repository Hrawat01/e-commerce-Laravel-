<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @vite('resources/css/app.css')
    <!-- Tailwind via Vite -->
</head>

<body class="bg-grey-200 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-4xl bg-blue-300 shadow-lg rounded-lg flex overflow-hidden">

        <!-- Left side: Login form -->
        <div class="w-1/2 p-8">
            <h2 class="text-2xl font-bold text-gray-700 mb-6">Admin Panel</h2>
            <p class="text-sm text-gray-500 mb-6">Sign in to start your session</p>

            <form action="{{ route('admin.dashboard') }}" method="POST">
                @csrf

                <!-- Email -->



                @error('user')
                <h1 class="text-red-600 text-sm text-center font-bold">{{$message}}</h1>
                @enderror


                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <div class="flex items-center border rounded-lg px-3 py-2 bg-gray-50">
                        <!-- Font Awesome icon -->
                        <i class="fa-solid fa-envelope text-gray-400 mr-2"></i>
                        <input type="email" id="email" name="email" class="w-full bg-transparent focus:outline-none"
                            placeholder="Enter your email">
                    </div>
                    @error('email')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                    <div class="flex items-center border rounded-lg px-3 py-2 bg-gray-50">
                        <!-- Font Awesome icon -->
                        <i class="fa-solid fa-lock text-gray-400 mr-2"></i>
                        <input type="password" id="password" name="password"
                            class="w-full bg-transparent focus:outline-none" placeholder="Enter your password">
                    </div>
                    @error('password')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Login button -->
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                    Login
                </button>

                <!-- Forgot password -->
                <div class="mt-4 text-right">
                    <a href="{{route('user.login')}}" class="text-sm text-blue-600 hover:underline">go to the user login</a>
                </div>
            </form>
        </div>

        <!-- Right side: SVG illustration -->
        <div class="w-1/2 bg-blue-50 flex items-center justify-center">
            <svg class="w-48 h-48 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 11c0-1.104-.896-2-2-2s-2 .896-2 2 .896 2 2 2 2-.896 2-2zm6-2V7a6 6 0 10-12 0v2H4v12h16V9h-2z" />
            </svg>
        </div>
    </div>

</body>

</html>