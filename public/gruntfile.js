module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
    watch: {
    options: {
      livereload: true,
    },
    files: ['assets/*/*'],
    tasks: ['less'],
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
        'dest/output.min.js': ['src/input.js']
      }
    }
  }

    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['less','uglify','watch']);
};