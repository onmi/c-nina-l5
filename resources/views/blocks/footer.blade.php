<?php
/**
 * Main Footer layout
 */
?>

<div id="footer">
	<div class="container">
		<div class="col-md-4">&copy; 2015 {{ @trans('prompts.brand') }}</div>
	</div>
</div>

<div id="is-del-dialog"></div>


</body>

<script type="text/javascript">

$(document).ready(function(){

	$("#is-del-dialog").dialog({
		autoOpen: false,
		dialogClass: "no-close",
		modal: true
// 		,buttons : {
// 			"{{ @trans( 'prompts.yes' ) }}" : function() {
// 				alert("You have confirmed!");
// 			},
// 			"{{ @trans( 'prompts.no' ) }}" : function() {
// 				$(this).dialog("close");
// 			}
// 		}
	});

});

</script>
@yield('js_extra')
</html>