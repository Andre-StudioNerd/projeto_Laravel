import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],

    input: [
        "resources/js/app.js", // está puxando o Bootstrap aqui
    ],
});
