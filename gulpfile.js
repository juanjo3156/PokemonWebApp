const {src,watch,dest} = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function css(){
    src('src/styles/app.scss')
        .pipe(sass())
        .pipe(dest('dist/css'));
}

exports.css = css;