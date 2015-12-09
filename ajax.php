<?php

if (isset($_POST['myAction'])){    
    $action = $_POST['myAction'];
    switch($action) {
        case 'documentSearch' : loadSearchResults($_POST['query']); break;
    }
}

function loadSearchResults($q){
    $conn = new mysqli("localhost","root","root","614357_fcc10");
    //$conn = mysqli_connect("mariadb-096.wc1.dfw3.stabletransit.com","614357_fccadmin","FCC4jobs","614357_fcc10" );
    $result = $conn->query("SELECT * 
                            FROM vmbkmkqiq5_posts
                            WHERE post_type = 'document'
                            AND post_title LIKE '%$q%'
                            ORDER BY post_date 
                            DESC;")
                            OR DIE(mysqli_error($conn));
    $row = $result->fetch_array();
    if($row) {
        do {
            $id = $row['ID'];
            $result2 = $conn->query("SELECT * FROM vmbkmkqiq5_postmeta WHERE post_id = '$id' AND meta_key = 'file';") OR DIE(mysqli_error($conn));
            $row2 = $result2->fetch_array();
            $meta_value = $row2['meta_value'];
            $result3 = $conn->query("SELECT * FROM vmbkmkqiq5_postmeta WHERE post_id = '$meta_value';") OR DIE(mysqli_error($conn)); 
            $row3 = $result3->fetch_array();

            echo "<li><h4><a target='_blank' href='/wp-content/uploads/".$row3['meta_value']."'>".$row['post_title']."</a></h4></li>";
        }
        while ($row = $result->fetch_array());
    }
    else {
        echo mysqli_error($conn);
        echo "<li><h4><a href=''>No results found...</a></h4></li>";
    }
    exit();
}