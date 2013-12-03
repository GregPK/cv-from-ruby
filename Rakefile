require_relative 'src/controller/main'

OUTFILE = "web/index.html"

task :build do |t|
  mc = MainController.new
  File.open(OUTFILE, 'w') { |file| file.write(mc.index) }
end
