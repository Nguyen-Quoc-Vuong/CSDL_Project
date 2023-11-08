<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action']) && isset($_GET['query'])) {
            $tam = $_GET['action']; 
            $query = $_GET['query']; 
        } else {
            $tam = ''; 
            $query =''; 
        }
        if($tam ==  'quanlidanhmucsanpham' && $query=='them') {
            echo "$tam, $query"; 
            include("modules/quanlidanhmucsp/them.php"); 
            include("modules/quanlidanhmucsp/lietke.php"); 
        } elseif($tam ==  'quanlidanhmucsanpham' && $query=='sua') {
            echo "$tam, $query";
            include("modules/quanlidanhmucsp/sua.php"); 
        }elseif($tam =='quanlisp' && $query=='them') {
            include("modules/quanlisp/them.php"); 
            include("modules/quanlisp/lietke.php"); 
        } elseif($tam =='quanlisp' && $query=='sua') {
            include("modules/quanlisp/sua.php"); 
        }
         else {
            include ("modules/dashboard.php"); 
        }
    ?>
</div>