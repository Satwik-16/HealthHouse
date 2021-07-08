
  var myIndex = 0;
  carousel();
  responsivity();
 function carousel(){
var i;
var x = document.getElementsByClassName("Slides");
for (i = 0; i < x.length; i++) {
  x[i].style.display = "none";
}
myIndex++;
if (myIndex > x.length) {myIndex = 1}
x[myIndex-1].style.display = "block";
setTimeout(carousel, 5000);
}
function responsivity()
 {
var x = document.getElementById("myTopnav");
if (x.className === "topnav")
{
  x.className += " responsive";
}
else
{
  x.className = "topnav";
}
}

</script>
