
<?php
  session_start();
  $user  = $_GET["uname"];
  $pass = $_GET["fpass"];

        $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

  		$filename = $DOCUMENT_ROOT.'data/'.'glist_2.txt';

  		$lines_in_file = count(file($filename));

  		$fp = fopen($filename, 'r');   //opens the file for reading

  		for ($ii = 1; $ii <= $lines_in_file; $ii++)
  		{
  			$line = fgets($fp);  //Reads one line from the file
  			$city = trim($line);
              $u1= $ii%2;
  			if($u1==1)
			{
			  $u=$city;
  			}

  			if($u1==0)
  			{
  			 $p=$city;
  			}

			  if (($user == $u ) && ( $pass== $p ))
			  {

				include('page.html');
			  break;
		      }



  		   //print 'City: '.$city.'<br />';
  		}

		fclose($fp);

		?>

<?php
		  if (($user == $_SESSION['name'] ) && ( $pass== $_SESSION['passwd'] ))
		  {


			include('page.html');
		  }

 ?>