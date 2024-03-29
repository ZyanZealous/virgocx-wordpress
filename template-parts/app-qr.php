<div class="fingertips-item app-qr-parts">
	<h5>Download the VirgoCX Mobile App</h5>
	<div class="row">
		<div id="stores" class="col-lg-5 col-md-5 app-store">
				<a href="https://apps.apple.com/ca/app/virgocx-buy-sell-bitcoin/id1480501048"><img class="app_store_download" data-value="app_store" src="<?= get_template_directory_uri() ?>/img/app_buttons/app_store.png" alt="images not found" /></a>
				<a href="https://play.google.com/store/apps/details?id=ca.virgocx.exchange"><img class="play_store_download" data-value="play_store" src="<?= get_template_directory_uri() ?>/img/app_buttons/play_store.png" alt="images not found" /></a>
				<a href="https://virgocx.oss-us-west-1.aliyuncs.com//prod/2020/10/31/2dd4caebf9c547058e418a600ff48b95.apk"><img class="android_download" data-value="android" src="<?= get_template_directory_uri() ?>/img/app_buttons/android.png" alt="images not found" /></a>
		</div>

		<img class="col-lg-5 col-md-7 col-sm-7" id="app_qr_image" src="<?= get_template_directory_uri() ?>/img/qr_codes/app_store.png" alt="images not found" /></a>
	</div>
</div>

<script type="text/javascript">
const appLinks = document.querySelectorAll('#stores a');
const qrImage = document.getElementById('app_qr_image');
appLinks.forEach(function(appLink) {
	appLink.addEventListener('mouseover', function(event) {
		const value = event.target.dataset.value;

		if (!value) {
			return;
		}

		qrImage.src = _virgocx_theme_url + '/img/qr_codes/' + value + '.png';
	});
});

const appImages = document.querySelectorAll('#stores a img');
appImages.forEach(function(appImage) {
	appImage.addEventListener('mouseover', function(event) {
		const img = event.target;
		img.src = img.src.replace('.png', '_hover.png');
	});
	appImage.addEventListener('mouseleave', function(event) {
		const img = event.target;
		img.src = img.src.replace('_hover.png', '.png');
	});
});
</script>
