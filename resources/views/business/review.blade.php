<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Page - {{ $business->name }}</title>
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
    <div class="bg-white bg-opacity-90 shadow-md rounded-lg p-4 max-w-sm text-center min-h-screen flex flex-col justify-center space-y-10 z-20">
        <img src="{{ asset('storage/' . $business->logo) }}" alt="{{ $business->name }} Logo" class="mx-auto mb-4 max-h-24 object-contain">
        <h1 class="text-2xl font-medium mb-6 font-montserrat">{{ $business->ask_for_review }}</h1>
        <div class="flex flex-col space-y-4">
            @if ($business->gbp_url)
                <a href="{{ $business->gbp_url }}" class="flex items-center justify-center bg-white border border-gray-300 rounded-full py-2 px-4 shadow hover:shadow-lg transition space-x-2">
                    <img src="{{ asset('storage/icons/google.svg') }}" alt="Google" class="w-6 h-6">
                    <span class="font-medium text-gray-700">Google</span>
                </a>
            @endif
            @if ($business->facebook_url)
                <a href="{{ $business->facebook_url }}" class="flex items-center justify-center bg-white border border-gray-300 rounded-full py-2 px-4 shadow hover:shadow-lg transition space-x-2">
                    <img src="{{ asset('storage/icons/facebook.svg') }}" alt="Facebook" class="w-6 h-6">
                    <span class="font-medium text-gray-700">Facebook</span>
                </a>
            @endif
            @if ($business->tripadvisor_url)
                <a href="{{ $business->tripadvisor_url }}" class="flex items-center justify-center bg-white border border-gray-300 rounded-full py-2 px-4 shadow hover:shadow-lg transition space-x-2">
                    <img src="{{ asset('storage/icons/tripadvisor.svg') }}" alt="Tripadvisor" class="w-6 h-6">
                    <span class="font-medium text-gray-700">Tripadvisor</span>
                </a>
            @endif
            @if ($business->trustpilot_url)
                <a href="{{ $business->trustpilot_url }}" class="flex items-center justify-center bg-white border border-gray-300 rounded-full py-2 px-4 shadow hover:shadow-lg transition space-x-2">
                    <img src="{{ asset('storage/icons/trustpilot.svg') }}" alt="Trustpilot" class="w-6 h-6">
                    <span class="font-medium text-gray-700">Trustpilot</span>
                </a>
            @endif
            @if ($business->booking_url)
                <a href="{{ $business->booking_url }}" class="flex items-center justify-center bg-white border border-gray-300 rounded-full py-2 px-4 shadow hover:shadow-lg transition space-x-2">
                    <img src="{{ asset('storage/icons/booking.svg') }}" alt="Booking" class="w-6 h-6">
                    <span class="font-medium text-gray-700">Booking</span>
                </a>
            @endif
            @if ($business->airbnb_url)
                <a href="{{ $business->airbnb_url }}" class="flex items-center justify-center bg-white border border-gray-300 rounded-full py-2 px-4 shadow hover:shadow-lg transition space-x-2">
                    <img src="{{ asset('storage/icons/airbnb.svg') }}" alt="Airbnb" class="w-6 h-6">
                    <span class="font-medium text-gray-700">Airbnb</span>
                </a>
            @endif
            @if ($business->google_play_url)
                <a href="{{ $business->google_play_url }}" class="flex items-center justify-center bg-white border border-gray-300 rounded-full py-2 px-4 shadow hover:shadow-lg transition space-x-2">
                    <img src="{{ asset('storage/icons/google-play.svg') }}" alt="Google Play" class="w-6 h-6">
                    <span class="font-medium text-gray-700">Google Play</span>
                </a>
            @endif
            @if ($business->app_store_url)
                <a href="{{ $business->app_store_url }}" class="flex items-center justify-center bg-white border border-gray-300 rounded-full py-2 px-4 shadow hover:shadow-lg transition space-x-2">
                    <img src="{{ asset('storage/icons/app-store.svg') }}" alt="App Store" class="w-6 h-6">
                    <span class="font-medium text-gray-700">App Store</span>
                </a>
            @endif
            @if ($business->amazon_url)
                <a href="{{ $business->amazon_url }}" class="flex items-center justify-center bg-white border border-gray-300 rounded-full py-2 px-4 shadow hover:shadow-lg transition space-x-2">
                    <img src="{{ asset('storage/icons/amazon.svg') }}" alt="Amazon" class="w-6 h-6">
                    <span class="font-medium text-gray-700">Amazon</span>
                </a>
            @endif
            @if ($business->ebay_url)
                <a href="{{ $business->ebay_url }}" class="flex items-center justify-center bg-white border border-gray-300 rounded-full py-2 px-4 shadow hover:shadow-lg transition space-x-2">
                    <img src="{{ asset('storage/icons/ebay.svg') }}" alt="eBay" class="w-6 h-6">
                    <span class="font-medium text-gray-700">eBay</span>
                </a>
            @endif
            @if ($business->yelp_url)
                <a href="{{ $business->yelp_url }}" class="flex items-center justify-center bg-white border border-gray-300 rounded-full py-2 px-4 shadow hover:shadow-lg transition space-x-2">
                    <img src="{{ asset('storage/icons/yelp.svg') }}" alt="Yelp" class="w-6 h-6">
                    <span class="font-medium text-gray-700">Yelp</span>
                </a>
            @endif
        </div>
    </div>
    <!-- Enlace fijo al pie de página -->
    <div class="footer-fixed">
        <a href="https://growmefy.com" class="powered-by" target="_blank">Powered by Growmefy</a>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
