module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
    watch: {
    options: {
      livereload: true,
    },
    files: ['assets/*/*'],
    tasks: ['less','uglify'],
  },
  less: {
  development: {
    options: {
      paths: ["assets/css"]
    },
    files: {
     "assets/css/main.css" : "assets/css/main.less"
    }
  }
},
uglify: {
    options: {
      mangle: false  
    },
    my_target: {
      files: {
        'assets/js/main.min.js': ['assets/js/devJs/*.js']
      }
    }
  }

    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['less','uglify','watch']);
};