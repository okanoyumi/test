///岡野追加
// gulpプラグインの読み込み
const gulp = require('gulp');
// Sassをコンパイルするプラグインの読み込み
const sass = require('gulp-sass');

// style.scssをタスクを作成する
gulp.task('default', function () {
  // style.scssファイルを取得
  gulp.src('source/style.scss')
    // Sassのコンパイルを実行
    .pipe(sass())
    // cssフォルダー以下に保存
    .pipe(gulp.dest('asset'));
});
