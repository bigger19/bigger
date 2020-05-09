<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" >
        <title>Belajar membuat web</title>
    </head>
    
    <body>
        <!--
            Author :Teknik Informatika
        -->
        
            <div class="content">
                <header>
                    <h1 class="Judul"> IT PLN</h1>
                    <h3 class="Deskripsi">Membuat Halaman web Dinamis Dengan php</h3>
                </header>

                <div class="Menu">
                    <ul>
                        <li><a href="index.php?page=home">home</a></li>
                        <li><a href="index.php?page=tentang">tentang</a></li>
                        <li><a href="index.php?page=tutorial">tutorial</a></li>
                    </ul>
                </div>

                <div class="Badan">
                <?php
                    if(isset($_GET['page']))
                    {
                        $page = $_GET['page'];
                        switch ($page) {
                            case 'home':
                                include "home.php";
                                break;
                            case 'tentang':
                                include "tentang.php";
                                break;
                            case 'tutorial':
                               include "tutorial.php";
                                break;
                            default:
                                echo "<center><h3>Maaf.
                                Halaman tidak di temukan! </h3><center>";
                                break;
                        }
                    }
                    else
                    {
                        include "home.php";
                    }

                ?>
            </div>
        </body>
</html>
