<html>
    <head>
        <title>Movie Categories Poll Results</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container-fluid">
            <h2>Movie Categories Poll Results</h2>
            <p><b><?php echo $choices_count[0];?></b> movie fans have taken part in this poll so far.</p>
            <div class="table-responsive-lg">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Votes</th>
                            <th scope="col">Vote percentage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo($table_rows);?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>