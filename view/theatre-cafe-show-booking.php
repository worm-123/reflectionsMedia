<?php 
require_once('../config/database.php');
require_once('header-threatre.php');
?>

<div class="container-fluid">
	<div class="container">
		<?php 
			$id=base64_decode($_GET['id']);
			$sql="select * from theatre_cafe where id='$id'";
			$loginQuery=mysqli_query($link, $sql);
			$row = mysqli_fetch_array($loginQuery, MYSQLI_ASSOC);
			?>
		<div class="col-md-12 margin-top-20">
			<p class="navigationTxt"><span>YOU ARE BOOKING</span> <?php echo $row['play_name'];?></p>
			<input type="hidden" name="playName" id="playtxt" value="<?php echo $row['play_name']; ?>">
		</div>
		<div class="col-md-12">
			<p class="text-justify"><?php echo $row['description']; ?></p>
		</div>
		<div class="col-md-6 margin-top-10">
			<img src="../media/img/<?php echo $row['big_img'] ?>" alt="" title="">
		</div>
		<div class="col-md-6 margin-top-10">
			<div class="booking_option table-responsive">
				<table class="table table-dark ">
				  <thead>
				    <tr>
				      <th scope="col" colspan="3" class="text-center"> SELECT OPTIONS </th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td width="35%">No. of guest:
				      <select name="noOfGuest" id="noOfGuest" class="selectGuest guestBooking">
				      	<option value="1">1</option>
				      	<option value="2">2</option>
				      	<option value="3">3</option>
				      	<option value="4">4</option>
				      	<option value="5">5</option>
				      </select>

				      </td>
				      <td width="40%">Play time:
				      <select name="time" id="showTime" class="selectGuest timeBooking">
				      	<option value="10:00"><time>10:00</time></option>
				      	<option value="11:00"><time>11:00</time></option>
				      	<option value="12:00"><time>12:00</time></option>
				      	<option value="13:00"><time>13:00</time></option>
				      	<option value="14:00"><time>14:00</time></option>
				      </select></td>
				      <td width="25%"><select name="date" id="showDate" class="selectGuest timeBooking" style="width: 110px">
				      	<option value="21/01/2018">21/01/2018</option>
				      	<option value="22/01/2018">22/01/2018</option>
				      	<option value="23/01/2018">23/01/2018</option>
				      	<option value="24/01/2018">24/01/2018</option>
				      	<option value="25/01/2018">25/01/2018</option>
				      </select></td>
				    </tr>
				    <tr>
				      <td colspan="2" width="75%">Ticket Type</td>
				      <td width="25%" style="padding:0px;">Price <br>Per Person <small>(Inc. all texes)</small></td>
				    </tr>
				    <tr>
				      <td colspan="2" width="75%">
				        <label class="container1"><span class="getPlayTypeText">Play</span> <br/><small>View details</small>
						  <input type="radio" id="play" name="play" value="<?php echo $row['price']; ?>">
						  <input type="hidden" class="play" name="play" value="Play">
						  <span class="checkmark"></span>
						</label>
				      </td>
				      <td width="25%"> &#8377; <?php echo $row['price']; ?></td>
				    </tr>
				    <tr>
				      <td colspan="2" width="75%">
				      	<label class="container1"><span class="getPlayTypeText">Play with Food</span> <br/><small>View details and food menu</small>
						  <input type="radio" name="play" value="<?php echo $row['price_food']; ?>">
						   <input type="hidden" class="play" name="play" value="Play with Food">
						  <span class="checkmark"></span>
						 </label>
						</td>
				      <td width="25%">&#8377; <?php echo $row['price_food']; ?></td>
				    </tr>
				    <tr>
				      <td colspan="2" width="75%">
						<label class="container1"><span class="getPlayTypeText">Play with Food & Indian Liquor</span> <br/><small>View details and food menu</small>
						  <input type="radio"  name="play" value="<?php echo $row['price_indianLiquor']; ?>">
						   <input type="hidden" class="play" name="play" value="Play with Food & Indian Liquor">
						  <span class="checkmark"></span>
						</label>
				      </td>
				      <td width="25%">&#8377; <?php echo $row['price_indianLiquor']; ?></td>
				    </tr>
				    <tr>
				      <td colspan="2" width="75%">
						 <label class="container1"><span class="getPlayTypeText">Play with Food & Foreign Liquor</span> <br/><small>View details and food menu</small>
						  <input type="radio"  name="play" value="<?php echo $row['price_foreignLiquor']; ?>">
						   <input type="hidden" class="play" name="play" value="Play with Food & Foreign Liquor">
						  <span class="checkmark"></span>
						 </label>
						</td>
				      <td width="25%">&#8377; <?php echo $row['price_foreignLiquor']; ?></td>
				    </tr>
				    <tr>
				      <td width="30%"> 	
					    Have a Promocode?
					      <input type="text" class="form-control inputTxtCupon" placeholder="DEC20" name="promo">
					      <button class="btn btnCupon">APPLY</button>
					   </td>
				       <td width="70%" colspan="2" >
				       		<table class="table table-dark totalbill">
						       	<tr>
						       		<td width="60%" style="text-align: right;">
						       		 	<div>Total amount</div>
					       		 	</td>
					       		 	<td width="35%">
						       		 	<div>&#8377; <span id="amount"></span></div>
						       		 </td>
						       	</tr>
						       	<tr>
						       		<td width="60%" style="text-align: right;">
							        	<div>Coupons Applied</div>
							        </td>
					       		 	<td width="35%">
					       		 		<div>NA</div>
					       		 	</td>
							    </tr>
							    <tr>
							    	<td width="60%" style="text-align: right;">
							        	<div>Total Payable Amount<br/><small>(Inclusive of all taxes)</small></div>
							        	<input type="hidden" name="" value="">
							        </td>
					       		 	<td width="35%">
							        	<div>&#8377; <span id="amountPay"></span></div>
							        </td>
							        
							    </tr>
							</table>
				      </td>
				    </tr>
				    <tr>
				    	<td colspan="3">
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
					<button data-target="#billConfirmation" disabled="disabled" data-toggle="modal" id="storeAllFieldValue" class="btn button">REVIEW BOOKING</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!--- final bill submission-->



