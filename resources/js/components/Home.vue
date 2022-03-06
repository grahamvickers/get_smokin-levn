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
       
    </div>
</template>

<script>
    export default {
        name: 'app',
        
    };
</script>