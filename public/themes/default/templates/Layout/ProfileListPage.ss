<section class="content">
	<h1 class="no-content">$Title</h1>
	$Content
</section>	
<section class="profile-list">
	<% control Children %>
		<article>
			<a href="$Link" title="$MenuTitle">
				<% control $CatImage %>
					$CroppedImage(195,195)
				<% end_control %>
			</a>	
		</article>
	<% end_control %>		
	<div class="clear"> </div>
</section>