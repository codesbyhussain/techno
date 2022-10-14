const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        'resources/views/welcome.blade.php',
        'resources/js/components/home/Home.jsx',
        'resources/js/components/about/AboutUs.jsx',
        'resources/js/components/clubs/Clubs.jsx',
        'resources/js/components/clubs/Club.jsx',
        'resources/js/components/clubs/Explore.jsx',
        'resources/js/components/clubs/Register.jsx',
        'resources/js/components/evnts/Events.jsx',
        'resources/js/components/footer/Footer.jsx',
        'resources/js/components/login/Login.jsx',
        'resources/js/components/navbar/Navbar.jsx',
        'resources/js/components/signup/Signup.jsx',
        'resources/js/components/App.jsx'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
