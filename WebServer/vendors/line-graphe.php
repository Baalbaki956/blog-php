<?php
//Include necessary files to draw line chart
require_once ('jpgraph-4.4.2/src/jpgraph.php');
require_once ('jpgraph-4.4.2/src/jpgraph_line.php');
require_once '../helpers/functions.php';

session_start();

if($_SESSION['is_admin'] != 1) {
    redirectTo("../admin/index.php");
} else {
    require_once '../classes/Connection.php';
    $connection = new Connection();
    $query = "SELECT first_name, last_name, email FROM users";
    $result = $connection->executeQuery($query);
    
    $r = $connection->getNumRows($result);
    
    for($i=0;$i<$r;$i++) {
        $fetched_row= $connection->fetchRow($result);

        $firstName = $fetched_row['first_name'];
        $lastName = $fetched_row['last_name'];
        $email = $fetched_row['email'];
    }
    
$data = array(10,6,16,23,11,9,5);
//Declare the graph object
$graph = new Graph(800,400);//graph size
//Clear all
$graph->ClearTheme();
//Set the scale
$graph->SetScale('textlin');
//Set the linear plot
$linept=new LinePlot($data);
//Set the line color
$linept->SetColor('green');
//Add the plot to create the chart
$graph->Add($linept);
//set y min
$graph->yscale->SetAutoMin(0);
//Display the chart
$graph->Stroke();

    }
?>
