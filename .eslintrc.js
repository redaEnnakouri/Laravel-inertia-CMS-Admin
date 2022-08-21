module.exports = {
  env: {
    browser: true,
    es2021: true,
    jquery: true

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
    'vue/require-prop-types': 'off',
    'capitalized-comments': 'off',
    'comma-dangle': [
      'error',
      'never'
    ],
    indent: [
      'error',
      2,
      {
        MemberExpression: 'off',
        SwitchCase: 1
      }
    ],
    'multiline-ternary': [
      'error',
      'always-multiline'
    ],
    'no-var': 'off',
    'object-curly-spacing': [
      'error',
      'always'
    ],
    'object-shorthand': 'off',
    'prefer-arrow-callback': 'off',
    semi: [
      'error',
      'never'
    ],
    strict: 'error',
    'unicorn/no-array-for-each': 'off',
    'unicorn/no-for-loop': 'off',
    'unicorn/no-null': 'off',
    'unicorn/numeric-separators-style': 'off',
    'unicorn/prefer-dataset': 'off',
    'unicorn/prefer-includes': 'off',
    'unicorn/prefer-module': 'off',
    'unicorn/prefer-node-append': 'off',
    'unicorn/prefer-query-selector': 'off',
    'unicorn/prefer-spread': 'off',
    'unicorn/prevent-abbreviations': 'off'

  },
  globals: {

    route: false,
    axios: false,
    Vue: false,
    _: false
  }
}
