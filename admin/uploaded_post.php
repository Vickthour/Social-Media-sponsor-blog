
<br/>
		<div class="row">					
			<div class="col-md-12">
                <div class="panel">
                    <div class="panel-body" style="padding-bottom:0px;border-radius:0px;">
                        <table class="table table-responsive table-bordered table-hover col-md-8">
                            <tr>
                                <td align="center" colspan="12" style="background:#444; color:#fff; font-size:22px; border-color:#444;">Uploaded Nutritional Tips</td>
                            </tr>
                            <tr>
                                <td align="center" ><b>Sr.no</b></td>
                                <td align="center" ><b>Name</b></td>
                                <td align="center" ><b>Price</b></td>
                                <td align="center" ><b>Category</b></td>
                                <td align="center" colspan="3"><b>Description</b></td>
                                <td align="center" ><b>Date Added</b></td>
                            </tr>
                            <?php
    
                            $i = 0;
                            $tips=$con->query("SELECT * from posts order by 1 desc");
                             $rowCount = $tips->rowCount();
                            $fetch = $tips->fetchAll(PDO::FETCH_ASSOC);
                            if($rowCount > 0){
                                foreach($fetch as $data){
                                    $Pname = $data['post_name'];
                                    $Pprice = $data['price'];
                                    $Pcategory = $data['category'];
                                    $Ptype = $data['cat_type'];
                                    $Pdescription = $data['description'];
                                    $Pdate = $data['dateAdded'];
                            $i++;
                        ?>
                            <tr>
                                <td align="center"><?php echo $i ?></td>
                                <td align="center" ><?php echo $Pname ?></td>
                                <td align="center"><?php echo $Pprice ?> </td>
                                <td align="center" ><?php echo $Pcategory ?></td>
                                <td align="center" colspan="3"><?php echo $Pdescription ?></td>
                                <td align="center" ><?php echo $Pdate ?></td>
                                <td align="center"><a class="btn btn-danger btn-sm" href='delete.php?j=<?php echo $data['id'] ?>'> <i class="fa fa-trash"></i> </a></td>
                            </tr>

                                
                                
                        
                        <?php } }?> 
                        </table>   
                    </div>
                </div>    
            </div>
        </div>
