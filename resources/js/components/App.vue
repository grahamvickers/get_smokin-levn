<template>
    <div>
       <header>
            <img src="/images/logo_v1.svg" alt="Get Smokin' logo" id="logo">
            <span id="hmbgrMenu" style="font-size:30px;cursor:pointer;color: #BF5630;" onclick="showNav()">&#9776; </span>
            <div id="navCon">
                <nav id="mainNav">
                    <h3 class="hidden">Main Navigation</h3>
                    <ul>
                        <li><a href="/">HOME</a></li>
                        <li><router-link to="/recipes">RECIPES</router-link></li>
                        <li><router-link to="/blog">BLOG</router-link></li>
                        <li><a href="#">SIGN UP</a></li>
                    </ul>
                    
                </nav>
            </div>
            <div id="navOverCon" class="overlay">
                <h3 class="hidden">Main Navigation</h3>
                <a href="javascript:void(0)" class="closebtn" onclick="hideNav()">&times;</a>
                <div class="overlay-con">
                    <ul>
                        <li><a href="/">HOME</a></li>
                        <li><router-link to="/recipes">RECIPES</router-link></li>
                        <li><router-link to="/blog">BLOG</router-link></li>
                        <li><a href="#">SIGN UP</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <router-view v-bind:recipes="theRecipes" v-bind:posts="theBlog"></router-view>

        <footer>
            <p>DESIGNED AND DEVELOPED BY GRAHAM VICKERS&copy;</p>
        </footer>
    </div>
</template>

<script>

    export default {
        name: 'app',
        data() {
            return {
                theRecipes: [],
            }
        },
        created: function() {
            let vm = this;
            fetch(`http://localhost:8082/api/get-recipes`) 
            .then(function(response){
            return response.json();
            }).then(function(data){
                console.log(data)
                vm.theRecipes = data;
            })
        }
        
    };

    
</script>

<style lang="scss">
    
</style>