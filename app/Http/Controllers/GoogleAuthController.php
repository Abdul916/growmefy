<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use TomShaw\GoogleApi\GoogleClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GoogleAuthController extends Controller
{
    /**
     * Redirige al usuario al flujo de autenticación de Google.
     *
     * @param GoogleClient $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(GoogleClient $client)
    {
        try {
            // Intenta generar la URL de autenticación de Google
            $authUrl = $client->createAuthUrl();

            // Depurar para verificar que la URL se está generando correctamente
            if (!$authUrl) {
                throw new \Exception('Failed to generate Google authentication URL.');
            }

            // Verifica el tipo de dato devuelto
            if (!is_string($authUrl)) {
                throw new \Exception('Expected a string URL, got: ' . gettype($authUrl));
            }

            // Redirige al usuario a la página de autenticación de Google
            return redirect()->away($authUrl);
        } catch (\Exception $e) {
            // Maneja cualquier error y muestra el mensaje adecuado
            return redirect()->route('homepage')->withErrors('Failed to initiate OAuth: ' . $e->getMessage());
        }
    }

    /**
     * Maneja la devolución de Google después de la autenticación.
     *
     * @param Request $request
     * @param GoogleClient $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function callback(Request $request, GoogleClient $client)
    {
        $authCode = $request->get('code');

        try {
            // Intercambia el código de autorización por un token de acceso
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

            if ($accessToken) {
                $client->setAccessToken($accessToken);

                // Aquí podrías guardar el token en la base de datos si es necesario
                return redirect()->route('home')->with('success', 'Google access token generated successfully.');
            } else {
                throw new \Exception('Failed to obtain access token.');
            }
        } catch (\Exception $e) {
            return redirect()->route('home')->withErrors($e->getMessage());
        }
    }
}
