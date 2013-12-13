class Company
  attr_accessor :name, :positions
  
  def initialize(name, positions = [])
    @name = name
    @positions = positions
  end
   
end
  