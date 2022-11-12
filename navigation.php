<div class="menu">
	        <ul class="menu-list">
	          <li class="menu-item">
	            <a <?php echo ($page == 'one') ?  "class='menu-link active'" : ""; ?> href="./" class="menu-link">Home</a>
	          </li>
	          <li class="menu-item">
	            <a <?php echo ($page == 'two') ?  "class='menu-link active'" : ""; ?> href="about-us" class="menu-link">About</a>
	          </li>
	          <li class="menu-item">
	            <a <?php echo ($page == 'three') ?  " class='menu-link active'" : ""; ?> href="work" class="menu-link">Works</a>
	          </li>
	          <li class="menu-item">
	            <a <?php echo ($page == 'four') ?  "class='menu-link active'" : ""; ?> href="contact-us" class="menu-link">Contact</a>
	          </li>
	          <li class="menu-item">
	            <div class="togglez togglez-mob">
                  <input type="checkbox" id="togglezm">
                  <span>Dark</span>
                  <label for="togglezm"></label>
                  <span>Light</span>
                </div>
	          </li>
	        </ul>
	      </div>
	      
	      <div class="togglez togglez-desk">
              <input type="checkbox" id="togglez">
              <span>Dark</span>
              <label for="togglez"></label>
              <span>Light</span>
            </div>
	    </div>
	  </nav>
	</header>