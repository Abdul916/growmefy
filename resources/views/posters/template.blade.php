<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Poster</title>
    <style>
        @page {
            margin: 0;
            size: {{ $paperSize }}; /* Tamaño dinámico del documento */
        }
        body {
            font-family: 'Helvetica', Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ffffff;
            border: 5mm solid black; /* Borde negro grueso */
            padding: 10mm; /* Margen interno */
            margin: 5mm; /* Márgen alrededor del contenido */
        }
        .poster {
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .poster-title {
            /* Ajustes según el tamaño del papel */
            font-size: {{ strtolower($paperSize) == 'a5' ? '3rem' : '4.5rem' }};
            font-weight: bold;
            color: #333;
            margin: 30px auto 30px auto;
            text-transform: uppercase;
        }
        .qr-code {
            /* Ajustes según el tamaño del papel */
            width: {{ strtolower($paperSize) == 'a5' ? '60%' : '50%' }};
            max-width: {{ strtolower($paperSize) == 'a5' ? '200px' : '300px' }};
            margin-top: {{ strtolower($paperSize) == 'a5' ? '50px' : '80px' }};
            margin-bottom: 50px;
            border: 2px solid #ddd;
        }
        .footer {
            margin-top: {{ strtolower($paperSize) == 'a5' ? '20px' : '50px' }};
            font-size: {{ strtolower($paperSize) == 'a5' ? '1rem' : '1.5rem' }};
            color: #666;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="poster">
        <div class="poster-title">{{ $title }}</div>
        <img src="{{ $qr_code_url }}" alt="QR Code" class="qr-code">
        <div class="footer">Scan the QR code to leave your feedback!</div>
    </div>
</body>
</html>
