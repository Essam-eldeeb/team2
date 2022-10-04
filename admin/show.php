


<?php
include('../shared/head.php');
include('../shared/nav.php');
include('../shared/aside.php');
include('../general/connection.php');



if (isset($_GET['show'])) {
    $id = $_GET['show'];
    $select = "SELECT * FROM `adminrole` WHERE adID = $id";
    
    $s = mysqli_query($con, $select);
    $row = mysqli_fetch_assoc($s);
}



?>


<div class="container col-md-4 mt-5   ">
    <h1 class="text-center text-dark "><?= $row['adname'] ?></h1>

    <div class="card bg-dark">
        <div class="card-body">
            <img src="./upload/<?= $row['adimage'] ?>" alt="" class="img-tob w-100">
            <h4 class="card-title text-info mt-2">NAME <?= $row['adname'] ?> </h4>
            <h4 class="card-title text-info mt-2">emali <?= $row['ademail'] ?> </h4>
            <h4 class="card-title text-info mt-2">role <?= $row['roldec'] ?> </h4>



        </div>
    </div>
</div>


<?php

include('../shared/footer.php');
include('../shared/script.php');


?>
