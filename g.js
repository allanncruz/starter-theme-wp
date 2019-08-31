var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');

//compilar o Sass
gulp.task('sass', gulp.series( function() {

    return gulp.src(['node_modules/bootstrap/scss/*.scss', 'src/sass/*.sass', 'node_modules/normalize-css/normalize.css'])
        .pipe(sass())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest("src/css"))
        .pipe(browserSync.stream());
}));

//Mover JS para src/js
gulp.task('js', gulp.series( function() {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/umd/popper.min.js'])
        .pipe(gulp.dest("src/js"))
        .pipe(browserSync.stream());
}));

//Servidor para olhar os HTML/SCSS
gulp.task('serve', gulp.series(['sass']), gulp.series(function () {
    browserSync.init({
        server: "."
    });
    gulp.watch(['node_modules/bootstrap/scss/*.scss', 'src/sass/*.sass'], gulp.parallel(['sass']));
    gulp.watch(gulp.parallel('*.html')).on('change', browserSync.reload);
}));

gulp.task('default', gulp.series(['js', 'serve']));