<?php
include 'C:\xampp\htdocs\bookstore\controller\connection.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$id=$_GET['id'];
$sql="select * from book where book_id='".$id."';";
$resultado=mysqli_query($con,$sql);
   ?>
    <?php while ($rows=mysqli_fetch_assoc($resultado)){
?>
<div>
    <form>
            <input type="hidden" name="abook_id" value="<?php echo $rows['book_id']?>">
            <label>title:</label><br>
            <input type="text" name="abook_title" value="<?php echo $rows['book_title']?>"><br>
            <label>editorial:</label><br>
            <input type="text" name="abook_editorial" value="<?php echo $rows['book_editorial']?>"><br>
            <label>saga:</label><br>
            <input type="text" name="abook_saga" value="<?php echo $rows['book_saga']?>"><br>
            <label>price:</label><br>
            <input type="float" name="abook_price" value="<?php echo $rows['book_price']?>"><br>
            <input type="submit" name="" value="Actualizar">
            <a href="..\index.php">Regresar</a>
    </form>
<?php } ?>
</div>
<?php
        $book_id=$_GET['abook_id'];
        $book_title=$_GET['abook_title'];
        $book_editorial=$_GET['abook_editorial'];
        $book_saga=$_GET['abook_saga'];
        $book_price=$_GET['abook_price'];
        if($book_id!=null||$book_title!=null||$book_editorial!=null||$book_saga!=null||$book_price!=null){
            $sql2="update book set book_title='".$book_title."',book_editorial='".$book_editorial."',book_saga='".$book_saga."',book_price='".$book_price."' where book_id='".$book_id."'";
            mysqli_query($con,$sql2);
            if($book_title=1){
                header("location:..\index.php");
            }
        }
?>
