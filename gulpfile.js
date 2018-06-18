var
	gulp 		= require("gulp"),
	browserSync = require('browser-sync').create();

gulp.task('watch', function () {
  gulp.watch("./**/*.php").on('change', gulp.parallel(browserSync.reload));
});
gulp.task('ws', function() {
    browserSync.init({
        proxy: "localhost:8000",
	    snippetOptions: {
	        rule: {
	            match: /$/
	        }
	    }
    });
});


gulp.task("default",gulp.parallel('watch','ws'));