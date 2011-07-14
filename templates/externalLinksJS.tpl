{if $checkPermission}
<script type="text/javascript">
	//<![CDATA[
	function externalLinks() {
		var linksTemp = document.getElementsByTagName('a');
		for (var i = 0; i < linksTemp.length; i++) {
			if ((linksTemp[i].className == 'externalURL')) {
				linksTemp[i].onclick = function() { window.open(this.href, '_blank'); return false; }
			}
		}
	}
	onloadEvents.push(function() { new externalLinks(); })
	//]]>
</script>
{/if}