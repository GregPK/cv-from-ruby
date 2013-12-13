class GroupTableBodyWithHeaderPresenter < GroupTablePresenter
  attr_reader :header, :groups
  
  def initialize(header)
    @header = header
    @groups = []
  end
  
end