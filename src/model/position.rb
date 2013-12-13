class Position
  attr_reader :name, :dates, :tasks
  
  def initialize(name, dates, tasks)
    @name = name
    @dates = dates
    @tasks = tasks
  end
end
	