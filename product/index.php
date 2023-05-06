<?php
$link = mysqli_connect('localhost', 'root', '', 'demo_login', 3306);
$db = mysqli_select_db($link, 'demo_login');

$query = "SELECT * FROM products";
$query_run = mysqli_query($link, $query);

while ($row = mysqli_fetch_array($query_run)) {
?>
    <?php echo '<img src="data:image;base64,' . base64_encode($row['image']) . '"alt="Image" >'; ?>
<?php
}
?>