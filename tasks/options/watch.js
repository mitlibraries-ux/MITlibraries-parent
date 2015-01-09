module.exports = {
  options: {
    livereload: true,
  },
  scripts: {
    files: ['js/*.js', 'js/libs/*.js', 'js/make/*.js'],
    tasks: ['concat', 'uglify'],
    options: {
      spawn: false,
    }
  },
  css: {
    files: ['css/*.scss', 'css/**/*.scss'],
    tasks: ['sass', 'autoprefixer', 'cssmin'],
    options: {
      spawn: false,
    }
  },
  html:{
    files: ['./**/*.html'],
    tasks: [],
    options: {
      spawn: false
    }
  }
}