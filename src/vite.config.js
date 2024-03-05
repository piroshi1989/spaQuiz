import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";
import { fileURLToPath, URL } from 'node:url'

export default defineConfig({
    server: {
        host: true,
        hmr: {
            host: 'localhost'
        },
    },
    plugins: [
        vue(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.ts'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
          '@': fileURLToPath(new URL('./resources/js', import.meta.url))
        }
      }
});
