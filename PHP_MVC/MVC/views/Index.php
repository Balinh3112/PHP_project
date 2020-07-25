<html>
<head>
<title> Manage</title>
</head>
<body>
<?php echo "MANAGE";?>

<td><br><a href="../new/" >New</a></td>
<table border = 2 width='50%'>
    <tr>
        <th>Id      </th>
        <th>Thumb   </th>
        <th>Title   </th>
        <th>Status  </th>
        <th colspan="3">Action</th>
    </tr>
    <?php
        $db = $data['db'];
        $conn = $data['con'];
        $tin_trang =4;
        $tong_tin = mysqli_num_rows($db);
        $so_trang = ceil($tong_tin/$tin_trang);
        // echo $tong_tin;
        // echo $so_trang;
        if ($data['page']=='') $page =1;
            else $page = $data['page'];// page hien tai 
        $start = ($page-1)*$tin_trang;
        $result = mysqli_query($conn, "SELECT * FROM TB LIMIT $start, $tin_trang");
        
    ?>
    <?php 
        // $result = $data['db'];
        while ($row = mysqli_fetch_assoc($result)) { ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
            <td><?php echo $row['image']; ?></td>
			<td><?php echo $row['title']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
				<a href="../show/<?php echo $row['id']; ?>" >Show</a>
			</td>
			<td>
				<a href="../edit/<?php echo $row['id']; ?>" >Edit</a>
			</td>
			<td>
				<a href="../delete/<?php echo $row['id']; ?>" >Delete</a>
			</td>
            
		</tr>
	<?php } ?>
    </table >
    <div class="pagination">
           <?php 
            if ($page > 1 && $so_trang > 1){
                echo '<a href="'.($page-1).'">Prev</a> | ';
            }
            for ($i = 1; $i <= $so_trang ; $i++){
                if ($i == $page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href='.$i.'>'.$i.'</a> | ';
                }
            }
            if ($page < $so_trang  && $so_trang  > 1){
                echo '<a href='.($page+1).'>Next</a> | ';
            }
           ?>
        </div>
</table >
</body>
</html>