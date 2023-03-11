import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/stylecd4e.css',
                'resources/js/app.js',
                'resources/js/assets/vendor/modernizr-3.6.0.min.js',
                'resources/js/assets/vendor/jquery-3.6.0.min.js',
                'resources/js/assets/vendor/jquery-migrate-3.3.0.min.js',
                'resources/js/assets/vendor/bootstrap.bundle.min.js',
                'resources/js/assets/plugins/wow.js',
                'resources/js/assets/plugins/magnific-popup.js',
                'resources/js/assets/plugins/perfect-scrollbar.min.js',
                'resources/js/assets/plugins/select2.min.js',
                'resources/js/assets/plugins/isotope.js',
                'resources/js/assets/plugins/scrollup.js',
                'resources/js/assets/plugins/swiper-bundle.min.js',
                // 'resources/js/plugins/counterup.js',
                'resources/js/main8c94.js?v=4.1'
            ],
            refresh: true,
        }),
    ],
});