<!-- Bill Confirmaation -->
<div class="modal fade" id="billConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <td width="50%" class="text-right">Play Name</td>
              <td width="50%" class="text-left">: <span id="playName"></span></td>
            </tr>
            <tr>
              <td width="50%" class="text-right">
                Time
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
                Ticket Type
              </td>
              <td width="50%" class="text-left">: <span id="ticket"></span></td>
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

<!--  -->
<?php require_once('footer.php');?>


<script type="text/javascript">

	$(document).ready(function(){
		$( "input[type=radio]").click(function(){
			$('#storeAllFieldValue').removeAttr("disabled");
			var amount =$('input[type=radio]:checked').val(),
				playName=$('#playtxt').val(),
				ticketType=$('input[type=radio]:checked').next().val(),
				/*ticketType=$(this).closest('input[type="hidden"]').val(),*/
				guestBooking=$('.guestBooking').val(),
				timeBooking=$('#showTime').val(),
				showDate=$('#showDate').val(),
				noGuest=$('.guestBooking').val(),
				playTypeText=$('.getPlayTypeText').text();
			if(noGuest > 1){
				amount=parseInt(noGuest)* parseInt(amount);
			}
			$('#amount').html(amount);
			$('#amountPay').html(amount);
			$('#amounttlt').html(amount);
			$('#guest').html(guestBooking);
			$('#time').html(timeBooking);
			$('#date').html(showDate);
			$('#playName').html(playName);
			$('#ticket').html(ticketType);	
		});
		$("#noOfGuest").change(function(){
    		var noGuest=$('.guestBooking').val(),
    			amount =$('input[type=radio]:checked').val();
			var totalAmount=parseInt(noGuest)* parseInt(amount);
			$('#amount').html(totalAmount);
			$('#amountPay').html(totalAmount);
			$('#amounttlt').html(totalAmount);
    	});
    	$('#proceedToPay').click(function(){
    		function getCookie(name)
	 		{
			    var re = new RegExp(name + "=([^;]+)");
			    var value = re.exec(document.cookie);
			    return (value != null) ? unescape(value[1]) : null;
		  	}
		  	var username=getCookie("username");
		  	console.log(username);
		  	if(!!username){
	    		var sendData={
	    			playName:$('#playName').text(),
	    			time:$('#time').text(),
	    			date:$('#date').text(),
	    			noOfGuest:$('#guest').text(),
	    			ticketType:$('#ticket').text(),
	    			amountToPay:$('#amounttlt').text(),
	    			userId:username
	    		};
	    		$.ajax({
					type : "POST",
					url : 'bill-payment.php',
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
					$('#billConfirmation').modal('hide');;
				    $('#myModal').modal({
				        show: 'false'
				    });   
				}
			}
    	});
	});

</script>