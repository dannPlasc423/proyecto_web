<?php

    include ("conn.php");
    $select = "SELECT * FROM productos";
    $query = mysqli_query($conn, $select);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <title>Document</title>
    
    <link rel="stylesheet" href="products.css">
</head>
<body>
    <section class="table">
        <table>
            <thead>
                <td>id</td>
                <td>Nombre</td>
                <td>Precio</td>
                <td>Tipo</td>
                <td>imagen</td>
                <td>eliminar</td>

            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)){ ?>
                    <tr>
                        <td><h1><?=$row['id']?></hq></td>
                        <td><?=$row['nombreproducto']?></td>
                        <td><?=$row['precio']?></td>
                        <td><?=$row['tipo']?></td>
                        <td><?=$row['imagen']?></td>
                        <td>
                            <form action="Productos.php" method="post">
                            <input hidden name="id" id= "id"value="<?=$row['id']?>">
                            <button type="submit" name="eliminar" id="eliminar"><p>Eliminar </p></button>
                            </form>
                        <td>

                    </tr>
               <?php } ?> 
            </tbody>
        </table>
    </section>
    <section class="form-register">
        <form action="Productos.php" method="post">
            <div style="text-align:center;">


            <p>
                <label for="nombreproducto">Nombre Producto </label>
                <input type="text" name="nombreproducto" required="Obligatorio" placeholder="Nombre Producto">
            </p>
    
            <p>
                <label for="precio">Precio </label>
                <input type="text" name="precio"  required="Obligatorio" placeholder="Precio">
            </p>
    
            <p>
                <label for="tipo">Tipo </label>
                <input type="text" name="tipo"  required="Obligatorio" placeholder="Tipo">
            </p>
    
            <p>
                <label for="imagen">Imagen </label>
                <input type="text" name="imagen"  required="Obligatorio" placeholder="Imagen">
            </p>
       
    <button type="submit" name="registrar" id="registrar"><p>Registrar </p></button>

             </div>
        </form>
    </section>
</body>
</html>

