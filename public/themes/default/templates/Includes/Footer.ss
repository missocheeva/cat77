<div id="footer-container">
	<footer class="wrapper">
		<div id="bucket-container">
			<div class="bucket first">
				<h3>Community</h3>
				<p>Love cats? Great so do we, join our cat crazed group on Facebook or follow us on Twitter.</p>
				<a href="http://www.facebook.com/pages/Cat-Action-Trust-1977-Jersey-Branch/187414394603481" target="_blank" title="join us on facebook"><img class="community-button" src="themes/default/i/icon/facebook.png" alt="facebook" /></a>
				<a href="/" title="follow us on twitter" target="_blank"><img class="community-button" src="themes/default/i/icon/twitter.png" alt="twitter" /></a>
			</div>
			<div class="bucket">
				<h3>What we do</h3>
				<ul class="col">
					<% loop FooterNav %>
						<li class="<% if LinkingMode = section %> selected<% else_if LinkingMode = current %> selected<% end_if %>">&raquo; <a href="$Link" title="$MenuTitle | Cat Action Trust 1977 Jersey">$MenuTitle</a></li>
					<% end_loop %>	
				</ul>
			</div>
			<div class="bucket">
				<h3>Contact Us</h3>
				<form>
					<div>
						<label for="email">Email</label>
						<input id="email" name="email" type="text" required></input>
					</div>
					<div class="comment">	
						<label for="comment">Comments and Questions</label>
						<textarea id="comment" name="comments" row="3" required></textarea>
					</div>
					<div>	
						<input class="submit" id="Form_ContactForm_action_doForm" type="submit" />
					</div>	
				</form>	
			</div>
			<div class="clear"> </div>	
		</div>	
	</footer>
	<p class="charity">Cat Action Trust 1977 is a registered charity based in Jersey, England and Scotland. Registered Charity No. 801245<br /> <a href="http://www.kayleighomahoney.com" title="Web Designer">Website by Kayleigh O'Mahoney</a></p>
</div>	