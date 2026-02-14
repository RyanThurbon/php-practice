<?php

$result = "";
$class = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	//Get data from form and sanitize the input!

	$num_01 = filter_input(INPUT_POST, "num_01", FILTER_SANITIZE_NUMBER_FLOAT);
	$num_02 = filter_input(INPUT_POST, "num_02", FILTER_SANITIZE_NUMBER_FLOAT);
	$operator = htmlspecialchars($_POST["operator"]);

	//Error handlers
	$errors = false;

	if (empty($num_01) || empty($num_02) || empty($operator)) {
		$result = "Fill in all inputs!";
		$class = "text-red-400";
		$errors = true;
	}

	if (!is_numeric($num_01) || !is_numeric($num_02)) {
		$result = "Numbers must be numeric!";
		$class = "text-red-400";
		$errors = true;
	}

	if (!$errors) {
		$result = match ($operator) {
			"add" => $num_01 + $num_02,
			"subtract" => $num_01 - $num_02,
			"multiply" => $num_01 * $num_02,
			"divide" => $num_01 / $num_02,
			default => "Something went wrong",
		};
		$class = "text-emerald-400";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<title>Calculator</title>
</head>

<body>
	<div class="flex min-h-screen">
		<div class="mx-auto flex items-center">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="flex flex-col gap-y-4">
				<input id="num_01" type="number" name="num_01" placeholder="First number" class="border rounded-md p-1" />

				<select id="operator" name="operator" class="border rounded-md p-1">
					<option value="add">+</option>
					<option value="subtract">-</option>
					<option value="multiply">*</option>
					<option value="divide">/</option>
				</select>

				<input id="num_02" type="number" name="num_02" placeholder="Second number" class="border rounded-md p-1" />

				<button type="submit" class="border rounded-md p-1">Calculate</button>

				<?php if (!empty($result)): ?>
					<p class="<?php echo $class ?>"><?php echo $result ?></p>
				<?php endif; ?>
			</form>
		</div>
	</div>
</body>

</html>
