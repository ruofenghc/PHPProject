<script>
function total(){
    //alert('a');
    var quantity= document.getElementById('quantity').value;
	var price= document.getElementById('price').value;
	if(!isNaN(quantity)){
		var totalprice=parseInt(quantity) * parseFloat(price);
		document.getElementById('totalprice').value=totalprice;
		}
    //alert(quantity);
}
</script>
<style>
#cart{
	color:#0C0;
	font-size:24px;
	font-weight:bolder;
}
</style>

<body>
<div class="progress" style="margin-bottom:0">
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  <strong>If you finish your shopping,please check your cart below !</strong>
  </div>
</div>
<div>
<ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#cart" id="cart">Cart&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-down"></span></a></li>
</ul>
<table class="table table-hover ">
  <tr>
      <th>Kind</th>
      <th>Size</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Total</th>
  </tr>

<?php    display_shopping($data["shopping_cart_to_display"]); ?>
</table>
</div>

</body>
</html>
