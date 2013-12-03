require 'haml'

class MainController

  def index 

    tpl = File.read("src/view/layout.html.haml")
    engine = Haml::Engine.new(tpl)
    
    out = engine.render(self)
    out
  end

  def partial(filename)
    tpl_dir = File.expand_path("../", File.dirname(__FILE__))+"/view/"
    contents = File.read(tpl_dir+filename+".html.haml")
    Haml::Engine.new(contents).render(self)
  end


end
