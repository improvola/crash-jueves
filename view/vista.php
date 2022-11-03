<!DOCTYPE html>
<html lang="es">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>VISTA</title>
</head>
</head>
<body>
	<div align="center"> <h1>BIENVENIDO A LA PAGINA </h1>
	
                    
                <?php 

                $sql = "SELECT usuario FROM usuario WHERE usuario = usuario LIMIT 1 ";
                $result = query($sql);

                if ($result) {  
                    return true;
                    } else {
                     return false;
                    }

				?>
                                   

	<h3>Estamos trabajando!</h3>
	<img src="../img/perro.png" alt="perro" style="width: 500px;"></div>
</body>
</html>