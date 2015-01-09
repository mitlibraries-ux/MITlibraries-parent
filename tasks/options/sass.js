module.exports = {
  dist: {
    options: {
      // cssmin will minify later
      style: 'expanded'
    },
    files: {
      'css/build/global.css': 'css/global.scss',
      'css/build/get-it.css': 'css/get-it.scss',
      'css/build/hours.css' : 'css/hours.scss'
    }
  }
}