function SlideRight() {
    // Checks to see if the slider is to the left of the div
    if (document.getElementById("slider").style.float !== "right") {
      // If it is we will float the sliderBtn to the right and change the background of the housing to green
    document.getElementById("slider").style.float = "right";
    document.getElementById("slideHousing").style.backgroundColor = "#ffc0cb";

      // Toggle dark mode on
    document.body.style.backgroundColor = "black";
    document.getElementById("header").style.color = "#00000";
    document.getElementById("press").style.color = "#00000";
    } else {
      // If clicked again the btn will move back to the left side and change the color back to original
    document.getElementById("slider").style.float = "left";
    document.getElementById("slideHousing").style.backgroundColor = "#e6e6e6";

      // Toggle dark mode off
    document.body.style.backgroundColor = "pink";
    document.getElementById("header").style.color = "#ffc0cb";
    document.getElementById("press").style.color = "#ffc0cb";
    }
}
