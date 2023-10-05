const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const terser = require('gulp-terser');
const purgecss = require('gulp-purgecss');

// Import Bootstrap styles
const bootstrapSass = 'node_modules/bootstrap/scss/bootstrap.scss';

// Import Bootstrap JavaScript
const bootstrapJs = 'node_modules/bootstrap/dist/js/bootstrap.bundle.js';

// Compile Bootstrap Sass to CSS
gulp.task('bootstrap', function () {
	return gulp.src(bootstrapSass).pipe(sass().on('error', sass.logError)).pipe(concat('style.css')).pipe(gulp.dest('./'));
});

// Compile Bootstrap JavaScript
gulp.task('bootstrap-js', function () {
	return gulp
		.src([bootstrapJs, '/assets/js/scripts/*.js'])
		.pipe(concat('main.js'))
		.pipe(
			terser().on('error', function (e) {
				console.log(e);
			})
		)
		.pipe(gulp.dest('./assets/js/'));
});

// Compile custom Sass
gulp.task('styles', function () {
	return gulp.src('assets/sass/*.scss').pipe(sass().on('error', sass.logError)).pipe(gulp.dest('./'));
});

// Purge unused CSS from style.css and create style.min.css
gulp.task('purgecss', function () {
	return gulp
		.src('style.css') // Modify to the path of your main CSS file
		.pipe(
			purgecss({
				content: ['**/*.php'], // Use PHP files as content to scan for used CSS
				// Add any additional options as needed
			})
		)
		.pipe(concat('style.min.css'))
		.pipe(gulp.dest('assets/css/')); // Change the destination to 'assets/css/'
});

// Watch for changes
gulp.task('watch', function () {
	gulp.watch('assets/sass/**/*.scss', gulp.series('styles'));
	gulp.watch('node_modules/bootstrap/scss/**/*.scss', gulp.series('bootstrap'));
	gulp.watch('assets/js/scripts/*.js', gulp.series('bootstrap-js'));
	gulp.watch('node_modules/bootstrap/dist/js/**/*.js', gulp.series('bootstrap-js'));
});

// Define a default task that includes "purgecss" and other tasks
gulp.task('default', gulp.series('bootstrap', 'bootstrap-js', 'styles', 'purgecss', 'watch'));
