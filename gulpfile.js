var
	gulp 		= require("gulp"),
	browserSync = require('browser-sync').create(),
	childProcess = require('child_process');

gulp.task('docker-start', function (callback) {
    console.log("---------Start--------------------------");
    return childProcess.exec('Powershell.exe  -executionpolicy remotesigned -File  docker.ps1', function (err, stdout, stderr) {
        console.log(stdout);
        console.log(stderr);
        if (err) console.log(err);

        console.log("Finished");
    });
});
gulp.task('watch', function () {
  gulp.watch("./**/*.php").on('change', gulp.parallel(browserSync.reload));
});
gulp.task('ws', function() {
    browserSync.init({
        proxy: "localhost:8000",
        notify: false,
	    snippetOptions: {
	        rule: {
	            match: /$/
	        }
	    }
    });
});
gulp.task('init', gulp.series('docker-start','ws'));


gulp.task("default",gulp.parallel('watch','init'));