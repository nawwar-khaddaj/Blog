module.exports = {
    purge: [],
    theme: {
        extend: {
            borderRadius:{
                semiFull: '3rem'
            },
            colors: {
                cyanBlue: '#344255',
                offWhite: '#f6f6f6',
                purpleSpecial: '#835bec'
            }
        },
    },
    variants: {},
    plugins: [
        require('tailwindcss-rtl'),
    ],
};
