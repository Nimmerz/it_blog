<?php


include('includes/db.php');

// categories list

//$result = mysqli_query($connection, "SELECT * FROM `articles_categories`");
//
//if ((mysqli_num_rows($result) == 0)) {
//    echo 'Categories are empty';
//} else {
//    ?>
    <!--    <ul>-->
    <!--        --><?php
//
//        while (($cat = mysqli_fetch_assoc($result))) {
//            $articles_count = mysqli_query($connection, "SELECT COUNT(id) as `total_count` FROM articles WHERE `categorie_id` = " . $cat['id']);
//            $articles_count_result = mysqli_fetch_assoc($articles_count);
//            echo '<li>' . $cat['title'] . ' (' . $articles_count_result['total_count'] . ')</li>';
//        }
//
//        ?>
    <!--    </ul>-->
    <!--    --><?php
//}
//
//?>
    <!---->
    <!---->
<?php
//
//mysqli_close($connection);
//
//


// explaining timestamp

//$start_date = '2016-12-10';
//
//$start_date_timestamp = strtotime($start_date);
//
//
//$days_passed = floor((($diff / 60) / 60) / 24);
//
//echo $start_date_timestamp . '<br>';
//
//echo time() . '<br>';
//
//$diff =  time() - $start_date_timestamp;
//
//
//echo 'Before ' . date('d.m.Y H:i:s', $start_date_timestamp) . ' & ' . date('d.m.Y H:i:s') . ' passed ' . $days_passed . ' days';
    ?>

<form action="/old/handle.php" method="POST">
    <input type="text" placeholder="Your Login" name="login">
    <input type="password" placeholder="Your password" name="password">
    <hr>
    <input type="submit" value="Send">
</form>
