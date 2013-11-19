
<ul class="arondit-btm-l menu">
	<script src="./js/twitter.js"></script>
	<script src="./js/facebook.js"></script>
        <li>
		<?php require "menu_lang.php"; ?>
	</li>
	<li>
		<div class="buttonfb aronditFull" >
			<div class="fb-share-button" data-href="http://www.synbio4all.tk/" data-type="button"></div>
		</div>
	</li>
	<li><a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-via="SynBio4all" data-size="large" data-related="SynBio4all" data-hashtags="SynBio4all">Tweet</a></li>
	<li><a href="https://twitter.com/SynBio4all" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @SynBio4all</a></li>
	<li>
		<form <?php if(isset($GLOBALS['error'])){echo "class=\"error\"";}else{echo "class=\"success\"";} ?> name="mailForm" action="index.php?obj=com&action=submitmail" method="post">
			<input id="inputMail" type="text" name="dataField" placeholder="To learn more, join our mailing list !"> 
			<input type="submit" 
				   onclick="return isValidMail('mailForm');" 
				   value="Keep me informed" >
		</form>
	</li>
	<li <?php if(isset($GLOBALS['error'])){echo "class=\"error\"";}else{echo "class=\"success\"";} ?>>
		<?php 
			if(isset($GLOBALS['error'])){echo $GLOBALS['error'];} 
			if(isset($GLOBALS['success'])){echo $GLOBALS['success'];}
		?>
	</li>
	<div class="clearboth"></div>
</ul>
