const { src, dest, parallel, series, watch } = require("gulp");
const gulpIf = require("gulp-if");
const gulpSass = require("gulp-sass")(require("sass"));
const cssmin = require("gulp-cssmin");
const uglify = require("gulp-uglify");
const imagemin = require("gulp-imagemin");
const concat = require("gulp-concat");
const jsImport = require("gulp-js-import");
const sourcemaps = require("gulp-sourcemaps");
const replace = require("gulp-replace");

const isProd = process.env.NODE_ENV === "prod";

/**
 * CONFIGURACIÓN
 */
const filesToAllJs = [
  "node_modules/jquery/dist/jquery.min.js",
  "node_modules/bootstrap/dist/js/bootstrap.bundle.min.js",
  "node_modules/bootstrap-select/dist/js/bootstrap-select.min.js",
  "node_modules/swiper/swiper-bundle.min.js",
  "node_modules/jquery-validation/dist/jquery.validate.min.js",
  "assets/js/*.js",
];

const filesToVendors = [];
const filesToVendorsJs = [];

/**
 * Copia literal de archivos VENDORS
 */
function vendorsCopy() {
  if (filesToVendors.length > 0) {
    return src(filesToVendors).pipe(dest("assets/dist/vendors/"));
  }
  return src(".", { allowEmpty: true });
}

function vendorsCopyJs() {
  if (filesToVendorsJs.length > 0) {
    return src(filesToVendorsJs).pipe(dest("assets/dist/js/"));
  }
  return src(".", { allowEmpty: true });
}

function minJs() {
  return src("assets/js/partials/**.js")
    .pipe(gulpIf(isProd, uglify()))
    .pipe(dest("assets/dist/js/"));
}

function css() {
  return src("assets/sass/style.scss")
    .pipe(gulpIf(!isProd, sourcemaps.init()))
    .pipe(
      gulpSass({
        includePaths: ["node_modules"],
      }).on("error", gulpSass.logError)
    )
    .pipe(concat("all.css"))
    .pipe(replace("../../../../", "../"))
    .pipe(replace("../../../", "../"))
    .pipe(replace("../../", "../"))
    .pipe(gulpIf(!isProd, sourcemaps.write()))
    .pipe(gulpIf(isProd, cssmin()))
    .pipe(dest("assets/dist/css/"));
}

function adminCss() {
  return src("assets/sass/admin.scss")
    .pipe(gulpIf(!isProd, sourcemaps.init()))
    .pipe(
      gulpSass({
        includePaths: ["node_modules"],
      }).on("error", gulpSass.logError)
    )
    .pipe(concat("admin.css"))
    .pipe(replace("../../../../", "../"))
    .pipe(replace("../../../", "../"))
    .pipe(replace("../../", "../"))
    .pipe(gulpIf(!isProd, sourcemaps.write()))
    .pipe(gulpIf(isProd, cssmin()))
    .pipe(dest("assets/dist/css/"));
}

function js() {
  return src(filesToAllJs)
    .pipe(
      jsImport({
        hideConsole: true,
      })
    )
    .pipe(concat("all.js"))
    .pipe(gulpIf(isProd, uglify()))
    .pipe(dest("assets/dist/js"));
}

function img() {
  return src("assets/img/**/*")
    .pipe(gulpIf(isProd, imagemin()))
    .pipe(dest("assets/dist/img/"));
}

function fonts() {
  return src("assets/fonts/**/*").pipe(dest("assets/dist/fonts/"));
}

function watchFiles() {
  watch("assets/**/*.scss", series(css));
  watch("assets/js/*.js", series(js));
  watch("assets/js/partials/*.js", series(minJs));
  watch("assets/img/**/*.*", series(img));
}

exports.vendorsCopy = vendorsCopy;
exports.vendorsCopyJs = vendorsCopyJs;
exports.css = css;
exports.adminCss = adminCss;
exports.js = js;
exports.img = img;
exports.minJs = minJs;
exports.fonts = fonts;
exports.watchFiles = watchFiles;
exports.serve = parallel(vendorsCopy, vendorsCopyJs, css, adminCss, js, img, minJs, fonts, watchFiles);
exports.default = series(vendorsCopy, vendorsCopyJs, css, adminCss, js, img, fonts, minJs);
