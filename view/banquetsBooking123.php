<?php 
require_once('../config/database.php');
require_once('header_threatre.php');
?>

<div class="container-fluid">
	<div class="container">
		<?php 
			$date=base64_decode($_GET['date']);
			$name=@$_GET['name'];
			$sql="select * from banquets_booking where banquets_name='$name'";
			$loginQuery=mysqli_query($link, $sql);
			$row = mysqli_fetch_array($loginQuery, MYSQL_ASSOC);
			?>
		<div class="col-md-12 margin-top-20">
			<p class="navigationTxt"><span>YOU ARE BOOKING</span> BANQUETS NAME <?php if($name == 'first'){ echo '1';}else{ echo '2';} ?></p>
			<input type="hidden" name="banquetsDateURL" id="banquetsDateURL" value="<?php echo $date; ?>">
		</div>
		<div class="col-md-12">
			<p class="text-justify"><?php echo $row['description']; ?></p>
		</div>
		<div class="col-md-6 margin-top-10">
			<img src="../media/img/<?php echo $row['big_img'] ?>" alt="" title="">
		</div>
		<div class="col-md-6 margin-top-10">
			<div class="booking_option table-responsive ">
				<table class="table table-dark ">
				  <thead>
				    <tr>
				      <th scope="col" colspan="4" class="text-center"> SELECT OPTIONS </th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td width="50%" colspan="2">Select Slot:
				      <select name="time" style="width:130px" id="showTime" class="selectGuest timeBooking">
				      	<option value="19:00 - 23:30"><time>19:00 - 23:30</time></option>
				      	<option value="19:00 - 23:30"><time>19:00 - 23:30</time></option>
				      	<option value="19:00 - 23:30"><time>19:00 - 23:30</time></option>
				      	<option value="19:00 - 23:30"><time>19:00 - 23:30</time></option>
				      	<option value="19:00 - 23:30"><time>19:00 - 23:30</time></option>
				      </select></td>
				      <td width="50%" colspan="2"><span class="pull-right">Date: <?php echo $date ?></span></td>
				    </tr>
				    <tr>
				    	<td colspan="4">Engter No. of guests:
					      <input type="text" style="width: 100px" placeholder="Enter No." name="noOfGuest" id="noOfGuest" class="selectGuest guestBooking">
				      </td>
				    </tr>
				    <tr>
				      <td colspan="2" width="50%">Select Options</td>
				      <td colspan="2" width="50%" >Price<br/><small>(Inc. all texes)</small></td>
				    </tr>
				    <tr>
				      <td width="25%">
				        Hall <br/><small>View details</small>
				      </td>
				      <td width="25%"> &#8377; <?php echo $row['hall'] ?>
				      	<input type="hidden" name="" id="hallprice" value="<?php echo $row['hall'] ?>">
				      </td>
				      <td width="25%">
				        <label class="container2">
			    			<small>click to add</small> 
						  <input type="checkbox"  name="addHall" id="checkedHall">
						  <span class="checkmark2"></span>
						</label>
				      </td>
				      <td width="25%"> &#8377; <span id="checkedValue">0</span></td>
				    </tr>
				    <tr>
				    <tr>
				      <td width="25%">
				        Decoration <br/><small>View details</small>
				      </td>
				      <td width="25%"> &#8377; <?php echo $row['decoration'] ?>
				      	<input type="hidden" name="" id="decorationPrice" value="<?php echo $row['decoration'] ?>">
				      </td>
				      <td width="25%">
				        <label class="container2">
			    			<small>click to add</small> 
						  <input type="checkbox"  name="adddecoration" id="checkedDecoration">
						  <span class="checkmark2"></span>
						</label>
				      </td>
				      <td width="25%"> &#8377; <span id="checkedValuedeco">0</span></td>
				    </tr>
				    <tr>
				      <td width="25%">
				        Veg Food <br/><small>View details</small> 
				      </td>
				      <td width="25%"> &#8377; <?php echo $row['veg_food'] ?></td>
				      <td width="25%">
				        <label class="container1">
			    			<small>click to add</small> 
						  <input type="radio" name="banquet" class="vegFood" value="<?php echo $row['veg_food'] ?>">
						  <span class="checkmark"></span>
						 </label>
				      </td>
				      <td width="25%"> &#8377; <span id="vegFoodVal">0</span></td>
				    </tr>
				    <tr>
				      <td width="25%">
				        Non-Veg Food <br/><small>View details</small>
				      </td>
				      <td width="25%"> &#8377; <?php echo $row['nonveg_food'] ?></td>
				      <td width="25%">
				        <label class="container1">
			    			<small>click to add</small>
						  <input type="radio" class="nonVegFood" name="banquet" value="<?php echo $row['nonveg_food'] ?>">
						  <span class="checkmark"></span>
						 </label>
				      </td>
				      <td width="25%"> &#8377; <span id="nonVegFood">0</span></td>
				    </tr>
				    <tr>
				    <tr>
				      <td width="25%">
				        Indian Liquor <br/><small>View details</small>
				      </td>
				      <td width="25%"> &#8377; <?php echo $row['indian_liquor'] ?></td>
				      <td width="25%">
				        <label class="container1">
			    			<small>click to add</small>
						  <input type="radio" name="banquet" class="indLiquor" value="<?php echo $row['indian_liquor'] ?>">
						  <span class="checkmark"></span>
						 </label>
				      </td>
				      <td width="25%"> &#8377; <span id="checkedValueInd">0</span></td>
				    </tr>
				    <tr>
				      <td width="25%">
				        Imported Liquor <br/><small>View details</small>
				      </td>
				      <td width="25%"> &#8377; <?php echo $row['imported_liquor'] ?></td>
				      <td width="25%">
				        <label class="container1">
			    			<small>click to add</small>
						  <input type="radio" class="importedLiquor" name="banquet" value="<?php echo $row['imported_liquor'] ?>">
						  <span class="checkmark"></span>
						 </label>
				      </td>
				      <td width="25%"> &#8377; <span id="importedLiquor">0</span></td>
				    </tr>
				    <tr>
				      <td width="50%" colspan="2"> 	
					    <label>Have a Promocode?</label><br/>
					      <input type="text" class="form-control inputTxtCupon" placeholder="DEC20" name="promo">
					      <button class="btn btnCupon">APPLY</button>
					   </td>
				       <td width="50%" colspan="2">
				       		<table class="table table-dark totalbill">
						       	<tr>
						       		<td width="65%" style="text-align: right;">
						       		 	<div>Total amount</div>
					       		 	</td>
					       		 	<td width="35%">
						       		 	<div>&#8377; <span id="totalAmount"></span></div>
						       		 </td>
						       	</tr>
						       	<tr>
						       		<td width="65%" style="text-align: right;">
							        	<div>Coupons Applied</div>
							        </td>
					       		 	<td width="35%">
					       		 		<div>NA</div>
					       		 	</td>
							    </tr>
							    <tr>
							    	<td width="65%" style="text-align: right;">
							        	<div>Total Payable Amount<br/><small>(Inclusive of all taxes)</small></div>
							        	<input type="hidden" name="" value="">
							        </td>
					       		 	<td width="35%">
							        	<div>&#8377; <span id="payAmount"></span></div>
							        </td>
							        
							    </tr>
							</table>
				      </td>
				    </tr>
				    <tr>
				    	<td colspan="4">
				    		<label class="container2">
				    			I understant and accept <a href="#">term & condition</a> and <a href="#">privacy policy</a>
							  <input type="checkbox" checked="checked" name="agree" required="required">
							  <span class="checkmark2"></span>
							</label>
							
						</td>
				    </tr>
				  </tbody>
				</table>
			</div>
			<div class="col-md-12">
				<div class="text-center reviewBooking">
					<a href="javascript:void(0)" data-toggle="modal" id="storeAllFieldValue" class="btn button">REVIEW BOOKING</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once('footer.php');?>
