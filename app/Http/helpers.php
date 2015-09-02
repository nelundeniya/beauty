<?php

function getRatingImage($rating)
{
	return str_replace('.', '-', $rating).'-stars.png';
}