<div id="slides">
	<div class="slides_container">
		<% loop Slides %>
			<div>
				<div class="image-container">
					<% control $Image %>
						$CroppedImage(663,420)
					<% end_control %>
				</div>	
				<div class="caption">
					<h2>$NameCaption</h2>
					<% if $Caption %>
						<p>$Caption</p>
					<% end_if %>	
					<ul>
						<% if $CatBulletOne %>
							<li>$CatBulletOne</li>
						<% end_if %>
						<% if $CatBulletTwo %>
							<li>$CatBulletTwo</li>
						<% end_if %>	
						<% if $CatBulletThree %>
							<li>$CatBulletThree</li>
						<% end_if %>
					</ul>	
				</div>
			</div>	
		<% end_loop %>
	</div>		
</div>
<section class="content">	
	<div class="left">
		<h1>$Title</h1>
		<% if $SubTitle %>
			<h2 class="subtitle">$SubTitle</h2>
		<% end_if %>	
		<article class="content-gap">
			$Content
		</article>	
	</div>
	<% include Aside %>
	<div class="clear"> </div>	
</section>