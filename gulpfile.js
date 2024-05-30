import { src, dest, watch, series, parallel } from 'gulp'
import * as dartSass from 'sass'
import gulpSass from 'gulp-sass'
import terser from 'gulp-terser'
import del from 'del'

const sass = gulpSass(dartSass)

const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    dist: 'dist/'
}

export function clean(done) {
    del([paths.dist])
    done()
}

export function css(done) {
    src(paths.scss, { sourcemaps: true })
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(dest(paths.dist + 'css', { sourcemaps: '.' }))
    done()
}

export function js(done) {
    src(paths.js)
        .pipe(terser())
        .pipe(dest(paths.dist + 'js'))
    done()
}

export function dev() {
    watch(paths.scss, css)
    watch(paths.js, js)
}

export const build = series(clean, parallel(js, css))
export default series(build, dev)
