deobfuscateElem = (str) ->
  chrs = str.split(',')
  res = ""
  for c in chrs 
    res += String.fromCharCode((new Number(c))-23)
  res

$(document).ready ->
  $(".obf").each (i,e) ->
    $e = $(e)
    val = deobfuscateElem($e.html())
    $e.html(val)
    $e.attr('href',"mailto:"+val)