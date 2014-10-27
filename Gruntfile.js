module.exports = function(grunt){

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-open');
  grunt.loadNpmTasks('grunt-contrib-imagemin');

  grunt.initConfig({
    compass: {
      dist: {
        options: {
          config: 'config.rb'
        }
      }
    },
    imagemin: {
          dynamic: {
              options: {
                  optimizationLevel: 10,
                  progressive: true
              },
              files: [{
                      expand: true,
                      cwd: 'htdocs/wp-content/uploads/2014/08/',
                      src: ['**/*.{png,jpg,gif}'],
                      dest: 'htdocs/wp-content/uploads/2014/08/compressed'
                  }]
          }
      },
    watch: {
      options: {
        livereload: true,
        nospawn: true
      },
      html: {
        files: 'htdocs/*.html',
        tasks: []
      },
      php: {
        files: 'htdocs/wp-content/themes/senna/*.php',
        tasks: []
      },
      sass: {
        files:'sass/{,*/}{,*/}*.{scss,sass}',
        tasks: ['compass']
      },
      jslib: {
        files: 'htdocs/js/*.js',
        tasks: []
      }
    },
    connect: {
      livereload: {
        options: {
          port: 9002,
          base: 'htdocs'
        }
      }
    },
    open: {
      server: {
        path: 'http://localhost:<%= connect.livereload.options.port %>'
      }
    }
  });

  grunt.registerTask('default', ['connect','open','watch','compass']);
};