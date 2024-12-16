<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page - {{ $business->name }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/sass/app.scss')
    <style>
        .bg-blur {
            background-image: url('{{ asset("storage/{$business->background_image}") }}');
            background-size: cover;
            background-position: center;
            filter: blur(10px);
        }
        .form-error {
            color: #ff4d4f;
            font-size: 0.875em;
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
    <div class="bg-white bg-opacity-90 shadow-md rounded-lg p-4 max-w-sm text-center min-h-screen flex flex-col justify-center space-y-8 z-20">
        <img src="{{ asset('storage/' . $business->logo) }}" alt="{{ $business->name }} Logo" class="mx-auto mb-4 max-h-24 object-contain">
        <h1 class="text-xl font-medium mb-6 font-montserrat">{{ $business->thank_you_phrase }}</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ url('/submit-feedback') }}" method="POST" class="flex flex-col space-y-4">
            @csrf
            <input type="hidden" name="team_id" value="{{ $business->id }}">
            <div>
                <input type="text" name="name" placeholder="Your name" class="form-input w-full rounded-full px-4 py-2 border border-gray-300" value="{{ old('name') }}">
                @error('name')
                    <div class="form-error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input type="email" name="email" placeholder="Your email" class="form-input w-full rounded-full px-4 py-2 border border-gray-300" value="{{ old('email') }}">
                @error('email')
                    <div class="form-error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input type="text" name="phone" placeholder="Phone with area code" class="form-input w-full rounded-full px-4 py-2 border border-gray-300" value="{{ old('phone') }}">
                @error('phone')
                    <div class="form-error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <textarea name="review" rows="4" placeholder="Review" class="form-input w-full rounded-lg px-4 py-2 border border-gray-300">{{ old('review') }}</textarea>
                @error('review')
                    <div class="form-error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="bg-black text-white font-medium py-2 px-4 rounded-full hover:bg-gray-800 transition">Send</button>
        </form>
    </div>
    <!-- Enlace fijo al pie de página -->
    <div class="footer-fixed">
        <a href="https://growmefy.com" class="powered-by" target="_blank">Powered by Growmefy</a>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
