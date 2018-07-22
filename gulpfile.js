var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');

gulp.task('default',['sass','watch']);

gulp.task('sass', function() {
    return gulp.src(['node_modules/bootstrap/dist/css/bootstrap.css', 'src/scss/*.scss'])
    .pipe(concat('style.min.css'))
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('dist/css'));
});

gulp.task('watch', function() {
    gulp.watch(['src/scss/*.scss','src/scss/library/*.scss'], ['sass']);
});