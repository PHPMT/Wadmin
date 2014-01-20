module.exports = function(grunt) {

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
                    'public/css/app.css' : 'assets/stylesheets/*.scss'
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
                tasks: ['sass', 'cssmin', 'uglify']
            }
        }
    };

    grunt.initConfig(gruntConfig);

    grunt.loadNpmTasks("grunt-contrib-uglify");
    grunt.loadNpmTasks("grunt-contrib-sass");
    grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.loadNpmTasks("grunt-contrib-cssmin");

    grunt.registerTask("default", ["uglify", "sass", "cssmin"]);
    grunt.registerTask("init", ["uglify", "sass", "cssmin"]);
}
