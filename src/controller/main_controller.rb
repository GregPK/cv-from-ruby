require 'haml'

class MainController

  def initialize
    @i18n = I18n.new
  end
  
  

  def index 
    tpl = File.read("src/view/html/layout.html.haml")
    engine = Haml::Engine.new(tpl)
    
    out = engine.render(self)
    out
  end
  
  def resume()
    return @resume if @resume
    @resume = Resume.new
    @resume.i18n = i18n
    @resume
  end 
  
  def presenter(presenter)
    presenter_file = presenter.class.to_s.underscore
    contents = File.read(tpl_dir+"presenters/"+presenter_file+".html.haml")
    Haml::Engine.new(contents).render(presenter, {ctrl: self})
  end

  def partial(filename)
    contents = File.read(tpl_dir+filename+".html.haml")
    Haml::Engine.new(contents).render(self)
  end
  
  def title(level,title,id=nil)
    str = ""
    str += "<a name=\"#{id}\"></a>\n" unless id.nil?
    str += "<h#{level}>#{title}</h#{level}>"
    str 
  end
  
  def img(name)
    img_dir+name
  end
  
  def icon(ico,size=nil,title=nil)
    size = " fa-"+size if size
    title = " title='#{title}'" if title
    
    "<i class=\"fa fa-#{ico}#{size}\"#{title}></i>"
  end
  
  def obfuscate(str)
    str.chars.map{ |e| e.codepoints.first+23 }.join(",")
  end
  
  def img_dir
    "img/"
  end
  
  def tpl_dir
    File.expand_path("../", File.dirname(__FILE__))+"/view/html/"
  end
  
  def i18n
    @i18n
  end
end