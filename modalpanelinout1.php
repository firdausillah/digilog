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
        <div class="modal-body text-dark">
          <div class="row gtr-uniform" >
            <!-- <div class="form-group">
            <label for="" style="margin-bottom: -1px; font-size: 14px;" class="text-dark">Alpro</label>
            <input style="font-size: 14px; background-color: #e6d6d4;" class="form-control" id="select-edit-id-alpro" name="id_alpro" aria-describedby="textHelp" readonly="">
          </div> -->
          <div class="form-group">
            <label style="margin-bottom: -1px; font-size: 14px;"  for="" class="text-dark">Record</label>
            <input style="color: black; font-size: 14px;" type="number" class="form-control" name="id_record" id="input-edit-id-record" aria-describedby="textHelp" placeholder="" readonly="">
          </div>

          <div class="form-group" style="margin-left: 0px;">
            <label for="" style="margin-bottom: -1px; font-size: 13px;" class="text-dark">Alpro</label>
            <select style="font-size: 14px; background-color: #e6d6d4;" id="select-edit-id-alpro" style="overflow: auto;" name="id_alpro">
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
            <label style="margin-bottom: -1px; font-size: 14px;" for="" class="text-dark">Panel</label>
            <input style=" font-size: 14px;" style="color: black;" type="number" class="form-control" name="id_panel" id="input-edit-id-panel" aria-describedby="textHelp" placeholder="">
          </div>
          <div class="form-group" style="padding-top: 0px;">
            <label style="margin-bottom: -1px; font-size: 14px;" for="" class="text-dark">Port</label>
            <input style=" font-size: 14px;" type="number" class="form-control" name="id_port" id="input-edit-id-port" aria-describedby="textHelp" placeholder="Enter text">
          </div>
          <div class="form-group" style="padding-top: 0px;">
            <label for="" style=" font-size: 13px; margin-bottom: -1px;" class="text-dark">In</label>
            <input style=" font-size: 14px;" type="text" class="form-control" name="panel_in" id="input-edit-panel-in" aria-describedby="textHelp" placeholder="Enter text">
          </div>
          <div class="form-group" style="padding-top: 0px;">
            <label style=" margin-bottom: -1px; font-size: 13px;" for="" class="text-dark">Out</label>
            <select style="font-size: 14px; background-color: #e6d6d4;" id="select-edit-panel-out-splitter" style="overflow: auto;" name="panel_out_splitter" >
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
            <input style=" font-size: 14px; margin-top: 5px; background-color: #e6d6d4;" type="text" class="form-control" name="panel_out_odp" id="input-edit-panel-out-odp" aria-describedby="textHelp" placeholder="Input ODP">
          </div>
          <div class="form-group" style="padding-top: 0px;">
            <label for="" style="margin-bottom: -1px; font-size: 14px;" class="text-dark">Distribution</label>
            <select style="font-size: 14px; background-color: #e6d6d4;" id="select-edit-distrib" style="overflow: auto;" name="distrib">
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
      </div>
      <div class="modal-footer">
        <!-- <a class="btn btn-secondary" data-dismiss="modal">Close</a> -->
        <button type="submit" class="primary" id="buttonSaveEditData">Save changes</button>
      </div>
    </form>
  </div>
</div>
</div>
<!-- modal edit data -->
