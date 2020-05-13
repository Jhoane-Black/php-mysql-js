<div>
    <form>
            <label>book_id:</label><br>
            <input type="text" book_id="id" name="book_id"><br>
            <label>book_title:</label><br>
            <input type="text" book_id="book_title" name="book_title"><br>
            <label>book_editorial:</label><br>
            <input type="text" book_id="book_editorial" name="book_editorial"><br>
            <label>book_saga:</label><br>
            <input type="text" book_id="book_saga" name="book_saga"><br>
            <label>book_price:</label><br>
            <input type="float" book_id="book_price" name="book_price"><br>
            <input type="submit" name="create" value="Agregar" onclick="return validate()">
            <a href="../index.php">Regresar</a>
    </form>
    <script type="text\javascript" src="../controller/validate.js"></script>
</div>
<?php
include 'C:\xampp\htdocs\bookstore\controller\connection.php';
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    $book_id=$_GET['book_id'];
    $book_title=$_GET['book_title'];
    $book_editorial=$_GET['book_editorial'];
    $book_saga=$_GET['book_saga'];
    $book_price=$_GET['book_price'];
    if($book_id!=null||$book_title!=null||$book_editorial!=null||$book_saga!=null||$book_price!=null){
        $sql="insert into book(book_id,book_title,book_editorial,book_saga,book_price) VALUES ('".$book_id."','".$book_title."','".$book_editorial."','".$book_saga."','".$book_price."')";
        mysqli_query($con,$sql);
        if($book_title=1){
        }
    }
?>
