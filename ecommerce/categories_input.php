<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Input</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="return">
        <a href="categories_read.php">Back</a>
    </div>
    <div class="contain">
        <h2>Create Record</h2>
        <form class="ui form" action="categories_result.php" method="get">
            <div class="field">
                <label>Name</label>
                <div class="eight wide field">
                    <div class="field">
                        <input type="text" name="name" placeholder="Name">
                    </div>
                    <label>Type</label>
                    <div>
                        <input type="text" name="type" placeholder="Type">
                    </div>
                </div>
            </div>
            <br>
            <input class="ui teal button" type=submit value="Submit">
        </form>
    </div>
    
</body>
</html>