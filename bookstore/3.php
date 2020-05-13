<!DOCTYPE html>
<html>
    <head>
            <title>Bookstore</title>
    </head>
    <body>
        <?php
            include('C:\xampp\htdocs\bookstore\controller\connection.php');
            $sql="select * from book ORDER BY book_id ASC LIMIT 10, 5;";
            $resultado=mysqli_query($con,$sql);
        ?>
       <div>
            <a href="model\create.php">Nuevo Libro</a><br>
            <form action="model\read.php"> 
                <input type="text" name="read" id="read" placeholder="Buscar">
                <input type="submit" value="Buscar"  ><br>
            </form>
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
                    <?php while ($rows=mysqli_fetch_assoc($resultado)) {                           
                    ?>
                    <tr>
                        <td><?php echo $rows['book_id']?></td>
                        <td><?php echo $rows['book_title']?></td>
                        <td><?php echo $rows['book_editorial']?></td>
                        <td><?php echo $rows['book_saga']?></td>
                        <td><?php echo $rows['book_price']?></td>
                        <td>
                            <a href="model\update.php?id=<?php echo $rows['book_id']?>">Editar</a>
                            <a href="model\delete.php?id=<?php echo $rows['book_id']?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>                    
                </tbody>
            <table>
        </div>
    </body>
</html> 
<form> 
&nbsp
<a href="2.php"><< Anterior</a>&nbsp
<a href="index.php">1</a>&nbsp
<a href="2.php">2</a>&nbsp
<a href="3.php">3</a>&nbsp       
</form>
