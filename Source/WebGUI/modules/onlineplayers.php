                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Online Players</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                 <th>
                                                    State
                                                </th>
                                                <th>
                                                    SteamID
                                                </th>
                                                <th>
                                                    Nickname
                                                </th>
                                                <th>
                                                    ID
                                                </th>

                                                <th>
                                                    Ping
                                                </th>
		                                 <th>
                                                    GLITCH
                                                </th>
                                                <th>
                                                    Players
                                                </th>

                                                <th>
                                                    Zombies
                                                </th>
                                                <th>
                                                    Deaths
                                                </th>
                                                <th>
                                                    Score
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
<?php 
//require 'config/db.php';
// set database server access variables: 


// open connection 
$connection2 = mysql_connect($host, $user, $pass) or die ("Unable to connect!"); 

// select database 
mysql_select_db($db) or die ("Unable to select database!"); 

// create query 
$query = "SELECT * FROM main_players WHERE State = 'Online'"; 

// execute query 
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error()); 

// see if any rows were returned 
if (mysql_num_rows($result) > 0) { 
    // yes 
    // print them one after another 

    while($row = mysql_fetch_row($result)) { 
        echo "<tr>"; 
		echo "<td><img src="."images/"."$row[18]".".png"." height=20 width=20</img>".$row[18]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[4]."</td>"; 
        echo "<td>".$row[10]."</td>";
        echo "<td>".$row[11]."</td>";
        echo "<td>".$row[12]."</td>";
        echo "<td>".$row[13]."</td>";
        echo "<td>".$row[14]."</td>";
        echo "</tr>"; 
    }

} 
else { 
    // no 
    // print status message 
    echo "No rows found!"; 
} 

// free result set memory 
mysql_free_result($result); 

// close connection 
mysql_close($connection2); 

?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>
                                                    State
                                                </th>
                                                <th>
                                                    SteamID
                                                </th>
                                                <th>
                                                    Nickname
                                                </th>
                                                <th>
                                                    ID
                                                </th>
                                                <th>
                                                    Ping
                                                </th>

		                                 <th>
                                                    GLITCH
                                                </th>
                                                <th>
                                                    Players
                                                </th>

                                                <th>
                                                    Zombies
                                                </th>
                                                <th>
                                                    Deaths
                                                </th>
                                                <th>
                                                    Score
                                                </th>

                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                            <!--/.module-->
                        </div>