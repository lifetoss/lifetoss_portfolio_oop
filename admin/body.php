<?php
	//$result = $objAdmin->test();  // $result jst variable $bojAdmin is object name , test() is function of class...
	//echo $result;
	$result_about = $objAdmin->select_about();
	$result_service = $objAdmin->select_service();
	$result_skill = $objAdmin->select_skill();
	$result_edu = $objAdmin->select_edu();
	
	if(isset($_POST['btn_about']))
    {

        $title = $_POST['title'];
        $details = $_POST['details'];
        $text_one=$_POST['text_one'];
        $text_two = $_POST['text_two'];
        $text_three = $_POST['text_three'];
        $text_four=$_POST['text_four'];
        $id = $result_about['sn'];
        $result= $objAdmin->update_about($title, $details, $text_one, $text_two, $text_three, $text_four, $id);
        //$new_id=mysqli_insert_id($db);
        //redirect_to('index.php');
        echo 'update successfully';
    }

    if(isset($_POST['btn_service']))
    {

        $title_service = $_POST['title_service'];
        $text_one_service = $_POST['text_one_service'];
        $text_one_details=$_POST['text_one_details'];
        $text_two_service = $_POST['text_two_service'];
        $text_two_details = $_POST['text_two_details'];
        $text_three_service=$_POST['text_three_service'];
        $text_three_details=$_POST['text_three_details'];
        $id = $result_service['sn'];


        $service = [];
  		$service['title_service'] = $title_service;
  		$service['text_one_service'] = $text_one_service;
  		$service['text_one_details'] = $text_one_details;
  		$service['text_two_service'] = $text_two_service;
  		$service['text_two_details'] = $text_two_details;
  		$service['text_three_service'] = $text_three_service;
  		$service['text_three_details'] = $text_three_details;
  		$service['id_service'] = $id;
		//$service['menu_name'] = $_POST['menu_name'] ?? '';
		//$service['position'] = $_POST['position'] ?? '';
		//$service['visible'] = $_POST['visible'] ?? '';
		$result =$objAdmin->update_service($service);
        //$result= $objAdmin->update_about($title, $details, $text_one, $text_two, $text_three, $text_four, $id);
        //$new_id=mysqli_insert_id($db);
        //redirect_to('index.php');
        echo 'update successfully';
    }

    if(isset($_POST['subbtn_edu']))
    {

        $title_edu = $_POST['title_edu'];
        $text_one_edu = $_POST['text_one_edu'];
        $edu_one_details=$_POST['edu_one_details'];
        $text_two_edu = $_POST['text_two_edu'];
        $edu_two_details = $_POST['edu_two_details'];
        $text_three_edu = $_POST['text_three_edu'];
        $edu_three_details=$_POST['edu_three_details'];
        $text_four_edu = $_POST['text_four_edu'];
        $edu_four_details = $_POST['edu_four_details'];
        $text_five_edu=$_POST['text_five_edu'];
        $edu_five_details=$_POST['edu_five_details'];
        $id = $result_edu['sn'];
        $result= $objAdmin->update_edu($title_edu, $text_one_edu, $edu_one_details, $text_two_edu, $edu_two_details, $text_three_edu, $edu_three_details, $text_four_edu, $edu_four_details, $text_five_edu, $edu_five_details, $id);
        //$new_id=mysqli_insert_id($db);
        //redirect_to('index.php');
        echo 'update successfully';
    }

?>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
				<div class="author-img" style="background-image: url(./images/me.jpg);"></div>
				<h1 id="colorlib-logo"><a href="index.html">Jackson Ford</a></h1>
				<span class="position"><a href="#">UI/UX/Designer</a> in Philippines</span>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Home</a></li>
						<li><a href="#" data-nav-section="slider">slider</a></li>
						<li><a href="#" data-nav-section="about">About</a></li>
						<li><a href="#" data-nav-section="services">Services</a></li>
						<li><a href="#" data-nav-section="skills">Skills</a></li>
						<li><a href="#" data-nav-section="education">Education</a></li>
						<li><a href="#" data-nav-section="experience">Experience</a></li>
						<li><a href="#" data-nav-section="work">Work</a></li>
						<li><a href="#" data-nav-section="blog">Blog</a></li>
						<li><a href="#" data-nav-section="contact">Contact</a></li>
					</ul>
				</div>
			</nav>

			<div class="colorlib-footer">
				<p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </span> <span>Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash.com</a></span></small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook2"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin2"></i></a></li>
				</ul>
			</div>

		</aside>

		<div id="colorlib-main">

			<section class="colorlib-home" data-section="home">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							










							
							this is home page 
						</div>
					</div>
				</div>
			</section>

