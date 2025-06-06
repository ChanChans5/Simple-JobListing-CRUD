<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="/">Careers</a>
                <a href="/">Salaries</a>
                <a href="/">Companies</a>
            </div>
            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Post A Job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button>Log out</button>
                    </form>
                </div>
            @endauth
            @guest
                <div>
                    <a href="/login">Log In</a>  
                    /                 
                    <a href="/register">Sign Up</a>
                </div>
            @endguest
        </nav>
    </div>
    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</body>

</html>
