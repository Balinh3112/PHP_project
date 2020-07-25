<html>
<head>
<title>  Show</title>   
</head>
<body>
<table width ="30%"> 
    <h1> Show </h1>
    <tr>
        <th>              </th>
        <th> Description  </th>
    </tr>
    <?php
    $id = $data['id'];
    $result =$data['db'];
    ?>
    <?php while ($row = mysqli_fetch_array($result)) { ?>
		<tr>
        <?php if ($row['id'] ==$id){ ?>
			<td><img src ="<?php echo "/opt/lampp/htdocs/PHP_MVC/public/picture/".$row['image'];?>" height='100' width='100' alt=''></td>
            <td ><?php echo $row['Description']; ?></td>           
		</tr>
        <?php }?>
	<?php } ?>
</table>
<td><br><a href="http://localhost:8080/PHP_MVC/admin/ad/" >Back</a></td>
</body>
</html>