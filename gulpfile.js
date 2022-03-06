const projectURL = "http://localhost/wp_tpv/";
var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require( 'gulp-sourcemaps' );
const browserSync = require( 'browser-sync' ).create();
const reload = browserSync.reload;


gulp.task( 'browser-sync', function( done ) {
	browserSync.init( {
		proxy: projectURL,
		open: true,
		injectChanges: true,
	} );
	done();
} );


gulp.task('editor-scss', function() {
    return gulp.src(['./assets/sass/style.scss'])
        .pipe( sourcemaps.init() )
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe( sourcemaps.write( './' ) )
        .pipe(gulp.dest('assets/css'))
        .pipe( browserSync.stream() )
});


gulp.task('editor', gulp.series( 'browser-sync', function() {
    gulp.watch(['./assets/sass/**/*.scss','inc/shortcodes/**/**/assets/css/*.scss'], gulp.parallel( 'editor-scss') );
}) );

