const {src,watch,dest} = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function css(done){
    src('src/styles/app.scss')
        .pipe(sass())
        .pipe(dest('dist/css'));
    done();
}

exports.css = css;