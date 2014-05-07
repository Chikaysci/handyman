	<div class="searchBg relative">		
		<div class="container">
			<img class="bannerImg" src="http://www.justmail.in/platinum/images/FindContractor.jpg" alt="home banner image" />
			<div class="container">
				<div class="alignCenter indexZipcodOuterMarg">	<span class="font1">Find your hometown handyman today!</span>
					<div class="col-md-12">
						<form class="form-inline" role="form">
						  <div class="form-group">
							<label class="sr-only" for="postCode">Post Code</label>
							<input class="form-control input-lg" type="text" placeholder="Post Code">
						  </div>
						 <button type="button" class="btn btn-primary btn-lg">Continue</button>
						</form>					
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="indexHiwVideo">
		<div class="container">
			<div class="row-fluid">
				<div class="col-md-12">	
				<a class="col-md-3  indexTab1" href="http://www.justmail.in/platinum/postproject">
					POST A PROJECT
					 <span class="contain alignCenter">Home owner post your project free&nbsp;&nbsp;<i class="fa fa-angle-right"></i></span>
					 <div style="clear:both"></div>
				</a>
					<a class="col-md-3 offset0 indexTab2" href="http://www.justmail.in/platinum/find-contractor">
					FIND CONTRACTOR
					 <span class="contain alignCenter">Contractors in Your Area Now&nbsp;&nbsp;<i class="fa fa-angle-right"></i></span>
				</a>
					<a class="col-md-3 offset0 indexTab3" href="http://www.justmail.in/platinum/find-projects">
					FIND PROJECT
					 <span class="contain alignCenter">You will need to fill out this form&nbsp;&nbsp;<i class="fa fa-angle-right"></i></span>
				</a>
					<a class="col-md-3 offset0 indexTab4" href="http://www.justmail.in/platinum/how-its-works">
					HOW IT WORKS
					 <span class="contain alignCenter">Justmail is easy to use&nbsp;&nbsp;<i class="fa fa-angle-right"></i></span>
				</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="countArea">
		<div class="container">
			<div class="row-fluid">
				<div class="col-md-12 alignCenter">	<span class="col-md-3">
					<img src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-4/128/Users-icon.png"  alt="userIcons.png" />
					<h4>2,005</h4>
					<h6>of Users</h6>
				</span>
					<span class="col-md-3">
					<img src="http://icons.iconarchive.com/icons/aha-soft/free-3d-printer/128/Project-icon.png"  alt="contractor-org.png" />
					<h4>10,005</h4>
					<h6>Posted Projects</h6>
				</span>
					<span class="col-md-3 countArea">
					<img src="http://icons.iconarchive.com/icons/iconka/buddy/128/contractor-man-icon.png"  alt="contractor-org.png" />
					<h4>5,000 </h4>
					<h6>of Contractors</h6>
				</span>
					<span class="col-md-3 countArea">
					<img src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-1/128/search-icon.png"  alt="contractor-org.png" />
					<h4>13,050</h4>
					<h6>Contractors Review</h6>
				</span>
				</div>
			</div>
		</div>
	</div>
	<div class="findMoreContract">
		<div class="container">
			<div class="row-fluid">
				<div class="findMoreUlBox col-md-12 offset0">
					<h5>Choose Your Project</h5>
					<ul class="findMoreContractUl col-md-12" style="overflow:hidden;">
						
						<?php if (count($projects)>0):?>
						   <?php $i=1;?>
						   <?php foreach($projects as $k=>$v):?>
						    <?php if (($i % 4) ==0  || ($i==1)):?>
						        <?php $class="col-md-3  offset0 clr"?>
						        <?php else:?>
						         <?php $class="col-md-3"?>
						    <?php endif?>
						   	<li class="<?php echo $class?>">	
							     <a href=""><?php echo $v->Name?></a>	
							    </li>
						     <?php $i++;?>
							<?php endforeach;?>
					    <?php endif;?>	
						
						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="contain">
		<div class="container ">
			<div class="row-fluid">
				<div class="col-md-5">
					<img src="http://www.justmail.in/platinum/images/jobPostfree.png">
				</div>
				<div class="col-md-7">
					<h3>ARE YOU QUALITY CONTRACTOR?</h3>
					<h4>Receive online ratings and reviews from satisfied customers to boost your company reputation</h4>
					<button type="button" class="btn btn-lg btn-primary">Join Now</button>
					<p></p>
				</div>
			</div>
		</div>
	</div>