<?php

	/**
		*@package Rivercraft
		*@version 1.2.1
	 */
	/*
		Plugin Name: Rivercraft
		Description: Rivercraft permet d'unir Wordpress et Minecraft avec JSONAPI.
		Version: 1.2.1
		Author: Heithem DRIDI ( RiverNight )
		License: GPLv2 or later
	*/

	require "JSONAPI.php";
	require "panel.php";
	require "widget.php";

	wp_enqueue_style('Rivercraft', '/wp-content/plugins/Rivercraft/css/style.css');  

?>