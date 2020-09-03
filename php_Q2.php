<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bootstrap-4.5.2-dist/css/bootstrap.min.css" />
    <title>php_Q2</title>
</head>

<body>
    <table class="table table-bordered  col-lg-6">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Birthday</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <?php
                $str = "Andus:2012-11-02,Dennis:102-02-05,Kelly:095/06/09,Maggy:92-7-30";
                $split_str = explode(",", $str);

                for ($i = 0; $i < sizeof($split_str); $i++) {
                    $split_data = explode(":", $split_str[$i]);

                    $split_time = explode("-", $split_data[1]);
                    if (sizeof($split_time) <= 1) {
                        $split_data[1] = str_replace('/', '-', $split_data[1]);
                        $split_time = explode("-", $split_data[1]);
                    }
                    if ((int)$split_time[0] < 1911) {
                        $date = new DateTime($split_data[1]);
                        if ((int)$split_time[0] > 100)
                            $date->modify("+1911 year");
                        else
                            $date->modify("+11 year");
                        $date = $date->format("Y-m-d");
                    } else {
                        $date = $split_data[1];
                    }
                ?>
                    <th scope="row"> <?php echo $i + 1 ?> </th>
                    <td> <?php echo $split_data[0] ?> </td>
                    <td> <?php echo $date ?> </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <script src="./vendor/jquery/jquery-3.5.1.min.js"></script>
    <script src="./vendor/bootstrap-4.5.2-dist/js/bootstrap.min.js"></script>
</body>

</html>