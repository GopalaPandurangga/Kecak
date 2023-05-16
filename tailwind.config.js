const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',

    theme: {
        container:{
            center:true,
            padding: '16px'
        },

        fontFamily: {
            "pt-serif": ["PT Serif", "serif"],
            montserrat: ["Montserrat", "sans-serif"],
        },

        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#f97316',
                secondary: "#F4F2ED",
                dark:"#252525"
            },

            
            screens: {
                '2xl': '1320px',
            },
            backgroundImage: {
                underline1: "url('./assets/Underline1.svg')",
                underline2: "url('./assets/Underline2.svg')",
                underline3: "url('./assets/Underline3.svg')",
                underline4: "url('./assets/Underline4.svg')",
                highlight3: "url('./assets/Highlight3.svg')",
            },
            keyframes: {
                "fade-in-down": {
                    "0%": {
                        opacity: "0",
                        transform: "translateY(-10px)",
                    },
                    "100%": {
                        opacity: "1",
                        transform: "translateY(0)",
                    },
                },

                
            },
            animation: {
                "fade-in-down": "fade-in-down 0.5s ease-out",
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
