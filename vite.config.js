import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
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
                'resources/js/components/App.jsx',
                'resources/css/app.css'
            ],
            refresh: true,
        }),
        react(),
    ],
});
