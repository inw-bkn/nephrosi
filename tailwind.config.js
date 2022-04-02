const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: colors.white,
                accent: '#86198F', // fuchsia-800
                complement: '#374151', // gray-700
                'complement-alt': '#4f9c88',
            }
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
        require('@tailwindcss/aspect-ratio'),
        // ...
    ],
};
