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
                complement: '#1F2937', // gray-800
                'complement-alt': '#48817d',
                // 'complement-alt': '#5bbab5',
                // 'complement-alt': '#0065c5',
                // 'complement-alt': '#9d719d',

                // primary: '#FFF8E8',
                // accent: '#9E709C',
                // complement: '#000',
                // 'complement-alt': '#226274',

                // primary: '#ffe7ff',
                // accent: '#86198f',
                // complement: '#9d719d',
                // 'complement-alt': '#5bbab5',
            }
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
        require('@tailwindcss/aspect-ratio'),
        // ...
    ],
};
