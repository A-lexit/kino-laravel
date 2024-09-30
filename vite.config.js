import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost'
        }
    },
    build: {
        chunkSizeWarningLimit: 100000000
    },
    plugins: [
        laravel({
            input: [
                'resources/assets/admin/css/alt/adminlte.components.css',
                'resources/assets/admin/css/alt/adminlte.core.css',
                'resources/assets/admin/css/alt/adminlte.extra-components.css',
                'resources/assets/admin/css/alt/adminlte.pages.css',
                'resources/assets/admin/css/alt/adminlte.plugins.css',
                'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
                'resources/assets/admin/plugins/select2/css/select2.css',
                'resources/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.css',
                'resources/assets/admin/plugins/jquery/jquery.min.js',
                'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
                'resources/assets/admin/plugins/select2/js/select2.full.js',
                'resources/assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.js',
                'resources/assets/admin/js/adminlte.js',
                'resources/assets/admin/js/demo.js',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
