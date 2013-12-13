<?php

/**
   @todo Dodać kursy zewnętrzne (mit, coursera, udemy)
   @todo Dodać do portfolio GT: Seiemens, ML, Graki,
   @todo Wymyślić co pochować na CV
*/


class Resume {
	
	/**
	 * @var Database
	 */
	public $couchdb;

    public $otherSkills;

    public $softSkills;

    public $portfolioFreelance;
    public $portfolioGT;

	public function education() {
		return array(
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

	public function setPHP() {


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
		

		$this->java->frameworks[] = new Framework('Android SDK','mobile','');
		$this->java->frameworks[] = new Framework('Android NDK','mobile','');
		$this->java->frameworks[] = new Framework('Bouncy Castle','security','');


	}

	public function setPython() {
	

        $this->python->frameworks[] = new Framework('Django','libraries','http://symfony.com/',false,false);
        $this->python->frameworks[] = new Framework('Flask','libraries','http://symfony.com/',false,false);
        $this->python->frameworks[] = new Framework('SQLAlchemy','libraries','http://symfony.com/',false,false);
        $this->python->frameworks[] = new Framework('SciPi','libraries','http://symfony.com/',false,false);
        $this->python->frameworks[] = new Framework('numpy','libraries','http://symfony.com/',false,false);
	}

	public function setC() {
		
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