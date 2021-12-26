<?php include 'top.php';?>
  <section class="home-section">
	<div class="body" style="display: block">
	<div class="col-xs-12 card col-lg-12" style="border-radius:12px; box-shadow: 0 5px 10px rgba(0,0,0,0.2); margin:20px 20px 20px 20px; max-width: 1400px;">
           <div class="static-table-area">
            <div class="container-fluid">
                <div class="row">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="sparkline11-list mt-b-30">
                            <div class="sparkline11-hd">
                                <div class="main-sparkline11-hd">
                                    <h1>Edit Post Video</h1>
                                </div>
                            </div>
                            <div class="sparkline11-graph">
                                <div class="static-table-list">
                                    <table class="table sparkle-table">
									<form>
										<div class="form-row">
											<div class="form-group col-md-6">
											  <label for="Username">Photo Id</label>
											  <input type="text" class="form-control" id="username" readonly>
											</div>
											<div class="form-group col-md-6">
											  <label for="Username">Username</label>
											  <input type="text" class="form-control" id="username" readonly>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-12">
											  <label for="bio">Caption</label>
											  <input type="text" class="form-control" id="inputPassword4"  readonly>
											</div>
											
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
											  <label for="bio">Share Count</label>
											  <input type="text" class="form-control" id="inputPassword4"  readonly>
											</div>
											<div class="form-group col-md-6">
											  <label for="email">Like & Love Count</label>
											  <input type="text" class="form-control" id="email" readonly>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="status">Status Of Post</label>
												<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
													<option selected>Choose...</option>
													<option value="1">Active</option>
													<option value="2">Archived</option>
													<option value="3">Deleted</option>
												</select>
											</div>
											<div class="form-group col-md-6">
											  <label for="bio">Time Stamp</label>
											  <input type="text" class="form-control" id="inputPassword4" readonly>
											</div>
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="sparkline11-list mt-b-30">
                            <div class="sparkline11-hd">
                                <div class="main-sparkline11-hd">
                                    <h1>Media</h1>
                                </div>
                            </div>
                            <div class="sparkline11-graph">
                                <div class="static-table-list">
                                    <table class="table sparkle-table">
                                        <div class="profile-img">
										<img src="img/profile.jpg" alt="profile Image" />
										</div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<span class="col-xs-1 card col-lg-1 text-center " style="border-radius:12px;  cursor: pointer; box-shadow: 0 5px 10px rgba(0,0,0,0.2); margin:20px 20px 20px 20px; max-width: 1400px;">
        <h3 style="margin-bottom: 0px;" onclick="goBack()">Back</h3>
	</span>
	</div>
	
  </section>
  <script>
function goBack() {
  window.history.back();
}
</script>