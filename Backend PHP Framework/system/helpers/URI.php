<?php

class URI
{
	static function  redirect($route)
	{
		
		header('location:'.base_path.$route);
	} 

	static function parse($route)
	{
		return base_path.$route;
	} 
}