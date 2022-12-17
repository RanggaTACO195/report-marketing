<div class="container-fluid">

<div class="container-fluid">
	  	<div class="row h-100 justify-content-center align-items-center">
			<?php if($this->session->userdata('name') == 'Admin' || $this->session->userdata('MANAGER')){ ?>
			  <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-flex justify-content-center p-3">
		  			<form class="home-menu" method="post" action="<?= base_url() ?>account/index">
		  				<button type="submit" class="btn-menu">
						    <div class="card text-white bg-primary box-shadow-menu">
						  		<div class="card-body text-center mt-1">
						    		<span style="font-size: 3em;">
								  		<i class="fa fa-users fa-lg"></i>
									</span>
									<!-- <span class="badge badge-primary">4</span> -->
						  		</div>
						  		<div class="card-footer bg-light border-primary text-dark text-center">Master Account</div>
							</div>
						</button>
					</form>
				</div>
				<?php }?>
					  <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-flex justify-content-center p-3">
		  			<form class="home-menu" method="post" action="<?= base_url() ?>report/index">
		  				<button type="submit" class="btn-menu">
						    <div class="card text-white bg-success box-shadow-menu">
						  		<div class="card-body text-center mt-1">
						    		<span style="font-size: 3em;">
								  		<i class="fa fa-file fa-lg"></i>
									</span>
									<!-- <span class="badge badge-primary">4</span> -->
						  		</div>
						  		<div class="card-footer bg-light border-primary text-dark text-center">Report Marketing</div>
							</div>
						</button>
					</form>
				</div>	

				
              

 

								  	
	  	</div>
	</div>

                                <!--Main Layout-->
                            </div>
                            <!-- /.container-fluid -->

                        </div>
                        <!-- End of Main Content -->
                        <!-- Footer -->
                  
                        <!-- End of Footer -->

                    </div>
                    <!-- End of Content Wrapper -->

</div>