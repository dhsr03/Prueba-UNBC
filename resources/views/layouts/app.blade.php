<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

        <!-- Custom Styles for Notifications -->
        <style>
            .notification {
                position: fixed;
                top: 20px;
                right: 20px;
                max-width: 400px;
                padding: 15px;
                border-radius: 5px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                opacity: 0;
                visibility: hidden;
                transition: opacity 0.5s, visibility 0.5s;
                display: flex;
                align-items: center;
            }

            .notification.success {
                background-color: #4CAF50;
                color: white;
            }

            .notification.error {
                background-color: #f44336;
                color: white;
            }

            .notification.warning {
                background-color: #ff9800;
                color: white;
            }

            .notification.show {
                opacity: 1;
                visibility: visible;
            }

            .notification .icon {
                margin-right: 10px;
                font-size: 20px;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- Custom Notification Script -->
        @if (session()->has('notification'))
            <div id="notification" class="notification {{ session('notification')['type'] }}">
                <i class="icon fa 
                    @if(session('notification')['type'] == 'success') 
                        fa-check-circle 
                    @elseif(session('notification')['type'] == 'error') 
                        fa-times-circle 
                    @elseif(session('notification')['type'] == 'warning') 
                        fa-exclamation-circle 
                    @endif"></i>
                <strong>{{ session('notification')['message'] }}</strong>
            </div>

            <script>
                // Mostrar la notificación y ocultarla después de 5 segundos
                window.onload = function() {
                    var notification = document.getElementById('notification');
                    notification.classList.add('show');
                    
                    setTimeout(function() {
                        notification.classList.remove('show');
                    }, 5000);
                };
            </script>
        @endif
    </body>
</html>
