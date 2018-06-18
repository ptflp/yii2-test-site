var
	gulp 		= require("gulp"),
	browserSync = require('browser-sync').create(),
	autoprefixer= require('gulp-autoprefixer'),
	cleancss	= require('gulp-cleancss'),
	rename		= require('gulp-rename'),
	sass		= require("gulp-sass");

gulp.task("reload-css", function () {
	gulp.src('./src/*.scss')
	.pipe(sass().on('error',sass.logError))
	.pipe(autoprefixer({
		browsers: ['last 3 versions'],
		cascade: false
	}))
	.pipe(cleancss({compatibility: 'ie8'}))
	.pipe(rename({suffix: '.min'}))
	.pipe(gulp.dest('./src/css/'))
    .pipe(browserSync.stream());
});
gulp.task("console", function () {
	console.log('php changed');
});
gulp.task('serve', ['reload-css'], function() {

    browserSync.init({
        proxy: "localhost:8000",
	    snippetOptions: {
	        rule: {
	            match: /$/
	        }
	    }
    });

    gulp.watch("./src/*.scss", ['reload-css']);
    gulp.watch("./src/*.html").on('change', browserSync.reload);
    gulp.watch("./**/*.php").on('change', browserSync.reload);
});


gulp.task("default",['serve']);