<?php

    require './header.php';

    // sql query
    $sql = "SELECT * FROM huisjes";
    $result = mysqli_query($conn, $sql);

    $houses = [];

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) array_push($houses, $row);        
    } else $error = 'no results found!   :(';
?>

<div class="container">
    <div class="houses-list">

        <?php foreach ($houses as $key => $value) { ?>

        <div class="item">
            <h3><?= $value['titel'] ?></h3>

            <?php 

            $fotos = json_decode($value['fotoUrl']);
            foreach ($fotos as $key => $foto) {
            
            ?>
            
            <img src="<?= $foto ?>" alt="">

            <?php } ?>

            <table>
                <tr>
                    <th>Type:</th>
                    <td><?= $value['type'] ?></td>
                </tr>
                <tr>
                    <th>Land:</th>
                    <td><?= $value['land'] ?></td>
                </tr>
                <tr>
                    <th>Plaats:</th>
                    <td><?= $value['plaats'] ?></td>
                </tr>
            </table>
        </div>

        <?php } ?>

    </div>
</div>

<?php

    require './footer.php';

?>


<!-- 
"https://static2.heerlijkehuisjes.nl/uploads/house/images/xlarge/nh244-vakantiehuis-noord-holland-schoorl-191fb661e2.jpg",
	"https://static2.heerlijkehuisjes.nl/uploads/house/images/xlarge/nh244-vakantiehuis-noord-holland-schoorl-91378bb4d3.jpg",
	"https://static2.heerlijkehuisjes.nl/uploads/house/images/xlarge/nh244-vakantiehuis-noord-holland-schoorl-1326463616.jpg"
-->