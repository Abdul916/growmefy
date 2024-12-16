// vite.config.js

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';

export default defineConfig(({ command, mode }) => {
    const isDevelopment = command === 'serve';

    return {
        plugins: [
            laravel({
                input: [
                    'resources/sass/app.scss',
                    'resources/js/app.js',
                    'resources/js/blog.js',
                    'resources/css/filament/dashboard/theme.css',
                    'resources/css/filament/admin/theme.css',
                    'resources/css/app.css',
                ],
                refresh: true,
            }),
        ],
        // Configuraciones específicas para desarrollo
        ...(isDevelopment ? {
            server: {
                host: '0.0.0.0', // Permite conexiones desde otras máquinas en la red local
                port: 5173,
                strictPort: true,
                https: false, // Cambia a 'true' si tienes un certificado SSL local
                hmr: {
                    protocol: 'ws', // Usa 'wss' si configuras HTTPS
                    host: 'localhost', // Mantén 'localhost' para desarrollo local
                    port: 5173,
                },
            },
        } : {}),
        build: {
            manifest: true,
            outDir: 'public/build',
            rollupOptions: {
                input: [
                    'resources/sass/app.scss',
                    'resources/js/app.js',
                    'resources/js/blog.js',
                    'resources/css/filament/dashboard/theme.css',
                    'resources/css/filament/admin/theme.css',
                ],
            },
        },
    };
});
