# A sample Guardfile
# More info at https://github.com/guard/guard#readme

require "execjs"

guard 'coffeescript', :input => 'src/view/js/*.coffee', :output => 'web/js'

guard 'sass', :input => 'src/view/css/*', :output => 'web/css'

# Add files and commands to this file, like the example:
#   watch(%r{file/path}) { `command(s)` }
#
guard :shell do
  watch(/(.*).txt/) {|m| `tail #{m[0]}` }
end
