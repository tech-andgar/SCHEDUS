//Gruntfile.js
module.exports = function (grunt) {
    grunt.initConfig({

        // Watch task config
        watch: {

        },
        // Usamos BrowserSync para tus archivos .html, .css, etc, y además le metemos un proxy de nuestro hostname
        browserSync: {
            default_options: {
                bsFiles: {
                    src: [
                        "css/*.css",
                        "js/*.js",
                        "*.html",
                        "*.php",
                        "view/*.php"
                    ]
                },
                options: {
                    watchTask: true,
                    proxy: "http://localhost:80/schedus/"
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');

    //Tarea por defecto
    grunt.registerTask('default', ['browserSync' ,'watch']);
};