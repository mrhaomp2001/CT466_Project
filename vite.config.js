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
                "resources/css/bootstrap.css",
                "resources/css/bootstrap.min.css",

                "resources/js/custom.js",
                "resources/js/isotope.js",
                "resources/js/owl-carousel.js",
                "resources/js/popup.js",
                "resources/js/tabs.js",
                "resources/js/jquery.js",
                "resources/js/bootstrap.min.js",
            ],
            refresh: true,
        }),
    ],
});
