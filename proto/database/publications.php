<?php
	function createPublication($type, $idevent, $idcustomer, $date, $comment, $file){
		if($type == "comment" && $comment != null && $file == null){
			createComment( $idevent, $idcustomer, $date, $comment);
		}else if($type == "file" && $comment == null && $file != null){
			createFile( $idevent, $idcustomer, $date, $file);
		}
	}

	function createComment($idevent, $idcustomer, $date, $comment){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO publication(type, date, comment, file)
								VALUES('comment',?,?,NULL)");
		$stmt->execute(array($date, $comment));
	}

	function createFile($idevent, $idcustomer, $date, $file){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO publication(type, date, comment, file)
								VALUES('file',?,NULL,?)");
		$stmt->execute(array($date, $file));
	}

	function updateLikes($idpub, $idevent, $idcustomer, $likes){
		global $conn;
		$stmt = $conn->prepare("UPDATE publication SET likes=? WHERE (idpub=?, idevent=?, idcustomer=?)");
		$stmt->execute(array($likes, $idpub, $idevent, $idcustomer));
	}

	function updateDislikes($idpub, $idevent, $idcustomer, $dislikes){
		global $conn;
		$stmt = $conn->prepare("UPDATE publication SET dislikes=? WHERE(idpub=?, idevent=?, idcustomer=?)");
		$stmt->execute(array($dislikes, $idpub, $idevent, $idcustomer));
	}

	function updateComment($idpub, $idevent, $idcustomer, $comment){
		global $conn;
		$stmt = $conn->prepare("UPDATE publication SET comment=? WHERE(idpub=?, idevent=?, idcustomer=?)");
		$stmt->execute(array($comment, $idpub, $idevent, $idcustomer));
	}

	function getEventPublication($idevent){
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM publication WHERE idevent = ? ORDER BY idpub DESC");
		$stmt->execute(array($idevent));
		return $stmt->fetchAll();
	}

	function getPublicationReplys($idPub){
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM reply WHERE idpub = ? ORDER BY idreply DESC");
		$stmt->execute(array($idPub));
		return $stmt->fetchAll();
	}
?>
