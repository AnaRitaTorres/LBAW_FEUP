<?php
	function createPublication($type, $idevent, $idcustomer, $comment, $file){
		if($type == "comment" && $comment != null && $file == null){
			createComment( $idevent, $idcustomer, $comment);
		}else if($type == "file" && $comment == null && $file != null){
			createFile( $idevent, $idcustomer, $file);
		}
	}

	function createComment($idevent, $idcustomer, $comment){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO publication (type, idEvent, idCustomer, date, comment) values
		('comment', ?, ?, current_date, ?)");
		$stmt->execute(array($idevent, $idcustomer, $comment));
		return $conn->lastInsertId();
	}

	function isMyPublication($idcustomer, $idpub){
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM publication WHERE idcustomer = ? AND idpub = ?");
    $stmt->execute(array($idcustomer, $idpub));
    return $stmt->fetch() == true;
	}

	function deletePublication($idpub){
		global $conn;
		$stmt = $conn->prepare("DELETE FROM publication WHERE idpub = ?");
		$stmt->execute(array($idpub));
	}

	function isMyReply($idcustomer, $idreply){
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM reply WHERE idcustomer = ? AND idreply = ?");
    $stmt->execute(array($idcustomer, $idreply));
    return $stmt->fetch() == true;
	}

	function deleteReply($idreply){
		global $conn;
		$stmt = $conn->prepare("DELETE FROM reply WHERE idreply = ?");
		$stmt->execute(array($idreply));
	}

	function createFile($idevent, $idcustomer, $file){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO publication(type, date, comment, file)
								VALUES('file',current_date ,NULL,?)");
		$stmt->execute(array($file));
	}

	function updateLikes($idpub, $idevent, $idcustomer, $likes){
		global $conn;
		$stmt = $conn->prepare("UPDATE publication SET likes=? WHERE (idpub=?, idevent=?, idcustomer=?)");
		$stmt->execute(array($likes, $idpub, $idevent, $idcustomer));
	}

	function getLikes($idpub, $idevent, $idcustomer){
		global $conn;
		$stmt = $conn->prepare("SELECT likes FROM publication WHERE (idpub=?, idevent=?, idcustomer=?)");
		$stmt->execute(array($idpub, $idevent, $idcustomer));
		return $stmt->fetchAll();
	}

	function updateDislikes($idpub, $idevent, $idcustomer, $dislikes){
		global $conn;
		$stmt = $conn->prepare("UPDATE publication SET dislikes=? WHERE(idpub=?, idevent=?, idcustomer=?)");
		$stmt->execute(array($dislikes, $idpub, $idevent, $idcustomer));
	}

	function getDislikes($idpub, $idevent){
		global $conn;
		$stmt = $conn->prepare("SELECT dislikes FROM publication WHERE (idpub=?, idevent=?)");
		$stmt->execute(array($idpub, $idevent));
		return $stmt->fetchAll();
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

	function createReply($idpub, $idcustomer, $description){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO reply (idPub, idCustomer, description) values
		(?, ?, ?);");
		$stmt->execute(array($idpub, $idcustomer, $description));
	}

	function likePublication($idpub, $idcustomer){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO userliked (idPub, idCustomer) values
		(?, ?);");
		$stmt->execute(array($idpub, $idcustomer));
	}

	function unlikePublication($idpub, $idcustomer){
		global $conn;
		$stmt = $conn->prepare("DELETE FROM userliked WHERE idPub = ? AND idCustomer = ?;");
		$stmt->execute(array($idpub, $idcustomer));
	}

	function userLiked($idpub, $idcustomer){
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM userliked WHERE idPub = ? AND idCustomer = ?;");
		$stmt->execute(array($idpub, $idcustomer));
		return $stmt->fetch() == true;
	}

	function countLikes($idpub){
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM userliked WHERE idPub = ?;");
		$stmt->execute(array($idpub));
		return count($stmt->fetchAll());
	}

?>
