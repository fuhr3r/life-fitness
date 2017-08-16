/**
 * Created by leluk on 15/08/2017.
 */


var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function() {
    gulp.src('resources/assets/sass/app.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('public/css/app.css'))
});

//Watch task
gulp.task('default',function() {
    gulp.watch('resources/assets/sass/app.scss',['styles']);
});
