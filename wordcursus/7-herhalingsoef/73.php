<table border="1">
    <!--eerste rij-->
    <tr>
        <td></td>
        <?php
        for ($l = 1; $l <= 10; $l++) {
        ?>

        <td>
            <?php echo $l; ?>
        </td>
    
        <?php
        }?>
    
    </tr>  
    
    <?php
    for ($i=1;$i<=10;$i++){
    ?>
        <tr>
            <td>
                <!--eerste kolom-->
                <?php echo $i; ?>
            </td>
            
            <?php
            for ($k=1;$k<=10;$k++)
            {?>
                    <td>
                        <?php
                        echo $i*$k;
                        ?>
                    </td>

            <?php }
        ?>
        </tr>
        <?php
}