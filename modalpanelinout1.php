<!-- modal edit data -->
<div class="modal fade" id="modalEditData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
          img {
            width: 33%;
            height: auto;
            margin-bottom: -40px;
          }
        </style>

        <img src="images/logotelkom.png" type="image/jpg" width="210" height="100" style="margin-top: -20px; margin-bottom: -5px;">

        <h5 style="margin-top: 80px; margin-bottom: -5px;" class="modal-title text-dark " id="exampleModalLabel">Edit Data ODC</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" id="formEditData">
        <div class="row">
          <div class="form-check mx-auto">
            <p class="text-center">Pilih Satu Type Out</p>
            <input class="form-check-input" type="radio" name="panel_out" id="radio-splitter" value="splitter" onclick="dissableODP()">
            <label  class="form-check-label text-dark" for="radio-splitter">
              Spliter
            </label>
            <input class="form-check-input" type="radio" name="panel_out" id="radio-odp" value="odp" onclick="dissableSplitter()">
            <label  class="form-check-label text-dark" for="radio-odp">
              ODP
            </label>
          </div>
        </div>
        <div class="modal-body text-dark">
          <div class="row " >
            <div class="col-1"></div>
            <!-- kanan -->
            <div class="col-5">
              <div class="form-group">
                <label for="" class="text-dark labell">Record</label>
                <input type="number" class="form-control inputt" name="id_record" id="input-id-record" aria-describedby="textHelp" placeholder="" readonly="">
              </div>
              <div class="form-group" style="padding-top: 0px;">
                <label  for="" class="text-dark labell">Panel</label>
                <input  type="number" class="form-control" name="id_panel inputt" disabled id="input-id-panel" aria-describedby="textHelp" placeholder="" value="">
              </div>
              <div class="form-group" style="padding-top: 0px;">
                <label for=""  class="text-dark labell">In</label>
                <input type="text" class="form-control inputt" name="panel_in" id="input-panel-in" aria-describedby="textHelp" placeholder="Enter text">
              </div>
              <div class="form-group" style="padding-top: 0px;">
                <label for=""  class="text-dark labell">Distribution</label>
                <select class="inputt" id="select-distrib" style="overflow: auto;" name="distrib">
                  <option value="" class="text-dark">Distribusi</option>
                  <option value="D01" class="text-dark">D01</option>
                  <option value="D02" class="text-dark">D02</option>
                  <option value="D03" class="text-dark">D03</option>
                  <option value="D04" class="text-dark">D04</option>
                  <option value="D05" class="text-dark">D05</option>
                  <option value="D06" class="text-dark">D06</option>
                  <option value="D07" class="text-dark">D07</option>
                  <option value="D08" class="text-dark">D08</option>
                  <option value="D09" class="text-dark">D09</option>
                  <option value="D010" class="text-dark"> D010</option>
                  <option value="D011" class="text-dark"> D011</option>
                  <option value="D012" class="text-dark"> D012</option>
                </select>
              </div>
            </div>
            <!-- end kanan -->
            <!-- kiri -->
            <div class="col-5">
              <div class="form-group" >
                <label for=""  class="text-dark labell">Alpro</label>
                <select class="selectt" id="select-id-alpro" style="overflow: auto;" name="id_alpro">
                  <option value="0" class="text-dark">Alpro</option>
                  <option value="1" class="text-dark">ODC-GSK-FAB</option>
                  <option value="2" class="text-dark">ODC-GSK-FAK</option>
                  <option value="3" class="text-dark">ODC-GSK-FB</option>
                  <option value="4" class="text-dark">ODC-GSK-FG</option>
                  <option value="5" class="text-dark">ODC-GSK-FM</option>
                  <option value="6" class="text-dark">FTM-GSK-01</option>
                </select>
              </div>
              <div class="form-group" style="padding-top: 0px;">
                <label  for="" class=" labell text-dark">Port</label>
                <input type="number" class="form-control inputt" name="id_port" disabled id="input-id-port" aria-describedby="textHelp" placeholder="" value="">
              </div>
              <div class="form-group" style="padding-top: 0px;">
                <label  for="" class="text-dark labell">Out</label>
                <select class="selectt" id="select-panel-out-splitter" style="overflow: auto;" name="panel_out_splitter" >
                  <option value="" class="text-dark">Spliter</option>
                  <option value="SPL-A" class="text-dark">SPL-A</option>
                  <option value="SPL-B" class="text-dark">SPL-B</option>
                  <option value="SPL-C" class="text-dark">SPL-C</option>
                  <option value="SPL-D" class="text-dark">SPL-D</option>
                  <option value="SPL-E" class="text-dark">SPL-E</option>
                  <option value="SPL-F" class="text-dark">SPL-F</option>
                  <option value="SPL-G" class="text-dark">SPL-G</option>
                  <option value="SPL-H" class="text-dark">SPL-H</option>
                  <option value="SPL-I" class="text-dark">SPL-I</option>
                  <option value="SPL-J" class="text-dark">SPL-J</option>
                  <option value="SPL-K" class="text-dark">SPL-K</option>
                  <option value="SPL-L" class="text-dark">SPL-L</option>
                  <option value="SPL-M" class="text-dark">SPL-M</option>
                  <option value="SPL-N" class="text-dark">SPL-N</option>
                  <option value="SPL-O" class="text-dark">SPL-O</option>
                  <option value="SPL-P" class="text-dark">SPL-P</option>
                  <option value="SPL-Q" class="text-dark">SPL-Q</option>
                  <option value="SPL-R" class="text-dark">SPL-R</option>
                  <option value="SPL-S" class="text-dark">SPL-S</option>
                  <option value="SPL-T" class="text-dark">SPL-T</option>
                  <option value="SPL-U" class="text-dark">SPL-U</option>
                  <option value="SPL-V" class="text-dark">SPL-V</option>
                  <option value="SPL-W" class="text-dark">SPL-W</option>
                  <option value="SPL-X" class="text-dark">SPL-X</option>
                  <option value="SPL-Y" class="text-dark">SPL-Y</option>
                  <option value="SPL-Z" class="text-dark">SPL-Z</option>
                  <option value="SPL-AA" class="text-dark">SPL-AA</option>
                  <option value="SPL-AB" class="text-dark">SPL-AB</option>
                  <option value="SPL-AC" class="text-dark">SPL-AC</option>
                  <option value="SPL-AD" class="text-dark">SPL-AD</option>
                  <option value="SPL-AE" class="text-dark">SPL-AE</option>
                  <option value="SPL-AF" class="text-dark">SPL-AF</option>
                  <option value="SPL-AG" class="text-dark">SPL-AG</option>
                  <option value="SPL-AH" class="text-dark">SPL-AH</option>
                  <option value="SPL-AI" class="text-dark">SPL-AI</option>
                  <option value="SPL-AJ" class="text-dark">SPL-AJ</option>
                  <option value="SPL-AK" class="text-dark">SPL-AK</option>
                  <option value="SPL-AL" class="text-dark">SPL-AL</option>
                  <option value="SPL-AM" class="text-dark">SPL-AM</option>
                  <option value="SPL-AN" class="text-dark">SPL-AN</option>
                  <option value="SPL-AO" class="text-dark">SPL-AO</option>
                  <option value="SPL-AP" class="text-dark">SPL-AP</option>
                  <option value="SPL-AQ" class="text-dark">SPL-AQ</option>
                  <option value="SPL-AR" class="text-dark">SPL-AR</option>
                  <option value="SPL-AS" class="text-dark">SPL-AS</option>
                  <option value="SPL-AT" class="text-dark">SPL-AT</option>
                  <option value="SPL-AU" class="text-dark">SPL-AU</option>
                  <option value="SPL-AV" class="text-dark">SPL-AV</option>
                  <option value="SPL-AW" class="text-dark">SPL-AW</option>
                  <option value="SPL-AX" class="text-dark">SPL-AX</option>
                  <option value="SPL-AY" class="text-dark">SPL-AY</option>
                  <option value="SPL-AZ" class="text-dark">SPL-AZ</option>
                  <option value="STUB" class="text-dark"><strong>STUB</strong></option>
                </select>
                <input class="inputt" type="text" class="form-control" name="panel_out_odp" id="input-panel-out-odp" aria-describedby="textHelp" placeholder="Input ODP">
              </div>
            </div>
            <!-- end kiri -->
            <div class="col-1"></div>
            <!-- <div class="form-group">
            <label for="" style="margin-bottom: -1px; font-size: 14px;" class="text-dark">Alpro</label>
            <input style="font-size: 14px; background-color: #e6d6d4;" class="form-control" id="select-id-alpro" name="id_alpro" aria-describedby="textHelp" readonly="">
          </div> -->



        </div>
      </div>
      <div class="modal-footer">
        <!-- <a class="btn btn-secondary" data-dismiss="modal">Close</a> -->
        <button type="submit" class="danger" id="buttonDeleteData">Delete Data</button>
        <button type="submit" class="primary" id="buttonSaveData">Save changes</button>
      </div>
    </form>
  </div>
