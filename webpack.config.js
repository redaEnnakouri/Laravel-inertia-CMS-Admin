const path = require('path')

module.exports = {
  resolve: {
    alias: {
      '@': path.resolve('resources/js')
    }
  },
  module: {
    rules: [
      {
        enforce: 'pre',
        test: /\.(js|vue)$/,
        loader: 'eslint-loader',
        exclude: /node_modules/,
        options: {
          fix: true
        }
      }
    ]
  }
}
