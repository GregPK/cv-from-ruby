class ProgrammerSkill
    attr_accessor 
        :name,
        :general_competence,
        :experience_with

    def general_max
        10
    end
	
	def experience_areas_all
	    [:simple_scripts,:personal_simple,:personal_complex,:commercial_simple,:commercial_complex]
	end

    def experience_areas_icons
	    {
	        simple_scripts: "",
	        personal_simple: "",
	        personal_complex: "",
	        commercial_simple: "",
	        commercial_complex: ""
        }
    end

	def experience_area_icon(area)
	    experience_areas_icons.fetch(area)
	end
end