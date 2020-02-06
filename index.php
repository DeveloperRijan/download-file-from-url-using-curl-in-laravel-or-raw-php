<?php
	//start downloading
    public function start_download(Request $request){
		$videoLink = $request->videoLink;

		header("Content-Type: application/mp4");

		curl_setopt($ch=curl_init(), CURLOPT_URL, $videoLink);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		curl_close($ch);
		
		//start downloading
		header("Content-Type: application/mp4");
		$fileName = 'downloaded-fb-video';
		header("Content-Disposition: attachment; filename=$fileName.mp4");

		echo $response;

    }

?>