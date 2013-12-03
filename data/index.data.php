<?php

/**
   @todo Dodać kursy zewnętrzne (mit, coursera, udemy)
   @todo Dodać do portfolio GT: Seiemens, ML, Graki,
   @todo Wymyślić co pochować na CV
*/


class Resume {
	public $lang;

	/**
	 * @var Language
	 */
	public $php;
	/**
	 * @var Language
	 */
	public $ruby;

	/**
	 * @var Language
	 */
	public $js;

	/**
	 * @var Language
	 */
	public $java;

	/**
	 * @var Language
	 */
	public $python;

	/**
	 * @var Language
	 */
	public $cFamily;

	/**
	 * @var Language
	 */
	public $javascript;

	/**
	 * @var Database
	 */
	public $mysql;

	/**
	 * @var Database
	 */
	public $sqlite;

	/**
	 * @var Database
	 */
	public $postgresql;

	public $abbr;

	/**
	 * @var Database
	 */
	public $couchdb;

    public $otherSkills;

    public $softSkills;

    public $portfolioFreelance;
    public $portfolioGT;

	function __construct() {
		$this->lang = getLang();
		$this->setPHP();
		$this->setPython();
		$this->setRuby();
		$this->setJS();
		$this->setJava();
		$this->setC();
		$this->setOtherLangs();
		$this->setDatabases();
        $this->setOtherSkills();
        $this->setSoftSkills();
        $this->setPortfolioFreelance();
        $this->setPortfolioGT();
		$this->setAbbr();

	}

	public function setDatabases() {
		$this->mysql = new Database('mysql', "MySQL");
		$this->mysql->setGeneralCompetence(9);
		$this->mysql->setCompetency(true,true,true,true,true);

		$this->sqlite = new Database('sqlite', "SQLite");
		$this->sqlite->setGeneralCompetence(7);
		$this->sqlite->setCompetency(false,true,true,true,true);

		$this->postgresql = new Database('postgresql', "PostgreSql");
		$this->postgresql->setGeneralCompetence(5);
		$this->postgresql->setCompetency(false,true,true,true,true);

		$this->couchdb = new Database('couchdb', "CouchDB, CouchServer");
		$this->couchdb->setGeneralCompetence(5);
		$this->couchdb->setCompetency(false,false,true,true,true);
	}

	public function education() {


		return array(
			'formal'=> array(
				new Education (
						"MSc. - Computer Science",
						"03.2010 - 02.2012",
						"Polish-Japanese Institute of Information Technology",
						"with emphasis on software architecture"
				),
				new Education(
						"BSc. - Business and management ",
						"10.2005 - 08.2008",
						"Warsaw University of Technology",
						"with emphasis on managing software projects"
				)
			),
			"publications"=> array(
				array("Computing for Data Analysis","Coursera","https://www.coursera.org/course/compdata"),
				array("Functional programming principles in Scala","Coursera","https://www.coursera.org/course/progfun"),
				array("Gamification","Coursera","https://www.coursera.org/course/gamification"),
				array("Software Engineering for SaaS","Coursera","https://www.coursera.org/course/saas"),
			)
			"online"=> array(
				array("Computing for Data Analysis","Coursera","https://www.coursera.org/course/compdata"),
				array("Functional programming principles in Scala","Coursera","https://www.coursera.org/course/progfun"),
				array("Gamification","Coursera","https://www.coursera.org/course/gamification"),
				array("Software Engineering for SaaS","Coursera","https://www.coursera.org/course/saas"),
			)
		);
	}

	public function experience() {
		return array(
            new Experience(
                "September 2009 – Present",
                "Grafinet Sp. z. o.o",
                "Senior programmer / Team leader",
                array(
                    'Programming websites and applications for clients (PHP, Ruby, Python)',
                    'Programming mobile applications for clients (Android)',
                    'Research and development in software technology',
                    'Research and development in online marketing',
                    'Software project management for key clients',
                    'Designing and implementing in-house web and mobile applications',
                    'Designing and implementing web and mobile applications for major clients',
                    'Designing the SEO/SEM strategy, both internal and for clients',
                )
            ),
			new Experience(
				"December 2007 – August 2009",
				"Grafinet Sp. z. o.o",
				"Programmer",
				array(
                    'Programming websites and applications for clients (PHP, Ruby, Python)',
					'Designing and implementing a new version of the in-house CMS',
                    'Designing and implementing tools for SEO',
                    'Day to day website maintenance for clients',
                    'Consulting on online marketing strategy',
				)
			),
            new Experience(
                "August 2007 – November 2007",
                "Grafinet Sp. z. o.o",
                "Junior programmer",
                array(
                    'Maintaining and extending the in-house CMS',
                    'Designing and implementing tools for SEO',
                    'Day to day website maintenance for clients',
                )
            ),
		);
	}