<!--    ===================== about page ======================    -->
			<section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
				<div class="row">
				<div class="col-md-12">
							
					<div class="box box-primary">
		            <div class="box-header with-border">
		              <span class="heading-meta">ABOUT</span>
				    </div>
				            <!-- /.box-header -->
				            <!-- form start -->
				            <form role="form" method="post">
				              <div class="box-body">
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Title</label>
				                 <input type="text" class="form-control" name="title" value="<?php echo $result_about['title'];?>" >
				                </div>
				                
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="ckeditor"  rows="6" name="details"><?php echo $result_about['detail'];?></textarea>
				                  
				                </div>


				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text One</label>
				                 <input type="text" class="form-control" name="text_one" value="<?php echo $result_about['text_one'];?>" >
				                </div>
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text Two</label>
				                 <input type="text" class="form-control" name="text_two" value="<?php echo $result_about['text_two'];?>">
				                </div>
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text Three</label>
				                 <input type="text" class="form-control" name="text_three" value="<?php echo $result_about['text_three'];?>">
				                </div>
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text Four</label>
				                 <input type="text" class="form-control" name="text_four" value="<?php echo $result_about['text_four'];?>">
				                </div>
				                <!-- /.box-body -->

				              <div class="box-footer">
				                <!--<button type="submit" class="btn btn-primary">Submit</button>-->
				                <input type="submit" class="btn btn-primary" name="btn_about" value="update" />
				              </div>
				          </div>
				            </form>
				    </div>

				</div>
				</div>
				</div>
			</section>
<!--    ===================== ./about page ======================    -->


<!--    ===================== SERVICE page ======================    -->
			<section class="colorlib-services" data-section="services" style="padding-top: 3em;padding-bottom:4em;">
				<div class="colorlib-narrow-content">
						<div class="row">
						<div class="col-md-12">

							<span class="heading-meta">SERVICE</span>
							<!-- form start -->
				            <form role="form" method="post">
				              <div class="box-body">
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Title</label>
				                 <input type="text" class="form-control" name="title_service" value="<?php if($result_service['sn']==''){echo 'plz insert value!!!';}else{echo $result_service['title'];}?>" >
				                </div>
				                
				                

				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text One</label>
				                 <input type="text" class="form-control" name="text_one_service" value="<?php if($result_service['sn']==''){echo 'plz insert value!!!';}else{echo $result_service['text_one'];}?>">
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="text_one_details"><?php if($result_service['sn']==''){echo 'plz insert value!!!';}else{echo $result_service['text_one_details'];}?></textarea>
				                </div>



				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text Two</label>
				                 <input type="text" class="form-control" name="text_two_service" value="<?php if($result_service['sn']==''){echo 'plz insert value!!!';}else{echo $result_service['text_two'];}?>" >
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="text_two_details"><?php if($result_service['sn']==''){echo 'plz insert value!!!';}else{echo $result_service['text_two_details'];}?></textarea>
				                </div>



				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text three</label>
				                 <input type="text" class="form-control" name="text_three_service" value="<?php if($result_service['sn']==''){echo 'plz insert value!!!';}else{echo $result_service['text_three'];}?>" >
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="text_three_details"><?php if($result_service['sn']==''){echo 'plz insert value!!!';}else{echo $result_service['text_three_details'];}?></textarea>
				                </div>

				                <!-- /.box-body -->

				              <div class="box-footer">
				                <!--<button type="submit" class="btn btn-primary">Submit</button>-->
				                <input type="submit" class="btn btn-primary" name="btn_service" value="<?php if($result_service['sn']==''){echo 'save';}else{echo 'update';}?>" />
				              </div>
				          </div>
				            </form>


						</div>
					</div>	
				</div>
			</section>
<!--    ===================== ./SERVICE page ======================    -->	

