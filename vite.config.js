import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: 'public/assets/build',
        rollupOptions: {
            output: {
                entryFileNames: `[name].js`,
                assetFileNames: `[name].[ext]`
            },
        },
    },
    plugins: [
        laravel({
            input: ['resources/scss/main.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
