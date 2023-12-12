
var images = [
    "Images/ins1.png",
    "Images/ins2.png",
    "Images/ins3.png",
    "Images/ins4.png",
    "Images/ins5.png",
    "Images/ins6.png",
    "Images/ins7.png",
    "Images/ins8.png",
    
]
var i = 0;


function slide(){
    var img = document.getElementsByClassName("instructor");
    img[0].getElementsByTagName("img")[0].src = images[i];
    img[1].getElementsByTagName("img")[0].src = images[i+1];
    img[2].getElementsByTagName("img")[0].src = images[i+2];
    img[3].getElementsByTagName("img")[0].src = images[i+3];
    
     
    i = (i + 1) % images.length;
    if(i + 3 == images.length) i = 0  ;
    

}

setInterval(slide, 1500);