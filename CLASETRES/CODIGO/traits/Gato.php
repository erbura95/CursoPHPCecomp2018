<?php 
	
	require_once 'Animal.php';
	require_once 'TocableTrait.php';

	class Gato extends Animal{
		use TocableTrait;
		
	}