class I18n

  def initialize
    fill
  end
  
  # make class behave like a dict hash
  # will probably change out to something more dynamic
  def method_missing(name, *args, &block)
    @dictionary.fetch(name.to_sym) do 
      @dictionary.send(name, *args, &block) if @dictionary.respond_to? name
      "<span style='color:#fff;font-weight:bold'>#{name}</span>"
    end
  end
 
  def fill
    @dictionary = {
  		:page_title => "Greg Kaczorek",
  		:general_info => "Information",
  		:experience => "Experience",
  		:txt_edu => "Education",
  		:edu_type => "Type",
  		:edu_when => "Timeframe",
  		:edu_where => "University",
  		:edu_what => "Major",
      :basic_name =>'Full name',
      :basic_birth =>'Date of birth',
      :basic_email =>'E-mail',
      :online_presence =>'Online presence',
      :skills =>"Skills",
      :portfolio =>"Portfolio",
      :portfolio_header =>"Portfolio (shortened)",
      :it_skills =>"Computer Science and Software Development",
      :languages_and_technology_stacks =>"Languages & technology stacks",
      :other_skills =>"Other",
      :experience_from =>"When",
      :experience_employer =>"Employer",
      :experience_position =>"Position",
      :experience_responsibilities =>"Responsibilities",
      :technology =>'Technology',
      :contact =>'Contact',
      :language =>'Language',
      :language_general =>'Overall competency',
      :libraries_by_language_or_technology =>'Libraries and tools by language',
      :libraries =>'Name',
      :library_group =>'Group/usage',
      :smth_prog_group_full => 'Full-stack framework',
      :smth_prog_group_micro => 'Micro-framework' ,
      :smth_prog_group_orm => 'ORM' ,
      :smth_prog_group_dbal => 'DBAL' ,
      :smth_prog_group_templating => 'Templating' ,
      :smth_prog_group_mail => 'Mail' ,
      :smth_prog_group_testing => 'Testing' ,
      :smth_prog_group_ci_cd => 'CI/CD' ,
      :smth_prog_group_other => 'Other' ,
      :smth_prog_group_front_end => 'Front-end' ,
      :smth_prog_group_backend => 'Back-end' ,
      :databases => 'Databases and storage',
      :database => 'Database',
      :smth_prog_group_replacement => 'Misc',
      :smth_prog_group_parsers => 'Parsers/Templating',
      :smth_prog_group_background_jobs => 'Background jobs',
      :smth_prog_group_deployment => 'Deployment',
  		:smth_prog_group_ecommerce => 'E-commerce',
  		:smth_prog_group_cms => 'CMS',
  		:smth_prog_group_mobile => 'Mobile',
  		:smth_prog_group_security => 'Security',
  		:soft_skills => 'Soft Skills',
  		:soft_skill_area => 'Area',
  		:skill => 'Skill',
  		:other_skill_area => 'Area',
      :txt_profile => 'Profile',
      :portfolio_header_freelance => 'Freelance and personal',
      :portfolio_header_gt => 'For Grafinet Ltd.',
      :icon_leaf => 'Simple personal projects',
  		:icon_flask => 'Research and educational projects',
  		:icon_cogs => 'Simple projects for external clients (paid)',
  		:icon_briefcase => 'Complex projects for external clients (paid)',
  		:icon_money => 'Enterprise level complex applications with lots of users',
      :paradigm_other_software => 'Other software development skills',
      :smth_prog_group_libraries => 'libraries',
      :smth_prog_group_chartinggraphics => 'Charting/Graphics',
    }
	end
end