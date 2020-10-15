<?php

/**
 * @author Mahesh Babu <app@godigitally.co.in>
 * @copyright Go Digitally 2020
 * @package general-studies
 * 
 * 
 * Created using IMA Builder v2
 */


/** site **/
$config["app-name"]			= "General Studies" ; //Write the name of your website
$config["app-desc"]			= "General Studies App for Android" ; //Write a brief description of your website
$config["utf8"]				= true; 
$config["debug"]			= false; 
$config["protect"]			= false; 
$config["url"]			= "https://gallikart.herokuapp.com/restapi.php"; 
$config["timezone"]			= "Asia/Kolkata" ; // check this site: http://php.net/manual/en/timezones.php
$config["gzip"]			= false; //compressed page 

/** mysql **/
$config["db_host"]				= "us-cdbr-east-02.cleardb.com" ; //host
$config["db_user"]				= "b022723ead205b" ; //Username SQL
$config["db_pwd"]				= "8cfe1cb9" ; //Password SQL
$config["db_name"]			= "heroku_a7ba64e758e9b5e" ; //Database


/** DON'T EDIT THE CODE BELLOW **/
session_start();
if($config["gzip"]==true){
	ob_start("ob_gzhandler");
}
ini_set("internal_encoding", "utf-8");
date_default_timezone_set($config["timezone"]);
if($config["debug"]==true){
	error_reporting(E_ALL);
}else{
	error_reporting(0);
}

if($config["protect"]==true){
	if(isset($_SERVER["HTTP_USER_AGENT"])){
		if(!preg_match("/general\-studies/i",$_SERVER["HTTP_USER_AGENT"])){
			die("Not allowed");
		}
	}else{
		die("Not allowed");
	}
}

if(isset($_SERVER["HTTP_X_AUTHORIZATION"])){
	$_SERVER["HTTP_AUTHORIZATION"] = $_SERVER["HTTP_X_AUTHORIZATION"];
}
/** CONNECT TO MYSQL **/
$mysql = new mysqli($config["db_host"], $config["db_user"], $config["db_pwd"], $config["db_name"]);
if (mysqli_connect_errno()){
	die(mysqli_connect_error());
}

