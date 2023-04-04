import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue({
            template: {
                transformAssetUrls: {
                    // The Vue plugin will re-write asset URLs, when referenced
                    // in Single File Components, to point to the Laravel web
                    // server. Setting this to `null` allows the Laravel plugin
                    // to instead re-write asset URLs to point to the Vite
                    // server instead.
                    base: null,

                    // The Vue plugin will parse absolute URLs and treat them
                    // as absolute paths to files on disk. Setting this to
                    // `false` will leave absolute URLs un-touched so they can
                    // reference assets in the public directory as expected.
                    includeAbsolute: false,
                },
            },
        }),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/assets/css/stylecd4e.css?version=4.1',
                'resources/assets/admin/css/stylecd4e.css',
                'resources/js/app.js',
                'resources/assets/js/vendor/modernizr-3.6.0.min.js',
                'resources/assets/js/vendor/jquery-3.6.0.min.js',
                'resources/assets/js/vendor/jquery-migrate-3.3.0.min.js',
                'resources/assets/js/vendor/bootstrap.bundle.min.js',
                'resources/assets/js/plugins/waypoints.js',
                'resources/assets/js/plugins/wow.js',
                'resources/assets/js/plugins/magnific-popup.js',
                'resources/assets/js/plugins/perfect-scrollbar.min.js',
                'resources/assets/js/plugins/select2.min.js',
                // 'resources/assets/js/plugins/isotope.js',
                // 'resources/assets/js/plugins/scrollup.js',
                'resources/assets/js/plugins/swiper-bundle.min.js',
                'resources/assets/admin/js/plugins/jquery.circliful.js',
                // 'resources/assets/js/plugins/charts/index.js',
                // 'resources/assets/js/plugins/charts/xy.js',
                // 'resources/assets/js/plugins/charts/Animated.js',
                // 'resources/assets/js/plugins/armcharts5-script.js',
                // 'resources/js/plugins/counterup.js',
                'resources/assets/js/main8c94.js?v=4.1',
                'resources/assets/admin/js/main8c94.js?v=4.1'
            ],
            refresh: true,
        }),
    ],
});