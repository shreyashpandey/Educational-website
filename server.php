<?php 
$db = mysqli_connect('localhost', 'root', 'Uke2LEAeTG0Oo5F4', 'mydb1');
$u="";
$e="";
$pos="";
$file1="";
$errors=array();

if(isset($_POST['s']))
{

$u=$_POST['image'];
if (empty($image)) { array_push($errors, "Username is required"); }
}
//$file = array("27.png","13.png","14.png","24.jpg");
  $result = mysqli_query($db, "SELECT image FROM images where image='$u'") or die("Error: " . mysqli_error($db)); //Let say If I put the file name Bang.png
 // $query = "SELECT Desired_column FROM Table_Name";
//$results = mysqli_query($sql, $query);

//$rows = [];
$row=mysqli_fetch_array($result);
$name=$row['image'];
echo ($name);
/*while($row = mysqli_fetch_array($result,MYSQLI_NUM)) {

    $rows[] = $row;

}
$l=sizeof($rows);
    for($x=0;$x<$l;$x++)
    {
    	if($rows[$x]==$u)
    	{
    		echo("hello");
    		echo "<img src='$rows[$x]' >";
    	$pos=$rows[$x];
    }
    }*/
   // echo "<a href='download.php?nama=".$pos."'>donload</a> ";
   download($name);

    function download($name) {
        $file1 = $name;

        if (file_exists($file1)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.basename($file1));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file1));
            ob_clean();
            flush();
            readfile($file1);
            exit;
       }
    }
?>