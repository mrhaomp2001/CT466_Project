import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",

                "resources/css/animate.css",
                "resources/css/flex-slider.css",
                "resources/css/fontawesome.css",
                "resources/css/owl.css",
                "resources/css/cyborg.css",

                "resources/js/custom.js",   
                "resources/js/owl-carousel.js",
                "resources/js/popup.js",
                "resources/js/tabs.js",
            ],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            output: {
                entryFileNames: `assets/[name].js`,
                chunkFileNames: `assets/[name].js`,
                assetFileNames: `assets/[name].[ext]`,
            },
        },
        minify: false,
    },
});
