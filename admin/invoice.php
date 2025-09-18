<?php 
session_start();
?>
<html id="customer">
<title>Karthik sales</title>
<head>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:100,300,400,900,700,500,300,100);
*{
  margin: 0;
  box-sizing: border-box;
  -webkit-print-color-adjust: exact;
}
body{
  background: #E0E0E0;
  font-family: 'Roboto', sans-serif;

}
::selection {background: #f31544; color: #FFF;}
::moz-selection {background: #f31544; color: #FFF;}
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.col-left {
    float: left;
}
.col-right {
    float: right;
}
h1{
  font-size: 1.5em;
  color: #444;
}
h2{font-size: .9em;}
h3{
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
p{
  font-size: .75em;
  color: black;
  line-height: 1.2em;
}
a {
    text-decoration: none;
    color: #00a63f;
}

#invoiceholder{
  width:100%;
  height: 100%;
  padding: 50px 0;
 
}
#invoice{
  position: relative;
  margin: 0 auto;
  width: 700px;
  background: #FFF;
}

[id*='invoice-']{ /* Targets all id with 'col-' */
/*  border-bottom: 1px solid #EEE;*/
  padding: 20px;
}

#invoice-top{border-bottom: 2px solid #6639ba;}
#invoice-mid{min-height: 110px;}
#invoice-bot{ min-height: 240px;}

.logo{
    display: inline-block;
    vertical-align: middle;
	width: 110px;
    overflow: hidden;
}
.info{
    display: inline-block;
    vertical-align: middle;
    margin-left: 20px;
}
.logo img,
.clientlogo img {
    width: 100%;
}
.clientlogo{
    display: inline-block;
    vertical-align: middle;
	width: 30px;
}
.clientinfo {
    display: inline-block;
    vertical-align: middle;
    margin-left: 20px
}
.title{
  float: right;
}
.title p{text-align: right;}
#message{margin-bottom: 30px; display: block;}
h2 {
    margin-bottom: 5px;
    color: #444;
}
.col-right td {
    color: #666;
    padding: 5px 8px;
    border: 0;
    font-size: 0.75em;
    border-bottom: 1px solid #eeeeee;
}
.col-right td label {
    margin-left: 5px;
    font-weight: 600;
    color: #444;
}
.cta-group a {
    display: inline-block;
    padding: 7px;
    border-radius: 4px;
    background: rgb(196, 57, 10);
    margin-right: 10px;
    min-width: 100px;
    text-align: center;
    color: #fff;
    font-size: 0.75em;
}
.cta-group .btn-primary {
    background: #00a63f;
}
.cta-group.mobile-btn-group {
    display: none;
}
table{
  width: 100%;
  border-collapse: collapse;
}
td{
    padding: 10px;
    border-bottom: 1px solid #cccaca;
    font-size: 12px;
    text-align: left;
}

.tabletitle th {
  border-bottom: 2px solid #ddd;
  text-align: right;
}
.tabletitle th:nth-child(2) {
    text-align: left;
}
th {
    font-size: 0.7em;
    text-align: center;
    padding: 5px 10px;
}
.item{width: 50%;}
.list-item td {
    text-align: right;
}
.list-item td:nth-child(2) {
    text-align: left;
}
.total-row th,
.total-row td {
    text-align: right;
    font-weight: 700;
    font-size: .75em;
    border: 0 none;
}
.table-main {
    
}
footer {
    border-top: 1px solid #eeeeee;;
    padding: 15px 20px;
}
.effect2
{
  position: relative;
}
.effect2:before, .effect2:after
{
  z-index: -1;
  position: absolute;
  content: "";
  bottom: 15px;
  left: 10px;
  width: 50%;
  top: 80%;
  max-width:300px;
  background: #777;
  -webkit-box-shadow: 0 15px 10px #777;
  -moz-box-shadow: 0 15px 10px #777;
  box-shadow: 0 15px 10px #777;
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg);
}
.effect2:after
{
  -webkit-transform: rotate(3deg);
  -moz-transform: rotate(3deg);
  -o-transform: rotate(3deg);
  -ms-transform: rotate(3deg);
  transform: rotate(3deg);
  right: 10px;
  left: auto;
}
@media screen and (max-width: 767px) {
    h1 {
        font-size: .9em;
    }
    #invoice {
        width: 100%;
    }
    #message {
        margin-bottom: 20px;
    }
    [id*='invoice-'] {
        padding: 20px 10px;
    }
    .logo {
        width: 140px;
    }
    .title {
        float: none;
        display: inline-block;
        vertical-align: middle;
        margin-left: 40px;
    }
    .title p {
        text-align: left;
    }
    .col-left,
    .col-right {
        width: 100%;
    }
    .table {
        margin-top: 20px;
    }
    #table {
        white-space: nowrap;
        overflow: auto;
    }
    td {
        white-space: normal;
    }
    .cta-group {
        text-align: center;
    }
    .cta-group.mobile-btn-group {
        display: block;
        margin-bottom: 20px;
    }
     /*==================== Table ====================*/
    .table-main {
        border: 2 none;
		Width:100%;
    }  
      .table-main thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -5px;
        overflow: hidden;
        padding: 5px;
        position: center;
        width: 1px;
		Width:100%;
      }
      .table-main tr {
        border-bottom: 2px solid #eee;
        display: block;
        margin-bottom: 20px;
		Width:100%;
      }
      .table-main td {
        font-weight: bold;
        display: block;
        padding-left: 40%;
        max-width: none;
        position: relative;
        border: 2px solid #cccaca;
        text-align: left;
		
      }
      .table-main td:before {
        /*
        * aria-label has no advantage, it won't be read inside a table
        content: attr(aria-label);
        */
        content: attr(data-label);
        position: absolute;
        left: 10px;
        font-weight:bold;
        text-transform: uppercase;
		
      }
    .total-row th {
        display: none;
		font-weight: bold;
    }
    .total-row td {
        text-align: left;
		font-weight: bold;
    }
    footer {text-align: center;}
}

