<section class="content profile">
	<article class="profile">
		<div>
			$CatImage
			<h1>$Title</h1>
			<table class="cat-profile-info">
			<% if $CatLost %>
				<tr>
					<td colspan="2" style="color:red">This cat is Missing</td>
				</tr>
			<% end_if %>
			<% if $CatFound %>
				<tr>
					<td colspan="2" style="color:#FECA91">Is this your cat?</td>
				</tr>
			<% end_if %>
			<% if $CatTemper %>
				<tr>
					<td>Temperament</td>
					<td>$CatTemper</td>
				</tr>	
			<% end_if %>
			<% if $CatAge %>
				<tr>
					<td>Age</td> 
					<td>$CatAge</td>
				</tr>	
			<% end_if %>
			<% if $CatHome %>
				<tr>
					<td>Home needs</td> 
					<td>$CatHome</td>
				</tr>	
			<% end_if %>	
			</table>	
			$Content	
			<% if $CatHome %><p>If you'd like to meet or know more about $Title please contact Jean on 01534 123456 or email <a href="mailto:info@cat77jersey.org.uk">info@cat77jersey.org.uk</a></p><% end_if %>
			<% if CatLost %><p>If you have any information about $Title please contact Jean on 01534 123456 or email <a href="mailto:info@cat77jersey.org.uk">info@cat77jersey.org.uk</a></p><% end_if %>
			<% if CatFound %><p>If you have any information about $Title please contact Jean on 01534 123456 or email <a href="mailto:info@cat77jersey.org.uk">info@cat77jersey.org.uk</a></p><% end_if %>
		</div>	
	</article>	
<div class="clear"> </div>
</section>
