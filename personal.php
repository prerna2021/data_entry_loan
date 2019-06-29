<?php include "../include/header.php";?>
<?php 
    back("options.php");
    static $data;
    personal();
    // print_r($data);
    
?>

<div class="container size" style="margin-top:7rem;" >
    <div class="col-sm-6" style="margin:auto;">
        <center>&nbsp;<big><big><b>व्यक्तिगत जानकारी </b></big></big><b></b><br>
		<style= "padding: 7px;"><font size="6"><b>Personal Information</b></font></style><br><br>

        <form action="personal.php" method="post">

 <table>

                    <tr>
                       <!-- <td>Type</td>-->
					   <th style=
					   <font size= "5">प्रकार<br>Type</td></th>
                        <td>
                            <input type="text" name="type" class="form-control" value="<?php echo $data['type']?>" />
                        </td>
                    </tr>
                    <tr>
					 <th style=
					   <font size= "5"><br>क्र. संख्या<br>S.No.</td></th>
           				<!-- <td>S.No.</td>-->
                        <td>
                            <input type="number" name="sno" class="form-control" value="<?php echo $data['emp_id']?>" />
                        </td>
                    </tr>
                    <tr>
                       <th style=
					   <font size= "5"><br>नाम<br>Name</td></th>
                        <td>
                            <input type="text" name="name" class="form-control" value="<?php echo $data['name']?>" />
                        </td>
                    </tr>
                    <tr>
                         <th style= 
						<font size= "5"><b></b><br>पद<br>Designation</td></th>
                        <td>

                            <select class="form-control" name="desg" >
                                <option <?php if ($data['desg'] == "scientist" ) echo 'selected' ; ?> value="scientist">Scientist</option>
                                <option <?php if ($data['desg'] == "tO" ) echo 'selected' ; ?> value="to">TO</option>
                                <option <?php if ($data['desg'] == "worker" ) echo 'selected' ; ?> value="worker">Worker</option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                         <th style= 
						<font size= "5"><b></b><br>लिंग<br>Sex</td></th>
                        <td>

                            <select class="form-control" name="sex" value="<?php echo $data['sex']?>" >
                                <option <?php if ($data['sex'] == "male" ) echo 'selected' ; ?> value="male">Male</option>
                                <option <?php if ($data['sex'] == "female" ) echo 'selected' ; ?> value="female">Female</option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <th style= 
						<font size= "5"><b></b><br>जीपीएफ खाता<br>GPF A/C</td></th>
                        <td>

                            <input type="text" name="gpfacno" class="form-control"value="<?php echo $data['gpfacno']?>"  />

                        </td>
                    </tr>
                    <tr>
                       <th style= 
                    <font size= "5"><b><br>जन्म की तारीख</b><br>Date of Birth</td></th>
                        <td>

                            <input type="date" name="dob" class="form-control" value="<?php echo $data['dob']?>"  />

                        </td>
                    </tr>
                    <tr>
                       <th style= 
                    <font size= "5"><b><br>जॉइनिंग की तारीख</b><br>Date of Joining</td></th>
                        <td>

                            <input type="date" name="joiningdate" class="form-control" />

                        </td>
                    </tr>
                    <tr>
                         <th style= 
                    <font size= "5"><b><br>अगली वेतन वृद्धि की तारीख</b><br>Date of Next Incr.</td></th>
                        <td>

                            <input type="date" name="nxtincr" class="form-control" />

                        </td>
                    </tr>
                    <tr>
                         <th style= 
                    <font size= "5"><b><br>पैन नं</b><br>Pan No.</td></th>
                        <td>
                            <input type="text" name="plino" class="form-control" value="<?php echo $data['plino']?>" />
                        </td>
                    </tr>
                    <tr>
                    <th style= 
                    <font size= "5"><b><br>एचआरए क्लेम</b><br>HRA Claimed</td></th>
                        <td>

                            <select class="form-control" name="hraclaim" value="<?php echo $data['hraclaim']?>" >
                                <option <?php if ($data['hraclaim'] == "no" ) echo 'selected' ; ?> value="no">No</option>
                                <option <?php if ($data['hraclaim'] == "yes" ) echo 'selected' ; ?> value="yes">Yes</option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <<th style= 
						<font size= "5"><b><br>वेतन पट्टा</b><br>Payband<br></td></th>
                        <td>
                            <input type="text" name="payband" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                       <th style= 
						<font size= "5"><b><br>लेखा</b><br>Account<br></td></th>
                        <td>
                            <input type="text" name="account" class="form-control" value="<?php echo $data['account']?>" />
                        </td>
                    </tr>
                    <tr>
                         <th style= 
						<font size= "5"><b><br>विशेषाधिकार</b><br>Privilege<br></td></th>
                        <td>
                            <input type="text" name="priv" class="form-control"value="<?php echo $data['priv']?>"  />
                        </td>
                    </tr>
                    <tr>
                        <th style= 
						<font size= "5"><b><br>निगमित खाता</b><br>Corporate A/C<br></td></th>
                        <td>
                            <input type="text" name="coaporate" placeholder="" class="form-control" value="<?php echo $data['coaporate']?>" />
                        </td>
                    </tr>
                    <tr>
                         <th style= 
						<font size= "5"><b><br>एरिया कोड</b><br>Area Code<br></td></th>
                        <td>
                            <input type="text" name="areacode" class="form-control" value="<?php echo $data['areacode']?>"  />
                        </td>
                    </tr>
                    <tr>
                        <th style= 
						<font size= "5"><b><br>खाते का प्रकार</b><br>TYPE OF ACC.<br></td></th>
                        <td>
                            <input type="text" name="typeac" placeholder="" class="form-control" value="<?php echo $data['typeac']?>"  />
                        </td>
                    </tr>
                    <tr>
                        <th style= 
						<font size= "5"><b><br>पता</b><br>Address<br></td></th>
                        <td>
                            <input type="text" name="address" class="form-control" value="<?php echo $data['address']?>"/>
                        </td>
                    </tr>
                    <tr>
                         <th style= 
						<font size= "5"><b><br>ईएमयू खाता</b><br>EMU ACC.<br></td></th>
                        <td>

                            <select class="form-control" name="emuacc" value="<?php echo $data['emmuacc']?>">
                                <option <?php if ($data['emuacc'] == "yes" ) echo 'selected' ; ?> value="yes">Yes</option>
                                <option <?php if ($data['emuacc'] == "no" ) echo 'selected' ; ?> value="no">No</option>
                            </select>

                        </td>
                    </tr>
                </table>

            <div class="form-group per_buttons_div">

                <button name="none" type="submit" Style="display:none;"></button><br>    
                <button name="save" type="submit" class="btn btn-success per_buttons" >Save</button><br>
                
                <button name="insert" class="btn btn-primary per_buttons" onclick="">  Insert</button><br>
                   
                <button name="delete"  class="btn btn-primary per_buttons" name ="delete">Delete</button><br>

                <a name="dataforpay" class="btn btn-secondary per_buttons">Data Entry For PAY</a><br>
                <a name="dataforloan"  class="btn btn-secondary per_buttons">Data Entry For LOAN</a><br>

            </div>

        </form>
        
    </div>
</div>
<?php include "../include/footer.php";?>