/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: '#e9eaea',
          100: '#babcbf',
          200: '#999ca0',
          300: '#6b6f75',
          400: '#4e535a',
          500: '#222831',
          600: '#1f242d',
          700: '#181c23',
          800: '#13161b',
          900: '#0e1115',
        },
        secondary: {
          50: '#ebeced',
          100: '#c2c3c6',
          200: '#a4a6aa',
          300: '#7a7e83',
          400: '#61656b',
          500: '#393e46',
          600: '#343840',
          700: '#282c32',
          800: '#1f2227',
          900: '#181a1d',
        },
        tertiary: {
          50: '#e6f7f8',
          100: '#b0e6e8',
          200: '#8ad9dd',
          300: '#54c8cd',
          400: '#33bdc4',
          500: '#00adb5',
          600: '#009da5',
          700: '#007b81',
          800: '#005f64',
          900: '#00494c',
        },
        accent: {
          50: '#fdfdfd',
          100: '#fafafa',
          200: '#f7f7f7',
          300: '#f4f4f4',
          400: '#f1f1f1',
          500: '#eeeeee',
          600: '#d9d9d9',
          700: '#a9a9a9',
          800: '#838383',
          900: '#646464',
        },
      },
    },
  },
  plugins: [],
  darkMode: 'class',
}

