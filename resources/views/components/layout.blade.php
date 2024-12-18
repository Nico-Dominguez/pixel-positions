<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white">
    <div>
        <nav class="flex justify-between items-center font-semibold px-10 py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
                </a>
            </div>
            <div class="flex space-x-4">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
                <div class="flex space-x-4">
                    <a href="/jobs/create">Post a Job</a>
                    <form method="POST" action="/logout" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="hover:text-gray-400">Log Out</button>
                    </form>
                </div>
            @endauth

            @guest()
                <div class="flex space-x-4">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 p-4 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>