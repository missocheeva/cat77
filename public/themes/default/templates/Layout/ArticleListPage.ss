<section class="news">
	<section class="content">
		<h1 class="no-content">$Title</h1>
	</section>	
	<section class="news-container">
		<div class="news-content">
		<% control GetChildren(10) %>
		<article class="article-summery">
			<h2><a href="$Link" title="$MenuTitle">$MenuTitle</a></h2>
			$ArticleSummary
			<div class="clear"> </div>
		</article>	
		<% end_control %>
		</div>	
		<aside>
			<h3>Article Guide</h3>
			<ul>
				<% loop Menu(2) %>
					<li class="<% if LinkingMode = section %> selected<% else_if LinkingMode = current %> selected<% end_if %>"><a href="$Link" title="$MenuTitle | Cat Action Trust 1977 Jersey">$MenuTitle</a></li>
				<% end_loop %>	
			</ul>	
		</aside>	
	</section>	
</section>	
