var autoprefixer = require('gulp-autoprefixer');
var gulp = require('gulp');
var minify = require('gulp-minify');
var phpcs = require('gulp-phpcs');
var sass = require('gulp-sass');

var sassPaths = [ 'bower_components/foundation-sites/scss' ];

// Define the source paths for each file type
var src = {
    scss: ['assets/scss/**/*'],
    js: ['assets/js/**/*','!assets/js/**/*.min.js'],
    php: ['**/*.php','!vendor/**','!node_modules/**']
}

// Define the destination paths for each file type
var dest = {
	scss: 'assets/css',
	js: 'assets/js'
}

gulp.task('sass',function() {
    return gulp.src(src.scss)
        .pipe(sass({
        	includePaths: sassPaths,
			outputStyle: 'compressed'
		})
        .on('error',sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions','ie >= 9']
        }))
        .pipe(gulp.dest(dest.scss));
});

gulp.task('js',function() {
    gulp.src(src.js)
        .pipe(minify({
        	mangle: false,
        	ext:{
        		min:'.min.js'
        	}
        }))
        .pipe(gulp.dest(dest.js))
});

// Check our PHP
gulp.task('php',function() {
	gulp.src(src.php)
		.pipe(phpcs({
			bin: 'vendor/bin/phpcs',
			standard: 'WordPress-Core'
		}))
		.pipe(phpcs.reporter('log'));
});

// I've got my eyes on you(r file changes)
gulp.task('watch', function() {
	gulp.watch(src.scss,['sass']);
	gulp.watch(src.js,['js']);
});

gulp.task('default',['compile']);
gulp.task('compile', ['sass','js']);
gulp.task('test', ['php']);