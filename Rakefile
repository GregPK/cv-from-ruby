class String
  def underscore
    self.gsub(/::/, '/').
    gsub(/([A-Z]+)([A-Z][a-z])/,'\1_\2').
    gsub(/([a-z\d])([A-Z])/,'\1_\2').
    tr("-", "_").
    downcase
  end
  def camelcase
    return self if self !~ /_/ && self =~ /[A-Z]+.*/
    split('_').map{|e| e.capitalize}.join
  end
end

Dir[File.dirname(__FILE__) + '/src/**/*.rb'].each do |f|
  file = File.basename(f,".rb")
  klass = file.camelcase
  autoload(klass.to_sym,File.absolute_path(f))
end

OUTFILE = "web/index.html"

task :build do |t|
  puts "Generating..."
  mc = MainController.new
  data = File.open(OUTFILE, 'w') { |file| file.write(mc.index) }
  puts "Generated properly"
end

namespace :assets do
  task :copy do |t|
    puts "Copying FontAwesome fonts to deploy directory"
    `cp vendor/assets/fonts/font-awesome/* web/fonts/`
  end
end