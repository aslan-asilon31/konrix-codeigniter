const { series, src, dest, parallel, watch } = require("gulp");
const browsersync = require("browser-sync");
const concat = require("gulp-concat");
const cleanCSS = require("clean-css");
const del = require("del");
const fileinclude = require("gulp-file-include");
const imagemin = require("gulp-imagemin");
const npmdist = require("gulp-npm-dist");
const newer = require("gulp-newer");
const rename = require("gulp-rename");
const sourcemaps = require("gulp-sourcemaps");
const sass = require("gulp-sass")(require("sass"));
const uglify = require("gulp-uglify");
const postcss = require('gulp-postcss');
const autoprefixer = require("autoprefixer");
const gulpautoprefixer = require("gulp-autoprefixer");
const tailwindcss = require('tailwindcss');

const paths = {
    baseSrc: "public/assets/source/",              // source directory
    baseDist: "public/assets/",                    // build directory
    baseSrcAssets: "public/assets/source/",        // source assets directory
    baseDistAssets: "public/assets/",              // build assets directory
    configTailwind: "./tailwind.config.js",  // tailwind.config.js file
};

const clean = function (done) {
    del.sync(paths.baseDist, done());
};

const vendor = function () {
    const out = paths.baseDistAssets + "libs/";
    return src(npmdist(), { base: "./node_modules" })
        .pipe(rename(function (path) {
            path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '');
        }))
        .pipe(dest(out));
};

const data = function () {
    const out = paths.baseDistAssets + "data/";
    return src(paths.baseSrcAssets + "data/**/*")
        .pipe(dest(out));
};

const fonts = function () {
    const out = paths.baseDistAssets + "fonts/";
    return src(paths.baseSrcAssets + "fonts/**/*")
        .pipe(newer(out))
        .pipe(dest(out));
};

const images = function () {
    var out = paths.baseDistAssets + "images";
    return src(paths.baseSrcAssets + "images/**/*")
        .pipe(newer(out))
        // .pipe(imagemin())
        .pipe(dest(out));
};

const javascript = function () {
    const out = paths.baseDistAssets + "js/";

    // copying and minifying all other js
    return src(paths.baseSrcAssets + "js/**/*.js")
        .pipe(dest(out))
        .pipe(uglify())
        .pipe(rename({ suffix: ".min" }))
        .pipe(dest(out));
};

const cssOptions = {
    compatibility: "*", // (default) - Internet Explorer 10+ compatibility mode
    inline: ["all"],    // enables all inlining, same as ['local', 'remote']
    level: 2,           // Optimization levels. The level option can be either 0, 1 (default), or 2, e.g.
};

const app = function () {
    const out = paths.baseDistAssets + "css/";

    return src(paths.baseSrcAssets + "scss/app.scss")
        .pipe(sourcemaps.init())
        .pipe(sass.sync()) // scss to css
        .pipe(postcss([
            tailwindcss(paths.configTailwind),
            autoprefixer({
                overrideBrowserslist: ["last 2 versions"],
            })
        ]))
        .pipe(dest(out))
        .on("data", function (file) {
            const buferFile = new cleanCSS(cssOptions).minify(file.contents);
            return (file.contents = Buffer.from(buferFile.styles));
        })
        .pipe(rename({ suffix: ".min" }))
        .pipe(sourcemaps.write("./")) // source maps
        .pipe(dest(out));
};

const icons = function () {
    const out = paths.baseDistAssets + "css/";

    return src(paths.baseSrcAssets + "scss/icons.scss")
        .pipe(sourcemaps.init())
        .pipe(sass.sync()) // scss to css
        .pipe(
            gulpautoprefixer({
                overrideBrowserslist: ["last 2 versions"],
            })
        )
        .pipe(dest(out))
        .on("data", function (file) {
            const buferFile = new cleanCSS(cssOptions).minify(file.contents);
            return (file.contents = Buffer.from(buferFile.styles));
        })
        .pipe(rename({ suffix: ".min" }))
        .pipe(sourcemaps.write("./")) // source maps
        .pipe(dest(out));
};



function watchFiles() {
    watch(paths.baseSrcAssets + "data/**/*", series(data));
    watch(paths.baseSrcAssets + "fonts/**/*", series(fonts));
    watch(paths.baseSrcAssets + "images/**/*", series(images));
    watch(paths.baseSrcAssets + "js/**/*", series(javascript));
    watch([paths.baseSrcAssets + "scss/icons.scss", + paths.baseSrcAssets + "scss/icons/*.scss"], series(icons));
    watch([paths.baseSrcAssets + "scss/**/*.scss", "!" + paths.baseSrcAssets + "scss/icons.scss", "!" + paths.baseSrcAssets + "scss/icons/*.scss"], series(app));
}

// Producaton Tasks
exports.default = series(
    vendor,
    parallel(data, fonts, images, javascript, app, icons),
    parallel(watchFiles)
);

// Clean Tasks
exports.clean = series(
    clean
);

// Build Tasks
exports.build = series(
    vendor,
    parallel(data, fonts, images, javascript, app, icons)
);
