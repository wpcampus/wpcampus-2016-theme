var gulp = require('gulp');
var minify = require('gulp-minify');
var $    = require('gulp-load-plugins')();

var sassPaths = [
    'bower_components/foundation-sites/scss',
    'bower_components/motion-ui/src'
];

gulp.task('sass', function() {
    return gulp.src('./scss/*.scss')
        .pipe($.sass({
                includePaths: sassPaths,
				outputStyle: 'compressed'
            })
            .on('error', $.sass.logError))
        .pipe($.autoprefixer({
            browsers: ['last 2 versions', 'ie >= 9']
        }))
        .pipe(gulp.dest('./css'));
});

gulp.task('compress', function() {
    gulp.src('./js/*.js')
        .pipe(minify({
            exclude: ['tasks'],
            ignoreFiles: ['-min.js']
        }))
        .pipe(gulp.dest('js'))
});

gulp.task('default', ['sass', 'compress'], function() {
    gulp.watch(['./scss/**/*.scss'], ['sass']);
    gulp.watch(['./js/**/!*-min.js'], ['compress']);
});