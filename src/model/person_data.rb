class PersonData < Struct.new(:first_name, :last_name, :date_of_birth, :email, :phone, :photo_url)
  
  def full_name
    self[:first_name] + self[:last_name]
  end
end