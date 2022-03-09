<template>
    <div>
        <section id="landing">
            <div id="landingCon">
                <h2>BROWSE RECIPES</h2>
                <p>Enjoy our chef curated recipes that go great on any smoker or bbq you have at your hands!</p>
                <div id="line"></div>

            </div>
        </section>

        
        <section id="recipeContainer">
            <h2 class="hidden">List of Recipes</h2>
            <div v-for="recipe in recipes" v-bind:key="recipe" class="recipeInfo">
                <h2>{{recipe.name}}</h2>
                <p>{{recipe.bio}}</p>
                <p class="moreInfo">Prep time: 8 hours</p>
                <p class="costP moreInfo">Cost: $$</p>
                <a href="#" class="button recipeBtn">▶ READ MORE</a>
            </div>
        </section>

        <blog-banner />

    </div>
</template>

<script>
    import BlogBanner from './partials/blog-banner.vue';

    export default {
        props: ['recipes'],
        
        components: {
            BlogBanner
        },
    }
</script>