//const autoprefixer = require("autoprefixer");
const mix          = require("laravel-mix");


mix.options({
    postCss: [require('autoprefixer')],
});


mix.js(
    [
        "resources/js/app.js",
        "resources/js/files/btn-go-top.js",
    ], 
    "public/js/app.js");

    /*
mix.scripts(
    [
        "resources/vendors/js/toastr.min.js",
    ], 
    "public/js/Vendors.js"); // Archivo de salida JS
*/

mix.sass('resources/sass/app.scss', 'public/css/sas.css');
    
    

mix.styles(
    [
        "resources/css/app.css",
        "resources/css/btn-go-top.css",
        //'resources/css/app_colors.css',
        //'resources/css/app_cards.css',
        //'resources/css/app_tables.css',
        "resources/vendors/css/toastr.min.css",
        "resources/js/apps/balquimia-site/css/app.css",
        "resources/js/apps/balquimia-site/css/header.css",
        "resources/js/apps/balquimia-site/css/quienes-somos.css",
        "resources/js/apps/balquimia-site/css/productos-servicios.css",
        "resources/js/apps/balquimia-site/css/clientes.css",
        "resources/js/apps/balquimia-site/css/footer.css",
    ],
    "public/css/app.css"
); // Archivo de salida CSS


mix.webpackConfig ({
    watchOptions : {
        ignored : /node_modules/
    }
});

mix.browserSync({
    proxy: "http://balquimia-vue-laravel-6.local/",
    open: false,
    injectChanges: true,
    watch: true,
    snippetOptions: {
        rule: {
            match: /<\/body>/i,
            fn: function(snippet, match) {
                return snippet + match;
            }
        }
    }
    //browser : 'Google Chrome',
});
mix.disableNotifications();

if (mix.inProduction()) {
    mix.version();
}
 