if($config["utf8"]==true){
	$mysql->set_charset("utf8");
}
if(!isset($_GET["api"])){
	$_GET["api"]= "route";
}
$root_url = $config["url"];
$rest_api=array("data"=>array("status"=>404,"title"=>"Not found"),"title"=>"Error","message"=>"Routes not found");
switch($_GET["api"]){
	case "route":
		// TODO: JSON --+-- ROUTES
		$rest_api=array();
		$rest_api["name"] = "General Studies" ;
		$rest_api["description"] = "General Studies App for Android" ;
		$rest_api["generator"] = "IMA-BuildeRz vrev20.10.11" ;

		$rest_api["namespaces"][1] = "books/";
		$rest_api["namespaces"][2] = "chapters/";

		$rest_api["routes"]["/books/"]["namespace"] = "books/";
		$rest_api["routes"]["/books/"]["methods"][0] = "GET";
		$rest_api["routes"]["/books/"]["endpoints"][0]["methods"][0] = "GET";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-title"]["required"] = false;
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-title"]["default"] = "";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-title"]["type"] = "string";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-title"]["description"] = "Limit result set to items with more specific by `book_title`.";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-title-alt"]["required"] = false;
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-title-alt"]["default"] = "";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-title-alt"]["type"] = "string";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-title-alt"]["description"] = "Limit result set to items with more specific by `book_title_alt`.";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-author"]["required"] = false;
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-author"]["default"] = "";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-author"]["type"] = "string";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-author"]["description"] = "Limit result set to items with more specific by `book_author`.";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-publisher"]["required"] = false;
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-publisher"]["default"] = "";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-publisher"]["type"] = "string";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-publisher"]["description"] = "Limit result set to items with more specific by `book_publisher`.";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-isbn"]["required"] = false;
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-isbn"]["default"] = "";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-isbn"]["type"] = "string";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-isbn"]["description"] = "Limit result set to items with more specific by `book_isbn`.";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-released"]["required"] = false;
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-released"]["default"] = "";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-released"]["type"] = "string";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-released"]["description"] = "Limit result set to items with more specific by `book_released`.";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-status"]["required"] = false;
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-status"]["default"] = "Ongoing";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-status"]["type"] = "string";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-status"]["description"] = "Limit result set to items with more specific by `book_status`.";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-synopsis"]["required"] = false;
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-synopsis"]["default"] = "";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-synopsis"]["type"] = "string";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["book-synopsis"]["description"] = "Limit result set to items with more specific by `book_synopsis`.";

		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["required"] = false;
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["default"] = "book_id";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["type"] = "string";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["enum"][0] = "book-id";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["enum"][1] = "book-thumbnail";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["enum"][2] = "book-cover";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["enum"][3] = "book-title";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["enum"][4] = "book-title-alt";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["enum"][5] = "book-genre";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["enum"][6] = "book-author";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["enum"][7] = "book-publisher";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["enum"][8] = "book-isbn";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["enum"][9] = "book-released";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["enum"][10] = "book-status";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["enum"][11] = "book-synopsis";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["orderby"]["description"] = "Sort collection by object attribute";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["sort"]["required"] = false;
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["sort"]["default"] = "asc";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["sort"]["type"] = "string";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["sort"]["enum"][0] = "asc";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["sort"]["enum"][1] = "desc";
		$rest_api["routes"]["/books/"]["endpoints"][0]["args"]["sort"]["description"] = "Order sort attribute ascending or descending";
		$rest_api["routes"]["/books/"]["endpoints"][0]["_links"][0] = $root_url . "?api=books";

		$rest_api["routes"]["/books/(?P<book-id>[\d]+)"]["namespace"] = "books/";
		$rest_api["routes"]["/books/(?P<book-id>[\d]+)"]["method"][0] = "GET";
		$rest_api["routes"]["/books/(?P<book-id>[\d]+)"]["endpoints"]["args"]["book-id"]["required"] = "true";
		$rest_api["routes"]["/books/(?P<book-id>[\d]+)"]["endpoints"]["args"]["book-id"]["type"] = "integer";
		$rest_api["routes"]["/books/(?P<book-id>[\d]+)"]["endpoints"]["args"]["book-id"]["description"] = "Unique identifier for the object";
		$rest_api["routes"]["/books/(?P<book-id>[\d]+)"]["endpoints"]["_links"][0] = $root_url . "?api=books&book-id=<book-id>";

		$rest_api["routes"]["/chapters/"]["namespace"] = "chapters/";
		$rest_api["routes"]["/chapters/"]["methods"][0] = "GET";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["methods"][0] = "GET";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-date"]["required"] = false;
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-date"]["default"] = "";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-date"]["type"] = "string";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-date"]["description"] = "Limit result set to items with more specific by `chapter_date`.";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-title"]["required"] = false;
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-title"]["default"] = "";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-title"]["type"] = "string";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-title"]["description"] = "Limit result set to items with more specific by `chapter_title`.";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-book"]["required"] = false;
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-book"]["default"] = "";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-book"]["type"] = "string";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-book"]["description"] = "Limit result set to items with more specific by `chapter_book`.";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-content"]["required"] = false;
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-content"]["default"] = "";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-content"]["type"] = "string";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-content"]["description"] = "Limit result set to items with more specific by `chapter_content`.";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-status"]["required"] = false;
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-status"]["default"] = "draft";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-status"]["type"] = "string";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["chapter-status"]["description"] = "Limit result set to items with more specific by `chapter_status`.";

		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["orderby"]["required"] = false;
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["orderby"]["default"] = "chapter_id";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["orderby"]["type"] = "string";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["orderby"]["enum"][0] = "chapter-id";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["orderby"]["enum"][1] = "chapter-number";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["orderby"]["enum"][2] = "chapter-date";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["orderby"]["enum"][3] = "chapter-title";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["orderby"]["enum"][4] = "chapter-book";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["orderby"]["enum"][5] = "chapter-content";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["orderby"]["enum"][6] = "chapter-status";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["orderby"]["description"] = "Sort collection by object attribute";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["sort"]["required"] = false;
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["sort"]["default"] = "asc";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["sort"]["type"] = "string";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["sort"]["enum"][0] = "asc";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["sort"]["enum"][1] = "desc";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["args"]["sort"]["description"] = "Order sort attribute ascending or descending";
		$rest_api["routes"]["/chapters/"]["endpoints"][0]["_links"][0] = $root_url . "?api=chapters";

		$rest_api["routes"]["/chapters/(?P<chapter-id>[\d]+)"]["namespace"] = "chapters/";
		$rest_api["routes"]["/chapters/(?P<chapter-id>[\d]+)"]["method"][0] = "GET";
		$rest_api["routes"]["/chapters/(?P<chapter-id>[\d]+)"]["endpoints"]["args"]["chapter-id"]["required"] = "true";
		$rest_api["routes"]["/chapters/(?P<chapter-id>[\d]+)"]["endpoints"]["args"]["chapter-id"]["type"] = "integer";
		$rest_api["routes"]["/chapters/(?P<chapter-id>[\d]+)"]["endpoints"]["args"]["chapter-id"]["description"] = "Unique identifier for the object";
		$rest_api["routes"]["/chapters/(?P<chapter-id>[\d]+)"]["endpoints"]["_links"][0] = $root_url . "?api=chapters&chapter-id=<chapter-id>";		break;
	case "books":
		$rest_api = array();
		// TODO: JSON --+-- BOOKS
		/** statement `where` **/

		if(isset($_GET["book-id"])){
			if($_GET["book-id"] != "-1"){
				if($_GET["book-id"]=="random"){
					$_GET["orderby"] = "random";
				}else{
					$id = (int)$_GET["book-id"] ; 
					$statement[] = "`book_id` =$id"; 
				}
			}
		}

		if(isset($_GET["book-thumbnail"])){
			if($_GET["book-thumbnail"] != "-1"){
				$value = $mysql->escape_string($_GET["book-thumbnail"]); 
				$statement[] = "`book_thumbnail` LIKE '%$value%'"; 
			}
		}

		if(isset($_GET["book-cover"])){
			if($_GET["book-cover"] != "-1"){
				$value = $mysql->escape_string($_GET["book-cover"]); 
				$statement[] = "`book_cover` LIKE '%$value%'"; 
			}
		}

		if(isset($_GET["book-title"])){
			if($_GET["book-title"] != "-1"){
				$value = $mysql->escape_string($_GET["book-title"]); 
				$statement[] = "`book_title` LIKE '%$value%'"; 
			}
		}

		if(isset($_GET["book-title-alt"])){
			if($_GET["book-title-alt"] != "-1"){
				$value = $mysql->escape_string($_GET["book-title-alt"]); 
				$statement[] = "`book_title_alt` LIKE '%$value%'"; 
			}
		}

		if(isset($_GET["book-genre"])){
			if($_GET["book-genre"] != "-1"){
			}
		}

		if(isset($_GET["book-author"])){
			if($_GET["book-author"] != "-1"){
				$value = $mysql->escape_string($_GET["book-author"]); 
				$statement[] = "`book_author` LIKE '%$value%'"; 
			}
		}

		if(isset($_GET["book-publisher"])){
			if($_GET["book-publisher"] != "-1"){
				$value = $mysql->escape_string($_GET["book-publisher"]); 
				$statement[] = "`book_publisher` LIKE '%$value%'"; 
			}
		}

		if(isset($_GET["book-isbn"])){
			if($_GET["book-isbn"] != "-1"){
				$value = $mysql->escape_string($_GET["book-isbn"]); 
				$statement[] = "`book_isbn` LIKE '%$value%'"; 
			}
		}

		if(isset($_GET["book-released"])){
			if($_GET["book-released"] != "-1"){
				$value = $mysql->escape_string($_GET["book-released"]); 
				$statement[] = "`book_released` LIKE '%$value%'"; 
			}
		}

		if(isset($_GET["book-status"])){
			if($_GET["book-status"] != "-1"){
				$value = $mysql->escape_string($_GET["book-status"]); 
				$statement[] = "`book_status` LIKE '$value'"; 
			}
		}

		if(isset($_GET["book-synopsis"])){
			if($_GET["book-synopsis"] != "-1"){
				$value = $mysql->escape_string($_GET["book-synopsis"]); 
				$statement[] = "`book_synopsis` LIKE '%$value%'"; 
			}
		}

		$where ="" ;
		if(isset($statement)){
			$where ="WHERE " . implode(" AND ",$statement);
		}
		/** order by **/
		$order_by = "`book_id`";
		if(isset($_GET["orderby"])){
			switch($_GET["orderby"]){
			case "book-id":
				$order_by = "`book_id`";
				break;
			case "book-thumbnail":
				$order_by = "`book_thumbnail`";
				break;
			case "book-cover":
				$order_by = "`book_cover`";
				break;
			case "book-title":
				$order_by = "`book_title`";
				break;
			case "book-title-alt":
				$order_by = "`book_title_alt`";
				break;
			case "book-genre":
				$order_by = "`book_genre`";
				break;
			case "book-author":
				$order_by = "`book_author`";
				break;
			case "book-publisher":
				$order_by = "`book_publisher`";
				break;
			case "book-isbn":
				$order_by = "`book_isbn`";
				break;
			case "book-released":
				$order_by = "`book_released`";
				break;
			case "book-status":
				$order_by = "`book_status`";
				break;
			case "book-synopsis":
				$order_by = "`book_synopsis`";
				break;
			case "random":
				$order_by = "RAND()";
				break;
			}
		}

		/** sort **/
		$sort = "ASC";
		if(isset($_GET["sort"])){
			if($_GET["sort"]=="asc"){
				$sort = "ASC";
			}else{
				$sort = "DESC";
			}
		}

		$sql_query = "SELECT * FROM `books` ".$where." ORDER BY ".$order_by." ".$sort.";"; 
		$z=0;
		if($result = $mysql->query($sql_query)){
			while ($data = $result->fetch_array()){
				if(isset($data["book_id"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["book_id"] = (int) $data["book_id"];
				}
				if(isset($data["book_thumbnail"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["book_thumbnail"] = $data["book_thumbnail"];
				}
				if(isset($data["book_cover"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["book_cover"] = $data["book_cover"];
				}
				if(isset($data["book_title"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["book_title"] = $data["book_title"];
				}
				if(isset($data["book_title_alt"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["book_title_alt"] = $data["book_title_alt"];
				}
				if(isset($data["book_genre"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["book_genre"] = json_decode($data["book_genre"],true);
				}
				if(isset($data["book_author"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["book_author"] = $data["book_author"];
				}
				if(isset($data["book_publisher"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["book_publisher"] = $data["book_publisher"];
				}
				if(isset($data["book_isbn"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["book_isbn"] = $data["book_isbn"];
				}
				if(isset($data["book_released"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["book_released"] = $data["book_released"];
				}
				if(isset($data["book_status"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["book_status"] = $data["book_status"];
				}
				if(isset($data["book_synopsis"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["book_synopsis"] = $data["book_synopsis"];
				}
				$rest_api[$z]["_links"]["self"][0] = $root_url . "?api=books&book-id=". $data["book_id"];
				$z++;
			}
			$result->close();
		}
		if(isset($_GET["book-id"])){
			if(isset($data_rest_api[0])){
				$rest_api = array();
				$rest_api["book_id"] = $data_rest_api[0]["book_id"];
				$rest_api["book_thumbnail"] = $data_rest_api[0]["book_thumbnail"];
				$rest_api["book_cover"] = $data_rest_api[0]["book_cover"];
				$rest_api["book_title"] = $data_rest_api[0]["book_title"];
				$rest_api["book_title_alt"] = $data_rest_api[0]["book_title_alt"];
				$rest_api["book_genre"] = json_decode($data_rest_api[0]["book_genre"],true);
				$rest_api["book_author"] = $data_rest_api[0]["book_author"];
				$rest_api["book_publisher"] = $data_rest_api[0]["book_publisher"];
				$rest_api["book_isbn"] = $data_rest_api[0]["book_isbn"];
				$rest_api["book_released"] = $data_rest_api[0]["book_released"];
				$rest_api["book_status"] = $data_rest_api[0]["book_status"];
				$rest_api["book_synopsis"] = $data_rest_api[0]["book_synopsis"];
			}else{
				$rest_api=array("data"=>array("status"=>404,"title"=>"Not found"),"title"=>"Error","message"=>"Invalid ID");
			}
		}
		break;
	case "chapters":
		$rest_api = array();
		// TODO: JSON --+-- CHAPTERS
		/** statement `where` **/

		if(isset($_GET["chapter-id"])){
			if($_GET["chapter-id"] != "-1"){
				if($_GET["chapter-id"]=="random"){
					$_GET["orderby"] = "random";
				}else{
					$id = (int)$_GET["chapter-id"] ; 
					$statement[] = "`chapter_id` =$id"; 
				}
			}
		}

		if(isset($_GET["chapter-number"])){
			if($_GET["chapter-number"] != "-1"){
				$value = $mysql->escape_string($_GET["chapter-number"]); 
				$statement[] = "`chapter_number` LIKE '%$value%'"; 
			}
		}

		if(isset($_GET["chapter-date"])){
			if($_GET["chapter-date"] != "-1"){
				$value = $mysql->escape_string($_GET["chapter-date"]); 
				$statement[] = "`chapter_date` LIKE '%$value%'"; 
			}
		}

		if(isset($_GET["chapter-title"])){
			if($_GET["chapter-title"] != "-1"){
				$value = $mysql->escape_string($_GET["chapter-title"]); 
				$statement[] = "`chapter_title` LIKE '%$value%'"; 
			}
		}

		if(isset($_GET["chapter-book"])){
			if($_GET["chapter-book"] != "-1"){
				$value = $mysql->escape_string($_GET["chapter-book"]); 
				$statement[] = "`chapter_book` LIKE '$value'"; 
			}
		}

		if(isset($_GET["chapter-content"])){
			if($_GET["chapter-content"] != "-1"){
				$value = $mysql->escape_string($_GET["chapter-content"]); 
				$statement[] = "`chapter_content` LIKE '%$value%'"; 
			}
		}

		if(isset($_GET["chapter-status"])){
			if($_GET["chapter-status"] != "-1"){
				$value = $mysql->escape_string($_GET["chapter-status"]); 
				$statement[] = "`chapter_status` LIKE '$value'"; 
			}
		}

		$where ="" ;
		if(isset($statement)){
			$where ="WHERE " . implode(" AND ",$statement);
		}
		/** order by **/
		$order_by = "`chapter_id`";
		if(isset($_GET["orderby"])){
			switch($_GET["orderby"]){
			case "chapter-id":
				$order_by = "`chapter_id`";
				break;
			case "chapter-number":
				$order_by = "`chapter_number`";
				break;
			case "chapter-date":
				$order_by = "`chapter_date`";
				break;
			case "chapter-title":
				$order_by = "`chapter_title`";
				break;
			case "chapter-book":
				$order_by = "`chapter_book`";
				break;
			case "chapter-content":
				$order_by = "`chapter_content`";
				break;
			case "chapter-status":
				$order_by = "`chapter_status`";
				break;
			case "random":
				$order_by = "RAND()";
				break;
			}
		}

		/** sort **/
		$sort = "ASC";
		if(isset($_GET["sort"])){
			if($_GET["sort"]=="asc"){
				$sort = "ASC";
			}else{
				$sort = "DESC";
			}
		}

		$sql_query = "SELECT * FROM `chapters` ".$where." ORDER BY ".$order_by." ".$sort.";"; 
		$z=0;
		if($result = $mysql->query($sql_query)){
			while ($data = $result->fetch_array()){
				if(isset($data["chapter_id"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["chapter_id"] = (int) $data["chapter_id"];
				}
				if(isset($data["chapter_number"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["chapter_number"] = $data["chapter_number"];
				}
				if(isset($data["chapter_date"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["chapter_date"] = $data["chapter_date"];
				}
				if(isset($data["chapter_title"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["chapter_title"] = $data["chapter_title"];
				}
				if(isset($data["chapter_book"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["chapter_book"]["id"] = $data["chapter_book"];
					$books_id = htmlentities(stripslashes($data["chapter_book"]));
					$sql_books_query = "SELECT * FROM `books` WHERE `book_id`='{$books_id}'" ;
					$books_result = $mysql->query($sql_books_query);
					if($books_result){
						$books_result_data = $books_result->fetch_array();
						if(isset($books_result_data["book_title"])){
							$rest_api[$z]["chapter_book"]["rendered"] = stripslashes($books_result_data["book_title"]);
						}else{
							$rest_api[$z]["chapter_book"]["rendered"] = "";
						}
					}else{
						$rest_api[$z]["chapter_book"]["rendered"] = "";
					}
				}
				if(isset($data["chapter_content"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["chapter_content"] = $data["chapter_content"];
				}
				if(isset($data["chapter_status"])){
					$data_rest_api[$z] = $data;
					$rest_api[$z]["chapter_status"] = $data["chapter_status"];
				}
				$rest_api[$z]["_links"]["self"][0] = $root_url . "?api=chapters&chapter-id=". $data["chapter_id"];
				$z++;
			}
			$result->close();
		}
		if(isset($_GET["chapter-id"])){
			if(isset($data_rest_api[0])){
				$rest_api = array();
				$rest_api["chapter_id"] = $data_rest_api[0]["chapter_id"];
				$rest_api["chapter_number"] = $data_rest_api[0]["chapter_number"];
				$rest_api["chapter_date"] = $data_rest_api[0]["chapter_date"];
				$rest_api["chapter_title"] = $data_rest_api[0]["chapter_title"];
				$rest_api["chapter_book"]["rendered"] = "Invalid ID";
				$rest_api["chapter_book"]["id"] = $data_rest_api[0]["chapter_book"];
				$books_id = htmlentities(stripslashes($data_rest_api[0]["chapter_book"]));
				$sql_books_query = "SELECT * FROM `books` WHERE `book_id`='{$books_id}'" ;
				$books_result = $mysql->query($sql_books_query);
				if($books_result){
					$books_result_data = $books_result->fetch_array();
					if(isset($books_result_data["book_title"])){
						$rest_api["chapter_book"]["rendered"] = stripslashes($books_result_data["book_title"]);
					}else{
						$rest_api["chapter_book"]["rendered"] = "Invalid ID";
					}
				}else{
					$rest_api["chapter_book"]["rendered"] = "Invalid ID";
				}
				$rest_api["chapter_content"] = $data_rest_api[0]["chapter_content"];
				$rest_api["chapter_status"] = $data_rest_api[0]["chapter_status"];
			}else{
				$rest_api=array("data"=>array("status"=>404,"title"=>"Not found"),"title"=>"Error","message"=>"Invalid ID");
			}
		}
		break;
}

$mysql->close();

// TODO: JSON --+-- CROSSDOMAIN
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, PUT, OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization, X-Authorization');
header('Access-Control-Max-Age: 86400');
header('Connection: close');

if (!isset($_GET["callback"])){
	// TODO: OUTPUT --+-- JSON
	if(defined("JSON_UNESCAPED_UNICODE")){
		echo json_encode($rest_api,JSON_UNESCAPED_UNICODE);
	}else{
		echo json_encode($rest_api);
	}
}else{
	// TODO: OUTPUT --+-- JSONP
	if(defined("JSON_UNESCAPED_UNICODE")){
		echo strip_tags($_GET["callback"]) ."(". json_encode($rest_api,JSON_UNESCAPED_UNICODE). ");" ;
	}else{
		echo strip_tags($_GET["callback"]) ."(". json_encode($rest_api) . ");" ;
	}
}

