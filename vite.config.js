import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 'resources/css/app.css',
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/route/tests/tests.js',
            ],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                quietDeps: true,
                silenceDeprecations: [
                    'color-functions',
                    'global-builtin',
                    'import',
                    'if-function'
                ]
            }
        }
    }
});
