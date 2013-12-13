class GroupTablePresenter
  attr_reader :group_desc_header, :item_desc_header, :groups
  
  def initialize(group_desc_header, item_desc_header)
    @group_desc_header = group_desc_header 
    @item_desc_header = item_desc_header
    @groups = []
  end
  
end