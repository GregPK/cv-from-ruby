class Competence
  attr_accessor :overall, :specific_hash
  
  def initialize(overall, complex_commercial = true,simple_commercial = true,personal_complex = true, edu_projects_or_simple = true,simple_scripts = true)
    @overall = overall
    @specific_hash = {
      simple_scripts: simple_scripts,
      edu_projects_or_simple: edu_projects_or_simple,
      personal_complex: personal_complex,
      simple_commercial: simple_commercial,
      complex_commercial: complex_commercial,
    }
  end
  
  def overall_max
    10
  end
  
end