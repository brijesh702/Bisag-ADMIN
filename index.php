<?php
include("header.php");
?>

<div id="content-wrapper">
    <div class="wrapper"
        <h1>Dashboard</h1>
        <br>
        <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>
        
    </div>   
</div>

<?php
include("footer.php");
?>