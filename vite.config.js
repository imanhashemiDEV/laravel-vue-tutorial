import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import vue from '@vitejs/plugin-vue';
import path from 'path'
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/front/app.css', 'resources/js/front/app.js'],
            refresh: true,
            buildDirectory:'front'
        },{
            input: ['resources/css/admin/panel.css', 'resources/js/admin/panel.js'],
            refresh:true,
            buildDirectory:'panel'
        }),
        tailwindcss(),
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

    ],

    resolve: {
        alias: {
            'ziggy-js': path.resolve('vendor/tightenco/ziggy'),
        },
    },
});
