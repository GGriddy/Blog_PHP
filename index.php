<?php require_once($_SERVER['DOCUMENT_ROOT'].'/app/session.php'); ?>
<!doctype html>
<html lang="fr">
<head>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/components/headers.php') ?>

	<script>
	
	</script>

    <title>Home blog</title>
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/components/navigation.php') ?>


<main role="main">
    <div class="container">
        <div class="row">
            <div class="col pinned-articles articles">

            </div>
        </div>

        <div class="row">
            <div class="col top-articles articles">

            </div>
        </div>

        <div class="row">
            <div class="col top-users">

            </div>
        </div>
    </div>
</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/components/footer.php') ?>

</body>
</html>
