const gulp = require('gulp');
const scss = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify');
const sourcemaps = require('gulp-sourcemaps');

let paths = {
    'src' : './src/scss/styles.scss',
    'dest' : './dist/css/'
}

let pathsJs  = {
    'src' : './scripts/app.js',
    'dest' : './dist/js/'
}

let scssFiles = "./src/scss/**/*.scss";
let scriptFiles = "./scripts/**/*.js";

function styles(){
    gulp.src(paths.src)
    .pipe(scss())
    .on('error',scss.logError)
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(gulp.dest(paths.dest))
    .pipe(postcss([autoprefixer('last 2 versions'), cssnano()]))
    .pipe(sourcemaps.write('./'))
    .pipe(rename({
        suffix: '.min'
    }))
    .pipe(gulp.dest(paths.dest))
}

function scripts(){
    gulp.src(pathsJs.src)
    .pipe(uglify())
    .pipe(rename({
        suffix: '.min'
    }))
    .pipe(gulp.dest(pathsJs.dest))
}


function watch(){

    gulp.watch(scssFiles).on('change',styles);
    gulp.watch(scriptFiles).on('change',scripts);
}

exports.styles = styles;
exports.scripts = scripts
exports.watch = watch;

let build = gulp.parallel(watch,styles,scripts);

exports.default = build