<!--    ===================== skills page ======================    -->
			<?php 
			if(isset($_GET['msg']))
				{
					
					if (isset($_GET['msg']) =='yes') {
						# code...
						echo "record updated successfully";
					}
					else {
						# code...
						echo "error occour";
					}
				}
			?>
			<section class="colorlib-skills" data-section="skills" style="padding-top: 3em;padding-bottom:4em;">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
						<span class="heading-meta">My Specialty</span>
								<!-- form start -->
				            <form role="form" method="post" action="include/edit_skill.php">
				              <div class="box-body">
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Title</label>
				                 <input type="text" class="form-control" name="title_skill" value="<?php if($result_skill['sn']==''){echo 'plz insert value!!!';}else{echo $result_skill['title'];}?>" >
				                </div>
				                
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="text_details_skill"><?php if($result_skill['sn']==''){echo 'plz insert value!!!';}else{echo $result_skill['details'];}?></textarea>
				                </div> 

				                <!-- /.box-body -->

				              <div class="box-footer">
				                <!--<button type="submit" class="btn btn-primary">Submit</button>-->
				                <input type="submit" class="btn btn-primary" name="subbtn_skill" value="<?php if($result_skill['sn']==''){echo 'save';}else{echo 'update';}?>" />
				              </div>
				          </div>
				            </form>
						</div>
					</div>	
				</div>
			</section>
<!--    ===================== ./skills page ======================    -->	

			<section class="colorlib-slider" data-section="slider">
				<div class="colorlib-narrow-content">
						this is education page		
				</div>
			</section>

<!--    ===================== education page ======================    -->
			<section class="colorlib-education" data-section="education">
				<div class="colorlib-narrow-content">
					
					<div class="row">
						<div class="col-md-12">
						<span class="heading-meta">EDUCATION</span>
								<!-- form start -->
				            <form role="form" method="post">
				              <div class="box-body">
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Title</label>
				                 <input type="text" class="form-control" name="title_edu" value="<?php if($result_edu['sn']==''){echo 'plz insert value!!!';}else{echo $result_edu['title'];}?>" >
				                </div>


				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text One</label>
				                 <input type="text" class="form-control" name="text_one_edu" value="<?php if($result_edu['sn']==''){echo 'plz insert value!!!';}else{echo $result_edu['title_one'];}?>" >
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="edu_one_details"><?php if($result_edu['sn']==''){echo 'plz insert value!!!';}else{echo $result_edu['title_one_details'];}?></textarea>
				                </div>

				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text Two</label>
				                 <input type="text" class="form-control" name="text_two_edu" value="<?php if($result_edu['sn']==''){echo 'plz insert value!!!';}else{echo $result_edu['title_two'];}?>" >
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="edu_two_details"><?php if($result_edu['sn']==''){echo 'plz insert value!!!';}else{echo $result_edu['title_two_details'];}?></textarea>
				                </div>

				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text Three</label>
				                 <input type="text" class="form-control" name="text_three_edu" value="<?php if($result_edu['sn']==''){echo 'plz insert value!!!';}else{echo $result_edu['title_three'];}?>" >
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="edu_three_details"><?php if($result_edu['sn']==''){echo 'plz insert value!!!';}else{echo $result_edu['title_three_details'];}?></textarea>
				                </div>

				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text Four</label>
				                 <input type="text" class="form-control" name="text_four_edu" value="<?php if($result_edu['sn']==''){echo 'plz insert value!!!';}else{echo $result_edu['title_four'];}?>" >
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="edu_four_details"><?php if($result_edu['sn']==''){echo 'plz insert value!!!';}else{echo $result_edu['title_four_details'];}?></textarea>
				                </div>

				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text Five</label>
				                 <input type="text" class="form-control" name="text_five_edu" value="<?php if($result_edu['sn']==''){echo 'plz insert value!!!';}else{echo $result_edu['title_five'];}?>" >
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="edu_five_details"><?php if($result_edu['sn']==''){echo 'plz insert value!!!';}else{echo $result_edu['title_five_details'];}?></textarea>
				                </div>

				                <!-- /.box-body -->

				              <div class="box-footer">
				                <!--<button type="submit" class="btn btn-primary">Submit</button>-->
				                <input type="submit" class="btn btn-primary" name="subbtn_edu" value="<?php if($result_skill['sn']==''){echo 'save';}else{echo 'update';}?>" />
				              </div>
				          </div>
				            </form>
						</div>
					</div>

				</div>
			</section>
<!--    ===================== ./education page ======================    -->

			<section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
						this is experience page		
				</div>
			</section>

			<section class="colorlib-work" data-section="work">
				<div class="colorlib-narrow-content">
						this is work page		
				</div>
			</section>
  	
			
			<section class="colorlib-blog" data-section="blog">
				<div class="colorlib-narrow-content">
						this is blog page		
				</div>
			</section>
			
			
			
			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
						this is contact page		
				</div>
			</section>
			


			

			

			
		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->



