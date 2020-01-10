
	<main role="main" class="col-md-10 offset-2">
		
			<div class="container-fluid mt-lg">
				
						

				<?php  
				$id = $this->uri->segment(3);
				$need = $this->db->query("SELECT * from tbluser where userid = '$id'")->result();
				if ($payable!=NULL) {
					# code...
				
				    $newdate = $payable[0]->mon - 1; echo "<br>";
					$id = $this->uri->segment(3);
					
					
					$q = $this->db->query("SELECT * from tblpayment,tbluser where MONTH(month) = $newdate AND tbluser.userid = $id AND tbluser.userid = tblpayment.userid")->result();
						}
						else{
							
						}
					  ?>
					<h1><?php echo $need[0]->lname?>, <?php echo $need[0]->fname?> </h1>
					<?php if ($payable!=NULL){ ?>
					
					<h4>
						Month: <?php if ($payable[0]->mon ==11){ ?>November
						<?php }else if($payable[0]->mon ==1){ ?>January 
						<?php }else if($payable[0]->mon ==2){ ?>Febuary 
						<?php }else if($payable[0]->mon ==3){ ?>March 
						<?php }else if($payable[0]->mon ==4){ ?>April 
						<?php }else if($payable[0]->mon ==5){ ?>May 
						<?php }else if($payable[0]->mon ==6){ ?>June 
						<?php }else if($payable[0]->mon ==7){ ?>July 
						<?php }else if($payable[0]->mon ==8){ ?>August 
						<?php }else if($payable[0]->mon ==9){ ?>September 
						<?php }else if($payable[0]->mon ==10){ ?>Ootober 
						
						<?php }else if($payable[0]->mon ==12){ ?>December 
						<?php }else{
							echo "No Payables";
						} ?>
					</h4>
					<p>Measure: <?php echo $final = $payable[0]->measure?>Cu M</p>
					<p>Usage  : <?php
						$ide = $this->uri->segment(3);
					$usage = $this->db->query("SELECT * from tblledger,tblpayment where tblpayment.userid = '$ide' AND tblledger.count = tblpayment.count")->result();
						echo $usage[0]->usagee
					?></p>
					<p>price  : <?php echo $payable[0]->worth; ?> PHP</p>
					<p>Arrears:<?php echo $payable[0]->acrylic - $payable[0]->worth; ?> PHP</p>
					<p>Total Bill: <?php echo $payable[0]->acrylic ?> PHP</p>
					<p>Note: This is need to be payed this Month</p>
					<h2 style="color:red"><?php echo $this->session->flashdata('neat')?></h2>
					<form action="<?php echo base_url();?>index.php/Welcome/payment_input/<?php echo $id ?>/<?php echo $payable[0]->count ?>" method="POST"> 
						<input type="number" name="payment">
						<input type="hidden" name="usagee" value="<?php echo $final = $payable[0]->measure?>">
						<input type="hidden" name="price" value="<?php echo $payable[0]->worth; ?>">
						<input type="hidden" name="tot" value="<?php echo $payable[0]->acrylic ?>">
						<input type="submit" value="Pay">
					</form>
					


					<?php }else{echo "No Payables";} ?>

					<div>
					<!-- 	<?php $arylic = $this->db->query("SELECT * from tbdvd where accntno = '$id'")->result(); ?>
						<h3>Arrears : <?php echo $arylic[0]->balance  ?></h3> -->
					</div>

			</div>
			<div class="container-fluid mt-lg">
			
			<br>
						<h3>Ledger</h3>
				<table class="table table-hover mt-3">
					<thead>
						
							<tr>
									<td>Date</td>
									<td>Particular</td>
									<td>Reading</td>
									<td>Usage <br> (Cu M)</td>
									<td>Debit <br> (Amount to Pay)</td>
									<td>Credit <br> (Amount Payed)</td>
									<td>Balance</td>
									<td>OR #</td>
							</tr>	

							<?php foreach($table as $key){ ?>
							<tr>
								<td><?php echo $key->date?></td>

								<td><?php if($key->credit == 0){	
											echo "Bill";
											}else{
											echo "Payment";	
											} ?></td>
	
								<td><?php echo $key->reading?></td>
								<td><?php echo $key->usagee?></td>
								<td><?php echo  number_format((float)$key->debit, 2, '.', '')?> php</td>
								<td><?php echo  number_format((float)$key->credit, 2, '.', '')?> php</td>
								<td><?php echo  number_format((float)$key->balance, 2, '.', '')?> php</td>
								<td><a href="<?php echo base_url()?>index.php/Welcome/Change_OR/<?php echo $key->ledgerid?>/<?php echo $this->uri->segment(3)?>"> <?php echo $key->OR_no?></a></td>
							</tr>
							<?php }?>
						
					</thead>
					<tbody>
			</div>

		</main>

