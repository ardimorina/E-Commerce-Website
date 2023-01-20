var images = ['images/banner8.jpg','images/banner9.jpg','images/banner10.jpg'];
var i =0;
 function slideShow() {
    document.getElementById("image").src=images[i];


    if(i<images.length-1){
        i++;
    }
    else {
        i=0;
    }
    setTimeout("slideShow()" , 5000);
 }
 window.onload = slideShow;