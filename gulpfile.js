var gulp = require('gulp');
var minify = require('gulp-minify');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

var sassPaths = [ 'bower_components/foundation-sites/scss' ];

gulp.task('sass', function() {
    return gulp.src('./scss/*.scss')
        .pipe(sass({
                includePaths: sassPaths,
				outputStyle: 'compressed'
            })
            .on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions', 'ie >= 9']
        }))
        .pipe(gulp.dest('./css'));
});

gulp.task('compress', function() {
    gulp.src(['js/wpcampus-2016.js','js/wpcampus-2016-iframe.js','js/wpcampus-2016-livestream.js'])
        .pipe(minify({
            exclude: ['tasks'],
            mangle: false
        }))
        .pipe(gulp.dest('js'))
});

gulp.task('default', ['sass', 'compress'], function() {
    gulp.watch(['scss/**/*.scss'], ['sass']);
    gulp.watch(['js/wpcampus-2016.js','js/wpcampus-2016-iframe.js','js/wpcampus-2016-livestream.js'], ['compress']);
});