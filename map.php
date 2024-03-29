<h5></h5>

<div id="map" style="margin:auto ; height:400px; width:500px;"></div>


<script type="text/javascript">
		var map = L.map('map', {
			center: [46, 0.8],
			zoom: 5
			}
		);

		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png',
			{
				maxZoom: 18,
				attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
			}).addTo(map);


		<?php echo getMarkerList(); ?>

		map.on('popupopen', function(e){
			var post_id = e.popup.post_id;
			var nonce = '<?php echo wp_create_nonce("popup_content"); ?>';
			jQuery.post("<?php echo admin_url('admin-ajax.php') ?>",
				{
					action : 'popup_content', post_id: post_id
				}, function(response){
					console.log("resp", response);
					e.popup.setContent(response);
				});
		});

</script>