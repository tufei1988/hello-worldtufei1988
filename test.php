<?php
//namespace api\myClass ;
use \api\myClass\Mdb ;
include_once "./api/myClass/Mdb.php" ;

$mdb = new Mdb () ;

$r = $mdb -> selectLog () ;  //select db
//$r = $mdb -> drop ( 'log' ) ; // delete db
//$json_string = file_get_contents('/home/contents/Project/api/storageSize.json');

var_dump($r);

/* storageList 수정하기 */
//$storageList = array ( 'service1' => '50000000' , 'service2' => '214748364800' ) ;
//$storageListText = json_encode ( $storageList ) ;
//file_put_contents ( 'api/storageList.json' , $storageListText ) ;

/* storageList select */
//$json_string = file_get_contents ( 'api/storageList.json' ) ;
//$r = json_decode ( $json_string , true ) ;
//
//var_dump ( $r[ 'service1' ] ) ;



//function randomID ( $len )
//{
//	$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz' ;
//	$string = time () ;
//	for ( ; $len >= 1 ; $len --  )
//	{
//		$position = rand () % strlen ( $chars ) ;
//		$position2 = rand () % strlen ( $string ) ;
//		$string = substr_replace ( $string , substr ( $chars , $position , 1 ) , $position2 , 0 ) ;
//	}
//	return $string ;
//}
//
//var_dump(randomID(10));