	public function setPHP() {
		$this->php = new Language('php', "PHP");
		$this->php->setGeneralCompetence(9);
		$this->php->setCompetency(true,true,true,true,$simpleScripts = true);

		$this->php->frameworks[] = new Framework('Symfony 2.0/2.1','full','http://symfony.com/');
		$this->php->frameworks[] = new Framework('Yii','full','http://symfony.com/',false);
		$this->php->frameworks[] = new Framework('Silex','full','http://symfony.com/',false,false);
		$this->php->frameworks[] = new Framework('CodeIgniter','full','http://symfony.com/',false,false,false);

		$this->php->frameworks[] = new Framework('Opencart','ecommerce','');
		$this->php->frameworks[] = new Framework('Magento','ecommerce','');
		$this->php->frameworks[] = new Framework('osCommerce','ecommerce','');

		$this->php->frameworks[] = new Framework('Drupal 7/8','cms','');
		$this->php->frameworks[] = new Framework('WordPress','cms','');
		$this->php->frameworks[] = new Framework('Joomla','cms','');
		$this->php->frameworks[] = new Framework('MODx','cms','');


		$this->php->frameworks[] = new Framework('Glue','other','http://symfony.com/');

		$this->php->libraries[] = new Library('Doctrine2','orm','http://www.doctrine-project.org/');
		$this->php->libraries[] = new Library('PHP-ActiveRecord','orm','http://www.phpactiverecord.org/');
		$this->php->libraries[] = new Library('Propel','orm','http://www.propelorm.org/');

		$this->php->libraries[] = new Library('ADODB','dbal','');
		$this->php->libraries[] = new Library('NotORM','dbal','');
		$this->php->libraries[] = new Library('RedBeanPHP','dbal','');

		$this->php->libraries[] = new Library('Smarty','templating','');
		$this->php->libraries[] = new Library('Twig','templating','');
		$this->php->libraries[] = new Library('PHPTAL','templating','');

		$this->php->libraries[] = new Library('PHPMailer','mail','');
		$this->php->libraries[] = new Library('SwiftMailer','mail','');

		$this->php->libraries[] = new Library('PHPUnit','testing','');
        $this->php->libraries[] = new Library('Selenium','testing','');

		$this->php->tools[] = new Tool('Phing','ci_cd','http://www.phing.info/');
		$this->php->tools[] = new Tool('Composer','other','http://getcomposer.org/');

	}

	public function setJS() {
		$this->js = new Language('javascript', "JavaScript");
		$this->js->setGeneralCompetence(7);

		$this->js->setCompetency();

		$this->js->frameworks[] = new Framework('jQuery','front-end','');
		$this->js->frameworks[] = new Framework('Backbone.js','front-end','',false);
		$this->js->frameworks[] = new Framework('Ember.js','front-end','',false,false,false);

		$this->js->frameworks[] = new Framework('Node.js','backend','',false,false);

        $this->js->libraries[] = new Library('Mustache','templating','');
        $this->js->libraries[] = new Library('ICanHaz','templating','');
        $this->js->libraries[] = new Library('doT.js','templating','');

        $this->js->libraries[] = new Library('D3.js','chartinggraphics','');
        $this->js->libraries[] = new Library('jqPlot','chartinggraphics','');
        $this->js->libraries[] = new Library('Flotr','chartinggraphics','');
        $this->js->libraries[] = new Library('Google Charts','chartinggraphics','');

		$this->js->libraries[] = new Library('QUnit','testing','');
        $this->js->libraries[] = new Library('Jasmine','testing','');

		$this->js->libraries[] = new Library('Grunt','ci_cd','');
	}