<!-- 
<section id="action" class="py-4 mb-4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ml-auto">
					<div class="input-group">
						<input type="text" class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-primary btn-search">Search</button>
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="create" class="mt-3">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-header">
							<h4>Users List</h4>
						</div>
						<table class="table table-striped">
							<thead class="thead-inverse">
								<tr>
									<td>Description</td>
									<td>January</td>
									<td>February</td>
									<td>March</td>
									<td>April</td>
									<td>May</td>
									<td>June</td>
									<td>July</td>
									<td>August</td>
									<td>September</td>
									<td>October</td>
									<td>November</td>
									<td>December</td>
								</tr>
							</thead>
							<tbody>
						
							
							
							<?php foreach ($display_monthly as $key): ?>
							
								<tr>
									<td>Measurement</td>
									<td><?php echo $key->January ?></td>
									<td><?php echo $key->February ?></td>
									<td><?php echo $key->March ?></td>
									<td><?php echo $key->April ?></td>
									<td><?php echo $key->May ?></td>
									<td><?php echo $key->June ?></td>
									<td><?php echo $key->July ?></td>
									<td><?php echo $key->August ?></td>
									<td><?php echo $key->September ?></td>
									<td><?php echo $key->October ?></td>
									<td><?php echo $key->November ?></td>
									<td><?php echo $key->December ?></td>

									
								</tr>

								<tr>
									<td>measurement</td>
							<td><?php if ($key->January!=NULL){ ?><?php echo $key->January ?>C M <?php }else{ ?> <?php } ?></td>
							<td><?php if ($key->February!=NULL){ ?><?php echo $key->February - $key->January ?>C M <?php }else{ ?> <?php } ?></td>
							<td><?php if ($key->March!=NULL){ ?><?php echo $key->March - $key->February ?>C M <?php }else{ ?> <?php } ?></td>
							<td><?php if ($key->April!=NULL){ ?><?php echo $key->April - $key->March ?>C M <?php }else{ ?> <?php } ?></td>
							<td><?php if ($key->May!=NULL){ ?><?php echo $key->May - $key->April ?>C M <?php }else{ ?> <?php } ?></td>
							<td><?php if ($key->June!=NULL){ ?><?php echo $key->June - $key->May ?>C M <?php }else{ ?> <?php } ?></td>
							<td><?php if ($key->July!=NULL){ ?><?php echo $key->July - $key->June ?>C M <?php }else{ ?> <?php } ?></td>
							<td><?php if ($key->August!=NULL){ ?><?php echo $key->August - $key->July ?>C M <?php }else{ ?> <?php } ?></td>
							<td><?php if ($key->September!=NULL){ ?><?php echo $key->September - $key->August ?>C M <?php }else{ ?> <?php } ?></td>
							<td><?php if ($key->October!=NULL){ ?><?php echo $key->October - $key->September ?>C M <?php }else{ ?> <?php } ?></td>
							<td><?php if ($key->November!=NULL){ ?><?php echo $key->November - $key->October ?>C M <?php }else{ ?> <?php } ?></td>
							<td><?php if ($key->December!=NULL){ ?><?php echo $key->December - $key->November ?>C M <?php }else{ ?> <?php } ?></td>

								
								</tr>
								<tr>
									<td>Price</td>
									<td><?php echo $key->January ?>php</td>
<td><?php if ($key->February!=NULL){ ?><?php $new = $key->February - $key->January; echo $new * $price[0]->price;?>php<?php }else{ ?> <?php } ?></td>
<td><?php if ($key->March!=NULL){ ?><?php $new = $key->March - $key->February; echo $new * $price[0]->price;?>php<?php }else{ ?> <?php } ?></td>
<td><?php if ($key->April!=NULL){ ?><?php $new = $key->April - $key->March; echo $new * $price[0]->price;?>php<?php }else{ ?> <?php } ?></td>
<td><?php if ($key->May!=NULL){ ?><?php $new = $key->May - $key->April; echo $new * $price[0]->price;?>php<?php }else{ ?> <?php } ?></td>			
<td><?php if ($key->June!=NULL){ ?><?php $new = $key->June - $key->May; echo $new * $price[0]->price;?>php<?php }else{ ?> <?php } ?></td>
<td><?php if ($key->July!=NULL){ ?><?php $new = $key->July - $key->June; echo $new * $price[0]->price;?>php<?php }else{ ?> <?php } ?></td>		
<td><?php if ($key->August!=NULL){ ?><?php $new = $key->August - $key->July; echo $new * $price[0]->price;?>php<?php }else{ ?> <?php } ?></td>
<td><?php if ($key->September!=NULL){ ?><?php $new = $key->September - $key->August; echo $new * $price[0]->price  ?>php<?php }else{ ?> <?php } ?></td>
<td><?php if ($key->October!=NULL){ ?><?php $new = $key->October - $key->September; echo $new * $price[0]->price  ?>php<?php }else{ ?> <?php } ?></td>
<td><?php if ($key->November!=NULL){ ?><?php $new = $key->November - $key->October; echo $new * $price[0]->price  ?>php<?php }else{ ?> <?php } ?></td>
<td><?php if ($key->December!=NULL){ ?><?php $new = $key->December - $key->November; echo $new * $price[0]->price  ?>php<?php }else{ ?> <?php } ?></td>
								</tr>
									
								

							<?php endforeach ?>

							</tbody>
						</table>

						<nav class="ml-4">
							<ul class="pagination">
								<li class="page-item disabled"><a href="#" class="page-link">Previous</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">Next</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>

	 -->