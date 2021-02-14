<nav id="page-nav">
    <ul>
        <li><a class="links" href="<?php if(isset($_SESSION['dev_firstname'])){echo '/app/accounts/?action=home';}else{echo '/app/?action=home';} ?>" title="Home">Home</a></li>
        <li><a class="links" href="<?php if(isset($_SESSION['dev_firstname'])){echo '/app/accounts/?action=about';}else{echo '/app/?action=about';} ?>" title="About">About</a></li>
        <li><a class="links" href="<?php if(isset($_SESSION['dev_firstname'])){echo '/app/accounts/?action=developers';}else{echo '/app/?action=developers';} ?>" title="Developers">Developers</a></li>
    </ul>
</nav>