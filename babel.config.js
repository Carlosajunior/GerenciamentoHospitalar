module.exports = {
  presets: [
    '@vue/cli-plugin-babel/preset'
  ],

  devServer:{
    proxy:{
      '/api':{
        target:"http://localhost:8080",
        pathRewrite:{'^/api':''}
      }
    }
  }
}
