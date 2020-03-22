let mix = require('laravel-mix');

// Disable mix-manifest.json file
Mix.manifest.refresh = _ => void 0;

// Compilation of JavaScript and Scss files
mix.js('assets/scripts/main.js', 'public/scripts')
    .sass('assets/styles/main.scss', 'public/styles')
    .options({
        processCssUrls: false,
    })
    .setPublicPath('public');