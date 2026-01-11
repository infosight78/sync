<x-app-layout>
<div class="page">
	<div class="content">
		<div class="main-content">
			<div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
				<div class="my-auto">
				<h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Add Vendor</h5>
				<nav>
					<ol class="flex items-center whitespace-nowrap min-w-0">
						<li class="text-[12px]"> 
							<a class="flex items-center text-primary hover:text-primary" href="javascript:void(0);">List Vendor 
								<i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
							</a> 
						</li>
						<li class="text-[12px]"> 
							<a class="flex items-center text-textmuted" href="javascript:void(0);">Add Vendor</a> 
						</li>
					</ol>
				</nav>
				</div>
			</div>
			<div class="grid grid-cols-12 gap-6">
				<div class="xl:col-span-12 col-span-12">
					<div class="box">
						<div class="box-header flex justify-between">
							<div class="box-title">Add Vendor</div>
						</div>
						<div class="box-body">
							<form>
								<div class="grid grid-cols-12 mb-4">
									<label for="vendor Name" class="sm:col-span-3 col-span-12 col-form-label">Vendor Name</label>
									<div class="sm:col-span-9 col-span-12">
										<div class="input-group">
                                            <input type="text" class="form-control placeholder:text-textmuted" id="autoSizingInput" placeholder="Jane Doe" id="vendor_name" name="vendor_name" required>
										</div>
									</div>
								</div>
								<div class="grid grid-cols-12 mb-4">
									<label for="type" class="sm:col-span-3 col-span-12 col-form-label">Type</label>
									<div class="sm:col-span-9 col-span-12">
										<div class="input-group">
											<select class="form-select dark:!bg-light dark:!border-defaultborder/10 !py-[0.59rem]" id="state" name="state">
												<option value="">Select State</option>
												<option value="Alabama">Alabama</option>
												<option value="Alaska">Alaska</option>
												<option value="Arizona">Arizona</option>
												<option value="Arkansas">Arkansas</option>
												<option value="California">California</option>
												<option value="Colorado">Colorado</option>
												<option value="Connecticut">Connecticut</option>
												<option value="Delaware">Delaware</option>
												<option value="Florida">Florida</option>
												<option value="Georgia">Georgia</option>
												<option value="Hawaii">Hawaii</option>
												<option value="Idaho">Idaho</option>
												<option value="Illinois">Illinois</option>
												<option value="Indiana">Indiana</option>
												<option value="Iowa">Iowa</option>
												<option value="Kansas">Kansas</option>
												<option value="Kentucky">Kentucky</option>
												<option value="Louisiana">Louisiana</option>
												<option value="Maine">Maine</option>
												<option value="Maryland">Maryland</option>
												<option value="Massachusetts">Massachusetts</option>
												<option value="Michigan">Michigan</option>
												<option value="Minnesota">Minnesota</option>
												<option value="Mississippi">Mississippi</option>
												<option value="Missouri">Missouri</option>
												<option value="Montana">Montana</option>
												<option value="Nebraska">Nebraska</option>
												<option value="Nevada">Nevada</option>
												<option value="NewHampshire">New Hampshire</option>
												<option value="NewJersey">New Jersey</option>
												<option value="NewMexico">New Mexico</option>
												<option value="NewYork">New York</option>
												<option value="NorthCarolina">North Carolina</option>
												<option value="NorthDakota">North Dakota</option>
												<option value="Ohio">Ohio</option>
												<option value="Oklahoma">Oklahoma</option>
												<option value="Oregon">Oregon</option>
												<option value="Pennsylvania">Pennsylvania</option>
												<option value="RhodeIsland">Rhode Island</option>
												<option value="SouthCarolina">South Carolina</option>
												<option value="SouthDakota">South Dakota</option>
												<option value="Tennessee">Tennessee</option>
												<option value="Texas">Texas</option>
												<option value="Utah">Utah</option>
												<option value="Vermont">Vermont</option>
												<option value="Virginia">Virginia</option>
												<option value="Washington">Washington</option>
												<option value="WestVirginia">West Virginia</option>
												<option value="Wisconsin">Wisconsin</option>
												<option value="Wyoming">Wyoming</option>
											</select>
										</div>
									</div>
								</div>
								<div class="grid grid-cols-12 mb-4">
									<label for="Address 1" class="sm:col-span-3 col-span-12 col-form-label">Address 1</label>
									<div class="sm:col-span-9 col-span-12">
										<div class="input-group">
                                            <input type="text" class="form-control placeholder:text-textmuted" placeholder="Address 1" id="address1" name="address1" required>
										</div>
									</div>
								</div>
								<div class="grid grid-cols-12 mb-4">
									<label for="Address2" class="sm:col-span-3 col-span-12 col-form-label">Address 2</label>
									<div class="sm:col-span-9 col-span-12">
										<div class="input-group">
                                            <input type="text" class="form-control placeholder:text-textmuted" placeholder="Address2" id="address2" name="address2" required>
										</div>
									</div>
								</div>
								<div class="grid grid-cols-12 mb-4">
									<label for="vendor Name" class="sm:col-span-3 col-span-12 col-form-label">Vendor Name</label>
									<div class="sm:col-span-9 col-span-12">
										<div class="input-group">
                                            <select class="form-select dark:!bg-light dark:!border-defaultborder/10 !py-[0.59rem]" id="city" name="city">
												<option value="">Select City</option>
												<option value="NewYork">New York</option>
												<option value="LosAngeles">Los Angeles</option>
												<option value="Chicago">Chicago</option>
												<option value="Houston">Houston</option>
												<option value="Phoenix">Phoenix</option>
												<option value="Philadelphia">Philadelphia</option>
												<option value="SanAntonio">San Antonio</option>
												<option value="SanDiego">San Diego</option>
												<option value="Dallas">Dallas</option>
												<option value="SanJose">San Jose</option>
												<option value="Austin">Austin</option>
												<option value="Seattle">Seattle</option>
												<option value="Denver">Denver</option>
												<option value="WashingtonDC">Washington, DC</option>
												<option value="Boston">Boston</option>
												<option value="Atlanta">Atlanta</option>
												<option value="Miami">Miami</option>
												<option value="Orlando">Orlando</option>
												<option value="Tampa">Tampa</option>
												<option value="LasVegas">Las Vegas</option>
												<option value="SanFrancisco">San Francisco</option>
												<option value="Oakland">Oakland</option>
												<option value="Berkeley">Berkeley</option>
												<option value="PaloAlto">Palo Alto</option>
											</select>
										</div>
									</div>
								</div>
								<div class="grid grid-cols-12 mb-4">
									<label for="State" class="sm:col-span-3 col-span-12 col-form-label">State</label>
									<div class="sm:col-span-9 col-span-12">
										<div class="input-group">
                                            <select class="form-select dark:!bg-light dark:!border-defaultborder/10 !py-[0.59rem]" id="state" name="state">
												<option value="">Select State</option>
												<option value="Alabama">Alabama</option>
												<option value="Alaska">Alaska</option>
												<option value="Arizona">Arizona</option>
												<option value="Arkansas">Arkansas</option>
												<option value="California">California</option>
												<option value="Colorado">Colorado</option>
												<option value="Connecticut">Connecticut</option>
												<option value="Delaware">Delaware</option>
												<option value="Florida">Florida</option>
												<option value="Georgia">Georgia</option>
												<option value="Hawaii">Hawaii</option>
												<option value="Idaho">Idaho</option>
												<option value="Illinois">Illinois</option>
												<option value="Indiana">Indiana</option>
												<option value="Iowa">Iowa</option>
												<option value="Kansas">Kansas</option>
												<option value="Kentucky">Kentucky</option>
												<option value="Louisiana">Louisiana</option>
												<option value="Maine">Maine</option>
												<option value="Maryland">Maryland</option>
												<option value="Massachusetts">Massachusetts</option>
												<option value="Michigan">Michigan</option>
												<option value="Minnesota">Minnesota</option>
												<option value="Mississippi">Mississippi</option>
												<option value="Missouri">Missouri</option>
												<option value="Montana">Montana</option>
												<option value="Nebraska">Nebraska</option>
												<option value="Nevada">Nevada</option>
												<option value="NewHampshire">New Hampshire</option>
												<option value="NewJersey">New Jersey</option>
												<option value="NewMexico">New Mexico</option>
												<option value="NewYork">New York</option>
												<option value="NorthCarolina">North Carolina</option>
												<option value="NorthDakota">North Dakota</option>
												<option value="Ohio">Ohio</option>
												<option value="Oklahoma">Oklahoma</option>
												<option value="Oregon">Oregon</option>
												<option value="Pennsylvania">Pennsylvania</option>
												<option value="RhodeIsland">Rhode Island</option>
												<option value="SouthCarolina">South Carolina</option>
												<option value="SouthDakota">South Dakota</option>
												<option value="Tennessee">Tennessee</option>
												<option value="Texas">Texas</option>
												<option value="Utah">Utah</option>
												<option value="Vermont">Vermont</option>
												<option value="Virginia">Virginia</option>
												<option value="Washington">Washington</option>
												<option value="WestVirginia">West Virginia</option>
												<option value="Wisconsin">Wisconsin</option>
												<option value="Wyoming">Wyoming</option>
											</select>
										</div>
									</div>
								</div>
								<div class="grid grid-cols-12 mb-4">
									<label for="Zip Code" class="sm:col-span-3 col-span-12 col-form-label">Zip Code</label>
									<div class="sm:col-span-9 col-span-12">
										<div class="input-group">
                                            <input type="number" class="form-control placeholder:text-textmuted" placeholder="Zip Code" id="zip_code" name="zip_code" required>
										</div>
									</div>
								</div>
								<button type="button" class="ti-btn ti-btn-primary-full !mb-0 mt-4">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</x-app-layout>