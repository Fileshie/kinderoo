// Defining requirements
var gulp = require( 'gulp' );
var plumber = require( 'gulp-plumber' );
var sass = require( 'gulp-sass' );
var rename = require( 'gulp-rename' );
var sourcemaps = require( 'gulp-sourcemaps' );
var cleanCSS = require( 'gulp-clean-css' );
var gulpSequence = require( 'gulp-sequence' );
var autoprefixer = require( 'gulp-autoprefixer' );

// Configuration file to keep your code DRY
var cfg = require( './gulpconfig.json' );
var paths = cfg.paths;

gulp.task( 'watch-scss', ['browser-sync'], function() {
    gulp.watch( paths.sass + '/**/*.scss', ['scss-for-dev'] );
});

// Run:
// gulp sass
// Compiles SCSS files in CSS
gulp.task( 'sass', function() {
    var stream = gulp.src( paths.sass + '/*.scss' )
        .pipe( plumber( {
            errorHandler: function( err ) {
                console.log( err );
                this.emit( 'end' );
            }
        } ) )
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe( sass( { errLogToConsole: true } ) )
        .pipe( autoprefixer( 'last 2 versions' ) )
        .pipe(sourcemaps.write(undefined, { sourceRoot: null }))
        .pipe( gulp.dest( paths.css ) )
    return stream;
});

// Run:
// gulp watch
// Starts watcher. Watcher runs gulp sass task on changes
gulp.task( 'watch', function() {
    gulp.watch( paths.sass + '/**/*.scss', ['styles'] );
    gulp.watch( [paths.dev + '/js/**/*.js', 'js/**/*.js', '!js/theme.js', '!js/theme.min.js'], ['scripts'] );

    //Inside the watch task.
    gulp.watch( paths.imgsrc + '/**', ['imagemin-watch'] );
});

/**
 * Ensures the 'imagemin' task is complete before reloading browsers
 * @verbose
 */
gulp.task( 'imagemin-watch', ['imagemin'], function( ) {
  browserSync.reload();
});

// Run:
// gulp imagemin
// Running image optimizing task
gulp.task( 'imagemin', function() {
    gulp.src( paths.imgsrc + '/**' )
    .pipe( imagemin() )
    .pipe( gulp.dest( paths.img ) );
});

// Run:
// gulp cssnano
// Minifies CSS files
gulp.task( 'cssnano', function() {
  return gulp.src( paths.css + '/style.css' )
    .pipe( sourcemaps.init( { loadMaps: true } ) )
    .pipe( plumber( {
            errorHandler: function( err ) {
                console.log( err );
                this.emit( 'end' );
            }
        } ) )
    .pipe( rename( { suffix: '.min' } ) )
    .pipe( cssnano( { discardComments: { removeAll: true } } ) )
    .pipe( sourcemaps.write( './' ) )
    .pipe( gulp.dest( paths.css ) );
});

gulp.task( 'minifycss', function() {
  return gulp.src( paths.css + '/style.css' )
  .pipe( sourcemaps.init( { loadMaps: true } ) )
    .pipe( cleanCSS( { compatibility: '*' } ) )
    .pipe( plumber( {
            errorHandler: function( err ) {
                console.log( err ) ;
                this.emit( 'end' );
            }
        } ) )
    .pipe( rename( { suffix: '.min' } ) )
     .pipe( sourcemaps.write( './' ) )
    .pipe( gulp.dest( paths.css ) );
});

gulp.task( 'cleancss', function() {
  return gulp.src( paths.css + '/*.min.css', { read: false } ) // Much faster
    .pipe( ignore( 'style.css' ) )
    .pipe( rimraf() );
});

gulp.task( 'styles', function( callback ) {
    gulpSequence( 'sass', 'minifycss' )( callback );
} );
