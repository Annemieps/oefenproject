<?php
//tafels.php
$grondtal = $_GET["grondtal"];
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tafels</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th colspan="2">De tafel van <?php echo $grondtal; ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                ?>
                    <tr>
                        <td>
                            <?php echo $i." maal " . $grondtal; ?>&nbsp;
                        </td>
                        <td>
                            &nbsp;<?php echo $i * $grondtal; ?>&nbsp;
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
