'use strict';

var gulp 		 = require('gulp'),
    sass         = require('gulp-sass'),
    cssnano      = require('gulp-cssnano'),
    autoprefixer = require('gulp-autoprefixer'),
    concat       = require('gulp-concat'),
    rename       = require('gulp-rename'),
    uglify       = require('gulp-uglify'),
    imagemin     = require('gulp-imagemin'),
    del          = require('del');

gulp.task('sass', function(){
    return gulp.src('src/sass/**/*.sass')
    .pipe(sass())
    .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
    .pipe(gulp.dest('src/css/'))
});

gulp.task('min:css', function () {
    return gulp.src([
        'src/libs/normalize.css/normalize.css',
        'src/libs/materialize/dist/css/materialize.min.css',
        'src/libs/components-font-awesome/css/font-awesome.min.css',
        'src/libs/animate.css/animate.min.css',
        'src/libs/owl.carousel/dist/assets/owl.carousel.min.css',        
        'src/css/style.css'
    ]) 
        .pipe(concat('styles.min.css'))
        .pipe(cssnano())
        .pipe(gulp.dest('dist/css'));
});

gulp.task('min:js', function () {
    return gulp.src([
        'src/libs/jquery/dist/jquery.min.js',
        'src/libs/jquery-validation/dist/jquery.validate.min.js',
        'src/libs/materialize/dist/js/materialize.min.js',
        'src/libs/owl.carousel/dist/owl.carousel.min.js',
        'src/js/common.js'
    ])
        .pipe(uglify())
        .pipe(concat('scripts.min.js'))
        .pipe(gulp.dest('dist/js'))
});

gulp.task('fonts:copy', function(){
    return gulp.src([
        'src/libs/materialize/dist/fonts/**/*.*',
        'src/libs/components-font-awesome/fonts/**/*.*'
        ])
    .pipe(gulp.dest('dist/fonts'))
});

gulp.task('php:copy', function(){
    return gulp.src([
        	'src/php/*.php'
        ])
    .pipe(gulp.dest('dist/php'))
});

gulp.task('files:copy', function(){
    return gulp.src([
        	'src/files/*.*'
        ])
    .pipe(gulp.dest('dist/files'))
});

gulp.task('rootfiles:copy', function(){
    return gulp.src([
        'src/index.php',
        'src/robots.txt',
        'src/.htaccess'
        ])
    .pipe(gulp.dest('dist'))
});

gulp.task('img', () =>
    gulp.src('src/img/*')
        .pipe(imagemin([
            imagemin.gifsicle({interlaced: true}),
            imagemin.jpegtran({progressive: true}),
            imagemin.optipng({optimizationLevel: 5}),
            imagemin.svgo({plugins: [{removeViewBox: true}]})
        ]))
        .pipe(gulp.dest('dist/img'))
);

gulp.task('clean', function() {
    return del.sync('dist'); 
});

gulp.task('build', [
    'clean',
    'sass',
    'min:css',
    'min:js',
    'img',
    'rootfiles:copy',
    'files:copy',
    'php:copy',
    'fonts:copy'
      ]);

gulp.task('watch', function() {
    gulp.watch('src/sass/**/*.sass', ['sass']);
    gulp.watch('src/css/**/*.css', ['min:css']);
    gulp.watch('src/php/**/*.php', ['php:copy']);
    gulp.watch('src/index.php', ['rootfiles:copy']);
    gulp.watch('src/js', ['min:js']);
    gulp.watch('src/img', ['img']);
    gulp.watch('src/fonts', ['fonts:copy']);
    gulp.watch('src/files', ['files:copy']);
});

gulp.task('default', ['watch']);