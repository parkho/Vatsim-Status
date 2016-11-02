<h3 style="margin-left: 80px; margin-top: 75px;">Vatsim Online Users</h3>

<div id="vs" style="border: solid 3px; padding: 25px; border-radius: 5px;" class="container">
	<ul class="blocklist">
		<li>Pilots : <?php echo $pilots;?></li>
		<li>Controllers : <?php echo $controllers;?></li>
		<li>Atis : <?php echo $atis;?></li>
		<li>Observers : <?php echo $observers;?></li>
		<li>Supervisors : <?php echo $supervisors;?></li>
		<li>Total : <?php echo $total;?></li>        
	</ul>
</div>
<script type="text/javascript">
function liveflight(){
  $("#vs").load(location.href + " #vs>*", "");
}
setInterval(function(){liveflight()}, 3000);
//Refresh time is set to 3000 which is equal to 3 second and can be modified to desired number.
</script>




