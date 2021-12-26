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
                                    <h1>View Support Executives</h1>
                                </div>
                            </div>
                            <div class="sparkline11-graph">
                                <div class="static-table-list">
                                    <table class="table sparkle-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Head</th>
                                                <th>Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Username</td>
                                                <td>manoj_bhargav_ram</td>
                                            </tr>
											<tr>
                                                <td>2</td>
                                                <td>Email</td>
                                                <td>manojbhargav@bemadscientist.com</td>
                                            </tr>
											<tr>
                                                <td>3</td>
                                                <td>Mobile</td>
                                                <td>+91 9154313796</td>
                                            </tr>
											
											<tr>
                                                <td>4</td>
                                                <td>Verification Status</td>
                                                <td>
													<form>
													  <div class="form-row align-items-center">
														<div class="col-auto my-1">
														  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
															<option selected>Choose...</option>
															<option value="1">Accepted</option>
															<option value="2">Rejected</option>
															<option value="2">On Hold</option>
															<option value="2">Processing</option>
														  </select>
														</div>
														<div class="col-auto my-1">
														  <button type="submit" class="btn btn-primary">Submit</button>
														</div>
													  </div>
													</form>
												</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="sparkline11-list mt-b-30">
                            <div class="sparkline11-hd">
                                <div class="main-sparkline11-hd">
                                    <h1>Profile Image</h1>
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