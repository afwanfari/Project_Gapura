// tailwind.config.js
module.exports = {
    content: [
        "./src/**/*.{js,jsx,ts,tsx}", // Adjust the path according to your project structure
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Helvetica", "Arial", "sans-serif"], // Add Helvetica to the sans font family
            },
        },
    },
    plugins: [],
};
