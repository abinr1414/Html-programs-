<html>
<head>
    <title>Book Details</title>
</head>
<body>
    <center>
        <form name="bookform" method="post" action="book1.php">

            <h2 align="center">BOOK DETAILS</h2>

            <table border="2" align="center">

                <tr>
                    <td>ACCESSION NO:</td>
                    <td><input type="text" name="ano"></td>
                </tr>

                <tr>
                    <td>TITLE:</td>
                    <td><input type="text" name="title"></td>
                </tr>

                <tr>
                    <td>AUTHOR:</td>
                    <td><input type="text" name="author"></td>
                </tr>

                <tr>
                    <td>EDITION:</td>
                    <td><input type="text" name="edition"></td>
                </tr>

                <tr>
                    <td>PUBLISHER:</td>
                    <td><input type="text" name="publisher"></td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="SUBMIT">
                    </td>
                </tr>

            </table>
        </form>
    </center>
</body>
</html>