<template>
    <div>
        <!-- <h1>Get Smokin'</h1> -->
                <!-- this is the landing area -->
        <section id="landing">
            <div id="landingCon">
                <h2>Smokin' Hot Recipes!</h2>
                <p>
                    Enjoy our chef curated chicken recipes that go great on any smoker or bbq you have at your hands!
                    Search our digital cook book for a recipe by entering a meat you want to use.
                </p>
            </div>
            <!-- <img src="images/brisket.jpg" alt="brisket" id="landingImg"> -->
            <div id="recpGallery">
                <h2 class="hidden">Photo Gallery</h2>
                <img src="/images/back.svg" alt="previous image" id="back">
                <img src="/images/next.svg" alt="next image" id="next">
                <img
                id="imgGallery"
                sizes="100vw"
                srcset="/images/brisket.jpg"
                src="/images/brisket.jpg"
                alt="brisket, sausage & chicken" >	
            </div>
        </section>

        <section id="recipes">
            <h2>EXPLORE OUR RECIPES</h2>

            <div id="recipeBoxes">
        
                <div class="recipeCon">
                    <img src="images/chicken.png" alt="Chicken">
                    <a href="#" class="button">CHICKEN</a>
                </div>

                <div class="recipeCon">
                    <img src="images/steak.png" alt="BEEF">
                    <a href="#" class="button">BEEF</a>
                </div>
            

                <div class="recipeCon">
                    <img src="images/sausage.png" alt="Pork">
                    <a href="#" class="button">PORK</a>
                </div>

                <div class="recipeCon">
                    <img src="images/fish.png" alt="fish">
                    <a href="#" class="button">FISH</a>
                </div>
                
            </div>
        </section>

        <blog-banner />
    </div>
</template>

<script>
    import BlogBanner from './partials/blog-banner.vue';

    export default {
        components: {
            BlogBanner
        },
        mounted: function () {
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
        }
    };
</script>