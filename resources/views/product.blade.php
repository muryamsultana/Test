


<div class="login">
  <form method="post" action="submitform">@csrf
        <div class="login-screen">
          <div class="login-form">
            <div class="form-group">
              <input type="text" class="form-control login-field" name="product" value="" placeholder="Enter Product Name" id="product-name">
              <label class="login-field-icon fui-user" for="product-name"></label>
            </div>

            
			<div class="form-group">
              <input type="text" class="form-contro"  name="quantity" value="" placeholder="Quanitit" id="product_quantity">
              <label class="login-field-icon fui-lock" for="product_quantity"></label>
            </div>
			<div class="form-group <?php if($errors->first('password')) echo 'has-error'?>"">
              <input type="text" class="form-contro"  name="price" value="" placeholder="Price_per Item" id="price">
              <label class="login-field-icon fui-lock" for="product_quantity"></label>
            </div>

           <button class="btn btn-primary btn-lg btn-block" href="#">Submit</button>
          
          </div>
        </div>
		</form>
		<div>
		<table>
		<tr>
		<th>Product</th>
		<th>Price pe Itemr</th>
		<th>Quantity in Stock</th>
		<th>Timestamp</th>
		<th> Total value</th>
		</tr>
		@foreach ($data as $key=>$user)
		<tr>
		<td>
		{{$user['Product']}}
		</td>
		<td>{{$user['Price']}}</td>
		<td>{{ $user['Quantity']}}</td>
		<td>{{$user['Timestamp']}}</td>
		<td>{{$user['Price']*$user['Quantity']}}</td>
			@php($total+= $user['Price']*$user['Quantity'])
		</tr>
		
		@endforeach
		<tr><td<colspan="4">Total: {{$total}}</td></tr>
	
		
		</div>
      </div>
 