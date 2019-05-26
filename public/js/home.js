function menubtn() {
  var x = document.getElementById("resnav");
  if (x.className === "main") {
    x.className += " responsive";
  } else {
    x.className = "main";
  }
}