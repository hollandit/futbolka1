<?php
	if (isset($_FILES["photo"])) {
		$fileName = $_FILES["photo"]["name"];
		$fileType = $FILES["photo"]["type"];
		$fileTmp=$_FILES["photo"]["tmp_name"];
		$uploadDir = $_SERVER['DOCUMENT_ROOT']."/image/img/".time().'.'.$fileType;
		$fileUploade = move_uploaded_file($fileTmp, $uploadDir);
		if ($fileUploade == true) {
			$response = [
			"status"=> "ok",
			"url"=> "/image/img/".time().'.'.$fileType
			];
			
		} else {
			$response = ["status" => "error"];
		}
		header('Content-Type: application/json; charset=utf-8', true, 200);
		echo json_encode($response);
	}
?>