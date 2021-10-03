<?php require './1.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Kalkulator potrošnje električne energije</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Kalkulator potrošnje električne energije u domaćinstvima. Cijene i tarife se odnose samo na Elektrokrajinu Banja Luka">   
	<meta name="keywords" content="Kalkulator, proračun, izračun, struja, Kalkulator potrošnje, Elektrokrajina, Cijena električne energije">
	<meta name="author" content="mtcodes.com"
	meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
  .c2 {
      margin-top: 20px;
  }
 .center {
    display: flex;
    align-items: center;
    justify-content: center;
 }
 .button2 {
    margin: 10px 0;
    width: 80%;
    height: 70px;
    font-size: 1.2em;
    font-weight:bold;
    text-transform: uppercase;
 }
  .header1 {
    background: #007bff;
    text-align: center;
    text-transform: uppercase;
    font-size: 1.0em;
    padding: 10px 10px;
    color: white;
    font-weight: bold;

  }
  .colbg1{

      background:#eaeae6;
      padding-left: 0;
      padding-right: 0;
      margin: 5px;
  }
  .colbg2{

    background:#f0f0ed;
    padding-left: 0;
    padding-right: 0;
    margin: 5px;
}
.form-group {
    padding: 0 15px;
}
.error1 {
        color: red;}
  </style>
  </head>
  <body <?php echo $scroll;?> >
  
      <div class="container c2">
      <div class="col-xs-12">
                                            
                                            <h2 class="see-other-heading text-center">OBRAČUN STRUJE DOMAĆINSTVA</h2>
                                            <hr>
					</div>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     
            <div class="row">
            <div class="col-md colbg1">
            <legend class="col-form-legend col-sm-1-12 header1">Stanje brojila za obračun AVT</legend>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-1-12 col-form-label">Prethodno</label> 
                        <div class="col-sm-1-12">
                            <input type="number" step="any"  class="form-control" name="avt1" id="inputName" value="<?php echo $avt1;?>" placeholder="Unesi prethodno" onclick="select()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-1-12 col-form-label">Novo</label> <br>
                        <div class="col-sm-1-12">
                            <input type="number" step="any" class="form-control" name="avt2" id="inputName" value="<?php echo $avt2;?>" placeholder="Unesi novo" onclick="select()">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-1-12 col-form-label">Cijena KM</label> <br>
                        <div class="col-sm-1-12">
                            <input type="number" step="any" class="form-control" name="avt3" id="txt1" value="<?php echo $avt3;?>" onclick="select()">
                        </div> 
                        <a href="tel://080050116" style="margin: 15px 0 0 10px"><span style='font-size: 1rem; color: #007bff; margin-right: 5px;'>&#9742;</span>Informacije i reklamacije EK-BL: 0800 50116</a>
                        <div class="col-12 d-flex flex-row justify-content-around mt-2">
                        <script type="text/javascript">
 
                            var text = "<?php echo $ast1;?>";
                            var text2 = "<?php echo $ast2;?>";
                            var text3 = "<?php echo $ast3;?>";
                            var text4 = "<?php echo $ast4;?>";
                            var text5 = "<?php echo $ast5;?>";




                            function dt(){
                                    document.getElementById("txt1").value = text;
                                    document.getElementById("txt2").value = text2;
                                    document.getElementById("snaga").value = text5;
                            }

                            function mt(){
                                    document.getElementById("txt1").value = text3;
                                    document.getElementById("txt2").value = text3;
                                    document.getElementById("snaga").value = text4;

                            }
                            </script>
                        <input type="button" name="send_dt" id="send_dt" class="btn btn-primary" value="Dvo tarifno" onclick="dt()">
                        <input type="button" name="send_mt" id="send_mt" class="btn btn-primary" value="Mono tarifno" onclick="mt()">
                        </div>
                    </div>
            </div>
           
            <div class="col-md colbg2">
            <legend class="col-form-legend col-sm-1-12 header1">Stanje brojila za obračun AMT</legend>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-1-12 col-form-label">Prethodno</label> 
                        <div class="col-sm-1-12">
                            <input type="number" step="any" class="form-control" name="amt1" id="inputName" value="<?php echo $amt1;?>" placeholder="Unesi prethodno" onclick="select()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-1-12 col-form-label">Novo</label> <br>
                        <div class="col-sm-1-12">
                            <input type="number" step="any" class="form-control" name="amt2" id="inputName" value="<?php echo $amt2;?>" placeholder="Unesi novo" onclick="select()">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-1-12 col-form-label">Cijena KM</label> <br>
                        <div class="col-sm-1-12">
                            <input type="number" step="any" class="form-control" name="amt3" id="txt2" value="<?php echo $amt3;?>" onclick="select()">
                        </div>
                    </div>
            </div>
            <div class="col-md colbg1">
            <legend class="col-form-legend col-sm-1-12 header1">Obračunata snaga kW</legend>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-1-12 col-form-label">Snaga</label> 
                        <div class="col-sm-1-12">
                            <input type="number" step="any" class="form-control" name="kw1" id="snaga" value="<?php echo $kw1;?>" placeholder="Unesi prethodno" onclick="select()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-1-12 col-form-label">Cijena</label> <br>
                        <div class="col-sm-1-12">
                            <input type="number" step="any" class="form-control" name="kw2" id="cijena_snage" value="<?php echo $kw2;?>" onclick="select()">
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label for="inputName" class="col-sm-1-12 col-form-label">Dug kW iz prethodnog perioda</label> <br>
                        <div class="col-sm-1-12">
                            <input type="number" step="any" class="form-control" name="kw3" id="inputName" value="<?php echo $kw3;?>">
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label for="inputName" class="col-sm-1-12 col-form-label">Cijena naknade za obnovljive izvore</label> <br>
                        <div class="col-sm-1-12">
                            <input type="number" step="any" class="form-control" name="kw4" id="oiee" value="<?php echo $kw4;?>" onclick="select()">
                        </div>
                    </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md center"> 
                            <input type="submit" name="send" id="send" class="btn btn-primary button2" value="Preračunaj" >
                    </div>
               
                <div class="col-md">
                    <table class="table table-sm table-striped">
                        <tbody>
                            <tr>
                                <td scope="row">AVT:</td>
                                <?php $AVT = ($avt2-$avt1)*$avt3;?>
                                <td class="text-right"><?php echo number_format($AVT, 2);?></td>
                            </tr>
                            <tr>
                                <td scope="row">AMT:</td>
                                <?php $AMT = ($amt2-$amt1)*$amt3;?>
                                <td class="text-right"><?php echo number_format($AMT, 2);?></td>
                            </tr>
                            <tr>
                                <td scope="row">Obračunata snaga kW: </td>
                                <?php $SNAGA = $kw1*$kw2;?>
                                <td class="text-right"><?php echo number_format($SNAGA, 2);?></td>
                            </tr>
                            <tr>
                                <td scope="row">Naknada po mjernom mjestu: </td>
                                <?php $MM = $mm;?>
                                <td class="text-right"><?php echo number_format($MM, 2);?></td>
                            </tr>
                            <tr>
                                <td scope="row">Obračunata utr. el. eng. </td>
                                <?php $OBR = (($avt2-$avt1)*$avt3) + (($amt2-$amt1)*$amt3)+($kw1*$kw2)+$mm;?>
                                <td class="text-right"><?php echo number_format($OBR, 2);?></td>
                            </tr>
                            <tr>
                                <td scope="row">PDV (17%) na el. eng. </td>
                                <?php $PDV1 = ((($avt2-$avt1)*$avt3) + (($amt2-$amt1)*$amt3)+($kw1*$kw2)+$mm)*0.17;?>
                                <td class="text-right"><?php echo number_format($PDV1, 2);?></td>
                             
                            </tr>
                            </tbody>
                    </table>
                    </div>
                    <div class="col-md">
                    <table class="table table-sm table-striped">
                        <tbody>
                            
                            <tr>
                                <td scope="row">Naknada za obnovljive izvore: </td>
                                <?php $NAK1 = (($avt2-$avt1) + ($amt2-$amt1))*$kw4;?>
                                <td class="text-right"><?php echo number_format($NAK1, 2);?></td>
                            </tr>
                            <tr>
                                <td scope="row">PDV na naknadu za obnovljive izvore: </td>
                                <?php $PDV2 = ((($avt2-$avt1) + ($amt2-$amt1))*$kw4)*0.17;?>
                                <td class="text-right"><?php echo number_format($PDV2, 2);?></td>
                            </tr>
                            <tr>
                                <th scope="row">Ukupan iznos sa pdv-om </th>
                                <?php $TOTAL = ((($avt2-$avt1)*$avt3) + (($amt2-$amt1)*$amt3)+($kw1*$kw2)+$mm)+(((($avt2-$avt1)*$avt3) + 
                                (($amt2-$amt1)*$amt3)+($kw1*$kw2)+$mm)*0.17)+((($avt2-$avt1) + ($amt2-$amt1))*$kw4)+(((($avt2-$avt1) + 
                                ($amt2-$amt1))*$kw4)*0.17);?>
                                <td class="text-right font-weight-bold"><?php echo number_format($TOTAL, 2);?></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                
            </div>
            
          </form>
      </div>
      
        <div id="ukupno"></div>            

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function scrollFunction() {
        var elmnt = document.getElementById("ukupno");
        elmnt.scrollIntoView();
        }
    </script>
  
  </body>
  </html>