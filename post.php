<?php

	$sailors = array();
	$sailor->id = 4;
	$sailor->content = "ONOMA";
	$sailorsJSON = json_encode($sailor);
	$sailors[] = $sailor;
	
	$shifts = array();
	$shift->id = 10;
	$shift->group = 4;
	$shift->start = "20-10-2020";
	$shift->end = "22-10-2020";
	$shift->content = "CONTENT";
	
	$shiftsJSON = json_encode($shift);
	$shifts[] = $shift;

?>