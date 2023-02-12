<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai1_LAB1</title>
    <style>
        div.main {
            font-size: 21px;
            margin-top: 17%;
            display: flex;
            justify-content: center;
        }

        table {
            width: 270px;
            height: 150px;
            text-align: center;
        }

        input {
            border-radius: 3px;
        }

        .header {
            background-color: burlywood;
        }

        .place_input, .place_result, .place_submit {
            background-color: greenyellow;
        }

        .submit {
            height: 30px;
        }
    </style>
</head>
<body>
    <div class="main">
        <form action="" method="post">
            <table>
                <tr class="header">
                    <th>CHÀO THEO GIỜ</th>      
                </tr>
                <tr class="place_input">
                    <td>
                        <input type="text" name="txtGio" value="<?php if(isset($_POST['txtGio']) 
                        && $_POST['txtGio'] != NULL){ echo $_POST['txtGio']; } ?>">
                    </td>
                </tr>
                <tr class="place_result">
                    <td>
                        <?php
                            if (isset($_POST["txtGio"]))
                            {
                                $gio = $_POST["txtGio"];
                                if ($gio < 12)
                                    $chao = "Chào Buổi Sáng";
                                else if ($gio < 17)
                                    $chao = "Chào Buổi Chiều";
                                else
                                    $chao = "Chào Buổi Tối";
                                echo $chao;
                            }
                        ?>
                    </td>
                </tr>
                <tr class="place_submit">
                    <td>
                        <input class="submit" type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>