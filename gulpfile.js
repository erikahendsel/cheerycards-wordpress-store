// const { stream } = require("browser-sync");
// const { on } = require("gulp");
const gulp = require("gulp");
const sass = require("gulp-sass");
const browserSync = require("browser-sync").create();

//compile scss into css
function style() {
  // 1. where is my SCSS file
  return (
    gulp
      .src("./sass/**/*.scss")
      // 2. pass that file through sass compiler
      .pipe(sass().on("error", sass.logError))
      // 3. where do I save the compiled CSS?
      .pipe(gulp.dest("./css"))
      // 4. stream changes to all browsers
      .pipe(browserSync.stream())
  );
}

function watch() {
  browserSync.init({
    proxy: "http://cheerycardsstore.local/",
  });
  gulp.watch("./sass/**/*.scss", style);
  gulp.watch("./*.php").on("change", browserSync.reload);
  gulp.watch("./scripts/**/*.js").on("change", browserSync.reload);
}

exports.style = style;
exports.watch = watch;
