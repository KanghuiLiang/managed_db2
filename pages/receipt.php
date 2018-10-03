  <?php
    include_once('../pages/index.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Receipt</title>
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../CSS/receipt.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
 <?php 
   $item = array();
   $totalPrice='';
   for ($i=0; $i < count($item); $i++) {
   $totalPrice += price[$i];
}

   $total = $totalPrice;
?>
<div class="container receipt">
   <!-- <form method="post" action="invoice_send.php">-->
	<h1>Receipt</h1>
	<div class="panel panel-default">
			  <div class="panel-body">
			  		<div class="row">
                            <div class="col-md-8">
                                <div class="bill-to">
                                    <p class="h5 mb-xs text-dark text-semibold"><strong>Invoiced To:</strong></p>
                                    <address>
                                        Full Name<br>
                                        Address<br>
                                        City <br>
                                        State - Zip Code<br>
                                        Country<br>
                                        Mobile<br>
                                        <strong>Email:</strong> youemail@domain.com
                                    </address>
                                </div>
                            </div>
                            
 
                            <div class="col-md-4">
                                <div class="bill-data text-right">
                                	<p class="mb-none">
                                        <span class="text-dark">Invoice No:</span>
                                        <span class="value">1234567</span>
                                    </p>
                                    <p class="mb-none">
                                        <span class="text-dark">Invoice Date:</span>
                                        <span class="value"><?php echo date("M d Y"); ?></span>
                                    </p>
                                    <p class="mb-none">
                                        <span class="text-dark">Due Date:</span>
                                        <span class="value"><?php echo date("M d Y"); ?></span>
                                    </p>
                                 </div>
                            </div>
                        </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table invoice-items">
                            <form action="invoice.php" method="post">

                            <thead>

                            <tr class="h4 text-dark">
                                <th id="cell-id" class="text-semibold">Item ID</th>
                                <th id="cell-item" class="text-semibold">Item</th>
                                <th id="cell-quantity" class="text-semibold">Quantity</th>
                                <th id="cell-price" class="text-semibold">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr id="prodinv"></tr>
								<tr id="prodinv">
                                    <td  class="text-semibold text-dark">123</td>
                                    <td class="text-semibold text-dark" id="item" name="item[]">Product/Service Name</td>
                                    <td  class="amount">100.00</td>
                                   <!--  <input class="text-semibold text-dark" name="price[]">10</td> -->
                                </tr>   <!-- first -->     
                            <tr id="prodinv"></tr>
                                <tr id="prodinv">
                                    <td  class="text-semibold text-dark">123</td>
                                    <td class="text-semibold text-dark" id="item" name="item[]">Product/Service Name</td>
                                    <td  class="amount">100.00</td>
                                    <!-- <input class="text-semibold text-dark" name="price[]">10</td> -->
                                </tr>                          
                            </tbody>
                        </table>
                        <button type="submit"> Calculate Price</button>
                    </form>
                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-4"> 
                    	<b> Approved by <span class="managerName"><u> Manager</u></span> </b>
                    	</div>
                    	<div class="col-md-4">
                    		<b> Invoice Total: <span id="total"></span> </b> <br>
                    		    VAT(7%): 
                    		    <!-- vat: tatal*0.07 -->
                    	</div>
                    	<div class="col-md-4">
                    		Amount Paid By : 
					  		<select name="paymentmode" class="form-control">
							  <option value="cash">Cash</option>
							  <option value="card">Card</option>
							  <option value="bankTransfer">Bank Transfer</option>
							</select>
                    	</div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-md-12">
                                <div class="bill-to">
                                    <p class="h5 mb-xs text-dark text-semibold"><strong>Issued by</strong></p>
                                    <address>
                                        Company Name<br>
                                        Address<br>
                                        City <br>
                                        State - Zip Code<br>
                                        Country<br>
                                        Mobile<br>
                                        <strong>Email:</strong> youemail@domain.com
                                    </address>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                    <div class="col-md-10"></div>
                    <a href="mailto:liangkanghuiapu@gmail.com?Subject=Hello%20again" target="_top">
                      <input type="submit" value="Send to Cunstomer"> </a>
                    </div>
			  </div>
	</div>
</div>
<script src = "receipt.js"></script>

?> -->
	</body>
</html>