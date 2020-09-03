<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bootstrap-4.5.2-dist/css/bootstrap.min.css" />
    <title>php_Q1</title>
</head>

<body>
    <table class="table table-bordered text-center col-lg-6">
        <tbody>
            <?php
            $arr = array(
                'A', 'B', 'C',
                'D', 'E', 'F',
                'G', 'H', 'I',
                'J', 'K', 'L',
                'M', 'N', 'O',
                'P', 'Q', 'R',
                'S', 'T', 'U',
                'V', 'W', 'X',
                'Y', 'Z', ''
            );
            ?>
            <tr>
                <?php
                $j = 0;
                while ($j < sizeof($arr)) {
                ?>
                    <td>
                        <?php
                        print $arr[$j];
                        $j++;
                        ?>
                    </td>

                    <td>
                        <?php
                        print $arr[$j];
                        $j++;
                        ?>
                    </td>
                    <td>
                        <?php
                        print $arr[$j];
                        $j++;
                        ?>
                    </td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
    <script src="./vendor/jquery/jquery-3.5.1.min.js"></script>
    <script src="./vendor/bootstrap-4.5.2-dist/js/bootstrap.min.js"></script>
</body>

</html>