button {
  margin: 20px;
}
.custom-btn {
  width: 130px;
  height: 40px;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  outline: none;
}
.btn-12{
  position: relative;
  right: 20px;
  bottom: 20px;
  border:none;
  box-shadow: none;
  width: 130px;
  height: 40px;
  line-height: 42px;
  -webkit-perspective: 230px;
  perspective: 230px;
}
.btn-12 span {
  background: rgb(0,172,238);
background: linear-gradient(0deg, rgba(0,172,238,1) 0%, rgba(2,126,251,1) 100%);
  display: block;
  position: absolute;
  width: 130px;
  height: 40px;
  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  border-radius: 5px;
  margin:0;
  text-align: center;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all .3s;
  transition: all .3s;
}
.btn-12 span:nth-child(1) {
  box-shadow:
   -7px -7px 20px 0px #fff9,
   -4px -4px 5px 0px #fff9,
   7px 7px 20px 0px #0002,
   4px 4px 5px 0px #0001;
  -webkit-transform: rotateX(90deg);
  -moz-transform: rotateX(90deg);
  transform: rotateX(90deg);
  -webkit-transform-origin: 50% 50% -20px;
  -moz-transform-origin: 50% 50% -20px;
  transform-origin: 50% 50% -20px;
}
.btn-12 span:nth-child(2) {
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  transform: rotateX(0deg);
  -webkit-transform-origin: 50% 50% -20px;
  -moz-transform-origin: 50% 50% -20px;
  transform-origin: 50% 50% -20px;
}
.btn-12:hover span:nth-child(1) {
  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  transform: rotateX(0deg);
}
.btn-12:hover span:nth-child(2) {
  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
 color: transparent;
  -webkit-transform: rotateX(-90deg);
  -moz-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
}


</style>
</head>
<body>
<div id="printableArea">
 <div id="invoiceholder">

  <div id="invoice" class="effect2" >
    
    <div id="invoice-top" >
      <div class="logo"><img src="images/logo.jpg" alt="Logo" style="width:90%;height:90px;" /></div>
      <div class="title" style="padding-right:220px;">
        <h1 style="">KARTHIK SALES</h1>
        <p style="padding-right:8px;"><b>NH 66 Beeri Kotekar Manglore<br></b> </p>
           <p style="padding-right:45px;"><b>Ph:9148851499</b> </p>
       
      </div><!--End Title-->
    </div><!--End InvoiceTop-->

<div id="invoice-top" >
 <h4 style="text-align:center;margin-top:-14px;margin-bottom:-50px;"></h4>
</div>

<?php
include("config.php");
$sql = "SELECT bno,name,phone,date, product,qty,price,total from external_bill where bno='".$_SESSION['bno']."'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);
	if($count>0)
	{
		while($row = mysqli_fetch_array($result))
		{ 
			$bno=$row[0];
			$name=$row[1];
			$phone=$row[2];
			$date=$row[3];
			$product=$row[4];
			$qty=$row[5];
			$price=$row[6];
			$total=$row[7];
	  }
	}
?>
 <div id="invoice-top">
 <div class="clearfix">
            <div class="col-left">
                <div class="clientlogo" style="font-size:23px;"><b> #BT0<?php echo $bno; ?></b></div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <div class="clientinfo">
                    <h2 id="supplier"><?php echo $date; ?></h2>
                    <!--<p><span id="address"><b>H 4:00:10 PM</b></span></p>-->
            </div>
            <div class="col-right">
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="font-size:13px;"><label><?php echo $name; ?></label><label id="invoice_total"><?php echo $phone; ?></label></td>
                        </tr>
                        <tr><td style="font-size:13px;"><label>Place Of Supply-</label><label id="note">Karnataka</label></td></tr>
                    </tbody>
                </table>
            </div>
        </div> 
		</div>
