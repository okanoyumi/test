  var gulp        = require('gulp');
  var browserSync = require('browser-sync').create();
  var sass        = require('gulp-sass');

gulp.task('bs-reload', function() {
  browserSync.reload();
});

  // Static Server + watching scss/html files
  gulp.task('serve', ['sass'], function() {

      browserSync.init({
        proxy: "vccw.test"
          // server: "vccw.test"
      });

      gulp.watch("sources/*.scss", ['sass']);
      gulp.watch("**/*.php", ['bs-reload']);
  });

  // Compile sass into CSS & auto-inject into browsers
  gulp.task('sass', function() {
      return gulp.src("sources/*.scss")
          .pipe(sass())
          .pipe(gulp.dest("./assets/"))
          .pipe(browserSync.stream());
  });

  gulp.task('default', ['serve']);
