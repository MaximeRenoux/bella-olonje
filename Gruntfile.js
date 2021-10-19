module.exports = function(grunt){
    grunt.initConfig({
        package: grunt.file.readJSON('package.json'),
        uglify: {
            t1: {
                files: [
                    {
                        src: 'src/a.js',
                        dest: 'build/a.min.js'
                    }
                ]
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
}