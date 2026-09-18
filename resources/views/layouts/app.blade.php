<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ruhana Faiz Restiyanti — Portfolio')</title>
    <meta name="description" content="Portfolio Ruhana Faiz Restiyanti, Mahasiswa D4 Teknologi Rekayasa Perangkat Lunak UGM.">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        indigo: {
                            600: '#4F46E5',
                        }
                    },
                    fontFamily: {
                        serif: ['"Playfair Display"', 'serif'],
                        sans: ['"Inter"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-gray-50/50 text-gray-900 antialiased min-h-screen flex flex-col justify-between">
    @include('partials.navbar')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
