<?php
$files = glob(  "contents/ecommerce/entities". '/*.php' );
foreach ( $files as $file )
	require_once( $file );