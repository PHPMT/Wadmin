module.exports = function(grunt) {

    var init = ["uglify", "sass", "cssmin", "clean:css"];

    var gruntConfig = {
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            build: {
                src: [
                    "bower_components/jquery/jquery.js",
                    "assets/javascripts/*.js"
                ],
                dest: 'public/js/app.min.js'
            }
        },
        sass: {
            dist: {
                files: {
                    'public/css/app.css' : 'assets/stylesheets/main.scss'
                }
            }
        },
        cssmin: {
            dist: {
                src: ['public/css/app.css'],
                dest: 'public/css/app.min.css'
            }
        },
        watch: {
            css: {
                files: 'assets/**',
                tasks: init
            }
        },
        clean: {
            css: ["public/css/app.css"]
        }
    };

    grunt.initConfig(gruntConfig);

    grunt.loadNpmTasks("grunt-contrib-uglify");
    grunt.loadNpmTasks("grunt-contrib-sass");
    grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.loadNpmTasks("grunt-contrib-cssmin");
    grunt.loadNpmTasks("grunt-contrib-clean");


    grunt.registerTask("default", init);
}
