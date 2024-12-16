<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - {{ $business->name }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/sass/app.scss')
    <style>
        .bg-blur {
            background-image: url('{{ asset("storage/{$business->background_image}") }}');
            background-size: cover;
            background-position: center;
            filter: blur(10px);
        }
        .powered-by {
            color: #9ca3af; /* Un gris claro */
            font-size: 0.75rem; /* Tamaño de fuente pequeño */
            text-align: center;
            text-decoration: none; /* Sin subrayado */
            transition: color 0.3s;
        }
        .powered-by:hover {
            color: #6b7280; /* Un gris un poco más oscuro al pasar el ratón */
        }
        .footer-fixed {
            position: fixed;
            bottom: 10px; /* Separación desde la parte inferior de la ventana */
            width: 100%;
            display: flex;
            justify-content: center;
            z-index: 30; /* Asegura que el enlace esté por encima del fondo */
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen relative">
    <div class="absolute top-0 left-0 w-full h-full bg-blur z-0"></div>
    <div class="absolute top-0 left-0 w-full h-full bg-white opacity-50 z-10"></div>
    <div class="bg-white bg-opacity-90 shadow-md rounded-lg p-4 max-w-sm text-center min-h-screen flex flex-col justify-center space-y-20 z-20">
        <img src="{{ asset('storage/' . $business->logo) }}" alt="{{ $business->name }} Logo" class="mx-auto mb-4 max-h-24 object-contain">
        <h1 class="text-3xl font-medium mb-6 font-montserrat">{{ $business->general_feedback_question }}</h1>
        <div class="flex justify-center space-x-10">
            <a href="{{ url('/feedback/' . $business->slug) }}" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-red-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 16.318A4.486 4.486 0 0 0 12.016 15a4.486 4.486 0 0 0-3.198 1.318M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                </svg>
            </a>
            <a href="{{ url('/review/' . $business->slug) }}" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-green-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Enlace fijo al pie de página -->
    <div class="footer-fixed">
        <a href="https://growmefy.com" class="powered-by" target="_blank">Powered by Growmefy</a>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
