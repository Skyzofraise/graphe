<?php include 'inc/inc-head.php'; ?>
<body>
    <?php
        if(isset($_POST['mdp']) AND $_POST['mdp'] == "test"){
    ?>
        <h2>You're in ;)</h2>
        <h3>Du coup on peut envoyer une image</h3>
        <form enctype="multipart/form-data" action="#" method="post">
            <input type="hidden" name="MAX_FILE_SIZE" value="250000">
            <input type="file" name="fic" size="50">
            <input type="submit" value="Envoyer">
        </form>
    <?php
        }else{
    ?>
        
        <p><h2>Ça n'est pas le bon mot de passe :(</h2></p>

    <?php
        header("refresh:1.5;url=/admin/index.php");
        exit();
        }
    ?>
</body>
</html>