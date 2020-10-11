'use strict';
 
const gulp         = require('gulp');
const sass         = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
  
sass.compiler = require('node-sass');
  
gulp.task('sass', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
    // .pipe(sass.sync().on('error', sass.logError))
    .pipe(autoprefixer({cascade: false}))
    .pipe(gulp.dest('./'));
});

gulp.task('watch', function() {
  gulp.watch('./sass/**/*.scss', gulp.series('sass'));
});
