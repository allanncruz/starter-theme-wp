const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require("autoprefixer");
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const plumber = require("gulp-plumber");
const del = require("del");
const cssnano = require("cssnano");
const postcss = require("gulp-postcss")

function copyFonts() {
    return gulp.src('src/font/**/*')
        .pipe(gulp.dest('dist/fonts'));
}

function fancyImages() {
    return gulp.src('node_modules/fancybox/dist/img/**/*')
        .pipe(gulp.dest('dist/img'));
}

function images() {
    return gulp
        .src("src/img/**/*")
        .pipe(gulp.dest("dist/img"));
}

function clean() {
    return del(["dist/"]);
}

function css() {
    return gulp
        .src([
            'src/scss/*.scss'
        ])
        .pipe(plumber())
        .pipe(concat('style.min.css'))
        .pipe(sass({ outputStyle: "compressed" }))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(gulp.dest("dist/css"))
}

function scripts() {
    return (
        gulp.src([
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/bootstrap/dist/js/bootstrap.min.js',
            'node_modules/owl.carousel/dist/owl.carousel.min.js',
            'node_modules/fancybox/dist/js/jquery.fancybox.pack.js',
            'node_modules/jquery.maskedinput/src/jquery.maskedinput.js',
            'src/js/*.js'
        ])
            .pipe(plumber())
            .pipe(concat('all.js'))
            .pipe(uglify())
            .pipe(gulp.dest('dist/js'))
    );
}

function watchFiles() {
    gulp.watch("src/scss/**/*", css);
    gulp.watch("src/js/**/*", gulp.series(scripts))
    gulp.watch("src/img/**/*", images);
    gulp.watch("src/font/**/*", copyFonts);
}


const js = gulp.series(scripts);
const build = gulp.series(clean, gulp.parallel(css, copyFonts, fancyImages, images, js));
const watch = gulp.series(watchFiles);
const buildAndWatch = gulp.series(clean, gulp.parallel(css, copyFonts, fancyImages, images, js), watchFiles);

exports.js = js;
exports.build = build;
exports.watch = watch;
exports.default = buildAndWatch;
