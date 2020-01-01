Ini Halaman Gallery
	<div>	
			<p><img src= "images/trails3.jpg" width="800" height="500"></p>
			<p><img src= "images/trails2.jpg" width="800" height="500"></p>
			<p><img src= "images/trails.jpg" width="800" height="500"></p>
			$youtubeUrl = JUri::getInstance('https://www.youtube.com/watch?v=7QxfAfhPOXs');
			$videoId = $youtubeUrl->getVar('v'); ?>
			<iframe id="ytplayer" type="text/html" width="640" height="390" src="https://www.youtube.com/watch?v=q5vcu-43j-0<?php echo $videoId; ?>" frameborder="0"/>
	</div>
	