var Gulp = require('gulp'),
    Sass = require('gulp-sass'),
    Postcss = require('gulp-postcss'),
    Autoprefixer = require('autoprefixer'),
    BrowserSync = require('browser-sync');

var cssCompile = function(devMode) {
    var outputStyle;

    var processors = [
        Autoprefixer({browsers: ['last 3 versions', '> 1%', 'ie 8']}),
    ];

    if (devMode) {
        outputStyle = 'expanded';
    } else {
        outputStyle = 'compressed';
    }

    /*
        Styles
        ------
        1. use .scss files
        2. run sass on them
        3. Pass the output to postcss
        4. Write css to disk
        5. Pass css to browsersync
    */
    return Gulp.src('sass/**/*.scss') /* 1*/
        .pipe(Sass({
            outputStyle: outputStyle
        }).on('error', function(error) {
            // swallow error so watch can continue running
            console.log(error.toString());
            this.emit('end');
        })) /* 2 */
        .pipe(Postcss(processors)) /* 3 */
        .pipe(Gulp.dest('css')) /* 4 */
        .pipe(BrowserSync.stream()); /* 5 */
};

Gulp.task('styles:prod', function() {
    return cssCompile();
});

Gulp.task('styles:dev', function() {
    return cssCompile(true);
});
