<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8" />
		 <meta name="viewport" content="width=device-width, initial-scale=1" />
	     <link href="css/bootstrap.min.css" rel="stylesheet" />
	     <link href="css/hover.css" rel="stylesheet" />
		 <script src="js/jquery-3.3.1.slim.min.js"></script>
		 <script src="js/popper.min.js"></script>
		 <script src="js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
         <link rel="stylesheet" href="css/animate.css">
		 <link rel="stylesheet" href="css/homec.css">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
 

 
		 <script src="js/wow.min.js"></script>
		
             <script>
              wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                     }
                    )
                    wow.init();
			 </script>
			 <script type="text/javascript">
	                  $(document).ready(function(){
		              $("#myModal").modal('show');
	                 });
              </script>
			  <style>
body {
		position: relative; 
  }
 
 .sidenav {
  height:78%;
  width: 270px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  margin-top:90px;
  margin-left:30px;
  background-color:#DCDCDC;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size:20px;
  color: #000000;
  display: block;
}

.sidenav a:hover {
  color: #0000FF;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}


</style>  
	
	</head>
	
	
	<body>
	<!--------fixed navbar----------->
        <nav class=" navbar-inverse navbar-fixed-top bg-white">
          <div class="container-fluid">
		  <div class="row">
          <div class="navbar-header col-sm-3 wow fadeInDown">
            <a href="home.php">    <image src="images/logo5.png" class="img-fluid" alt="Responsive image"style="height:100px;width:200px; margin-left:40px; margin-top:; margin-bottom:;"></a>
	       </div>
		   
		  <div class="col-sm-5 wow " style=" margin-top:10px;">
          <ul class="nav  text-center" style="color:;font-size:16px;font-family:Cambria">
              <li class="nav-item mt-3"><a href="women.php" class="nav-link m hvr-Bounce-To-Bottom "style="color:black;">WOMEN</a></li>
		      <li class="nav-item mt-3"><a href="men.php" class="nav-link m hvr-Bounce-To-Bottom" style="color:black;">MEN</a></li>
			  <li class="nav-item mt-3"><a href="" class="nav-link  m hvr-Bounce-To-Bottom" style="color:black;">#BEBEAUTIFUL</a></li>
			  <li class="nav-item mt-3"><a href="#" class="nav-link  m hvr-Bounce-To-Bottom" style="color:black;">LOCATE US</a></li>
			  <li class="nav-item mt-3"><a href="btips.py" class="nav-link  m hvr-Bounce-To-Bottom" style="color:black;">STORES</a></li>
          </ul>
	      </div>
	      <div class="col-sm-1 wow fadeInDown"></div>
		  <div class="col-sm-3 wow fadeInDown" style="margin-top:20px; color:black;">
		                  <a href="#"><i class="fa fa-map-marker fa-2x m-3" style="color:black;"></i></a>
                          <a href="#"><i class="fa fa-search fa-2x m-3" style="color:black;" ></i></a>
						  <a href="#"><i class="fa fa-heart fa-2x m-3" style="color:black;"></i></a>
						  <a href="#"><i class="fa fa-shopping-cart fa-2x m-3" style="color:black;"></i></a>
						  <a href="#"><i class="fa fa-user fa-2x m-3" style="color:black;" data-toggle="modal" data-target="#myModal"></i></a>
		  </div>
          </div>
          </div>
       </nav>
		<div class="container-fluid ">
			<!----menu sidebar----->
			<div class="row"   >
				<div class="col-sm-3 wow fadeInDown"  style="height:500px;">
					<div class="sidenav  ">
						<div class="row"   >
								<div class="col-sm-12 wow fadeInDown">
								
									<div class="container">
										<a href="#about" style="float:left; color:black;"><th scope="row">Category </th></a>
										<a href="#demo"  style="float:left;margin-left:60px; background-color:#dcdcdc; border:none;" class="btn btn-info" data-toggle="collapse">+</a><br><br><br>
											<div id="demo" class="collapse">
											<tr>
												<th scope="row">choose your gender </th>
												<td>:</td>
												<td>
													<label>
														<input name="gen" type="radio" value="Male" />
														</label>
													male 
													  <label>
													  <input name="gen" type="radio" value="Female"  />
													  </label>
													female 
													<label>
													<input name="gen" type="radio" value="Other" />
													</label>
													other
														   </td>
												  </tr>
											</div>	
											
									</div><hr/>
								</div>
						
								<div class="col-sm-12 wow fadeInDown">
							<div class="container">
								<a href="#about" style="float:left;"><th scope="row">Price </th></a>
								<a href="#demo"  style="float:right; background-color:#dcdcdc; border:none;" class="btn btn-info" data-toggle="collapse">+</a><br><br><br>
								<div id="demo" class="collapse">
								<tr>
											<th scope="row">choose your gender </th>
											<td>:</td>
											<td>
											  <label>
												<input name="gen" type="radio" value="Male" />
												</label>
											male 
											  <label>
											  <input name="gen" type="radio" value="Female"  />
											  </label>
											female 
											<label>
											<input name="gen" type="radio" value="Other" />
											</label>
											other
												   </td>
										  </tr>
								</div>
							</div><hr/>
						</div>
							
						
						
								
						<div class="col-sm-12 wow fadeInDown">
							<div class="container">
								<a href="#about" style="float:left;"><th scope="row">Style </th></a>
								<a href="#demo"  style="float:left;margin-left:60px; background-color:#dcdcdc; border:none;" class="btn btn-info" data-toggle="collapse">+</a><br><br><br>
								<div id="demo" class="collapse">
								<tr>
											<th scope="row">choose your gender </th>
											<td>:</td>
											<td>
											  <label>
												<input name="gen" type="radio" value="Male" />
												</label>
											male 
											  <label>
											  <input name="gen" type="radio" value="Female"  />
											  </label>
											female 
											<label>
											<input name="gen" type="radio" value="Other" />
											</label>
											other
												   </td>
										  </tr>
								</div>
							</div><hr/>
						</div>
					
						<div class="col-sm-12 wow fadeInDown">
							<div class="container">
								<a href="#about" style="float:left;"><th scope="row">Ocassion </th></a>
								<a href="#demo"  style="float:left;margin-left:60px; background-color:#dcdcdc; border:none;" class="btn btn-info" data-toggle="collapse">+</a><br><br><br>
								<div id="demo" class="collapse">
								</div>
							</div><hr/>
						</div>
						
						<div class="col-sm-12 wow fadeInDown">
					
							<div class="container">
								<a href="#about" style="float:left;"><th scope="row">Accessories </th></a>
								<a href="#demo"  style="float:left;margin-left:60px; background-color:#dcdcdc; border:none;" class="btn btn-info" data-toggle="collapse">+</a><br><br><br>
								<div id="demo" class="collapse">
								</div>
							</div><hr/>
						</div>
						
						<div class="col-sm-12 wow fadeInDown">
							<div class="container">
								<a href="#about" style="float:left;"><th scope="row">Color</th></a>
								<a href="#demo"  style="float:left;margin-left:60px; background-color:#dcdcdc; border:none;" class="btn btn-info" data-toggle="collapse">+</a><br><br><br>
								<div id="demo" class="collapse">
							    </div>
							</div><hr/>
						</div>
							
						<div class="col-sm-12 wow fadeInDown">
		
							 <div class="container">
								<a href="#about" style="float:left;"><th scope="row">Size </th></a>
								<a href="#demo"  style="float:left;margin-left:60px; background-color:#dcdcdc; border:none;" class="btn btn-info" data-toggle="collapse">+</a><br><br><br>
								<div id="demo" class="collapse">
								
								</div>
							</div><hr/>
						</div>
								
						
								
								
								<div class="col-sm-12 wow fadeInDown">
								<div class="container">
								<a href="#about" style="float:left;"><th scope="row">Brand</th></a>
								<a href="#demo"  style="float:left;margin-left:60px; background-color:#dcdcdc; border:none;" class="btn btn-info" data-toggle="collapse">+</a><br><br><br>
									<div id="demo" class="collapse">
								
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			
					
					<div class="col-sm-9 wow fadeInDown " style=" margin-top:90px;  height:2520px;width:100%;">
						<div class="row" style=" width:100%;" >
							<div class="col-sm-3 wow fadeInDown" style="margin:15 15 15 30;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s1.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button" style="background-color:red;"class="btn btn-secondary btn-sm">Buy Now</button> 
							</div>
							<div class="col-sm-3 wow fadeInDown" style=" margin:15 15 15 15;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s2.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button"style="background-color:red;" class="btn btn-secondary btn-sm">Buy Now</button> 
							</div>
							
							
							<div class="col-sm-3 wow fadeInDown" style="margin:15 30 15 15;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s3.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button"style="background-color:red;" class="btn btn-secondary btn-sm">Buy Now</button> 
							</div></div>
							<div class="row" style=" width:100%;" >
							<div class="col-sm-3 wow fadeInDown" style="margin:15 15 15 30;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s4.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button" style="background-color:red;"class="btn btn-secondary btn-sm">Buy Now</button> 
							</div>
							<div class="col-sm-3 wow fadeInDown" style=" margin:15 15 15 15;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s5.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button"style="background-color:red;" class="btn btn-secondary btn-sm">Buy Now</button> 
							</div>
							
							
							<div class="col-sm-3 wow fadeInDown" style=" margin:15 30 15 15;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s6.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button" style="background-color:red;"class="btn btn-secondary btn-sm">Buy Now</button> 
							</div></div>
							<div class="row" style=" width:100%;" >
							<div class="col-sm-3 wow fadeInDown" style=" margin:15 15 15 30;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s7.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button"style="background-color:red;" class="btn btn-secondary btn-sm">Buy Now</button> 
							</div>
							<div class="col-sm-3 wow fadeInDown" style=" margin:15 15 15 15;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s8.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button" style="background-color:red;"class="btn btn-secondary btn-sm">Buy Now</button> 
							</div>
							
							
							<div class="col-sm-3 wow fadeInDown" style="margin:15 30 15 15;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s9.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button"style="background-color:red;" class="btn btn-secondary btn-sm">Buy Now</button> 
							</div></div>
							<div class="row" style=" width:100%;" >
							<div class="col-sm-3 wow fadeInDown" style=" margin:15 15 15 30;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s10.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button"style="background-color:red;" class="btn btn-secondary btn-sm">Buy Now</button> 
							</div>
							<div class="col-sm-3 wow fadeInDown" style="margin:15 15 15 15;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s11.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button"style="background-color:red;" class="btn btn-secondary btn-sm">Buy Now</button> 
							</div>
							
							
							<div class="col-sm-3 wow fadeInDown" style="margin:15 30 15 15;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s12.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button" style="background-color:red;" class="btn btn-secondary btn-sm">Buy Now</button> 
							</div></div>
						<div class="row" style=" width:100%;" >
							<div class="col-sm-3 wow fadeInDown" style=" margin:15 15 15 30;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s13.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button" style="background-color:red;" class="btn btn-secondary btn-sm">Buy Now</button> 
							</div>
							<div class="col-sm-3 wow fadeInDown" style=" margin:15 15 15 15;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s14.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button" style="background-color:red;" class="btn btn-secondary btn-sm">Buy Now</button> 
							</div>
							
							
							<div class="col-sm-3 wow fadeInDown" style=" margin:15 30 15 15;  height:500px;">
													<figure ><img style="height:370px;" class="img-fluid" alt="Responsive image" src="images/s15.jpg"/><figcaption style="height:70px;"><h3>Manyawar</h3><h6>Price:1000</h6></figcaption></figure>
													<button type="button" class="btn btn-primary btn-sm">Add Cart</button>
													<button  type="button" style="background-color:red;" class="btn btn-secondary btn-sm">Buy Now</button> 
							</div>
							
						</div>
					</div>
					
					
					
		
			
		</div>
			<!--copyright row--->
				<div class="row text-center p-4" style="color:#8d8c8c;background-color:#312f30;">
				     <div class="col-sm-12">
					     Copyright &copy; 2019 <a href="#" style="color:white;">rent an attire.com </a>All Rights Reserved.
					 </div>
				</div>
		</div>
		
	</body>
</html>