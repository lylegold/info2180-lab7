window.onload=run;
function run(){

  document.getElementById("lookup").addEventListener("click", function(){
   
    var input = document.getElementById("country").value;

var y = new XMLHttpRequest();

y.onreadystatechange = function(){
   
    if (this.readyState == 4 && this.status == 200)
    {
        document.getElementById("result").innerHTML = y.responseText;

    }
  }
y.open("GET", "world.php?country="+input);
y.send();
})


document.getElementById("lookup2").addEventListener("click", function(){
   
    var input = document.getElementById("country").value;
var x = new XMLHttpRequest();

x.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200)
    {
        document.getElementById("result").innerHTML = x.responseText;

    }
  }
x.open("GET", "world.php?country="+ input);
x.send();
})
}