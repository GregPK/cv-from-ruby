class Language
  attr_accessor :id, :name, :toolchain, :competence

  def initialize(id,overall, complex_commercial = true,simple_commercial = true,personal_complex = true, edu_projects_or_simple = true,simple_scripts = true)
    @id = id.downcase
    @name = (name or id)
    @competence = Competence.new(overall, complex_commercial,simple_commercial,personal_complex, edu_projects_or_simple,simple_scripts)
    init_default_toolchain_groups
  end
  
  def init_default_toolchain_groups
    @toolchain = []
  end


  def competence
    @competence
  end
# 	public function getLibsByGroup() {
# 		$libs = array();
# 		foreach (array($this->frameworks,$this->libraries,$this->tools,$this->gems) as $smthProg) {
#             if (is_array($smthProg)) {
#                 foreach ($smthProg as $f) {
#                     if (!isset($libs[$f->type]))
#                         $libs[$f->type] = array();
#                     $libs[$f->type][] = $f;
#                 }
#             }
# 		}

# 		return $libs;
# 	}
end