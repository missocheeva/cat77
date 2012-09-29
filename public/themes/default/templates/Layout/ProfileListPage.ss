<section class="content">
	<h1 class="no-content">$Title</h1>
	$Content
</section>	
<section class="profile-list">
	<% control Children %>
		<article>
			<a href="$Link" title="$MenuTitle">
				<img <% control $ListImage %>src="$Image.URL" <% end_control %> alt="$ListImageAltText" width="195" height="195"/>
			</a>	
		</article>
	<% end_control %>		
	<div class="clear"> </div>
</section>