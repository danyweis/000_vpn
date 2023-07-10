# VPN landing page

Used in the project:
- [x] PHP
- [x] Sass (.sass)
- [x] Gulp
- [x] Javascript


To run `sass` and `gulp` you need to install `node.js` and `npm`.
If gulp is not yet installed globally run:

```bash
npm install --global gulp-cli
```

then run in the project folder:

```bash
npm init
npm install gulp gulp-sass sass --save-dev
```

then we create a `gulpfile.js` file in the project folder and add the following code:

```javascript
// import from the gulp package => source and destination and watch and series
const { src, dest, watch, series } = require('gulp');
// import from the gulp-sass package => sass compiler
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
```

to watch sass files and compile them to css run:

```bash
gulp
```
---

### Credits:

Design => https://www.figma.com/file/FoED2KSVQPw0oJheNr6jBK/FREEBIES-Landingpage-LaslesVPN-(Community)?type=design&node-id=1%3A2&t=zMfWTmW8fzjSiPqB-1



Thank you to [Didi Kurniawan](https://www.figma.com/@didikurniawan) designer for the figma design.