<section class="content">
	<h1>$Title</h1>
	<article class="profile">
		<img class="left" src="$ListImage" alt="$ListImageAltText" />
		<div>
			<% if $CatStatus %><p class="status">Lost or Found: <span>$CatStatus</span></p><% end_if %>
			<% if $CatTemper %><p class="temper">Temperament: <span>$CatTemper</span></p><% end_if %>
			<% if $CatAge %><p class="age">Age: <span>$CatAge</span></p><% end_if %>
			<% if $CatHome %><p class="home">Home needs: <span>$CatHome</span></p><% end_if %>		
			$Content	
			<% if $CatHome %><p>If you'd like to meet or know more about $Title please contact Jean on 01534 123456 or email <a href="mailto:info@cat77jersey.org.uk">info@cat77jersey.org.uk</a></p><% end_if %>
			<% if $CatStatus %><p>If you have any information about $Title please contact Jean on 01534 123456 or email <a href="mailto:info@cat77jersey.org.uk">info@cat77jersey.org.uk</a></p><% end_if %>
		</div>	
	</article>	
<div class="clear"> </div>
</section>