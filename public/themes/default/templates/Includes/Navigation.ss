<div id="nav-container">
	<nav class="wrapper">
		<ul>
			<% loop Menu(1) %>
			<li class="<% if First %>first<% end_if %><% if LinkingMode = section %> selected<% else_if LinkingMode = current %> selected<% end_if %>"><a href="$Link" title="$MenuTitle | Cat Action Trust 1977 Jersey">$MenuTitle</a></li>
			<% end_loop %>
		</ul>
	</nav>
</div>