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
            // echo "$tam, $query"; 
            include("modules/quanlidanhmucsp/them.php"); 
            include("modules/quanlidanhmucsp/lietke.php"); 
        } elseif($tam ==  'quanlidanhmucsanpham' && $query=='sua') {
            echo "$tam, $query";
            include("modules/quanlidanhmucsp/sua.php"); 
        }elseif($tam =='quanlisp' && $query=='them') {
            include("modules/quanlisp/them.php"); 
            include("modules/quanlisp/lietke.php"); 
        } 
        elseif($tam =='quanlicity' && $query=='them') {
            include("modules/quanlicity/them.php"); 
            include("modules/quanlicity/lietke.php"); 
        }
         elseif($tam =='quanlisp' && $query=='sua') {
            include("modules/quanlisp/sua.php"); 
        } elseif($tam =='quanliAdmin' && $query=='them') {
            include("modules/quanliAdmin/them.php"); 
            include("modules/quanliAdmin/lietke.php"); 
        }
         else {
            include ("modules/dashboard.php"); 
        }
    ?>
</div>