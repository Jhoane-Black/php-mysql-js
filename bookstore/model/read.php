<?php
include 'C:\xampp\htdocs\bookstore\controller\connection.php';
$buscar=$_GET['read'];
$sql="select * from book where book_title like '%$buscar%' or book_editorial like '%$buscar%' or book_saga like '%$buscar%' ";
$resultado=mysqli_query($con,$sql);
?>
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>title</th>
                <th>editorial</th>
                <th>saga</th>
                <th>price</th>
            </tr>
        <thead>
        <tbody>
            <?php 
            while ($rows=mysqli_fetch_assoc($resultado)) {                           
            ?>
            <tr>
                <td><?php echo $rows['book_id']?></td>
                <td><?php echo $rows['book_title']?></td>
                <td><?php echo $rows['book_editorial']?></td>
                <td><?php echo $rows['book_saga']?></td>                
                <td><?php echo $rows['book_price']?></td>
                <td>
                    <a href="update.php?id=<?php echo $rows['book_id']?>">Editar</a>
                    <a href="delete.php?id=<?php echo $rows['book_id']?>">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
            <form> <a href="../index.php">Regresar</a> </form>
        </tbody>
    <table>
</div>
