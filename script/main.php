<?php
    
    echo 'hai scelto: '. $_POST['opzioni_menu'].'<br>';
    
    $x = 512;
    $y = 17.59;
    echo 'x è intera? ';
    var_dump(is_int($x));
    echo '<br>'.'y è intera? ';
    var_dump(is_int($y));

    echo '<br>'.(min(0, 150, 30, 20, -8, -200));
    echo '<br>'.(max(0, 150, 30, 20, -8, -200));

    testCiao();

    echo '<br>'.'numero random '.(rand(10, 100));

    function testCiao() {
        echo 'Ciao Daniele';
    }
    $searchErr = "";
    $search = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["opzioni_menu"]))
        {
            $searchErr = "Inserire una ricerca valida";
        } 
        else
        {
            $search = inputCorretto($_POST["opzioni_menu"]);
        }
    }
    function inputCorretto($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>