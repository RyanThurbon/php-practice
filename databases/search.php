<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
	header("Location: ../index.php");
	exit();
}

//dont need to sanitize inputs because we are not outputting any of it to the browser.

$search = $_POST["search"];

try {
	require_once "includes/dbh.inc.php";

	$query = "SELECT * FROM comments WHERE username = :search";

	$stmt = $pdo->prepare($query);
	$stmt->bindParam(":search", $search);
	$stmt->execute();

	$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $error) {
	die("Query failed: " . $error->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<title>Search</title>
</head>

<body>
	<?php if (empty($comments)): ?>
		<p>0 results found</p>
	<?php else: ?>
		<h3><?php echo count($comments) . " results found." ?></h3>
		<ul>
			<?php foreach ($comments as $comment): ?>
				<li><?php echo htmlspecialchars($comment["message"]) ?></li>
			<?php endforeach ?>
		</ul>
	<?php endif ?>
</body>

</html>
