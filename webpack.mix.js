let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

// require('laravel-mix-tailwind');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

class TailwindExtractor {
  static extract(content) {
    return content.match(/[A-Za-z0-9-_:\/]+/g) || [];
  }
}

// admin
// mix.js('resources/script/admin/limit-excerpt.js', 'assets/js/admin/');

// home
// mix.js('resources/script/home/home.js','assets/js/home/')
//   .stylus('resources/stylus/home/home.styl', 'assets/css/home/')
//   .options({
//     postCss: [
//       tailwindcss('./tailwind/home.js'),
//     ]
//   })


// single - default 01
mix
  .stylus(
    'assets/styl/style.styl', 
    'assets/css/style.css'
  )
  .options({
    postCss: [
      tailwindcss('tailwind.js'),
    ]
  })
  .webpackConfig({
    module: {
      rules : [
        {
          test: /\.pug$/,
          loader: 'pug-plain-loader'
        }
    ]
    }
  })
  .disableNotifications()