<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management System</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>


    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">ADD ACK</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">NAME</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Customer Name" name="completename">
                    </div>
                    <div class="roof-profile">
                        <label for="roofprofile">Choose Roof Profile</label>
                        <select class="form-select" aria-label="Default select example" id="roofprofile" name="completeroofprofile">
                            <option selected>Roof Profile</option>
                            <option value="SNAPLOCK">SNAPLOCK</option>
                            <option value="IBR">IBR</option>
                            <option value="IDT">IDT</option>
                            <option value="MSL">MSL</option>
                            <option value="STANDING SEAM">STANDING SEAM</option>
                            <option value="TILEMATIC">TILEMATIC</option>
                            <option value="FLOOR DECK">FLOOR DECK</option>
                            <option value="SANDWICH PANEL">SANDWICH PANEL</option>
                            <option value="Z CHANNELS">Z CHANNELS</option>
                            <option value="C CHANNELS">C CHANNELS</option>
                            <option value="TRUSSES">TRUSSES</option>
                            <option value="PURLINS">PURLINS</option>
                        </select>
                    </div>
                    <div class="roof-materials">
                        <label for="roofmaterials">Choose Roof Materials</label>
                        <select class="form-select" aria-label="Default select example" id="completeroofmaterials" name="completeroofmaterials">
                            <option selected>Roof Materials</option>
                            <option value="AlUMINIUM">ALUMINIUM</option>
                            <option value="ALUZINC">ALUZINC</option>
                            <option value="STEEL">STEEL</option>
                        </select>
                    </div>
                    <div class="colors-group">
                        <label for="colors">Colors</label>
                        <select class="form-select" aria-label="Default select example" id="colors" name="completecolors">
                            <option selected>Select A Color</option>
                            <option value="B.RED">B.RED</option>
                            <option value="DEEP OCEAN" class="bg-primary-subtle">DEEP OCEAN</option>
                            <option value="WINE RED" class="bg-danger-subtle">WINE RED</option>
                            <option value="COFFEE">COFFEE</option>
                            <option value="QUARTZ GREY" class="bg-secondary">QUARTZ GREY</option>
                            <option value="WHITE">WHITE</option>
                            <option value="GREEN" class="bg-success">GREEN</option>
                        </select>
                    </div>
                    <div class="weight-group">
                        <label for="weight">WEIGHT </label><br>
                        <input type="number" id="weight" name="completeweight">
                    </div>
                    <div class="thickness-group">
                        <label for="thickness">Thickness</label><br>
                        <input type="number" id="thickness" name="completethickness" min="0.25" max="3" step="0.05">
                    </div>
                    <br>
                    <fieldset>
                        <label for="remarks">
                            <input type="radio" name="completeremarks" value="not-tolling" id="remarks" checked>
                            NOT TOLLING
                        </label> <br>
                        <label>
                            <input type="radio" name="completeremarks" value="tolling" id="remarks">
                            TOLLING
                        </label>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" onclick="adduser()">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container m-3">
        <h1 class="text-center">TMK METALS LIMITED ACK</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#completeModal">
            ADD NEW USERS
        </button>


    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        function adduser() {
            var nameAdd = $('#name').val();
            var roofprofileAdd = $('#roofprofile').val();
            var roofmaterialAdd = $('#completeroofmaterials').val();
            var colorAdd = $('#colors').val();
            var weightAdd = $('#weight').val();
            var thicknessAdd = $('#thickness').val();
            var remarksAdd = $('#remarks').val();

            $.ajax({
                url: "insert.php",
                type: 'post',
                data: {
                    nameSend: nameAdd,
                    roofprofileSend: roofprofileAdd,
                    roofmaterialSend: roofmaterialAdd,
                    colorSend: colorAdd,
                    weightSend: weightAdd,
                    thicknessSend: thicknessAdd,
                    remarksSend: remarksAdd,

                },
                success: function(data, status) {
                    //function to display data;
                    console.log(status);
                }
            });
        }
    </script>
</body>

</html>