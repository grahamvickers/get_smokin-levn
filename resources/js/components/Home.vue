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

        <section id="blog">
            <h2>THE BLOG</h2>
            <p>
                We post weekly blogs about tips and tricks
                 to mastering live fire cooking. Explore some our recent blogs…  
            </p>
            <button class="button">▶ RECENT POST</button>
        </section>

        <section id="newsletter">
            <h2>WEEKLY NEWSLETTER</h2>
            <p>
                We send out weekly newsletters
                 via email about what is new in the smoking and barbecue world. Join our mailing list TODAY!   
            </p>
            <button >▶ SIGN UP</button>
        </section>
    </div>
</template>

<script>
    export default {
        name: 'app',
        
    };
</script>