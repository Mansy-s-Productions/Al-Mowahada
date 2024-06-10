import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: 'build',
        rollupOptions: {
            output: {
                entryFileNames: `[name].js`,
                assetFileNames: `[name].[ext]`
            },
        },
    },
    plugins: [
        laravel({
            input: ['resources/scss/style.scss', 'resources/js/main.js'],
            refresh: true,
        }),
    ],
});
