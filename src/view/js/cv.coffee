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

  $(".nav.navbar-nav a").on('click', (e) ->
    e.preventDefault()
    $target = $("a[name="+$(this).attr("href").replace("#","")+"]")
    $("html, body").animate({ scrollTop: $target.offset().top-45 }, 500);
  )