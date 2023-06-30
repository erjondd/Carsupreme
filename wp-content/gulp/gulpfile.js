var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var newer = require('gulp-newer');
var imagemin = require('gulp-imagemin');
var jpegtran = require('imagemin-jpegtran');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');


// SASS files convert to CSS
gulp.task('pack-sass', function() {
    return gulp.src('./dev/sass/style.scss')
        .pipe(sass())
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('../themes/VD-theme/css/'))
});

// JS MINIFY
gulp.task('pack-js', function () {
    return gulp.src('./dev/js/*.js')
        .pipe(concat('bundle.js'))
        .pipe(uglify())
        .pipe(gulp.dest('../themes/VD-theme/js/'))
});




// Watch when any code is changed
gulp.task('watch', function(){
    gulp.watch('./dev/sass/*.scss', gulp.parallel(['pack-sass']))
    gulp.watch('./dev/js/*.js', gulp.parallel(['pack-js']))
    gulp.watch('./dev/pre-images/*', gulp.parallel(['pack-images']))
});



gulp.task('default',  gulp.series(['pack-sass', 'pack-images', 'pack-js', 'watch']));