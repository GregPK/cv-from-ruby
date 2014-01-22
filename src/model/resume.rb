class Resume < Struct.new(:person_data, :companies, :education_formal, :quant_skills, :soft_skills)
  
  attr_accessor :i18n
  
  def person_data
    return @person_data if @person_data
    
    @person_data = PersonData.new(
      "Grzegorz"," Kaczorek",
      Time.mktime(1986,4,29).to_date,
      "grzegorz.kaczorek@gmail.com",
    )
  end
  
   
  def companies
    return @companies if @companies
    
    @companies = []
    gt = Company.new('Grafinet')
    gt.positions << Position.new(
      "Senior programmer / Team leader",
      "September 2009 – Present",
      [
        'Programming websites and applications for clients (PHP, Ruby, Python)',
        'Programming mobile applications for clients (Android)',
        'Research and development in software technology',
        'Research and development in online marketing',
        'Software project management for key clients',
        'Designing and implementing in-house web and mobile applications',
        'Designing and implementing web and mobile applications for major clients',
        'Designing the SEO/SEM strategy, both internal and for clients',
      ]
    )
    gt.positions << Position.new(
      "Programmer",
      "December 2007 – August 2009",
      [
        'Programming websites and applications for clients (PHP, Ruby, Python)',
        'Designing and implementing a new version of the in-house CMS',
        'Designing and implementing tools for SEO',
        'Day to day website maintenance for clients',
        'Consulting on online marketing strategy',
      ]  
    )
    gt.positions << Position.new(
      "Junior programmer",
      "August 2007 – November 2007",
      [
        'Maintaining and extending the in-house CMS',
        'Designing and implementing tools for SEO',
        'Day to day website maintenance for clients',
      ]
    )
    @companies << gt
    
    
	end
	
	def education_formal
	  return @education_formal if @education_formal
	  
	  @education_formal = []
	  @education_formal << FormalEducation.new(
      "MSc. - Computer Science",
			"03.2010 - 02.2012",
			"Polish-Japanese Institute of Information Technology",
			"with emphasis on software architecture"
		)
		
		@education_formal << FormalEducation.new(
			"BSc. - Business and management ",
			"10.2005 - 08.2008",
			"Warsaw University of Technology",
			"with emphasis on managing software projects"
		)
	end
	
	def languages
	  return @languages if @languages
	  
	  @languages = {}
	  @languages[:php] = Language.new("PHP",9)
	  @languages[:ruby] = Language.new("Ruby",9)
	  @languages[:js] = Language.new("JavaScript - front-end",8)
	  @languages[:java] = Language.new("Java SE/EE",6)
	  @languages[:js_node] = Language.new("JavaScript - node.js",6,false,false)
	  @languages[:net] = Language.new(".NET/C#",6,false)
	  @languages[:python] = Language.new("Python",5,false,false)
	  @languages[:c] = Language.new("C/C++",3,false,false,false)
	  
	  setup_libs
	  @languages
	end
	
	def databases
	  return @databases if @databases
	  
	  @databases = []
	  @databases << Database.new("MySQL",9)
	  @databases << Database.new("PostgreSql",8)
	  @databases << Database.new("SQLite",7,false)
	  @databases << Database.new("CouchDB, CouchServer",6,false,false)
	  @databases << Database.new("Oracle DB / PLSQL",3,false)
	  @databases << Database.new("MS SQL Server / PLSQL",3,false)
	end
	
	def other_it
	  return @other_it if @other_it
	
	  @other_it = GroupTablePresenter.new("Area","Skill")
	  @other_it.groups << GroupStrSeparated.new('Version Control',
	    ["CVS","SVN","Git","(branching, forking, cooperation)"]
    )
    @other_it.groups << GroupStrSeparated.new('Used paradigms',
	    ["DP","OOP","TDD","BDD",'CI/CD']
    )
    @other_it.groups << GroupStrSeparated.new('High performance',
	    ["Async I/O","Messaging systems","Eventual consistency"]
    )
    
    @other_it
	end
	
	def other_skills
	  return @other_skills if @other_skills

	  @other_skills = GroupTablePresenter.new("Area","Skill")
	  @other_skills.groups << GroupStrSeparated.new('SEO', [
	    "Google ranking algorithm knowledge",
	    "Keyword research",
	    "Bulding helper tools"]
    )
    @other_skills.groups << GroupStrSeparated.new('SEM',[ 
      "Pay per click campaigns",
      "Assesing client needs",
      "Optimizing landing pages"
    ])
    @other_skills.groups << GroupStrSeparated.new('Electronics', [
      "Amateur electronics",
      "Arduino development",
      "Soldering",
    ])
    @other_skills
	end
	
	def soft_skills
	  return @soft_skills if @soft_skills

	  @soft_skills = GroupTablePresenter.new("Area","Skill")
	  @soft_skills.groups << GroupList.new('Communication', [
  	"Excellent communication skills in writing and speech",
		"Experience in leadership (leader of 2 distinct student organizations)",
    "„Practitioner In Neuro-Linguistic Programming” certificate",
    ])
    @soft_skills.groups << GroupList.new('Pop-psychology',[ 
      "Motivation",
      "Getting Things Done",
      "Self-help",
    ])
    @soft_skills
	end
	
	def portfolio_freelance
	  return @portfolio_freelance if @portfolio_freelance
	  
	  @portfolio_freelance = []
	  @portfolio_freelance << PortfolioItem.new(
	    'Wooloo.pl',
	    'http://wooloo.pl',
      'Backend programming, programming team leader.',
      'A platform where you can find trusted individuals to help you with your todos and grant you more time.',
      "portfolio/wooloo.png"
    )
    @portfolio_freelance << PortfolioItem.new(
	    'DokadJechać.pl',
      'http://dokadjechac.pl',
      'CTO, Back-end and front-end programming.',
      'A website for Polish travelers aimed at answering the question "Where should I go?"',
      "portfolio/dj.png"
    )
    @portfolio_freelance << PortfolioItem.new(
	    'GitHub',
      'http://github.com/GregPK',
      nil,
      'Take a look at some of my open source projects. Not my best work, but putting it out there nonetheless.<br>
      Other projects coming as we speak&hellip; Err&hellip; read&hellip; well&hellip; communicate.',
      "portfolio/github.png",
    )
  end
	
	def skill_taxonomies
	  ['leaf','flask','cogs','briefcase','money']
	end
	
	def other_languages
	  ['Groovy',
			'Scala',
			'Haskell',
			'R',
			'ActionScript 3',
			'Bash',
			'VBSCript',
			'Visual Basic 6 ',
			'Visual Basic .NET ']
	end
	
	def libs
	  return @libs if @libs
	  
	  @libs = []
	  
	  @languages.each_value do |lang|
	    next if lang.toolchain.size == 0
	    tp = GroupTableBodyWithHeaderPresenter.new(lang.name)
	    
	    lang.toolchain.each do |tcg|
	      group_name = i18n.send("smth_prog_group_"+tcg.name)
	      tp.groups << GroupStrSeparated.new(group_name,tcg.items)
	    end
	    
	    @libs << tp 
	  end
	  @libs
	end
	      
	def socials
	  
	  portals = [
	    ["linkedin",""],
	    ["github",""],
	    ["google-plus",""],
	    ["twitter",""],
	    ["stack-exchange",""]
    ]
	  
	  { "portals" => portals, "size" => 2, "addclass" => '-square' }
	end
	
	###################################
	private 
	
	def setup_libs
	  libs = {
	    "php" => {
    	  "full"=>["Symfony 2.0/2.1", "Yii", "Silex", "CodeIgniter"],
        "ecommerce"=>["Opencart", "Magento", "osCommerce"],
        "cms"=>["Drupal 7/8", "WordPress", "Joomla", "MODx"],
        "orm"=>["Doctrine2", "PHP-ActiveRecord", "Propel"],
        "dbal"=>["ADODB", "NotORM", "RedBeanPHP"],
        "templating"=>["Smarty", "Twig", "PHPTAL"],
        "mail"=>["PHPMailer", "SwiftMailer"],
        "testing"=>["PHPUnit", "Selenium"],
        "ci_cd"=>["Phing", "Composer"],
      },
      "js" => {
        "front-end"=>["jQuery", "Backbone.js", "Ember.js"],
        "backend"=>["Node.js"],
        "templating"=>["Mustache", "ICanHaz", "doT.js"],
        "chartinggraphics"=>["D3.js", "jqPlot", "Flotr", "Google", "Charts"],
        "testing"=>["QUnit", "Jasmine"],
        "ci_cd"=>["Grunt"],
      },
      "ruby" => {
        "micro"=>["Ruby on Rails", "Sinatra"],
        "replacement"=>["Compass", "Sass", "Coffeescript"],
        "parsers"=>%w{ERB HAML Nokogiri Redcarpet},
        "testing"=>["RSpec"],
        "background-jobs"=>["Resque", "Sidekiq"],
        "deployment"=>["Capistrano", "Mina", "Vlad"],
        "other"=>["Guard", "Whenever", "Pry", "Letter Opener"],
      },
      "java" => {
        "security"=>["Android", "SDK", "Android", "NDK", "Bouncy Castle"],
      },
      "c" => {
        "libraries"=>["Django", "Flask", "SQLAlchemy", "SciPi", "numpy"],
      },
    }
    
    libs.each_pair do |k,v|
      v.each_pair do |group_code,items|
        tcg = ToolchainGroup.new(group_code,items)
	      @languages[k.to_sym].toolchain << tcg
	    end
	  end
	    
	end
end