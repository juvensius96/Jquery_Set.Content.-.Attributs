<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#btn1").click(function(){
    $("#test1").text("test1(text)");
  });
  $("#btn2").click(function(){
    $("#test2").html("test2(html)");
  });
  $("#btn3").click(function(){
    $("#test3").val("test3(value)");
  });
});
</script>
</head>
<body>

<p id="test1">Paragraf 1</p>
<p id="test2">Paragraf 2<p>

<p>Masukan Text: <input type="text" id="test3" value="Mickey Mouse"></p>

<button id="btn1">Set Text</button>
<button id="btn2">Set HTML</button>
<button id="btn3">Set Nilai</button>

</body>
</html>
