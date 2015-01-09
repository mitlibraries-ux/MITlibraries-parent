module.exports = {
	options: {
		keepSpecialComments: 0
	},
  combine: {
    files: {
      'css/build/minified/global.css': ['css/build/prefixed/global.css'],
      'css/build/minified/get-it.min.css': ['css/build/prefixed/get-it.css'],
      'css/build/minified/hours.min.css': ['css/build/prefixed/hours.css']
    }
  }
}