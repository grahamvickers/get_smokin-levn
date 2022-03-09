<template>
    <div id="landing">
        <section id="recipeContainer" >
            <h2>ALL BLOG POSTS</h2>
            <div id="selectFilter">
                <label for="filter">Filter Recipes</label>
                <select name="Filter" id="filter" onchange="location = this.value;">
                    <option value="#">Select:</option>
                    <option value="#">All Posts</option>
                    <option value="#">Recent</option>
                    <option value="#">Popular</option>
                </select>
            </div>
        

                <div class="recipeInfo">
                    <div v-for="post in posts" v-bind:key="post">
                        <h2></h2>
                        <div class="postsDes">
                            <img src="/images/" alt="head-shot" >
                            <div>
                                <p class="postInfo">{{post.author}}</p>
                                <p class="postInfo"></p>
                            </div>
                        </div>

                        <a href="#" class="button">&raquo; VIEW POST</a>
                    </div>
                </div>
        </section>
        <signup-banner />

    </div>
</template>

<script>
    import SignupBanner from './partials/signup-banner.vue';

    export default {
        data() {
            return {
                theBlog: []
            }
        },
        components: {
            SignupBanner
        },
        props: ['posts'],
        
        created: function() {
            let vm = this;
            fetch(`http://localhost:8082/api/get-blogs`) 
            .then(function(response){
            return response.json();
            }).then(function(data){
                console.log(data)
                vm.theBlog = data;
            })
        }
    }
</script>