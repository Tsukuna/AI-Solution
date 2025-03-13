import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                'body': [
                    'Inter',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'system-ui',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    'Apple Color Emoji',
                    'Segoe UI Emoji',
                    'Segoe UI Symbol',
                    'Noto Color Emoji'
                  ],
                      'sans': [
                    'Inter',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'system-ui',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    'Apple Color Emoji',
                    'Segoe UI Emoji',
                    'Segoe UI Symbol',
                    'Noto Color Emoji'
                  ]
            },
            colors: {
                primary: {
                    "50": "#f5e6ff",
                    "100": "#e1c2ff",
                    "200": "#d0a3ff",
                    "300": "#b384ff",
                    "400": "#9b56ff",
                    "500": "#8a2eff",
                    "600": "#7a1add",
                    "700": "#6819c4",
                    "800": "#5717a3",
                    "900": "#470f82",
                    "950": "#32075e"
                  }                                },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
    darkMode: true,
};
