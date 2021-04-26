<?php

    require './header.php';

    // sql query
    $sql = "SELECT * FROM huisjes;";
    $result = $conn->query($sql);

    print_r($result);
?>

<div class="container">



</div>

<?php

    require './footer.php';
    
?>

["https://static2.heerlijkehuisjes.nl/uploads/house/images/xlarge/nh244-vakantiehuis-noord-holland-schoorl-191fb661e2.jpg",
	"https://static2.heerlijkehuisjes.nl/uploads/house/images/xlarge/nh244-vakantiehuis-noord-holland-schoorl-91378bb4d3.jpg",
	"https://static2.heerlijkehuisjes.nl/uploads/house/images/xlarge/nh244-vakantiehuis-noord-holland-schoorl-1326463616.jpg"
]