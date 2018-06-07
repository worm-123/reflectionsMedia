<?php 
require_once('../config/database.php');
require_once('header-threatre.php');
?>

<div class="container-fluid">
	<div class="container">
		<?php 
			$date=base64_decode($_GET['date']);
			$name=@$_GET['name'];
			$sql="select * from banquets_booking where banquets_name='$name'";
			$loginQuery=mysqli_query($link, $sql);
			$row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC);
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
				      <td width="50%" colspan="2"><span class="pull-right">Date: <span id="bookingDate"><?php echo $date ?></span></span></td>
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
						  <input type="radio" name="banquet" class="vegFood" value="<?php echo $row['veg_food'] ?>" data-label="Veg Food">
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
						  <input type="radio" class="nonVegFood" name="banquet" value="<?php echo $row['nonveg_food'] ?>" data-label="Non-Veg Food">
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
						  <input type="radio" name="banquet" class="indLiquor" value="<?php echo $row['indian_liquor'] ?>" data-label="Indian Liquor" >
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
						  <input type="radio" class="importedLiquor" name="banquet" value="<?php echo $row['imported_liquor'] ?>" data-label="Imported Liquor">
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
				    			I understant and accept <a href="#termsCondition" data-toggle="modal">term & condition</a> and <a href="#PrivacyPolicy" data-toggle="modal">privacy policy</a>
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
					<button data-target="#billConfirmation" data-toggle="modal" id="storeAllFieldValue" class="btn button">REVIEW BOOKING</but
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Bill Confirmaation -->
<div class="modal fade" id="banquetsBillConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">BOOKING REVIEW</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="booking_option">
        <table class="table table-dark text-center">
          <tbody>
            <tr>
              <td width="50%" class="text-right">Banquet Name</td>
              <td width="50%" class="text-left">: <span id="banquetName"></span></td>
            </tr>
            <tr>
              <td width="50%" class="text-right">
                Slot
              </td>
              <td width="50%" class="text-left">: <span id="time"></span></td>
            </tr>
            <tr>
              <td width="50%" class="text-right">
                Date
              </td>
              <td width="50%" class="text-left">: <span id="date"></span></td>
            </tr>
            <tr>
              <td width="50%" class="text-right">
                No. of Guests
              </td>
              <td width="50%" class="text-left">: <span id="guest"></span></td>
            </tr>
            <tr>
              <td width="50%" class="text-right">
                Decoration
              </td>
              <td width="50%" class="text-left">: <span id="decoration"></span></td>
            </tr>
            <tr>
              <td width="50%" class="text-right">
                Hall
              </td>
              <td width="50%" class="text-left">: <span id="hall"></span></td>
            </tr>
            <tr>
              <td width="50%" class="text-right">
                Ticket type
              </td>
              <td width="50%" class="text-left">: <span id="ticketType"></span></td>
            </tr>
            <tr>
              <td width="50%" class="text-right">
                Amout to Pay
              </td>
              <td width="50%" class="text-left">: <span id="amounttlt"></span></td>
            </tr>
             <tr><td colspan="2"><button type="button" class="btn button" id="proceedToPay">PROCEED TO PAY</button></td></tr>
            <tr><td colspan="2"><small><i>* This ticket/booking is not refundable/transferrable as per terms and conditions.</i></small></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- end-->




<!-- termsCondition -->
<div class="modal fade" id="termsCondition" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Terms & Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="booking_option">
        <div class="textaliment">
            <ul>
	            <li><b>1.1.</b> By using our website, you accept these terms and conditions in full; accordingly, if you disagree with these terms and conditions or any part of these terms and conditions, you must not use our website.</li>
	             <li><b>1.2. </b> If you [register with our website, submit any material to our website or use any of our website services], we will ask you to expressly agree to these terms and conditions.</li>
	             <li><b> 1.3.</b>You must be at least [18] years of age to use our website; by using our website or agreeing to these terms and conditions, you warrant and represent to us that you are at least [18] years of age.</li>
	             <li><b> 1.4.</b>	Our website uses cookies; by using our website or agreeing to these terms and conditions, you consent to our use of cookies in accordance with the terms of our [privacy and cookies policy].</li>          
            </ul>
            <i>*For more details, please click <a href="turms-of-use" style="text-transform: none; color: #444">Terms of use</a></i>
      </div>
    </div>
  </div>
</div>
</div>
<!-- end-->

