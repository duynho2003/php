<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 50%;
            border: 2px solid blue;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header {
            border-bottom: 2px solid blue;
        }

        label {
            display: inline-block;
            margin-right: 50px;
            width: 90px;
        }

        .information {
            margin-top: 5px;
        }

        .submit {
            margin-top: 15px;
            margin-bottom: 30px;
            margin-left: 60px;
        }

        #btn-submit {
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="header">
            <h1>Create New Book</h1>
        </div>

        <div class="content">
            <form action="processInsert.php" method="POST">
                <div class="information">
                    <label for="">Name: </label>
                    <input type="text" name="name" id="" value="">
                    <?php
                     if(isset($_GET['name']) && empty($_GET['name'])){
                        echo "<p>Name khong duoc de trong</p>";
                     }
                    ?>
                </div>

                <div class="information">
                    <label for="">Author: </label>
                    <input type="text" name="author" id="" value="">
                </div>

                <div class="information">
                    <label for="">Unit price: </label>
                    <input type="number" name="price" id="" value="" >
                    <?php
                    if (isset($_GET['price']) && !empty($_GET['price'])) {
                        if ($_GET['price'] <= 0 || $_GET['price'] >= 100) {
                            echo "<p>Giá tiền không hợp lệ!</p>";
                        }
                    }
                    ?>
                </div>

                <div class="submit">
                    <input type="submit" name="submit" id="btn-submit" value="Submit">
                    <input type="reset" name="" id="" value="Reset">
                </div>

            </form>
        </div>
    </div>
</body>
</body>

</html>