<?php include "../include/header.php";?><br>
<?php 
    back("options.php");
    options();
?>
    
    <form>

        <table style="width:40%">
		<side lift>&nbsp;<big><big><b>व्यक्तिगत जानकारी </b></big></big><b></b><br>
		<style= "padding: 7px;"><font size="6"><b>Personal Information</b></font></style><br>
            <!--<th style= "background-color:white;"> Personal Information</th>-->
			<tr>
			    <th style= "background-color:blue;">
				<font size= "5"><b>प्रकार</b><br>Type</td></th>
                <td><input type="text" name= "Type" class="form-control" /></td>  				 
                
              <th style= "background-color:blue">
				<font size= "5"><b>नाम</b><br>Name<br></br></td></th>
                <td><input type="text" name= "Name" class="form-control" /></td> 	
                
            </tr>
			 
            <tr>
                <th style= "background-color:blue;">
				<font size= "5"><b>क्र. संख्या</b><br>S.No</td></th>
                <td><input type="text" name= "Type" class="form-control" /></td>  				 
                
                 <th style= "background-color:blue"> 
                    <font size= "5"><b>जन्म की तारीख</b><br>Date of Birth</td></th>
                <td><input type ="data " name ="dob" class="form-control" /></td>
                
            </tr>	<tr>
                        <th style= "background-color:blue">
						<font size= "5"><b>लिंग</b><br>Sex<br></td></th>
                        <td>
                            <select class="form-control" name="Sex">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </td>
                    </tr><tr>
               
				<tr>
				  <th style= "background-color:blue">
						<font size= "5"><b></b><br>पद<br>Designation</td></th>
                       <!-- <th style= "background-color:orange;">Designation</th>-->
                        <td>
                            <select class="form-control" name="designation">
                                <option value="scientist">Scientist</option>
                                <option value="to">TO</option>
                                <option value="worker">Worker</option>
                            </select>
                        </td>
                    </tr>
               <th style= "background-color:blue">
						<font size= "5"><b><br>वेतन पट्टा</b><br>Payband<br></td></th>
                <td><input type="number"name="PayBnd" class="form-control" /></td>
            </tr>
        </table>
        <table cellspacing="100">

            <br>
            <br>
			<br>
        <tr><font size="4">Month</font></tr>
        <select id = "myList">
            <option value = "1">Jan</option>
            <option value = "2">Feb</option>
            <option value = "3">March</option>
            <option value = "4">April</option>
            <option value = "5">May</option>
            <option value = "6">June</option>
            <option value = "7">July</option>
            <option value = "8">August</option>
            <option value = "9">Sep</option>
            <option value = "10">Oct</option>
            <option value = "11">Nov</option>
            <option value = "12">Dec</option>
        </select>
        <br>
        <br>
		<br>
        <table style="width:40%">
		<side lift>&nbsp;<big><big><b>एचबीए ऋण </b></big></big><b></b><br>
		<style= "padding: 7px;"><font size="6"><b>HBA Loan</b></font></style><br>
            <!--<font size="6">HBA Loan</font>-->
			<!--<style= "padding: 7px;"><font size="5"><b>HBA Loan</b></font></style>-->
            
            <tr>
                 <th style= "background-color:blue">
						<font size= "5"><b></b>रकम<br>Amount</td></th>
                <td><input type="number"name="hbaloan_pmamount" placeholder="0" class="form-control" /></td>
                <th style= "background-color:blue">
						<font size= "5"><b></b><br>मासिक रिकॉर्ड<br>Monthly Rec.</td></th>
                <td><input type="number"name="hbaloan_monthlyrec" placeholder="0" class="form-control" /></td>
                
            </tr>
            <tr>
                <th style= "background-color:blue">
						<font size= "5"><b></b>उदाहरण सं<br>Inst.No.</td></th>
                <td><input type="number"name="hbaloan_instno" placeholder="0" class="form-control" /></td>
                 <th style= "background-color:blue">
						<font size= "5"><b></b><br>बैलेंस <br>Balance</td></th>
				<td><input type="number"name="hbaloan_balance" placeholder="0" class="form-control" /></td>
                
                
            </tr><tr>
                 <th style= "background-color:blue">
						<font size= "5"><b></b><br>रिकॉर्ड का प्रकार<br>Rec.type</td></th>
                <td><input type="text" name="hbaloan_rectype" class="form-control" /></td>
               
                
            </table>
        <br>
        <br>
		
		 
        <table style="width:40%">
            <!--<th style= "background-color:white;">Vehicle Loan Particulars</th>-->
			<side left>&nbsp;<big><big><b>वाहन ऋण </b></big></big><b></b><br>
		<style= "padding: 7px;"><font size="6"><b>Vehicle Loan Particulars</b></font></style><br></font></style>
			
            
             <tr>
                <th style= "background-color:blue">
						<font size= "5"><b></b>रकम<br>Amount</td></th>
                <td><input type="number"name="vehicleloan_pma" placeholder="0"class="form-control" /></td>
                <th style= "background-color:blue">
						<font size= "5"><b></b><br>मासिक रिकॉर्ड<br>Monthly Rec.</td></th>
                <td><input type="number"name="vehicleloan_montlyrec" placeholder="0" class="form-control" /></td>
                
            </tr>
            <tr>
                <th style= "background-color:blue">
						<font size= "5"><b></b>उदाहरण सं<br>Inst.No.</td></th>
                <td><input type="number"name="vehicleloan_instno" placeholder="0" class="form-control" /></td>
                 <th style= "background-color:blue">
						<font size= "5"><b></b><br>बैलेंस <br>Balance</td></th>
				<td><input type="number"name="vehicleloan_balance" placeholder="0" class="form-control" /></td>
                
                
            </tr>
			<tr>
                         <th style= "background-color:blue">
						<font size= "5"><b></b><br>वाहन का प्रकार <br>Vehicle Type</td></th>
                        <td>
                            <select class="form-control" name="vehicletype">
                                <option value="scientist">Scooter</option>
                                <option value="to">Bicycle</option>
                                <option value="worker">Car</option>
                            </select>
                        </td>
                    </tr>
                
            </tr><tr>
                 <th style= "background-color:blue">
						<font size= "5"><b></b><br>रिकॉर्ड का प्रकार<br>Rec.type</td></th>
                <td><input type="text" name="vehicleloan_rectype" class="form-control" /></td>
               
             </tr>
        </table>
        
        <br>
        <br>
        
        <table style="width:40%">
            <!--<th style= "background-color:white;"> Computer Loan Particulars</th>-->
			<side left>&nbsp;<big><big><b>कंप्यूटर ऋण विशेष </b></big></big><b></b><br>
		<style= "padding: 7px;"><font size="6"><b>Computer Loan Particulars</b></font></style><br></font></style>
                        <tr>
                 <th style= "background-color:blue">
						<font size= "5"><b></b>रकम<br>Amount</td></th>
                <td><input type="number"name="computer_pmamount" placeholder="0" class="form-control" /></td>
                <th style= "background-color:blue">
						<font size= "5"><b></b><br>मासिक रिकॉर्ड<br>Monthly Rec.</td></th>
                <td><input type="number"name="computer_monthlyrec" placeholder="0" class="form-control" /></td>
                
            </tr>
            <tr>
                                <th style= "background-color:blue">
						<font size= "5"><b></b>उदाहरण सं<br>Inst.No.</td></th>
                <td><input type="number"name="computer_instno" placeholder="0" class="form-control" /></td>
                <th style= "background-color:blue">
						<font size= "5"><b></b><br>बैलेंस <br>Balance</td></th>
				<td><input type="number"name="computer_balance" placeholder="0" class="form-control" /></td>
                
            </tr>
			<tr>
                <th style= "background-color:blue">
						<font size= "5"><b></b><br>रिकॉर्ड का प्रकार<br>Rec.type</td></th>
                <td><input type="text" name="computer_rectype" class="form-control" /></td>
               
             </tr>
               
            
        </table>
		<br>
		<br><br>
		<table style="width:40%">
            <!--<th style= "background-color:white;">Vehicle Loan Particulars</th>-->
			<side left>&nbsp;<big><big><b>जीपीएफ ऋण विशेष </b></big></big><b></b><br>
		<style= "padding: 7px;"><font size="6"><b>GPF Loan Particulars</b></font></style><br></font></style>
			
            
                                  <tr>
               <th style= "background-color:blue">
						<font size= "5"><b></b>रकम<br>Amount</td></th>
                <td><input type="number"name="gpfloan_pmamount" placeholder="0" class="form-control" /></td>
				<th style= "background-color:blue">
               <font size= "5"><b></b><br>मासिक रिकॉर्ड<br>Monthly Rec.</td></th>
                <td><input type="number"name="gpfloan_monthlyrec" placeholder="0"  class="form-control" /></td>
                
            </tr>
            <tr>
                 <th style= "background-color:blue">
						<font size= "5"><b></b>उदाहरण सं<br>Inst.No.</td></th>
                <td><input type="number"name="gpfloan_instno" placeholder="0"  class="form-control" /></td>
                 <th style= "background-color:blue">
						<font size= "5"><b></b><br>बैलेंस <br>Balance</td></th>
				<td><input type="number"name="gpfloan_balance" placeholder="0" class="form-control" /></td>
                
            </tr>
            </table>
			<br>
			<br>
			<br>
		<table style="width:40%">
            <!--<th style= "background-color:white;">Vehicle Loan Particulars</th>-->
			<side left>&nbsp;<big><big><b>अन्य ऋण विशेष </b></big></big><b></b><br>
		<style= "padding: 7px;"><font size="6"><b>Other Loan Particulars</b></font></style><br></font></style>
			
                                 <tr>
                <th style= "background-color:blue">
						<font size= "5"><b></b>रकम<br>Amount</td></th>
                <td><input type="number"name="otherloan_pmamount" placeholder="0"class="form-control" /></td>
               <th style= "background-color:blue">
               <font size= "5"><b></b><br>मासिक रिकॉर्ड<br>Monthly Rec.</td></th>
                <td><input type="number"name="otherloan_monthlyrec" placeholder="0" class="form-control" /></td>
                
            </tr>
            <tr>
                <th style= "background-color:blue">
						<font size= "5"><b></b>उदाहरण सं<br>Inst.No.</td></th>
                <td><input type="number"name="otherloan_instno" placeholder="0"  class="form-control" /></td>
                <th style= "background-color:blue">
						<font size= "5"><b></b><br>बैलेंस <br>Balance</td></th>
				<td><input type="number"name="otherloan_balance" placeholder="0" class="form-control" /></td>
                
            </tr>
			
               
        </table>
		<br>
		
		<br>
		 <div class="form-group per_buttons_div">

                <button name="Data Entry For PAY" type="submit" class="btn btn-primary per_buttons">Data Entry For PAY</button>
                <button name="Data Entry For Personal Info" type="submit" class="btn btn-primary per_buttons">Data Entry For Personal Info</button>
                <button name="save" type="submit" class="btn btn-primary per_buttons">Save</button>
                <button name="update" type="submit" class="btn btn-primary per_buttons">Update</button>
                <button name="back" type="submit" class="btn btn-primary per_buttons">Back</button>

            </div>

        </div>
    </div>
    <?php include "../include/footer.php";?>