<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="#">Flats Booking Assignments</a>
     </div>
     
  </div>
</nav>
<?php
$n  = 100 ;
for ($i=1; $i <= 15; $i++) { 
     // code...
?>
     <div class="row container">
     <h3>Floore <?= $i; ?> </h3>
     <?php 
     for ($j = 1  ; $j <= 5 ; $j++) { 
          // code...
     ?>   
          <div  class="col-sm-2" id="main-div<?= $j + $n * $i; ?>" onclick="open_modal('<?= $j + $n * $i; ?>', '<?= $i ?>')"  data-toggle="modal" data-target="#myModal<?= $j + $n * $i; ?>" style="border: 3px solid lavender; border-radius: 5px;padding: 4px; margin-right: 5px; cursor: pointer;">Flats - <?= $j + $n * $i ; ?>
          </div>
          <div class="modal fade" id="myModal<?= $j + $n * $i; ?>" role="dialog">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Save Flat Information</h4>
                          </div>
                          <div class="modal-body">
                              <div class="fetched-data" style="color: green;"></div>

                              <div class="row">
                              <form  method="POST" enctype="multipart/form-data" id="myform<?= $j + $n * $i; ?>" name="myform<?= $j + $n * $i; ?>" >
                              
                                     <div style="padding: 20px;">
                                        <div class="col-sm-4">Floor:</div> 
                                        <div class="col-sm-8"><input type="text" id="floor<?= $j + $n * $i; ?>" name="floor" readonly value="<?= $i; ?>"></div>
                                     </div>
                                     <div style="padding: 20px;">
                                        <div class="col-sm-4">Flat:</div>
                                        <div class="col-sm-8"><input type="text" id="flat<?= $j + $n * $i; ?>" name="flat" readonly value="<?= $j + $n * $i; ?>"></div>
                                     </div>
                                     <div style="padding: 20px;">
                                        <div class="col-sm-4">Name:</div>
                                        <div class="col-sm-8"><input type="text" id="name<?= $j + $n * $i; ?>" name="name" ></div>
                                     </div>
                                     <div style="padding: 20px;">
                                        <input class="btn btn-success" type="submit"  id="save<?= $j + $n * $i; ?>" value="Save">
                                     </div>
                                   </form>
                                   </div> 
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
          </div>

     <?php     } ?>
     
     </div>
<?php } ?>

<script>

     alert("hello");

function open_modal(elem, data, flag = 0){
          var flat  = elem;
          var floor      = data;

     $('#save'+flat).on('click', function(e) {
          var data = $('#myform'+flat).serialize();
               var nameData   = $('#name'+flat).val();
               var floorData  = $('#floor'+flat).val();
          var flatData   = $('#flat'+flat).val();
               //alert(flatData);
               $.ajax({
                        url   : "ajaxsubmit.php",
                        type: "POST",
                        data: {
                            bookingData: {
                              'name' : nameData,
                              'flats': flatData,
                              'floor': floorData
                            },  
                        },
                        dataType: 'json',
                        success: function(result) {

                         let message = result.msg;
                         
                         $('.fetched-data').html(message);
                         

                        }
          });  
     });
};
     
    
</script>
</body>
</html>

