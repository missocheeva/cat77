<% require javascript(themes/default/js/libs/jQuery.js) %>
<% require javascript(themes/default/js/libs/slides.min.jquery.js) %>
<% require javascript(themes/default/js/slider.js) %>
<div id="slides">
	<div class="slides_container">
		<% loop Slides %>
			<div>
				<% control $Image %>
					$CroppedFill(688,399)
				<% end_control %>
				<div class="caption">
					<p>$Caption</p>
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