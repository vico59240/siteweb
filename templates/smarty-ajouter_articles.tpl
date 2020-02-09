<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Ajouter un article</h1>
            <form method="post" action="ajouter_articles.php" enctype="multipart/form-data">
                Titre : <input type="text" name="titre">
                <br>
                <br>
                Texte :<input type="text" name="texte">
                <br>
                <br>
                Publié ? :<input type="checkbox" name="publie" value="1">Oui
                <input type="checkbox" name=""publie" value="0">Non
                <br>
                <br>
                <input type="file" name="image">
                <input type="submit" name="submit" value="valider">
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>