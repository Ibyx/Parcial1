<?php
require_once("controllers/estudiante_controller.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Estudiantes</title>
</head>

<body>
    <!-- table -->
    <table class="table White table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th style="text-align: center;" scope="col">ID</th>
                <th style="text-align: center;" scope="col">Nombre</th>
                <th style="text-align: center;" scope="col">Apellido</th>
                <th style="text-align: center;" scope="col">Nota</th>
                <th style="text-align: center;" scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (estudiante_controller::mostrar() as $estudiante) {
                $color = "";
                if ($estudiante->getNota() < 61) {
                    $color = "text-danger";
                } elseif ($estudiante->getNota() <= 70) {
                    $color = "text-warning";
                } elseif ($estudiante->getNota() <= 80) {
                    $color = "text-secondary";
                } elseif ($estudiante->getNota() <= 90) {
                    $color = "text-info";
                } elseif ($estudiante->getNota() <= 100) {
                    $color = "text-success";
                }
                $id = $estudiante->getID();
                $nota = $estudiante->getNota();
            ?>
                <tr>
                    <th style="text-align: center;" scope="row"><?php echo $estudiante->getID() ?></th>
                    <td style="text-align: center;"><?php echo $estudiante->getNombre() ?></td>
                    <td style="text-align: center;"><?php echo $estudiante->getApellido() ?></td>
                    <td style="text-align: center;" class="<?php echo $color ?>"><?php echo $estudiante->getNota() ?></td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $estudiante->getID() ?>">
                            <i class="bi bi-person-lines-fill"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $estudiante->getID() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog        ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Informacion del Estudiante</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo "ID: ".$estudiante->getID()."<br>";
                                        echo "Nombre: ".$estudiante->getNombre()."<br>";
                                        echo "Apellido: ".$estudiante->getApellido()."<br>";
                                        echo "Nota: ".$nota;
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>