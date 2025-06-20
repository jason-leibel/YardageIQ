/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#4F46E5',
                turf: '#22C55E',
                slate: '#1E293B',
                softblue: '#EEF2FF',
                coolgray: '#E2E8F0',
            },
        },
    },
    plugins: [],
}
