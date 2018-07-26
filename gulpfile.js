let gulp = require("gulp");
let rename = require("gulp-rename");
let uglify = require('gulp-uglify-es').default;
 
gulp.task("default", function () {
    return gulp.src("assets/js/hey-come-back-title.js")
        .pipe(rename("bundle.min.js"))
        .pipe(uglify(/* options */))
        .pipe(gulp.dest("assets/js/"));
});