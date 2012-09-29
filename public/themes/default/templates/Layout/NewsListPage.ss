<section class="news">
	<section class="content">
		<h1 class="no-content">$Title</h1>
	</section>	
	<section class="news-container">
		<div class="news-content">
		<% control GetChildren(5) %>
		<article class="news-summery">
			<h2><a href="$Link" title="$MenuTitle">$MenuTitle</a></h2>
			$NewsSummary
			<p class="read-more"><a href="$Link" title="$menuTitle">Read more</a></p>
			<div class="clear"> </div>
		</article>	
		<% end_control %>
		</div>	
		<aside>
			<h3>News Archive</h3>
			<ul>
				<% loop Menu(2) %>
					<li class="<% if LinkingMode = section %> selected<% else_if LinkingMode = current %> selected<% end_if %>"><a href="$Link" title="$MenuTitle | Cat Action Trust 1977 Jersey">$MenuTitle</a></li>
				<% end_loop %>	
			</ul>	
		</aside>	
	</section>	
</section>	
	