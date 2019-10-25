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

// 644 09 11 opc 4 cambio de prestador ....   
//  115888324.. neuro fic ltda 668 88 70
//  martes 29 a las 11:30 am
// av 5 a nte 20 n 68 

mix.sass('resources/sass/app.scss', 'public/css/main-file.css');
    
mix.styles(
    [
        "resources/vendors/css/toastr.min.css",
    ],
    "public/css/vendors.css"
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
 