	public function setRuby() {
		$this->ruby = new Ruby('ruby', "Ruby");
		$this->ruby->setGeneralCompetence(7);
		$this->ruby->setCompetency(false);

		$this->ruby->frameworks[] = new Framework('Ruby on Rails','full','');
		$this->ruby->frameworks[] = new Framework('Sinatra','micro','');

		$this->ruby->gems[] = new Gem('Compass','replacement','');
		$this->ruby->gems[] = new Gem('Sass','replacement','');
		$this->ruby->gems[] = new Gem('Coffeescript','replacement','');

        $this->ruby->gems[] = new Gem('HAML','parsers','');
		$this->ruby->gems[] = new Gem('Nokogiri','parsers','');
		$this->ruby->gems[] = new Gem('Redcarpet','parsers','');

		$this->ruby->gems[] = new Gem('RSpec','testing','http://rspec.info/');

		$this->ruby->gems[] = new Gem('Resque','background-jobs','');
		$this->ruby->gems[] = new Gem('Sidekiq','background-jobs','');

		$this->ruby->gems[] = new Gem('Capistrano','deployment','https://github.com/capistrano/capistrano');
		$this->ruby->gems[] = new Gem('Mina','deployment','');
		$this->ruby->gems[] = new Gem('Vlad','deployment','https://github.com/seattlerb/vlad');

		$this->ruby->tools[] = new Tool('Guard','other','');
		$this->ruby->tools[] = new Tool('Whenever','other','');
		$this->ruby->tools[] = new Tool('Pry','other','');
		$this->ruby->tools[] = new Tool('Letter Opener','other','');
	}

	public function setJava() {
		$this->java = new Language('java', "Java SE/EE");

		$this->java->frameworks[] = new Framework('Android SDK','mobile','');
		$this->java->frameworks[] = new Framework('Android NDK','mobile','');
		$this->java->frameworks[] = new Framework('Bouncy Castle','security','');

		$this->java->setGeneralCompetence(6);
		$this->java->setCompetency(false);
	}

	public function setPython() {
		$this->python = new Language('python', "Python");
		$this->python->setGeneralCompetence(5);
		$this->python->setCompetency(false,false);

        $this->python->frameworks[] = new Framework('Django','libraries','http://symfony.com/',false,false);
        $this->python->frameworks[] = new Framework('Flask','libraries','http://symfony.com/',false,false);
        $this->python->frameworks[] = new Framework('SQLAlchemy','libraries','http://symfony.com/',false,false);
        $this->python->frameworks[] = new Framework('SciPi','libraries','http://symfony.com/',false,false);
        $this->python->frameworks[] = new Framework('numpy','libraries','http://symfony.com/',false,false);
	}

	public function setC() {
		$this->cFamily = new Language('c_cpp_cnet', "C/C++/C#");
		$this->cFamily->setGeneralCompetence(3);
		$this->cFamily->setCompetency(false,false,false);
	}

	public function setOtherLangs() {
		$this->otherLangs = array(
			'Groovy',
			'Scala',
			'Haskell',
			'R',
			'ActionScript 3',
			'Bash',
			'VBSCript',
			'Visual Basic 6 ',
			'Visual Basic .NET ',
		);
	}

	public function getLanguages() {
		return array($this->php,$this->js,$this->ruby,$this->java,$this->python,$this->cFamily);
	}

	public function getDatabases() {
		return array($this->mysql,$this->sqlite,$this->postgresql,$this->couchdb);
	}
	
	public function abbr($abbr,$title) {
		return "<abbr title=\"$title\">$abbr<abbr>";
	}

    private function setOtherSkills() {
        $this->otherSoftware = array(
            "Version Control"=>array(
                "CVS","SVN","Git","(branching, forking, cooperation)"
            ),
            "Used paradigms"=>array(
				$this->abbr("DP","Design patterns"),
				$this->abbr("OOP","Object Oriented Programming"),
				$this->abbr("TDD","Test Driven Development"),
				$this->abbr("BDD","Behaviour Driven Development"),
				$this->abbr("CI/CD","Continous Integration / Continous development"),
            ),
            "High performance"=>array(
                "Async I/O","Messaging systems","Eventual consistency"
            ),
        );

        $this->otherSkills = array(
			"SEO"=>array(
				"Google ranking algorithm knowledge",
                "Keyword research",
                "Bulding helper tools",
            ),
            "SEM"=>array(
                "Pay per click campaigns",
                "Assesing client needs",
                "Optimizing landing pages",
            ),
            "Electronics"=>array(
                "Amateur electronics",
                "Arduino development",
                "Soldering",
            ),
        );
    }

    private function setSoftSkills() {
        $this->softSkills = array(
            "Communication"=>array(
				"Excellent communication skills in writing and speech",
				"Experience in leadership (leader of 2 distinct student organizations)",
                "„Practitioner In Neuro-Linguistic Programming” certificate",
            ),
            "Pop-psychology"=>array(
                "Motivation",
                "Getting Things Done",
                "Self-help",
            ),
//            "Business orientation" => array(
//
//            )
        );
    }

    public function setPortfolioGT() {
        $this->portfolioGT = array(
            new PortfolioItem('graki','Production management game',false,
                '',
                ''
            ),
			new PortfolioItem('ml_ebok','','',
                '',
                ''
            ),
			new PortfolioItem('siemens_finance','','',
                '',
                ''
            ),
			new PortfolioItem('mme_fv','','',
                '',
                ''
            ),
			new PortfolioItem('paged','','',
                '',
                ''
            ),
			new PortfolioItem('agas','','',
                '',
                ''
            ),

        );
    }

