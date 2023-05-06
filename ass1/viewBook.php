
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        .container {
            border: 2px solid;
        }

        .price {
            display: flex;
            align-items: center;
            line-height: 68.95px;
        }

        .editPrice {
            line-height: 60.95px;
            margin-left: 30px;
        }

        .btn {
            margin-left: 30px;
            height: 35px;
            width: 100px;
            background-color: blue;
            margin-bottom: 8px;
            color: white;
            border: 2px solid #000;
            padding: 1px;
        }

        input {
            height: 35px;
            border: 2px solid blue;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="">
            <div class="header">
                <h4>
                    <a href="insertBook.php">Create New</a>
                </h4>

                <div class="price">
                    <h4>Price</h4>
                    <form action="findByPrice.php" method="GET">
                        <div class="editPrice">
                            <label for="">From $</label>
                            <input type="number" name="priceFrom" id="">
                        </div>

                        <div class="editPrice">
                            <label for="">To $</label>
                            <input type="number" name="priceTo" id="">
                        </div>
                        <input type="submit" name="btn_search" class="btn" value="Search">
                    </form>
                </div>

            </div>
        </form>

        <div class="content">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Book ID</td>
                        <td>Book Name</td>
                        <td>Price</td>
                        <td>Author</td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include "db.php";
                    include "findByPrice.php";
                    if ( isset($_GET) && isset($_GET['priceFrom']) && isset($_GET['priceTo'])){
                        $books = findByPrice($priceFrom, $priceTo);
                        if (count($books) > 0) {
                            foreach ($books as $item) {
                                echo "
                                <tr>
                                <td>$item[0]</td>
                                <td>$item[1]</td>
                                <td> $item[2]</td>
                                <td> $item[3]</td>
                            </tr>
                                ";
                            }
                        }
                    }else{
                        $books = getBooks();
                        if (count($books) > 0) {
                            foreach ($books as $item) {
                                echo "
                                <tr>
                                <td>$item[0]</td>
                                <td>$item[1]</td>
                                <td> $item[2]</td>
                                <td> $item[3]</td>
                            </tr>
                                ";
                            }
                        }
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>