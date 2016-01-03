module.exports = function(grunt) {

  grunt.initConfig({

    clean: {
      dev: {
        src: ["src/css/*"]
      }
    },

    jshint: {
      dev: {
        src: ["src/js/**/*.js", "!src/js/scripts/*.js"],
      }
    },

    sass: {
      dev: {
        options: {
          style: "expanded",
        },
        src: "src/sass/main.scss",
        dest: "src/css/style.css"
      }
    },

    autoprefixer: {
      dev: {
        options: {
          browsers: ['last 5 versions']
        },
        src: "src/css/*.css"
      }
    },

    concat: {
      options: {
        separator: ';',
      },
      prod: {
        files: {
          "build/js/scripts.js": "src/js/**/*.js"
        }
      }
    },

    uglify: {
      prod: {
        options: {
          nangle: true
        },
        files: {
          "build/js/scripts.js": "build/js/scripts.js"
        }
      }
    },

    cssmin: {
      prod: {
        files: {
          "build/css/style.css": "src/css/style.css"
        }
      }
    },

    htmlmin: {
      options: {
        collapseWhitespace: true
      },
      prod: {
        files: {
          "build/*.html": "src/*.html"
        }
      }
    },

    imagemin: {
      options: {
        optimalizationLevel: 4
      },
      prod: {
        files: [{
          expand: true,
          cwd: 'src/img/',
          src: "*",
          dest: "build/img"
        }]
      }
    },

    watch: {
      files: [
        "src/sass/**/*.scss"
      ],
      tasks: ['dev']
    },

    browserSync: {
      options: {
        watchTask: true,
        server: './src'
      },
      dev: {
        bsFiles: {
          src: [
            'src/css/*.css',
            'src/*.html'
          ]
        }
      }
    },

    copy: {
      files: {
        cwd: 'src/',
        src: '*.html',
        dest: 'build',
        expand: true
      }
    }

  });



  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-htmlmin');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.task.registerTask('dev', ['clean', 'jshint', 'sass', 'autoprefixer']);
  //grunt.task.registerTask('dev', ['jshint', 'sass', 'autoprefixer']);
  grunt.task.registerTask('prod', ['concat', 'uglify', 'cssmin', 'imagemin', 'copy']);

  grunt.task.registerTask('build', ['dev', 'prod']);
  grunt.task.registerTask('default', ['browserSync', 'watch']);
};
