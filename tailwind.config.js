const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],

    theme: {
        extend: {
            colors: {
                orange: {
                    500: '#F97316',
                    600: '#EA580C',
                },
                amber: {
                    500: '#F59E0B',
                    600: '#D97706',
                },
                lime: {
                    500: '#84CC16',
                    600: '#65A30D',
                },
                emerald: {
                    500: '#10B981',
                    600: '#059669',
                },
                teal: {
                    500: '#14B8A6',
                    600: '#0D9488',
                },
                cyan: {
                    500: '#06B6D4',
                    600: '#0891B2',
                },
                rose: {
                    500: '#F43F5E',
                    600: '#E11D48',
                },
                fuchsia: {
                    500: '#D946EF',
                    600: '#C026D3',
                }
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                ubuntu: ['Ubuntu', 'sans-serif'],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
