const defaults = require('tailwindcss/defaultTheme');

module.exports = {
  darkMode: 'class',
  content: require('fast-glob').sync([
    'source/**/*.{blade.php,md,html,vue}'
  ]),
  safelist: [/language/, /mce/],
  theme: {
    extend: {
      fontFamily: {
        sans: [
          'Roboto, Sans'
        ],
      },
      lineHeight: {
        normal: '1.6',
        loose: '1.75',
      },
      maxWidth: {
        '8xl': '88rem',
      },
      boxShadow: {
        search: '0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)',
      },
    },
    fontSize: {
      xs: '.8rem',
      sm: '.925rem',
      base: '1rem',
      lg: '1.125rem',
      xl: '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.75rem',
      '4xl': '2.125rem',
      '5xl': '2.625rem',
      '6xl': '10rem',
    },
  },
  plugins: [
    function({ addUtilities }) {
      const newUtilities = {
        '.transition-fast': {
          transition: 'all .2s ease-out',
        },
        '.transition': {
          transition: 'all .5s ease-out',
        },
      }
      addUtilities(newUtilities)
    }
  ]
};
