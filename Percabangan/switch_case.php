<fieldset>
        <br>
        <br>
        <br>
        <br>
        <p>
            Nama: Desi Lisnawati
            <br>
            Kelas: XI Rpl
        </p>
        <div class="img">
            <img src="1670222462757.jpg" width="150px" align="right">
        </div>
        <?php
        // percabangan switch case adalah bentuk lain dari percabangan if elseif else

        $level = 3;

        switch ($level) {
            case 1:
                echo "Pelajari HTML!";
                break;
            case 2:
                echo "Pelajari CSS!";
                break;
            case 3:
                echo "<b>Pelajari Javascript!</b>";
                break;
            case 4:
                echo "Pelajari PHPL!";
                break;
            default:
                echo "Rekayasa perangkat lunak";
        }

        ?>
        <!-- ada 5 pilihan dalam kondisi di atas. pilihan default akan dipilih apabila 
        nilai variable $level tidak ada dalam pilihan case -->

</fieldset>

<style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url(49a61e26d5905c8a41291d80c3aa999a.jpg);
        background-size: cover;
    }
    fieldset {
        border-bottom: none;
        box-shadow: none;
        width: 600px;
        height: 200px;
        background-color: pink;
        border-radius: 45px;
        text-align: justify;
        margin-top: -70px;
        border: none;
    }
    .img {
        margin-top: -110px;
        margin-right: 10px;
    }

</style>

