				<div class="sidebar">
					<ul class="sidebar-list">
						<li class="search">
							<?php include(TEMPLATEPATH . '/searchform.php'); ?>
						</li>
						<li class="list-item">
							<h3>Categories</h3>
							<ul class="categories">
								<li class="item">
									<a href="">
										<span class="icon"></span>
										<span class="title">Web design</span>
									</a>
								</li>

							</ul>
						</li>

						<li  class="list-item">
							<h3>archive</h3>
							<ul class="categories">
								<li class="item">
									<a href="">
										<span class="icon"></span>
										<span class="title">Web design</span>
									</a>
								</li>
							</ul>
						</li>

						<li  class="list-item">
							<h3>Popular post</h3>
							<?php get_links_list(); ?>
						</li>
					</ul>
				</div>
			</div>
	</div>