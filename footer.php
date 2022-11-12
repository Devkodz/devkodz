<section class="second-fur">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="second-fur-01">
						<h4>stay <span class="sld-clr">informed</span><br><span class="sld-clr">with our </span>newsletter</h4>
						<hr>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
						    <form>
        						<div class="second-fur-send">
            						<div class="second-fur-send-1">
            							<input type="mail" name="" placeholder="Mail">
            							<i class="fa fa-envelope evp-close"></i>
            							<i class="fa fa-envelope-open evp-open"></i>
            							<p>please trust us we will never send you spam</p>
            						</div>
            						<div class="second-fur-send-2">
            							<button type="submit">Send</button>
            						</div>
        						</div>
							</form>
					</div>
				</div>

				<div class="col-md-4">
					<div class="second-fur-02">
						<h4>you think we're cool? let's work together</h4>
						<div class="cont-btn-4">
							<a href="contact-us#cont-us">get in touch</a>
						</div>
					</div>	
				</div>

			</div>
		</div>
	</section>

<footer>
<div class="container">
	<div class="row">
		<div class="foot-nav">
			<a href="./"><h5>De<span class="sld-clr">vko</span>dz</h5></a>

			<ul>
				<li><a href="about-us">about</a></li>
				<li><a href="work">work</a></li>
				<li><a href="contact-us">contact</a></li>
			</ul>
		</div>

		<div class="foot-social">
			<ul>
				<li><a href="https://www.facebook.com/profile.php?id=100087415720318" target="_blank" class="fa fa-facebook"></a></li>
				<li><a href="https://twitter.com/devkodz" target="_blank" class="fa fa-twitter"></a></li>
				<li><a href="https://www.instagram.com/devkodz/" target="_blank" class="fa fa-instagram"></a></li>
				<li><a href="https://www.linkedin.com/in/devkodz-devs-542b74255/" target="_blank" class="fa fa-linkedin"></a></li>
				<li><a href="#" target="_blank" class="fa fa-google-plus"></a></li>
			</ul>
		</div>
	</div>
</div>
<script>
	    const togglez = document.querySelector('#togglez');

        togglez.addEventListener('click', () => {
          document.body.classList.toggle('white');
              //document.documentElement.style.setProperty('--black', '#fff');
                if (document.body.getAttribute('data-theme') === 'white') {
                    document.body.setAttribute('data-theme', 'dark')
                } else {
                    document.body.setAttribute('data-theme', 'white')
                }
        })
        
	    const togglezm = document.querySelector('#togglezm');

        togglezm.addEventListener('click', () => {
          document.body.classList.toggle('white');
              //document.documentElement.style.setProperty('--black', '#fff');
                if (document.body.getAttribute('data-theme') === 'white') {
                    document.body.setAttribute('data-theme', 'dark')
                } else {
                    document.body.setAttribute('data-theme', 'white')
                }
        })

	</script>
<script src="https://cdn.jsdelivr.net/npm/less" ></script>
<script src="js/js.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/bootstrap.bundle.min.js"></script>
</footer>

</body>
</html>