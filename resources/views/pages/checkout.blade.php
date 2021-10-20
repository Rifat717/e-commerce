@extends('layout')
@section('content')

<section id="cart_items">
	<div class="container">
		

		<div class="register-req">
			<p>Please fillup all information</p>
		</div><!--/register-req-->

		<div class="shopper-informations">
			<div class="row">
				
				<div class="col-sm-12 clearfix">
					<div class="bill-to">
						<p>Shipping Details</p>
						<div class="form-one">
							<form action="{{url ('/save-shipping-details') }}" method="post">
								{{ csrf_field() }}
								<input type="text" name="shipping_email" placeholder="Email*">
								<input type="text" name="shipping_first_name" placeholder="First Name *">
								<input type="text" name="shipping_last_name" placeholder="Last Name *">
								<input type="text" name="shipping_address" placeholder="Address 1 *">
								<input type="text" name="shipping_mobile_number" placeholder="Mobile Number">
								<input type="text" name="shipping_city" placeholder="city">
								<input type="submit" class="btn btn-default" value="Done">
							</form>
						</div>
						{{-- <div class="form-two">
							<form>
								<input type="text" placeholder="Zip / Postal Code *">
								<select>
									<option>-- Country --</option>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								<select>
									<option>-- State / Province / Region --</option>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								<input type="password" placeholder="Confirm password">
								<input type="text" placeholder="Phone *">
								<input type="text" placeholder="Mobile Phone">
								<input type="text" placeholder="Fax">
							</form>
						</div> --}}
					</div>
				</div>
									
			</div>
		</div>
		<div class="review-payment">
			<h2>Review & Payment</h2>
		</div>
		
	</div>
</section> <!--/#cart_items-->

@endsection