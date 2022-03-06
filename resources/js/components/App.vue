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
                        <li><a href="#">RECIPES</a></li>
                        <li><a href="#">BLOG</a></li>
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
                        <li><a href="#">RECIPES</a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">SIGN UP</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <router-view></router-view>
        
        <footer>
            <p>DESIGNED AND DEVELOPED BY GRAHAM VICKERS&copy;</p>
        </footer>
    </div>
</template>

<script>

    export default {
        name: 'app',
        
        
    };

    
</script>

<style lang="scss">
    
</style>