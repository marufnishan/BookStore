<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- custom css file link  -->
<link rel="stylesheet" href="{{asset("assets/css/collapsedsidebar.css")}}">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@livewireStyles
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">Home</a>
  <a href="#">Course</a>
  <a href="{{route("author_add_book")}}">Books</a>
  <a href="#">My Course</a>
  <a href="#">Contuct Us</a>
  <a href="#">Event</a>
  <a href="#">FAQ ?</a>
</div>

<div id="main" style="background-color: #F2F3F5">
  <div class="col-md-12" style="margin: 0; padding:0; background:black "><button class="openbtn"
    onclick="openNav()">☰ DASHBOARD</button></div>
    {{$slot}}
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@livewireScripts
</body>
</html> 