    public function setPortfolioFreelance() {
        $this->portfolioFreelance = array(
            new PortfolioItem('wooloo','Wooloo.pl','http://wooloo.pl',
                'Backend programming, programming team leader.',
                'A platform where you can find trusted individuals to help you with your todos and grant you more time.'
            ),
            new PortfolioItem('dj','DokadJechać.pl','http://dokadjechac.pl',
                'CTO, Back-end and front-end programming.',
                'A website for Polish travelers aimed at answering the question "Where should I go?"'
            )
        );
    }

	private function setAbbr() {
        $this->abbr = array(
            "SEO"=>"Search engine marketing",
        );
    }
}

class Framework extends SomethingProgrammish
{
	function __construct($name,$type, $www = null, $descr = null,$complexCommercial = true,$simpleCommercial = true,$personalComplex = true, $eduProjectsOrSimple = true,$simpleScripts = true ) {
		$this->type = $type;
		$this->name = $name;
		$this->descr = $descr;
		$this->www = $www;
	}

}

class Library extends SomethingProgrammish {}
class Tool extends SomethingProgrammish {}
class Gem extends SomethingProgrammish {}

class Education {
	public $type,$when,$where,$what;

	function __construct($type, $when, $where, $what) {
		$this->type = $type;
		$this->when = $when;
		$this->where = $where;
		$this->what = $what;
	}
}

class Experience
{
	public $when, $where, $position, $tasks = array();

	function __construct($when, $where, $position, $tasks) {
		$this->when = $when;
		$this->where  = $where;
		$this->position = $position;
		$this->tasks = $tasks;
	}

}


class Lang {
	private $data = array();
	public $missing = array();

	public function __construct($data) {
		foreach ($data as $k=>$v) {
			$this->data[$k] = $v;
		}
	}

	public function __isset($k) {
		if (!isset($this->data[$k])) {
			$this->missing[$k] = str_replace("_"," ",$k);
//		    var_dump($k);
		}
		return isset($this->data[$k]);
	}

	public function __get($k) {
        if (isset($this->data[$k]))
            return $this->data[$k];
        else
            return "<span style='color:#ff0000'>".$k."</span>";
	}

    public function getMissingVE() {
        return var_export($this->missing,true);
    }
}

class Language extends HardSkill {
	public $id;
	public $frameworks = array();
	public $libraries = array();
	public $tools = array();
	public $projects = array();
    public $gems;

	public function __construct($id,$name) {
		$this->id = $id;
		$this->name = $name;
	}

	public function getLibsByGroup() {
		$libs = array();
		foreach (array($this->frameworks,$this->libraries,$this->tools,$this->gems) as $smthProg) {
            if (is_array($smthProg)) {
                foreach ($smthProg as $f) {
                    if (!isset($libs[$f->type]))
                        $libs[$f->type] = array();
                    $libs[$f->type][] = $f;
                }
            }
		}

		return $libs;
	}
}

class Database extends Language {}

class Ruby extends Language {
	public $gems = array();
}

class PortfolioItem {
    public $id, $title, $url, $responsibilities, $descr;

    function __construct($id, $title, $url, $responsibilities, $descr) {
        $this->id = $id;
        $this->responsibilities = $responsibilities;
        $this->title = $title;
        $this->url = $url;
        $this->descr = $descr;
    }
}

class HardSkill {
	public $generalMax = 10;

	public $name;
	public $general = 0;
	public $simpleScripts = true;
	public $eduProjectsOrSimple = true;
	public $personalComplex = true;
	public $simpleCommercial = true;
	public $complexCommercial = true;

	public function setGeneralCompetence($general) {
		$this->general = $general;
	}

	public function setCompetency($complexCommercial = true,$simpleCommercial = true,$personalComplex = true, $eduProjectsOrSimple = true,$simpleScripts = true) {
		$this->simpleScripts = $simpleScripts;
		$this->eduProjectsOrSimple = $eduProjectsOrSimple;
		$this->personalComplex = $personalComplex;
		$this->simpleCommercial = $simpleCommercial;
		$this->complexCommercial = $complexCommercial;
	}

	public function getIcon() {
		if 	   ($this->complexCommercial) 	return 'icon-money';
		elseif ($this->simpleCommercial) 	return 'icon-briefcase';
		elseif ($this->personalComplex) 	return 'icon-cogs';
		elseif ($this->eduProjectsOrSimple) return 'icon-beaker';
		elseif ($this->simpleScripts) 		return 'icon-leaf';
        else
            throw new Exception("Nieznany icon");
	}

