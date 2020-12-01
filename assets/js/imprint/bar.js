var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("totalBar");
	var emoji = document.getElementById("appearA");
    var width = 10;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
		elem.style['background-image'] = "linear-gradient(to right, #4CAF50 , #2196F3, #f44336)";
        elem.innerHTML = width  + "%";
		emoji.innerHTML = "<img src='https://www.emoji.co.uk/files/apple-emojis/objects-ios/698-party-popper.png' style='width:100%; max-width: 64px; height: auto;'></img>"
      }
    }
  }
}