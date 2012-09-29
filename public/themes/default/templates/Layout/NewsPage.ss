<section class="news">
	<section class="content">
		<h1 class="no-content">$Title</h1>
	</section>
	<section class="news-container">
		<div class="news-content">
			<article class="news-article">	
				$Content
			</article>
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