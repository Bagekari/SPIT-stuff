<html>
    <head>
        <title>Movie Genre - Opinion Poll</title>
        <link type="text/css" rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h1 style="font-size: 80px;"><i>What type of movies do you like?</i></h1>
        <form method="POST" action="index.php">
            <div class="side-to-side">
                <div class="wrapper">
                    <img src="images/actionmovies.jpg" height="300px" width="300px">
                    <div class="overlay">
                        <div class="content">
                            <span>Action</span><br>
                            <button type="submit" name="vote" value="1">Vote</button>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <img src="images/comedymovies.jpg" height="300px" width="300px">
                    <div class="overlay">
                        <div class="content">
                            <span>Comedy</span><br>
                            <button type="submit" name="vote" value="2">Vote</button>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <img src="images/dramamovies.jpg" height="300px" width="300px">
                    <div class="overlay">
                        <div class="content">
                            <span>Drama</span><br>
                            <button type="submit" name="vote" value="3">Vote</button>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <img src="images/horrormovies.jpg" height="300px" width="300px">
                    <div class="overlay">
                        <div class="content">
                            <span>Horror</span><br>
                            <button type="submit" name="vote" value="4">Vote</button>
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding: 20px;"></div>
            <div class="side-to-side">
                <div class="wrapper">
                    <img src="images/mysterymovies.jpg" height="300px" width="300px">
                    <div class="overlay">
                        <div class="content">
                            <span>Mystery</span><br>
                            <button type="submit" name="vote" value="5">Vote</button>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <img src="images/romancemovies.jpg" height="300px" width="300px">
                    <div class="overlay">
                        <div class="content">
                            <span>Romance</span><br>
                            <button type="submit" name="vote" value="6">Vote</button>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <img src="images/scifimovies.jpg" height="300px" width="300px">
                    <div class="overlay">
                        <div class="content">
                            <span>Sci-Fi</span><br>
                            <button type="submit" name="vote" value="7">Vote</button>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <img src="images/thrillermovies.jpg" height="300px" width="300px">
                    <div class="overlay">
                        <div class="content">
                            <span>Thriller</span><br>
                            <button type="submit" name="vote" value="8">Vote</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>