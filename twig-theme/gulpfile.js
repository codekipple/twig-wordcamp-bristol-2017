var Gulp = require('gulp'),
    RequireDir = require('require-dir'),
    tasks = RequireDir('./gulp'); // pull in all our tasks

Gulp.task('default', ['styles:prod']);
Gulp.task('dev', ['styles:dev']);
Gulp.task('watch', ['serve']);