<?php
			error_reporting(1);
			include("config.php");

			$sql = "SELECT * from external_bill where bno='".$_SESSION['bno']."'";
			$result = mysqli_query($con,$sql);
			$count=mysqlI_num_rows($result);

			$tot=array();
			$q=array();
			if($count>0)
			{
				$no=1;
				while($row = mysqli_fetch_array($result))
				{ 
					$rowid=$row[0];
					$bservice=$row[6];
					$bqty=$row[7];
					$bprice=$row[8];
					$bdeliverydate=$row[9];
					$btotal=$row[10];
					$tot[]=$btotal;
					$q[]=$bqty;
					$totalamt=array_sum($tot);
					$totalqty=array_sum($q);
				}
			}
			?>
	  
	 		
		
		
		
		
		
		
   
    
    <div id="invoice-top">
      
      <div id="table">
        <table class="table-main">
          <thead>    
              <tr class="tabletitle" style="align-items:center;">
			  <th style="padding-left:20px;">SI.No</th>
                <th style="padding-left:80px;">Particulars</th>
                <!--<th style="padding-right:60px;">Service</th>-->
                <th>Qty</th>
                <th>Rate</th>
               
                <th>Total</th>
              </tr>
          </thead>
		<?php
			$sql = "SELECT * from external_bill where bno='".$_SESSION['bno']."'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);

	$tot=array();
	if($count>0)
	{
		$sl=0;
		while($row = mysqli_fetch_array($result))
		{ 
			$sl+=1;
			$bpname=$row[5];
			$bqty=$row[6];
			$bprice=$row[7];
			$btotal=$row[8];
			?>
          <tr class="list-item">
              <td data-label="Type" class="tableitem" style="font-weight: bold;"><?php echo $no; ?></td>
           
            <!--<td data-label="Tax Code" class="tableitem"style="font-weight: bold;">Laundry(SAC-999711)</td>-->
            <td data-label="Quantity" class="tableitem" style="font-weight: bold;"><?php echo $bpname; ?></td>
            <td data-label="Taxable Amount" class="tableitem" style="font-weight: bold;"><?php echo $bqty; ?></td>
            
            <td data-label="Tax Amount" class="tableitem" style="font-weight: bold;"><?php echo $bprice; ?></td>
           
            <td data-label="Total" class="tableitem" style="font-weight: bold;"><?php echo $btotal; ?></td>
          </tr>
		  <?php
								$no=$no+1;
								$tot[]=$btotal;
								}?>
	  
	  <?php
			
	  $totalamt=array_sum($tot);
		
	}
	else
	{
		$totalamt=0;
		echo "<script>alert('Bill Not Updated');</script>";
		echo "<script> location.href='externalbooking.php'; </script>";
	}
			?>
        
            <!--<tr class="list-item total-row">
                <th colspan="9" class="tableitem">Grand Total</th>
                <td data-label="Grand Total" class="tableitem">111.84</td>
            </tr>-->
        </table>
      </div><!--End Table-->
      <!--<div class="cta-group">
        <a href="javascript:void(0);" class="btn-primary">Approve</a>
        <a href="javascript:void(0);" class="btn-default">Reject</a>
    </div>--> 
      
    </div><!--End InvoiceBot-->
	
	 <div id="invoice-mid">
		
		
		 <div class="clientinfo" >
		
                   
                    <h2 id="supplier" style="padding-left:480px;" >Grand Total:&nbsp;&nbsp;<?php echo $totalamt; ?></h2>
					
               
					
                   
               
				</div>
	
		</div>
   <!--End Invoice Mid-->
    <footer>
    
    </footer>
	
</div><!--End Invoice-->
    
</div><!-- End Invoice Holder-->

</div></div>
 <button  type="submit"  name="submit" class="custom-btn btn-12"  onclick="printDiv('printableArea')"><span>Click!</span><span>Print</span></button>    
              <script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

  
  
 
  <script type="text/javascript">
      function createPDF() {
  var sTable = document.getElementById('customer').innerHTML;

  var style = "<style>";
  style = style + "table {width: 100%;font: 17px Calibri;}";
  style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
  style = style + "padding: 2px 3px;text-align: center;}";
  style = style + "</style>";
  var win = window.open('', '', 'height=700,width=700');
  win.document.write('<html><head>');
  win.document.write('<title>localhost:5000</title>'); 
  win.document.write(style);          
  win.document.write('</head>');
  win.document.write('<body>');
  win.document.write(sTable);         
  win.document.write('</body></html>');
  win.document.close();     
  win.print();    
	  }
    </script>
</body>
</html>