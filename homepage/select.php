<?php  
 $connect = mysqli_connect("localhost", "root", "", "mypaudhadb");  
 $output = '';  
 $sql = "SELECT * FROM cartdetails ORDER BY id DESC";  
 $addquery = "SELECT SUM(proprice) FROM cartdetails";
 $result = mysqli_query($connect, $sql);  
 $reesult = mysqli_query($connect,$addquery);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr style="background:#a4d38e">  
                    <th width="10%">Product-ID</th>  
                    <th width="10%">Product(image)</th>  
                    <th width="40%">Product Name</th>  
                    <th width="40%">Quantity</th>  
                    <th width="40%">Price</th>
                    <th width="10%">Remove</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 $roows = mysqli_fetch_array($reesult);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM cartdetails LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="primg" data-id1="'.$row["id"].'" contenteditable><img src="'.$row["proimage"].'" width="100px" height="100px"></td>  
                     <td class="prname" data-id2="'.$row["id"].'" contenteditable>'.$row["proname"].'</td>  
                     <td class="prquan" data-id3="'.$row["id"].'" contenteditable>'.$row["proquantity"].'</td>  
                     <td class="prprice" data-id4="'.$row["id"].'" contenteditable>'.$row["proprice"].'</td>  
                     <td><button type="button" name="delete_btn" data-id5="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">Remove</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>
                <td></td>
                <td></td>
                <td>Total:</td>  
                <td id="prprice" contenteditable>'.$roows['SUM(proprice)'].'</td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Checkout</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
                         <td id="primg" contenteditable></td>  
                         <td id="prname" contenteditable></td>  
                         <td id="prquan" contenteditable></td>  
                         <td id="prprice" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>