window.onload = function() {

    var timeline = new TimelineMax();
    timeline.from("#main", .7, {y:50, autoAlpha: .5 }, 0)
    
}


function showNav() {
    document.getElementById("navOverCon").style.width = "100%";
}
  
function hideNav() {
    document.getElementById("navOverCon").style.width = "0%";
}


(function landingGallery() {
    let count = 0;
    let img = ["brisket","chicken_platter","sausage"];

    const back = document.querySelector("#back");
    const next = document.querySelector("#next");
    let foodImg = document.querySelector("#imgGallery");

        function nextImg()	{
        count++;
            if (count == img.length) {
                count = 0;
            }		
            TweenMax.to(foodImg, 1, {autoAlpha:0, onComplete:done}); 
        }
    
        function backImg() {
            count--;
            if (count < 0) {
                count = img.length - 1;
            }	
            TweenMax.to(foodImg, 1, {autoAlpha:0, onComplete:done});
        }
    
        function done() {	
                let gallSrcset = 
                `/images/${img[count]}.jpg`;
                let gallsSrc = `/images/${img[count]}.jpg`;
                foodImg.src = gallsSrc;
                foodImg.srcset = gallSrcset;
                TweenMax.to(foodImg, 1, {autoAlpha:1}); 		
        }

    back.addEventListener("click", nextImg, false); 
    next.addEventListener("click", backImg, false);

})()