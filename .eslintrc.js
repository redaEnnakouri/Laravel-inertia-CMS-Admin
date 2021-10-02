module.exports = {
  env: {
    browser: true,
    es2021: true
  },
  extends: [
    'plugin:vue/vue3-recommended',
    'standard'
  ],
  parserOptions: {
    ecmaVersion: 12,
    sourceType: 'module'
  },
  plugins: [
    'vue'
  ],
  rules: {
    'vue/require-default-prop': 'off',
    'vue/no-v-html': 'off',
    'vue/require-prop-types': 'off'
  },
  globals: {
   
    route: false,
    axios: false,
    Vue: false,
    _: false
  }
}
