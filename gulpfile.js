/**
 * Created by leluk on 15/08/2017.
 */


var gulp = require('gulp');
var sass = require('gulp-sass');

//Compile task
gulp.task('compile', function() {
    gulp.src('resources/assets/sass/app.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('public/css/app.css'))
});

//Watch task
gulp.task('watch',function() {
    gulp.watch('resources/assets/sass/app.scss',['compile']);
});

gulp.task('default', ['compile', 'watch']);
