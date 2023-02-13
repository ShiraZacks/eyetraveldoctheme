<?php
echo ' <!-- Navbar  -->
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    document.getElementById("smallScreen").classList.toggle("show");
    document.getElementById("smallScreen").classList.toggle("hide");
}
</script>
    
    <div class="top">
        <div class="topBar">

            <div class="smaller">
                <a href="#logo" class="bar" onclick="myFunction()" title="Toggle Navigation Menu"><img src="https://eyetraveldoc.com/wp-content/uploads/2023/02/bars.png" alt="MENU"></a>
            </div>



            <a href="eyetraveldoc.com" class="buttons">Home</a>
            <a href="eyetraveldoc.com/about" class="buttons">What is Eye Travel</a>
            <a href="eyetraveldoc.com/contact" class="buttons">Contact</a>
            <a href="https://portal.aprima.com/11/login.aspx?UID=a747b803-8d58-479c-8365-87a8f087e10e" class="buttons">Patient Portal</a>
        </div>
    <!-- eye travel logo-->
        <div>
            <img id="logo" class="logo" src="https://eyetraveldoc.com/wp-content/uploads/2023/02/logo.png" alt="Eye Travel: Eye Care for the Home Bound"/>
        </div>

        <!-- Navbar on small screens -->
        <div id="smallScreen" class="hide">
            <ul>
                <li><a href="eyetraveldoc.com" class="buttonSmall">Home</a></li>
                <li><a href="eyetraveldoc.com/about" class="buttonSmall">What is Eye Travel</a></li>
                <li><a href="eyetraveldoc.com/contact" class="buttonSmall">Contact</a></li>
                <li><a href="https://portal.aprima.com/11/login.aspx?UID=a747b803-8d58-479c-8365-87a8f087e10e" class="buttonSmall">Patient Portal</a></li>
            </ul>
        </div>
    </div>';
