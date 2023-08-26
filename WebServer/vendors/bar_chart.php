<?php

//Include necessary files to draw bar chart
require_once ('jpgraph-4.4.2/src/jpgraph.php');
require_once ('jpgraph-4.4.2/src/jpgraph_bar.php');
//Set the data
$series1=array(10,60,30,70,25,67,10);
$series2=array(34,89,56,12,59,70,23);
//Declare object to draw the chart
$graph = new Graph(500,500);
//Clear all
$graph->ClearTheme();
//Set some setting for the chart
$graph->SetScale("intlin");
$graph->SetShadow();
$graph->img->SetMargin(100,100,20,20);//left right top bottom
//Create object and colors for the bar plots
$b1plot = new BarPlot($series1);
$b1plot->SetFillColor("blue");
$b2plot = new BarPlot($series2);
$b2plot->SetFillColor("red");
//Create object for the grouped bar plot
$gbplot = new AccBarPlot(array($b1plot, $b2plot));//accumulated bar plots
//Add the plot for the chart
$graph->Add($gbplot);
//Set title of the chart, x-axis and y-axis
$graph->title->Set("Accumulated Bar Chart");
$graph->xaxis->title->Set("X- values");
$graph->yaxis->title->Set("Y-values");
//Display the graph
$graph->Stroke();
?>