<!-- PrivacyPolicy -->
<div class="modal fade" id="PrivacyPolicy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Privacy Policy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="booking_option">
        <div class="textaliment">
           <p>Reflections Media Private Limited operates the www.reflectionsmedia.in website, which provides the SERVICEs of Hospitality and Entertainment.
			This page is used to inform website visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service.
			If you choose to use our Service, then you agree to the collection and use of information in relation with this policy. The Personal Information that we collect are used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.
			The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at , unless otherwise defined in this Privacy Policy
			</p>
            <i>*For more details, please click <a href="privacy-policy" style="text-transform: none; color: #444">Privacy Policy</a></i>
      </div>
    </div>
  </div>
</div>
</div>
<!-- end-->

<?php require_once('footer.php');?>
<script type="text/javascript">
	$(document).ready(function(){
		var gVal=0;
		var getLabel='';
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
			getLabel=$(this).attr('data-label');
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
			getLabel=$(this).attr('data-label');
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
			getLabel=$(this).attr('data-label');
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
			getLabel=$(this).attr('data-label');
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
		$('#storeAllFieldValue').on('click',function(){
			var noOfGuest= $('#noOfGuest').val();
			if(gVal !== 0 && noOfGuest !== 0){
				var getBanquetName='first',
					hall= $('#hallprice').val(),
					decoration=$('#decorationPrice').val(),
					type=gVal,
					noOfGuest=noOfGuest,
					bookingDate=$('#bookingDate').text(),
					slot=$('#showTime').val(),
					totalAmount=$("#totalAmount").text(),
					payAmount=$("#payAmount").text();

				$('#amount').html(totalAmount);
				$('#amountPay').html(payAmount);
				$('#amounttlt').html( payAmount);
				$('#guest').html(noOfGuest);
				$('#time').html(slot);
				$('#date').html(bookingDate);
				$('#banquetName').html(getBanquetName);
				$('#decoration').html(decoration);
				$('#hall').html(hall);
				$('#ticketType').html(getLabel);

				$('#banquetsBillConfirmation').modal({
			        show: 'true'
			    });
			}else{
				alert("Please fill options & no. of guest");
			}
		});
		$('#proceedToPay').click(function(){
    		function getCookie(name)
	 		{
			    var re = new RegExp(name + "=([^;]+)");
			    var value = re.exec(document.cookie);
			    return (value != null) ? unescape(value[1]) : null;
		  	}
		  	var username=getCookie("username");

		  	if(!!username){

	    		var sendData={
	    			banquetName:$('#banquetName').text(),
	    			time:$('#time').text(),
	    			date:$('#date').text(),
	    			noOfGuest:$('#guest').text(),
	    			ticketType:$('#ticketType').text(),
	    			amountToPay:$('#amounttlt').text(),
	    			decoration: (!!$('#decoration').text()) ? $('#decoration').text():'',
					hall:(!!$('#hall').text()) ? $('#hall').text():'',
	    			userId:username
	    		};
				$.ajax({
					type : "POST",
					url : 'banquet-payment.php',
					dataType : "text",
					contentType: "application/json",
					data : JSON.stringify(sendData),
					success : function(data) {
						data=JSON.parse(data);
						if(data.status === 1){
						var d = new Date().getTime();
						var input=''; //Creating input field variable;
						var form = $(document.createElement('form'));
						$(form).attr("action", "../PHP_Kit/payment_gateway/ccavRequestHandler.php");
						$(form).attr("name", "customerData");
						$(form).attr("method", "POST");

						input = $("<input>")
							.attr("type", "hidden")
						    .attr("name", "tid")
						    .val(d);

						$(form).append($(input));

						input = $("<input>")
							.attr("type", "hidden")
						    .attr("name", "merchant_id")
						    .val("164164");

						$(form).append($(input));

						input = $("<input>")
							.attr("type", "hidden")
						    .attr("name", "order_id")
						    .val(data.booking_id);

						$(form).append($(input));

						input = $("<input>")
							.attr("type", "hidden")
						    .attr("name", "amount")
						    .val(sendData.amountToPay);

						$(form).append($(input));

						input = $("<input>")
							.attr("type", "hidden")
						    .attr("name", "currency")
						    .val("INR");

						$(form).append($(input));
						
						input = $("<input>")
							.attr("type", "hidden")
						    .attr("name", "redirect_url")
						    .val("http://reflectionsmedia.in/PHP_Kit/payment_gateway/ccavResponseHandler.php");

						$(form).append($(input));

						input = $("<input>")
							.attr("type", "hidden")
						    .attr("name", "cancel_url")
						    .val("http://reflectionsmedia.in");

						$(form).append($(input));


						form.appendTo( document.body )

						$(form).submit();
					   }else{
					   	console.log("error");
					   }
					},
					error : function(error) {
						console.log(error);
					}
				});
			}else{
				if(confirm('Please Login')){
					$('#banquetsBillConfirmation').modal('hide');;
				    $('#myModal').modal({
				        show: 'false'
				    });   
				}
			}
    	});

	});
</script>