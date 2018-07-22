var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

gulp.task('default',['sass','js','watch']);

gulp.task('sass', function() {
    return gulp.src([
        'node_modules/bootstrap/dist/css/bootstrap.css',
        'src/scss/*.scss'])
    .pipe(concat('style.min.css'))
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('dist/css'));
});

gulp.task('js', function() {
    return gulp.src([
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/popper.js/dist/umd/popper.min.js',
            'node_modules/bootstrap/dist/js/bootstrap.min.js',
            'src/js/*.js'])
        .pipe(concat('all.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'));
});

gulp.task('watch', function() {
    gulp.watch('src/scss/**/*.scss', ['sass']);
    gulp.watch('src/js/*.js', ['js']);
});