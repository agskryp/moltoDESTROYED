'use strict';
 
const gulp         = require('gulp');
const sass         = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
  
sass.compiler = require('node-sass');

gulp.task('sass', function () {
  return gulp.src('./assets/styles/**/*.scss')
    .pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer({cascade: false}))
    .pipe(gulp.dest('./'));
});

gulp.task('watch', function() {
  gulp.watch('./assets/styles/**/*.scss', gulp.series('sass'));
});
