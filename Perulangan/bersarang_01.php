<fieldset>
    <div class="box">
        <?php 

        $i = 0;
        while($i < 10){
            for ($j = 0; $j < 10 ; $j++) { 
                echo "Ini perulangan ke ($i, $j)<br>";
                // fungsi echo adalah untuk menampilkan teks ke layar. fungsi ini dapat
                // digunakan dengan tanda kurung maupun tanda kurung
            }

            $i++;
        }

        // perulangan bersarang adalah istilah untuk menyebut perulangan dalam perulangan.
        // dalam bahsa inggris, perulangan bersarang disebut nested loop

        ?>
    </div>

</fieldset>
<style>
    fieldset {
        background: pink;
    }
</style>
