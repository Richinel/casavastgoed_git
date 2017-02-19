<?php

    if(!isset($_SESSION['email'])){ //if login in session is not set
        header("Location: ../aventis/admin_login.php");
    }   

    include("dbconnect.php");
    $start      = 0;
    $limit      = 10;
     
    if(isset($_GET['id']))
    {
        $id     = $_GET['id'];
        $start  = ($id - 1 ) * $limit;
    }
    else{
        $id     = 1;
    }
    //Fetch from database first 10 items which is its limit. For that when page open you can see first 10 items. 
    $query          = mysqli_query($conn,"SELECT * FROM pages LIMIT $start, $limit");

    //print x items
    echo 
    "
        <table>
            <tr>
            	<th>
                    ID
                </th>
                <th>
                    Titel
                </th>
                <th>
                    Content
                </th>
                <th>
                </th>
                <th>
                </th>
                <th>
                </th>
            </tr>
    ";

    while($result = mysqli_fetch_array($query))
    {
       

        echo 
        "
            <tr>
            	<td>
                    ".$result['id']."
                </td>
                <td>
                    ".$result['titel']."
                </td>
                <td>
                    ". substr($result['content'], 0, 75) ."...
                </td>
                <td>
                    <a href='../view.php?id=".$result['id']."' target='_blank'>
                        <input type='button' class='btn1_admin' value='Bekijk' />
                    </a>
                </td>
                <td>
                    <a href='edit_page_forpages.php?id=".$result['id']."'>
                        <input type='button' class='btn1_admin' value='Wijzigen' />
                    </a>
                </td>
                <td class='last'>
                    <a href='#'>
                        <input type='button' class='btn1_admin' value='Verwijderen' />
                    </a>
                </td>
            </tr>
        ";

    }

    echo "</table>";

?>

<nav class="pagination centered">
    <ul>
        <?php

            //fetch all the data from database.
            $rows       = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pages"));
            //calculate total page number for the given table in the database 
            $total      = ceil( $rows / $limit );
            if( $id > 1 )
            {
                //Go to previous page to show previous 10 items. If its in page 1 then it is inactive
                echo "
                    
                    <li class='prev'>
                        <a href='?id=".($id-1)."' class='prev'>
                            &larr;
                        </a>
                    </li>";
            }

            for( $i = 1; $i <= $total; $i++ )
            {
                if( $i == $id ) { echo "<li class='current'>".$i."</li>"; }
                 
                else { echo "<li><a href='?id=". $i ."'>". $i ."</a></li>"; }
            }


            if( $id != $total )
            {
                ////Go to previous page to show next 10 items.
                echo "
                    <li class='next'>
                        <a href='?id=".( $id + 1 )."' class='next'>
                             &rarr;
                        </a>
                    </li>
                    ";

            }

        //show all the page link with page number. When click on these numbers go to particular page. 
            $conn->close();
    ?>
    </ul>
</nav>