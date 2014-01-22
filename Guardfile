# A sample Guardfile
# More info at https://github.com/guard/guard#readme

require "execjs"

guard 'coffeescript', :input => 'src/view/js/*.coffee', :output => 'web/js'

guard 'sass', 
  :input => 'src/view/css/*', 
  :output => 'web/css',
  :load_paths => ['vendor/assets/stylesheets']

# Add files and commands to this file, like the example:
#   watch(%r{file/path}) { `command(s)` }
#
guard :shell do 
  watch(%r{src/.+\.(rb|haml)}) { `rake build` }
  watch(%r{Rakefile}) { `rake build` }
  watch(%r{vendor/assets/javascripts/*\.js}) { `cp vendor/assets/javascripts/*.js web/js` }
end
