<?php

include __DIR__ . '/partials/vars.php';

?>

<body style='background-color:#1E2D3B;
             width:100%;
             margin:auto;
             display:flex;
             flex-direction:row;
             flex-wrap:wrap;'>

    <?php 

    foreach ($data['response'] as $album) {

        ?>
    <div style='width: 16%;
                margin: 3% 2%;
                height: 50%;
                background: rgb(46, 58, 70);
                text-align: center;
                color: white;'>
       <?php

        echo  ' <img style="width:70%;height:auto;margin-top:5%;" src="' . $album['poster'] . '" alt=""> ';   
        echo '<h4>' . $album['title'] . '</h4>' . '<br>';
        echo $album['author'] . '<br>';
        echo $album['genre'] .'<br>';
        echo $album['year'] . '<br>';

        ?>
    
    </div>

    <?php } ?>

</body>
