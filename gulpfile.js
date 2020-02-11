"use strict";

var gulp = require('gulp'),
    pug = require('gulp-pug'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    plumber = require('gulp-plumber'),
    prefix = require('gulp-autoprefixer'),
    imagemin = require('gulp-imagemin'),
    gcmq = require('gulp-group-css-media-queries'),
    spritesmith = require("gulp.spritesmith"),
    browserSync = require('browser-sync').create();

var useref = require('gulp-useref'),
    gulpif = require('gulp-if'),
    cssmin = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    rimraf = require('rimraf'),
    notify = require('gulp-notify'),
    ftp = require('vinyl-ftp');

var paths = {
    blocks: 'blocks/',
    devDir: 'app/',
    outputDir: 'build/'
};


/*********************************
		Developer tasks
*********************************/

//pug compile
gulp.task('pug', function() {
    return gulp.src([paths.blocks + '*.pug', '!' + paths.blocks + 'template.pug'])
        .pipe(plumber())
        .pipe(pug({ pretty: true }))
        .pipe(gulp.dest(paths.devDir))
        .pipe(browserSync.stream())
});

// sprite
gulp.task('sprite', function() {
    var spriteData =
        gulp.src('app/img/sprite/*.*')
        .pipe(spritesmith({
            imgName: '../img/sprite.png',
            cssName: 'sprite.min.css',
            padding: 4,
        }));

    spriteData.img.pipe(gulp.dest('app/img/'));
    spriteData.css
        .pipe(gulp.dest('app/css'));
});

//sass compile
gulp.task('sass', function() {
    return gulp.src(paths.blocks + '*.sass')
        .pipe(plumber())
        .pipe(sass().on('error', sass.logError))
        .pipe(prefix({
            browsers: ['last 5 versions'],
            cascade: true
        }))
        .pipe(gcmq())
        .pipe(gulp.dest(paths.devDir + 'css/'))
        .pipe(browserSync.stream());
});

//js compile
gulp.task('scripts', function() {
    return gulp.src([
            paths.blocks + '**/*.js',
            '!' + paths.blocks + '_assets/**/*.js'
        ])
        .pipe(concat('main.js'))
        .pipe(gulp.dest(paths.devDir + 'js/'))
        .pipe(browserSync.stream());
});

//watch
gulp.task('watch', function() {
    gulp.watch(paths.blocks + '**/*.pug', ['pug']);
    gulp.watch(paths.blocks + '**/*.sass', ['sass']);
    gulp.watch(paths.blocks + '**/*.js', ['scripts']);
});

//server
gulp.task('browser-sync', function() {
    browserSync.init({
        port: 3000,
        server: {
            baseDir: paths.devDir
        }
    });
});


/*********************************
		Production tasks
*********************************/

//clean
gulp.task('clean', function(cb) {
    rimraf(paths.outputDir, cb);
});

//gruop css-media queries
gulp.task('gcmq', function() {
    gulp.src('apps/css/style.css')
        .pipe(gcmq())
        .pipe(gulp.dest('dist'));
});

//css + js
gulp.task('build', ['clean'], function() {
    return gulp.src(paths.devDir + '*.html')
        .pipe(useref())
        .pipe(gulpif('*.js', uglify()))
        .pipe(gulpif('*.css', cssmin()))
        .pipe(gulp.dest(paths.outputDir));
});

// css min
gulp.task('css-min', function() {
    return gulp.src(paths.devDir + 'css/style.css')
        .pipe(cssmin())
        .pipe(gulp.dest(paths.outputDir));
});


//copy images to outputDir
gulp.task('imgBuild', ['clean'], function() {
    return gulp.src(paths.devDir + 'img/**/*.*')
        .pipe(imagemin())
        .pipe(gulp.dest(paths.outputDir + 'img/'));
});

//copy fonts to outputDir
gulp.task('fontsBuild', ['clean'], function() {
    return gulp.src(paths.devDir + '/fonts/*')
        .pipe(gulp.dest(paths.outputDir + 'fonts/'));
});

//ftp
gulp.task('send', function() {
    var conn = ftp.create({
        host: 'devolp.ftp.tools',
        user: 'devolp_work1',
        password: '12345qwerty',
        parallel: 5
    });

    // gulp.task('send-prod', function() {
    // 	var conn = ftp.create({
    // 		host:     'devolp.ftp.tools',
    // 		user:     '9050242495_devolp',
    // 		password: 'prJAq.E`j6nc',
    // 		parallel: 5
    // 	});

    /* list all files you wish to ftp in the glob variable */
    var globs = [
        'build/**/*',
        '!node_modules/**' // if you wish to exclude directories, start the item with an !
    ];

    return gulp.src(globs, { base: '.', buffer: false })
        .pipe(conn.newer('/')) // only upload newer files
        .pipe(conn.dest('/'))
        .pipe(notify("Dev site updated!"));

});


//default
gulp.task('default', ['browser-sync', 'watch', 'pug', 'sass', 'scripts']);

//production
gulp.task('prod', ['build', 'imgBuild', 'fontsBuild']);