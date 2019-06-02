<?php 

function subjects()
{
	foreach ($subjects as $subject) {
		return $subject->name;
	}
}