	public function getSkillExperienceArray() {
		return array($this->simpleScripts,$this->eduProjectsOrSimple,$this->personalComplex,$this->simpleCommercial,$this->complexCommercial);
	}
}

class SomethingProgrammish extends HardSkill{
	public $type; // fullstack || micro || scaffold
	public $descr;
	public $www;
	function __construct($name,$type, $www = null, $descr = null) {
		$this->type = $type;
		$this->name = $name;
		$this->descr = $descr;
		$this->www = $www;
	}
}

function getData() {
	return json_encode((object) array(
		"lang"=>getLang(),
		"education"=>getEdu(),
		"experience"=>getExp(),
	));
}

//"pn"=> "Grzegorz Paweł Kaczorek",
//		"txt_basic"=> "Dane podstawowe",
//		"txt_exp"=> "Doświadczenie",
//		"txt_edu"=> "Edukacja",
//		"edu_type"=> "Rodzaj",
//		"edu_when"=> "Okres",
//		"edu_where"=> "Uczelnia",
//		"edu_what"=> "Kierunek",


function getLang() {
	return new Lang(array(
		"pn"=> "Greg Kaczorek",
		"general_info"=> "Information",
		"experience"=> "Experience",
		"txt_edu"=> "Education",
		"edu_type"=> "Type",
		"edu_when"=> "Timeframe",
		"edu_where"=> "University",
		"edu_what"=> "Major",

        'basic_name'=>'Full name',
        'basic_birth'=>'Date of birth',
        'basic_email'=>'E-mail',
        'skills'=>"Skills",
        'portfolio'=>"Portfolio",
        'portfolio_header'=>"Portfolio (shortened)",
        'it_skills'=>"Computer Science and Software Development",
        'languages_and_technology_stacks'=>"Languages & technology stacks",
        'other_skills'=>"Other",
        'experience_from'=>"When",
        'experience_employer'=>"Employer",
        'experience_position'=>"Position",
        'experience_responsibilities'=>"Responsibilities",
        'language'=>'Language',
        'language_general'=>'Overall competency',
        'libraries_by_language_or_technology'=>'Libraries and tools by language',
        'libraries'=>'Name',
        'library_group'=>'Group/usage',
        'smth_prog_group_full' => 'Full-stack framework',
        'smth_prog_group_micro' => 'Micro-framework' ,
        'smth_prog_group_orm' => 'ORM' ,
        'smth_prog_group_dbal' => 'DBAL' ,
        'smth_prog_group_templating' => 'Templating' ,
        'smth_prog_group_mail' => 'Mail' ,
        'smth_prog_group_testing' => 'Testing' ,
        'smth_prog_group_ci_cd' => 'CI/CD' ,
        'smth_prog_group_other' => 'Other' ,
        'smth_prog_group_front-end' => 'Front-end' ,
        'smth_prog_group_backend' => 'Back-end' ,
        'databases' => 'Databases and storage',
        'database' => 'Database',
        'smth_prog_group_replacement' => 'Misc',
        'smth_prog_group_parsers' => 'Parsers/Templating',
        'smth_prog_group_background-jobs' => 'Background jobs',
        'smth_prog_group_deployment' => 'Deployment',
		'smth_prog_group_ecommerce' => 'E-commerce',
		'smth_prog_group_cms' => 'CMS',
		'smth_prog_group_mobile' => 'Mobile',
		'smth_prog_group_security' => 'Security',
		'soft_skills' => 'Soft Skills',
		'soft_skill_area' => 'Area',
		'skill' => 'Skill',
		'other_skill_area' => 'Area',
        'txt_profile' => 'Profile',
        'portfolio_header_freelance' => 'Freelance and personal',
        'portfolio_header_gt' => 'For Grafinet Ltd.',
		'icon_leaf' => 'Simple personal projects',
		'icon_beaker' => 'Research and educational projects',
		'icon_cogs' => 'Simple projects for external clients (paid)',
		'icon_briefcase' => 'Complex projects for external clients (paid)',
		'icon_money' => 'Enterprise level complex applications with lots of users',
        'paradigm_other_software' => 'Other software development skills',
        'smth_prog_group_libraries' => 'libraries',
        'smth_prog_group_chartinggraphics' => 'Charting/Graphics',
	));
}

function getParadigms() {
	array(
		"TDD",
		"OOP",
		"CVS",
		"Design patterns",
		'CI?',
		'CD?',
		'BDD?',
		'SOLID?'
	);
}