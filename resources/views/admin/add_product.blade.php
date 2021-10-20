@extends('admin_layout')
@section('admin_content')

			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="#">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Products</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Products</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">

						<p class="alert-success">
							<?php
							$message=Session::get('message');
								if ($message) 
								{
									echo $message;
									Session::put('message',null);
								}

							?>
					    </p>

						<form class="form-horizontal" action="{{url ('/save-product') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
						  <fieldset>
							
							<div class="control-group col-md-12">
							  <label class="control-label col-md-4" for="date01">Products Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge col-md-8" name="product_name" required>
							  </div>
							</div>

							 <div class="control-group">
								<label class="control-label" for="selectError3">Product Category</label>
								<div class="controls">

								  <select id="selectError3" name="category_id">
								  	<option>select category</option>
								  	<?php 

                            $all_published_category=DB::table('tbl_category')
                                                    ->where('publication_status', 1)
                                                    ->get();

                            foreach ($all_published_category as $v_category) {?>
									<option value="{{ $v_category->category_id }}">{{ $v_category->category_name }}</option>
									 <?php  } ?>
								  </select>
								</div>
							  </div>

							   <div class="control-group">
								<label class="control-label" for="selectError3">Manufacture Name</label>
								<div class="controls">
								  <select id="selectError3" name="manufacture_id">
								  	<option>select manufacture</option>
								  	<?php 
								  	 $all_published_manufacture=DB::table('tbl_manufacture')
                                                    ->where('publication_status', 1)
                                                    ->get();

                            foreach ($all_published_manufacture as $v_manufacture) {?>
									<option value="{{ $v_manufacture->manufacture_id }}">{{ $v_manufacture->manufacture_name }}</option>
									<?php  } ?>
								  </select>
								</div>
							  </div>

							         
							<div class="control-group col-md-12">
							  <label class="control-label col-md-4" for="textarea2">Products Short Desription</label>
							  <div class="controls">
								<textarea name="product_short_description" rows="3" required=""></textarea>
							  </div>
							</div>

							<div class="control-group col-md-12">
							  <label class="control-label col-md-4" for="textarea2">Products Long Desription</label>
							  <div class="controls">
								<textarea name="product_long_description" rows="3" required=""></textarea>
							  </div>
							</div>

							<div class="control-group col-md-12">
							  <label class="control-label col-md-4" for="date01">Products Price</label>
							  <div class="controls">
								<input type="text" class="input-xlarge col-md-8" name="product_price" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Product Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
							  </div>
							</div> 

							<div class="control-group col-md-12">
							  <label class="control-label col-md-4" for="date01">Products Size</label>
							  <div class="controls">
								<input type="text" class="input-xlarge col-md-8" name="product_size" required>
							  </div>
							</div>

							<div class="control-group col-md-12">
							  <label class="control-label col-md-4" for="date01">Products Color</label>
							  <div class="controls">
								<input type="text" class="input-xlarge col-md-8" name="product_color" required>
							  </div>
							</div>

							<div class="control-group col-md-12">
							  <label class="control-label col-md-4" for="textarea2">Publication Status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Product</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			


	
	
			<!-- end: Content -->

@endsection