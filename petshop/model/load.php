<!DOCTYPE html>  
 <html>  
      <head>  

         
      </head>  
      <body>  
        <div class="table_comtent" >              
                     <table >  
                          <tr>  
                               <th>First Name</th> 
                               <th>Last Name</th>  
                               <th>Username</th>   
                               <th>Address</th>   
                               <th>Gender</th>   
							    <th>Email</th> 
                               <th>Password</th>  
                               <th>Phone</th>   
                              
                          </tr>  
                          <?php   
                          $data = file_get_contents("/model/data.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["fname"].'</td>
                               <td>'.$row["lname"].'</td>
                               <td>'.$row["uname"].'</td>
                               <td>'.$row["pass"].'</td>
                               <td>'.$row["email"].'</td>
							   <td>'.$row["number"].'</td>
					           <td>'.$row["add"].'</td>
							   <td>'.$row["gender"].'</td>


                               </tr>';  
                          }  
                          ?> 

                     </table>  
                   </div>
      </body>  
 </html>  