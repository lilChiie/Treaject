/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  // content: [],
  theme: {
    colors: {
      'merah' : '#952323',
    },
    extend: {},
    fontFamily: {
      serif: ["Crimson Pro", 'serif'],
    },
    
  },
  plugins: [
    require('flowbite/plugin')
  ],
}


