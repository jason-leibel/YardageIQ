// Use Tailwind's official PostCSS plugin so custom colors are compiled
// correctly when building assets.
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';

export default {
    plugins: [
        tailwindcss,
        autoprefixer,
    ],
};
