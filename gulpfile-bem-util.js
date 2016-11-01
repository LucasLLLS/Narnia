var gulp 	= require('gulp');
	uglify 	= require('gulp-uglify');
	cleanCSS= require('gulp-clean-css');
	sass	= require('gulp-sass');

gulp.task('default', function() {
    // corpo da tarefa 
      gulp.src('js/*.js')
	    .pipe(uglify())
	    .pipe(gulp.dest('minjs'))
});


gulp.task('minify', function() {
    // corpo da tarefa 
      gulp.src('css/*.css')
	    .pipe(cleanCSS({compatibility: 'ie8'}))
	    .pipe(gulp.dest('mincss'));
});

gulp.task('sass', function () {
  return gulp.src('sass/**/*.sass')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('css'));
});


gulp.task('watch', function(){
  
	gulp.watch(['js/*.js', 'css/*.css', 'sass/**/*.sass'], ['default', 'sass', 'minify']);
	
});