<script type="text/javascript">
	$(document).ready(function(){
		var gVal=0;
		$("#checkedHall").click(function(){
			if($('#checkedHall').is(':checked')){
				var hallprice= $('#hallprice').val();
				$('#checkedValue').html(hallprice);
			}else{
				$('#checkedValue').html("0");
			}

			if($('#checkedHall').is(':checked')){
				var a= $('#hallprice').val();
			}else{
				var a= 0;
			}

			if($('#checkedDecoration').is(':checked')){
				var b=$('#decorationPrice').val();
			}else{
				var b=0;
			}
			var totalAmout= parseInt(b)+ parseInt(a) + parseInt(gVal);
			$("#totalAmount").html(totalAmout);
			$("#payAmount").html(totalAmout);
		});
		$("#checkedDecoration").click(function(){
			if($('#checkedDecoration').is(':checked')){
				var decorationPrice=$('#decorationPrice').val();
				$('#checkedValuedeco').html(decorationPrice);
			}else{
				$('#checkedValuedeco').html("0");
				var decorationPrice=0;
			}
			if($('#checkedHall').is(':checked')){
				var a= $('#hallprice').val();
			}else{
				var a= 0;
			}
			if($('#checkedDecoration').is(':checked')){
				var b=$('#decorationPrice').val();
			}else{
				var b=0;
			}
			var totalAmout= parseInt(a)+ parseInt(b) + parseInt(gVal);
			$("#totalAmount").html(totalAmout);
			$("#payAmount").html(totalAmout);
		});

		$(".indLiquor").click(function(){
			var checkedValue =$('.indLiquor:checked').val();
			$('#checkedValueInd').html(checkedValue);
			$('#vegFoodVal').html("0");	
			$('#nonVegFood').html("0");	
			$('#importedLiquor').html("0");
			if($('#checkedHall').is(':checked')){
				var a= $('#hallprice').val();
			}else{
				var a= 0;
			}
			
			if($('#checkedDecoration').is(':checked')){
				var b=$('#decorationPrice').val();
			}else{
				var b=0;
			}
			gVal=checkedValue;
			var totalAmout= parseInt(a)+ parseInt(b) + parseInt(checkedValue);
			$("#totalAmount").html(totalAmout);
			$("#payAmount").html(totalAmout);
			
		});
		$(".vegFood").click(function(){
			var vegFoodVal =$('.vegFood:checked').val();
			$('#vegFoodVal').html(vegFoodVal);
			$('#nonVegFood').html("0");	
			$('#importedLiquor').html("0");
			$('#checkedValueInd').html("0");
			if($('#checkedHall').is(':checked')){
				var a= $('#hallprice').val();
			}else{
				var a= 0;
			}
			
			if($('#checkedDecoration').is(':checked')){
				var b=$('#decorationPrice').val();
			}else{
				var b=0;
			}
			gVal=vegFoodVal;
			var totalAmout=parseInt(a)+ parseInt(b) + parseInt(vegFoodVal);
			$("#totalAmount").html(totalAmout);
			$("#payAmount").html(totalAmout);	
		});
		$(".nonVegFood").click(function(){
			var nonVegFood =$('.nonVegFood:checked').val();
			$('#nonVegFood').html(nonVegFood);
			$('#importedLiquor').html("0");
			$('#checkedValueInd').html("0");
			$('#vegFoodVal').html("0");
			if($('#checkedHall').is(':checked')){
				var a= $('#hallprice').val();
			}else{
				var a= 0;
			}
			
			if($('#checkedDecoration').is(':checked')){
				var b=$('#decorationPrice').val();
			}else{
				var b=0;
			}
			gVal=nonVegFood;
			var totalAmout=parseInt(a)+ parseInt(b) + parseInt(nonVegFood);
			$("#totalAmount").html(totalAmout);
			$("#payAmount").html(totalAmout);
		});
		$(".importedLiquor").click(function(){
			var importedLiquor =$('.importedLiquor:checked').val();
			$('#importedLiquor').html(importedLiquor);	
			$('#checkedValueInd').html("0");
			$('#vegFoodVal').html("0");
			$('#nonVegFood').html("0");
			if($('#checkedHall').is(':checked')){
				var a= $('#hallprice').val();
			}else{
				var a= 0;
			}
			
			if($('#checkedDecoration').is(':checked')){
				var b=$('#decorationPrice').val();
			}else{
				var b=0;
			}
			gVal=importedLiquor;
			var totalAmout= parseInt(a)+ parseInt(b) + parseInt(importedLiquor);
			$("#totalAmount").html(totalAmout);
			$("#payAmount").html(totalAmout);
		});
		//var totalAmout=parseInt(decorationPrice + hallprice + vegFoodVal + nonVegFood + importedLiquor + checkedValue)

	});
</script>