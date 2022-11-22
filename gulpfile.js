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

let scssFiles = "./src/scss/**/*.scss";
let scriptFiles = "./scripts/**/*.js";

function styles(){
    gulp.src(paths.src)
    .pipe(scss())
    .on('error',scss.logError)
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(gulp.dest(paths.dest))
    .pipe(postcss([autoprefixer('last 2 versions'), cssnano()]))
    .pipe(rename({
        suffix: '.min'
    }))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(paths.dest))
}

function watch(){

    gulp.watch(scssFiles).on('change',styles);
}

exports.styles = styles;
exports.watch = watch;

let build = gulp.parallel(watch,styles);

exports.default = build