</div>
</div>
<!-- modal edit data -->
<script type="text/javascript">
  function deleteData(id_record)
  {
    $.get('readsigledata.php', {id_record : id_record, tabel: "tb_feeder"} , function(res){
      var res = JSON.parse(res);
      $("#modalDeleteData").modal("show");
      $("#input-delete-id-record").val(res.id);
    });
  }
  function dissableODP(){
    $("#select-panel-out-splitter").removeAttr('disabled');
    $("#input-panel-out-odp").attr('disabled','disabled');
  }
  function dissableSplitter(){
    $("#select-panel-out-splitter").attr('disabled','disabled');
    $("#input-panel-out-odp").removeAttr('disabled');
  }



    $( document ).ready(function() {
      $('#formAddData').submit(function(event) {
        event.preventDefault();
      $('#buttonSaveData').text('creating...'); //change button text
        $('#buttonSaveData').attr('disabled',true); //set button disable
        var formData = new FormData($('#formAddData')[0]);
        $.ajax({
          url : "insertftm.php",
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          success: function(data)
          {
                $('#buttonSaveData').attr('disabled',false); //set button enable
                $('#modalAddData').modal('hide');
                $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                $("#formAddData")[0].reset();
          $('#buttonSaveData').text('Submit'); //change button text
          window.location.replace('./layoutftm.php?alpro=<?php echo $_GET['alpro'];?>&tb_ftm=<?php echo $_GET['tb_ftm'];?>&tb_panel=<?php echo $_GET['tb_panel'];?>');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
          console.log(jqXHR, textStatus, errorThrown);
                $('#buttonSaveData').text('eror'); //change button text
                $('#buttonSaveData').attr('disabled',false); //set button enable
            }
        });
      });
    });


    function editData(id_port,id_panel)
    {
      $.get('readsigledata.php', {id_port : id_port, id_panel : id_panel, tabel: "tb_feeder"} , function(res){
  			var res = JSON.parse(res);
  			$("#modalEditData").modal("show");
  			$("#select-id-alpro").val(res.id_alpro);
  			$("#input-id-record").val(res.id);
  			$("#input-id-panel").val(res.id_panel);
  			$("#input-id-port").val(res.id_port);
  			$("#input-panel-in").val(res.panel_in);
  			$("#select-panel-out-splitter").val(res.panel_out_splitter);
  			$("#input-panel-out-odp").val(res.panel_out_odp);
  			$("#select-distrib").val(res.distrib);
  		});
    }

    function saveEditData(){
    $('#buttonSaveEditData').text('editting...'); //change button text
      $('#buttonSaveEditData').attr('disabled',true); //set button disable
      var formData = new FormData($('#formEditData')[0]);
      $.ajax({
        url : "submiteditdata.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data)
        {
              $('#buttonSaveEditData').attr('disabled',false); //set button enable
        $('#buttonSaveEditData').text('Update'); //change button text
        $('#modalEditData').modal('hide');
        window.location.replace('./layoutftm.php');

        $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
        $("#formEditData")[0].reset();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        console.log(jqXHR, textStatus, errorThrown);
              $('#buttonSaveEditData').text('error'); //change button text
              $('#buttonSaveEditData').attr('disabled',false); //set button enable
          }
      });
    }

    function saveDeleteData(){
    $('#buttonSaveDeleteData').text('deleting...'); //change button text
      $('#buttonSaveDeleteData').attr('disabled',true); //set button disable
      var formData = new FormData($('#formDeleteData')[0]);
      $.ajax({
        url : "submitdeletedata.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data)
        {
              $('#buttonSaveDeleteData').attr('disabled',false); //set button enable
        $('#buttonSaveDeleteData').text('Delete'); //change button text
        $('#modalDeleteData').modal('hide');
        window.location.replace('./layoutftm.php?alpro=<?php echo $_GET['alpro'];?>&tb_ftm=<?php echo $_GET['tb_ftm'];?>&tb_panel=<?php echo $_GET['tb_panel'];?>');

        $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        console.log(jqXHR, textStatus, errorThrown);
              $('#buttonSaveDeleteData').text('eror'); //change button text
              $('#buttonSaveDeleteData').attr('disabled',false); //set button enable
          }
      });
    }
    $('#modalDeleteData').on('shown.bs.modal', function () {
      $('#modalEditData').modal('hide')
    })

</script>
