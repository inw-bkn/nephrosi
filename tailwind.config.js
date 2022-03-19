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
                primary: colors.fuchsia,
                // primary: colors.rose,
                // secondary: colors.yellow,
                // neutral: colors.gray,
            }
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
        // ...
    ],
};
