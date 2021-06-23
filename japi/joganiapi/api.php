
<?php 
include("connection.php");



if(isset($_GET['banner']))
{
		 $jsonObj1= array();
		 $query="SELECT * FROM banner";
		 $sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{

			$row['id'] = $data['id']; 
			$row['img'] =  $data['img'];  

			array_push($jsonObj1,$row);		
		}
		 	
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($jsonObj1,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
}




if(isset($_GET['blogss']))
{
		 $jsonObj1= array();
		 $query="SELECT * FROM blogss";
		 $sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{

			$row['id'] = $data['id']; 
			$row['img'] = $data['img'];
			$row['name'] = $data['name'];
			$row['description'] = $data['description'];
			$row['datee'] = $data['datee'];
			$row['postedby'] = $data['postedby'];
			$row['status'] = $data['status'];
			$row['metatitle'] = $data['metatitle'];
			$row['metatag'] = $data['metatag'];
			$row['metadescription'] = $data['metadescription'];
			$row['metakeywords'] = $data['metakeywords']; 

			array_push($jsonObj1,$row);		
		}
		 	
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($jsonObj1,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
}

if(isset($_GET['client']))
{
		 $jsonObj1= array();
		 $query="SELECT * FROM client";
		 $sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{

			$row['id'] = $data['id']; 
			$row['img'] = $data['img'];
			 

			array_push($jsonObj1,$row);		
		}
		 	
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($jsonObj1,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
}

 

if(isset($_GET['gallery']))
{
		 $jsonObj1= array();
		 $query="SELECT * FROM gallery";
		 $sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{

			$row['id'] = $data['id']; 
			$row['img'] = $data['img'];
			$row['title'] = $data['title'];
			$row['description'] = $data['description'];
	 		 

			 

			array_push($jsonObj1,$row);		
		}
		 	
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($jsonObj1,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
}

if(isset($_GET['galleryimages']))
{
		 $jsonObj1= array();
		 $query="SELECT * FROM galleryimages";
		 $sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{

			$row['id'] = $data['id']; 
			$row['file_name'] = $data['file_name'];
			$row['uploaded_on'] = $data['uploaded_on'];
			$row['status'] = $data['status'];
			$row['idd'] = $data['idd'];
	 		  
 
			 

			array_push($jsonObj1,$row);		
		}
		 	
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($jsonObj1,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
}

if(isset($_GET['productimages']))
{
		 $jsonObj1= array();
		 $query="SELECT * FROM productimages";
		 $sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{

			$row['id'] = $data['id']; 
			$row['file_name'] = $data['file_name'];
			$row['uploaded_on'] = $data['uploaded_on'];
			$row['status'] = $data['status'];
			$row['idd'] = $data['idd'];
	 		  
 
			 

			array_push($jsonObj1,$row);		
		}
		 	
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($jsonObj1,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();

}		 
 
if(isset($_GET['testimonials']))
{
		 $jsonObj1= array();
		 $query="SELECT * FROM testimonials";
		 $sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{

			$row['id'] = $data['id']; 
			$row['message'] = $data['message'];
			$row['name'] = $data['name'];

  
			array_push($jsonObj1,$row);		
		}
		 	
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($jsonObj1,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
}

if(isset($_GET['youtube']))
{
		 $jsonObj1= array();
		 $query="SELECT * FROM youtube";
		 $sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{

			$row['id'] = $data['id']; 
			$row['link'] = $data['link'];
			 

  
			array_push($jsonObj1,$row);		
		}
		 	
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($jsonObj1,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
}
 
 if(isset($_GET['products']))
{
		 $jsonObj1= array();
		 $query="SELECT * FROM products";
		 $sql = mysqli_query($mysqli,$query)or die(mysqli_error());

		while($data = mysqli_fetch_assoc($sql))
		{

			$row['id'] = $data['id']; 
			$row['img'] = $data['img'];
			$row['name'] = $data['name']; 
			$row['description'] = $data['description'];
			$row['price'] = $data['price']; 
		    $row['status'] = $data['status']; 
			$row['link'] = $data['link'];
			 

  
			array_push($jsonObj1,$row);		
		}
		 	
		header( 'Content-Type: application/json; charset=utf-8' );
	    echo $val= str_replace('\\/', '/', json_encode($jsonObj1,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
		die();
}

?>
