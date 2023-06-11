const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function compileSass() {
    return src('sass/**/*.sass')
        .pipe(sass())
        .pipe(dest('css'))
}

function watchSass() {
    watch('sass/**/*.sass', compileSass);
}

exports.default = series(compileSass, watchSass);