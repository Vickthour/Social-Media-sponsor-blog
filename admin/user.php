<br/>
		<div class="row">					
			<div class="col-md-12 ">
                <div class="panel">
                    <div class="panel-body" style="padding-bottom:0px;border-radius:0px; box-shadow:2px 2px 4px 0px;">
                        <table class="table table-responsive table-bordered table-hover">
                            <tr>
                                <td align="center" colspan="8" style="background:#444; color:#fff; font-size:22px; border-color:#444;">Users</td>
                            </tr>
                            <tr>
                                <td align="center" ><b>Sr.no</b></td>
                                <td align="center" ><b>Email</b></td>
                                <td align="center" ><b>Name</b></td>
                                <td align="center" ><b>Category</b></td>
                                <td align="center" ><b>Social Link</b></td>
                                <td align="center" ><b>Date Visted</b></td>
                            </tr>
                            <?php
                                $i = 0;
                                $details=$con->query("SELECT * from users order by 1 desc");
                                 $rowCount = $details->rowCount();
                                $fetch = $details->fetchAll(PDO::FETCH_ASSOC);
                                if($rowCount > 0){
                                    foreach($fetch as $data){


                                
                                $i++;
                            ?>
                            <tr>
                                
                                <td align="center"> <?php echo $i; ?></td>
                                <td align="center"> <?php echo $data['email']?></td>
                                <td align="center"> <?php echo $data['product_type']?></td>
                                <td align="center"> <?php echo $data['category']?></td>
                                <td align="center"> <?php echo $data['link']?></td>
                                <td align="center"> <?php echo $data['dated']?></td>
                            </tr>
                        <?php } }?> 
                        </table>   
                    </div>
                </div>    
            </div>
            
          </div>
