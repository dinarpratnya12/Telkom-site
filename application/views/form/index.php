<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">
		<?php echo $title; ?>
	</h1>
	
	<div class="col-lg-6">
		<form action="<?= base_url('Form/aksi_save') ?>" method="post">
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-location" role="tab" aria-controls="nav-home" aria-selected="true">Location</a>
					<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-market" role="tab" aria-controls="nav-profile" aria-selected="false">Market Potency</a>
					<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-cellular" role="tab" aria-controls="nav-contact" aria-selected="false">Cellular</a>
					<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-nearby" role="tab" aria-controls="nav-contact" aria-selected="false">Nearby Site</a>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-location" role="tabpanel" aria-labelledby="nav-home-tab">
					
					<div class="form-group">
						<label for="survey_date">Survey Date</label>
						<input type="date" class="form-control" name="survey_date" id="survey_date">
					</div>
					<div class="form-group">
						<label for="jpp_year">JPP Year</label>
						<input type="text" class="form-control" name="jpp_year" id="jpp_year">
					</div>
					<div class="form-group">
						<label for="obj_loc">Objective Location</label>
						<select class="form-control" name="obj_loc">
							<option value="New Demand">New Demand</option>
							<option value="Red Site">Red Site</option>
							<option value="VIP">VIP</option>
							<option value="WLC">WLC</option>
						</select>
					</div>
					<div class="form-group">
						<label for="region">Region / Branch / Sub Branch</label>
						<input type="text" class="form-control" name="region" id="region">
					</div>
					<div class="form-group">
						<label for="street">Street / Dusun</label>
						<input type="text" class="form-control" name="street" id="street">
					</div>
					<div class="form-group">
						<label for="desa">Desa / Kelurahan</label>
						<input type="text" class="form-control" name="desa" id="desa">
					</div>
					<div class="form-group">
						<label for="kabupaten">Kabupaten / Kota</label>
						<input type="text" class="form-control" name="kabupaten" id="kabupaten">
					</div>
					<div class="form-group">
						<label for="loc_coordinate">Location Co-ordinate</label>
						<input type="text" class="form-control" name="loc_coordinate" id="loc_coordinate">
					</div>
					<div class="form-group">
						<label for="searching_radius">Searching Radius</label>
						<input type="text" class="form-control" name="searching_radius" id="searching_radius">
					</div>
					<div class="form-group">
						<label for="road_condition">Road Condition</label>
						<select class="form-control" name="road_condition">
							<option value="Asphalt">Asphalt</option>
							<option value="Coral">Coral</option>
							<option value="etc">etc</option>
						</select>
					</div>
					<div class="form-group">
						<label for="pole_nearby">Any PLN pole nearby (m)</label>
						<input type="text" class="form-control" name="pole_nearby" id="pole_nearby">
					</div>
					<div class="form-group">
						<label for="outage_frequency">PLN outage frequency (jam/hari)</label>
						<input type="text" class="form-control" name="outage_frequency" id="outage_frequency">
					</div>
					<div class="form-group">
						<label for="other_information">Other Information</label>
						<select class="form-control" name="other_information">
							<option value="DaerahBanjir">Daerah Banjir</option>
							<option value="DaerahTambang">Daerah Tambang</option>
							<option value="etc">etc</option>
						</select>
					</div>
					<a class="btn btn-primary" data-toggle="tab" href="#nav-market" role="tab" aria-controls="nav-profile" aria-selected="false">Next</a>	
				</div>
				<div class="tab-pane fade" id="nav-market" role="tabpanel" aria-labelledby="nav-profile-tab">
					<!-- tab2 -->
					<div class="form-group">
						<label for="gdp">Growth Domestic Product</label>
						<input type="text" class="form-control" name="gdp" id="gdp">
					</div>
					<div class="form-group">
						<label for="building_available">Building Available</label>
						<select class="form-control" name="building_available">
							<option value="Pasar">Pasar</option>
							<option value="Sekolah">Sekolah</option>
							<option value="Instansi">Instansi</option>
							<option value="Alun">Alun-Alun</option>
							<option value="Pelabuhan">Pelabuhan</option>
							<option value="Bandara">Bandara</option>
							<option value="etc">etc</option>
						</select>
					</div>
					<div class="form-group">
						<label for="crowded_places">Crowded Places</label>
						<input type="text" class="form-control" name="crowded_places" id="crowded_places">
					</div>
					<div class="form-group">
						<label for="nearest_site">nearest_site </label>
						<input type="text" class="form-control" name="nearest_site" id="nearest_site">
					</div>
					<div class="form-group">
						<label for="revenue_prediction">revenue_prediction</label>
						<input type="text" class="form-control" name="revenue_prediction" id="revenue_prediction">
					</div>
					<div class="form-group">
						<label for="population">Population</label>
						<input type="text" class="form-control" name="population" id="population">
					</div>
					<div class="form-group">
						<label for="kk">KK</label>
						<input type="text" class="form-control" name="kk" id="kk">
					</div>
					<div class="form-group">
						<label for="resident">Resident</label>
						<input type="text" class="form-control" name="resident" id="resident">
					</div>
					<div class="form-group">
						<label for="productive_age">Productive Age(%)</label>
						<input type="text" class="form-control" name="productive_age" id="productive_age">
					</div>
					<div class="form-group">
						<label for="job_sector">Job Sector(%)</label>
						<input type="text" class="form-control" name="job_sector" id="job_sector">
					</div>
					<a class="btn btn-primary" data-toggle="tab" href="#nav-cellular" role="tab" aria-controls="nav-profile" aria-selected="false">Next</a>
				</div>
				<div class="tab-pane fade" id="nav-cellular" role="tabpanel" aria-labelledby="nav-contact-tab">
				<!-- tab3 -->
				<div class="form-group">
						<label for="signal_quality">Signal Quality</label>
						<select class="form-control" name="signal_quality">
							<option value="no_signal">No Signal</option>
							<option value="not_stable">Not Stable</option>
							<option value="good">Good</option>
						</select>
					</div>
					<div class="form-group">
						<label for="strongest_band">Strongest Band</label>
						<select class="form-control" name="strongest_band">
							<option value="2g">2G</option>
							<option value="3g">3G</option>
							<option value="4g">4G</option>
						</select>
					</div>
					<div class="form-group">
						<label for="cell_id">Cell ID & Site BTS Covering </label>
						<input type="text" class="form-control" name="cell_id" id="cell_id">
					</div>
					<div class="form-group">
						<label for="speed_test">Speed Test Result</label>
					</div>
					<div class="form-group">
						<label for="dl">DL </label>
						<input type="text" class="form-control" name="dl" id="dl">
					</div>
					<div class="form-group">
						<label for="ul">UL</label>
						<input type="text" class="form-control" name="ul" id="ul">
					</div>
					<div class="form-group">
						<label for="competitor_coverage1">Competitor Coverage(1)</label>
						<input type="text" class="form-control" name="competitor_coverage1" id="competitor_coverage1">
					</div>
					<div class="form-group">
						<label for="coverage_band1">Coverage Band / Strongest Band</label>
						<select class="form-control" name="coverage_band1">
							<option value="2g">2G,3G,4G</option>
							<option value="4g">4G</option>
						</select>
					</div>
					<div class="form-group">
						<label for="competitor_coverage2">Competitor Coverage(2)</label>
						<input type="text" class="form-control" name="competitor_coverage2" id="competitor_coverage2">
					</div>
					<div class="form-group">
						<label for="coverage_band2">Coverage Band / Strongest Band</label>
						<select class="form-control" name="coverage_band2">
							<option value="3g">2G,3G</option>
							<option value="2g">2G</option>
						</select>
					</div>
					<div class="form-group">
						<label for="competitor_coverage3">Competitor Coverage(3)</label>
						<input type="text" class="form-control" name="competitor_coverage3" id="competitor_coverage3">
					</div>
					<div class="form-group">
						<label for="coverage_band3">Coverage Band / Strongest Band</label>
						<select class="form-control" name="coverage_band3">
							<option value="2g">2G,3G</option>
							<option value="3g">3G</option>
						</select>
					</div>
					<a class="btn btn-primary" data-toggle="tab" href="#nav-nearby" role="tab" aria-controls="nav-profile" aria-selected="false">Next</a>
				</div>
				<div class="tab-pane fade" id="nav-nearby" role="tabpanel" aria-labelledby="nav-contact-tab">
					<!-- tab4  -->
				<div class="form-group">
						<label for="site1">Site ID / Site Name</label>
						<input type="text" class="form-control" name="site1" id="site1">
					</div>
					<div class="form-group">
						<label for="coordinate1">Co-ordinate</label>
						<input type="text" class="form-control" name="coordinate1" id="coordinate1">
					</div>
					<div class="form-group">
						<label for="distance1">Distance to NOM</label>
						<input type="text" class="form-control" name="distance1" id="distance1">
					</div>
					<div class="form-group">
						<label for="site2">Site ID / Site Name</label>
						<input type="text" class="form-control" name="site2" id="site2">
					</div>
					<div class="form-group">
						<label for="coordinate2">Co-ordinate</label>
						<input type="text" class="form-control" name="coordinate2" id="coordinate2">
					</div>
					<div class="form-group">
						<label for="distance2">Distance to NOM</label>
						<input type="text" class="form-control" name="distance2" id="distance2">
					</div>
					<div class="form-group">
						<label for="co_ordinate1">Co-ordinate</label>
						<input type="text" class="form-control" name="co_ordinate1" id="co_ordinate1">
					</div>
					<div class="form-group">
						<label for="distance_nom1">Distance to NOM</label>
						<input type="text" class="form-control" name="distance_nom1" id="distance_nom1">
					</div>
					<div class="form-group">
						<label for="site_owner1">Site Owner</label>
						<input type="text" class="form-control" name="site_owner1" id="site_owner1">
					</div>
					<div class="form-group">
						<label for="co_ordinate2">Co-ordinate</label>
						<input type="text" class="form-control" name="co_ordinate2" id="co_ordinate2">
					</div>
					<div class="form-group">
						<label for="distance_nom2">Distance to NOM</label>
						<input type="text" class="form-control" name="distance_nom2" id="distance_nom2">
					</div>
					<div class="form-group">
						<label for="site_owner2">Site Owner</label>
						<input type="text" class="form-control" name="site_owner2" id="site_owner2">
					</div>
					<button>Save</button>
				</div>
			</div>
		</form>
	</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
