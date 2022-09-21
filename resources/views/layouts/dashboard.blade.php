<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- custom css file link  -->
<link rel="stylesheet" href="{{asset("assets/css/collapsedsidebar.css")}}">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- Font Awesome CSS -->
<script src="https://kit.fontawesome.com/55d1e4a364.js" crossorigin="anonymous"></script>
@livewireStyles
</head>
<body {{-- oncontextmenu="return false" --}}>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">Home</a>
  <a href="#">Course</a>
  <a href="{{route("author_books")}}">Books</a>
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

{{-- copy past --}}
{{-- <script>

  document.onkeydown = function(e) {
    if(e.keyCode == 123) {
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
     return false;
    }

    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
     return false;
    }      
 }

</script> --}}
{{-- copy past --}}

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
