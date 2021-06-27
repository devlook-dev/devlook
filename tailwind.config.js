module.exports = {
    purge: [
        "./resources/**/*.blade.php",

        "./resources/**/*.js",

        "./resources/**/*.vue",
    ],
    darkMode: true, // or 'media' or 'class'
    theme: {
        minHeight: {

            '0': '0',

            '1/4': '25%',

            '1/2': '50%',

            '3/4': '75%',

            'full': '100%',
           },
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
