var imagecount = 1;
var total = 5;
function slide(x)
{
var Image = document.getElementById('img');
imagecount = imagecount + x;
if(imagecount > total) { imagecount =1;}
if(imagecount < 1) { imagecount = total;} 
Image.src = "Images/img"+imagecount +".jpg";
clearInterval(time); 
time =  window.setInterval(function slideA() { 	
	var image = document.getElementById('img');
	imageCount = imageCount + 1;
	if(imageCount > total){imageCount = 1;}
	if(imageCount < 1){imageCount = total;}	
	image.src = "Images/img"+ imageCount +".jpg";
	},2000);
	}							
	

 var time = window.setInterval(function slideA() {
var Image = document.getElementById('img');
imagecount = imagecount + x;
if(imagecount > total) { imagecount =1;}
if(imagecount < 1) { imagecount = total;} 
Image.src = "Images/img"+imagecount +".jpg"
},1000);