f = File.open("frameworks.txt","r")

f.each_line do |l|
  it = l.split(' ')
  next if it.size <= 0
  items = []
  group = ""
  it.each do |e|
    (name,gr) = e.split(":")
    items << name
    group = gr
  end
  line = "\"#{group}\", #{items.to_s}"
  puts line
end
