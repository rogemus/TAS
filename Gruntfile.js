module.exports = function(grunt) {

  grunt.initConfig({

    clean: {
      dev: {
        src: ["src/css/*"]
      }
    },

    jshint: {
      dev: {
        src: ["src/js/**/*.js", "!src/js/scripts/*.js", "!src/js/_bower.js"],
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
        src: ["src/css/*.css", "!src/css/_bower.css"]
      }
    },

    concat: {
      options: {
        separator: ';',
      },
      prod: {
        files: {
          "build/js/scripts.js": ["src/js/**/*.js", "!src/js/_bower.js"]
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
        "src/sass/**/*.scss",
        "src/jade/**/*.jade",
        "src/jade/*.jade"
      ],
      tasks: ['dev', 'jade']
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
        src: ['*.html', 'css/_bower.css', 'js/_bower.js', 'fonts/*'],
        dest: 'build',
        expand: true
      }
    },
    bower_concat: {
      all: {
        dest: 'src/js/_bower.js',
        cssDest: 'src/css/_bower.css',
        mainFiles: {
          'font-awesome': ['css/font-awesome.min.css'],
        },
        dev: {
          include: [
            'font-awesome',
            'pure'
          ]
        }
      }
    },
    jade: {
      dev: {
        options: {
          pretty: true,
          data: {
            debug: true
          }
        },
        files: {
          "src/index.html": ["src/jade/index.jade"],
          "src/login.html": ["src/jade/login.jade"],
          "src/registration.html": ["src/jade/registration.jade"],
          "src/single-post.html": ["src/jade/single-post.jade"],
          "src/profile-page.html": ["src/jade/profile-page.jade"],
          "src/add-edit-post-page.html": ["src/jade/add-edit-post-page.jade"]
        }
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
  grunt.loadNpmTasks('grunt-bower-concat');
  grunt.loadNpmTasks('grunt-contrib-jade');


  grunt.task.registerTask('dev', ['clean', 'bower_concat', 'jshint', 'sass', 'autoprefixer', 'jade']);
  //grunt.task.registerTask('dev', ['jshint', 'sass', 'autoprefixer']);
  grunt.task.registerTask('prod', ['concat', 'uglify', 'cssmin', 'imagemin', 'copy', 'bower_concat']);

  grunt.task.registerTask('build', ['dev', 'prod']);
  grunt.task.registerTask('default', ['browserSync', 'watch']);
};
