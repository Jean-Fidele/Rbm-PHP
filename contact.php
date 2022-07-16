<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Get in touch</h2>
							<p>Please complete the form if you would like a Our representative to contact you.</p>
							<div class="split style1">
								<section>
									<form method="post" action="contact_send.php">
									
									<div class="field half first">
											<label for="name">Name</label>
											<input  type="text" name="name" id="name" pattern="[A-Za-z]{1,15}"  />
											<!--<input  type="text" name="name" id="name" value="" required="required" pattern="[A-Za-z]{1,15}" />-->
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="email" name="email" id="email" value="" Required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />
											
											
  
										</div><br>
										<div class="field">
											<label for="name">Subject</label>
											<input type="text" name="subject" id="subject" value=""/>
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" placeholder="Kindly Mention Your message and Mobile number in This field" rows="6"></textarea>
										</div>
										<ul class="actions">
										<input type="submit" class="button submit" />				</ul>
									
										<?php if(isset($_POST['Message'])){
    										echo $_POST['Message'];
											} ?>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<span>29/27/1,<br\>
											CY CHINTAMANI ROAD,<br\>
									GEORGEOWN ALLAHABAD<br\>
									UP 211002 <br />
											INDIA</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="#">rbmaquadfine@gmail.com</a>
										</li>
										<li>
											<h3>Phone</h3>
											<span>+91-7380408888</span><br>
											<span>+91-7619811211</span>
										</li>
										<li>
											<?php /*<h3>Social</h3>
											<ul class="icons">
												<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>*/
											
											
											
											
											 ?>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

