<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="http://static.runoob.com/assets/js/jquery-treeview/jquery.treeview.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://static.runoob.com/assets/js/jquery-treeview/jquery.treeview.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:400,500,700&amp;subset=chinese-traditional" rel="stylesheet">
<script src="../js/Project.js"></script>


<body style="background-color:  #f0f0f0">

<script>
$(document).ready(function() {
      $("#browser").treeview({
          toggle: function() {
              console.log("%s was toggled.", $(this).find(">span").text());
          }
      });

      $("#add").click(function() {
          var branches = $("<li><span class='fa fa-plus-square'>New Sublist</span><ul>" +
              "<li><span class='fa fa-minus-square'>Item1</span></li>" +
              "<li><span class='fa fa-minus-square'>Item2</span></li></ul></li>").appendTo("#browser");
          $("#browser").treeview({
              add: branches
          });
      });
  });

  $('#myModal').on('shown.bs.modal',
      function() {
          $('#myInput').trigger('focus');
          $('#exampleModal').on('show.bs.modal',
              function(event) {
                  var button = $(event.relatedTarget); // Button that triggered the modal
                  var recipient = button.data('whatever'); // Extract info from data-* attributes
                  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                  var modal = $(this).find('.modal-title').text('New message to ' + recipient).find('.modal-body input').val(recipient);
              });
      });
</script>
<style >
.treeview, .treeview ul {
  padding: 0;
  margin: 0;
}

.treeview ul {
  background-color:  #f0f0f0;
  margin-top: 5px;
}

.treeview .hitarea {
  background:  #f0f0f0;
  height: 10px;
  width: 10px;
  margin-left: -15px;
  float: left;
  cursor: pointer;
}
/* fix for IE6 */
* html .hitarea {
  display: inline;
  float:none;
}

.treeview li {
  margin: 0;
  padding: 5px 0pt 5px 16px;
}

.treeview a.selected {
  background-color: #f0f0f0;
}
.gridDiv
{
	min-height: 180px;
}

.dialog{
      position:fixed;top:180px;left:50%;transform:translate(-100px,0px); width:350px;
      border:1px solid #770077 ;
      background-color:#AAFFEE;
      box-shadow:0px 0px 20px #FFFF33;
      display:none;
      padding:30px;
}

.dialog>.close{
      position:absolute; top:0px ;right:5px ; cursor:pointer;
}
.word{
      font-family:serif;
}
</style>
<div class="row">
    <div class="col"></div>
    <div class="col-6"><br>
    <img src="../img/Logo.png" class="rounded mx-auto d-block" alt="...">
    </div>
    <div class="col">
    <div style="text-align:right";>
    <button class="btn" onclick="location.href='logout.php'"><i class="fa fa-power-off"></i></button>
</div>
    </div>
</div>
<br><br>
</head>

<body>

<div class="row">
  <div class="col-sm-2">
      <ul id="browser" class="fa fa-minus-squaretree treeview-famfamfam">
      &emsp;<button class="btn btn-primary" id = "example-popover" title="????????????" data-toggle="popover" data-trigger="hover"
            data-html="true" data-content="Some content" style="font-family: 'Noto Sans TC', sans-serif; font-size:14px; font-style: normal;" >????????????
      </button>
                  <li class="closed"><span class="fa fa-plus-square">????????????</span>
                        <ul>
                            <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('E_U');">?????????</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">???????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_UMA');">???????????????(?????????)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_UST');">???????????????(?????????)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_M');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_MST');">???????????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">?????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CHEML_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CHEML_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">???????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('LF_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('LF_M');">?????????????????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">?????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_UPH');">?????????(?????????)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_UN');">????????????????????????(?????????)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_MN');">??????????????????????????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_MI');">??????????????????????????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">???????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CSIE_UN');">?????????(?????????)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CSIE_UI');">?????????(?????????)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CSIE_MN');">?????????(?????????)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CSIE_MI');">?????????(?????????)</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">???????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MS_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MS_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EE_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EE_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('OE_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('OE_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">????????????</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MSF_U');">?????????</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">?????????????????????????????????????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MA_U');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('BM_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('BM_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IB_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IB_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ACCT_U');">?????????</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">?????????????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ACCT_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IM_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IM_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('FIN_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('FIN_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">?????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('GSL_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">???????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TRLS_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TRLS_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">????????????????????????</span>
                        <ul>
                               <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('HASS_U');">?????????</a></span></li>
                               <li class="closed"><span class="fa fa-plus-square">???????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SILII_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SILII_M');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SILII_MD');">?????????(?????????)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SILII_MC');">????????????????????????(?????????)</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EL_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EL_MT');">???????????????(?????????)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EL_MM');">???????????????(?????????)</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('HIST_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('HIST_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">???????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CP_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CP_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EC_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EC_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CLL_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CLL_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TS_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TS_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SD_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SD_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PA_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PA_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">?????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('FEL_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('UPOL_U');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">???????????????????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('UPIL_U');">?????????</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CIS_U');">?????????</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">???????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ERC_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ERC_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">???????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('LCL_U');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">???????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IDSW_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IDSW_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">????????????????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ISW_U');">?????????</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">????????????</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AD_U');">?????????</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ACI_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ACI_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MUS_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MUS_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">?????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AD_UU');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AD_MM');">?????????</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CE_U');">?????????</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ECE_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ECE_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SPE_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SPE_M');">????????????????????????????????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">???????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EAM_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EAM_M');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EAM_MM');">???????????????????????????(?????????)</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">???????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CDPD_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CDPD_M');">???????????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ME_M');">???????????????????????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SCE_M');">?????????????????????</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PE_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PE_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">????????????</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CES_U');">?????????</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">???????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('NRE_U');">?????????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('NRE_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">?????????????????????????????????</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('HES_M');">?????????</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">????????????</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MBE_M');">?????????????????????</a></span></li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TH_U');">????????????(?????????)</a></span></li>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EP_U');">????????????(?????????)</a></span></li>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ETH_U');">??????????????????????????????(?????????)</a></span></li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">??????????????????</span>
                        <ul>
                              <li class="closed"><span class="fa fa-plus-square">???????????????(??????)</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('GC_U');">??????</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('YY_U');">???????????????</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
      </ul>
</div>

<!-------------------------------???????????????----------------------->

<div class="col-sm-9">
<table  class="table table-bordered table-hover" id = tb_body1>

      <th scope="col">????????????</th>
      <th scope="col">????????????</th>
      <th scope="col">?????????  </th>
      <th scope="col">??????    </th>
      <th scope="col">????????????</th>
      <th scope="col">????????????</th>
      <th scope="col">????????????</th>
      <th scope="col">????????????</th>
      <th scope="col">????????????</th>
      <th scope="col">????????????</th>

  </table>


<script>

function viewCourse() {
	var turn = 0;
	var indexOfCouse = 0;
	getTurn(
		function (currentTurn) {

			function addCourssetoArr(error, course_id) {
				if (!error){
					console.log("currentTurn"+currentTurn);
					if(turn >= currentTurn){
						return ;
					} else if(course_id == ""){
						turn++;
						indexOfCouse = 0;
						console.log("empty");
						console.log("turn = "+turn);
					} else {
						console.log("courseData : "+course_id);
						indexOfCouse++;
						$.ajax({
                                          type: "POST",
                                          url: "import_course.php",
                                          async: true,
                                          data: {
                                                'current_course': course_id
                                          },
                                          datatype: 'JSON',
                                          success: function (msg) {

                                                var data = JSON.parse(msg);
                                                var str;
                                                for (var i in data) {
                                                            var datas = "\"" + data[i].course_code + "\"";
                                                      str = "<tr><th>" +
                                                            "<a>" + data[i].course_code + "</a></th>" +
                                                            "<th>" + data[i].course_name + "</th>" +
                                                            "<th>" + data[i].required_ornot + "</th>" +
                                                            "<th>" + data[i].teacher + "</th>" +
                                                            "<th>" + data[i].time + "</th>" +
                                                            "<th>" + data[i].classroom + "</th>" +
                                                            "<th>" + data[i].credit + "</th>" +
                                                            "<th>" + data[i].max_student + "</th>" +
                                                            "<th>" + data[i].field + "</th>" +
                                                            "<th>" + data[i].PS + "</th></tr>";
                                                            document.getElementById('tb_body1').insertAdjacentHTML('beforeend', str);

                                                }
                                          },
                                          error: function (xhr, ajaxOptions, thrownError) {
                                                alert(xhr.status);
                                                alert(thrownError);
                                          }
                                    });
					}

					ContractInstance.GetCourseData(turn,currnetWallet,indexOfCouse, addCourssetoArr);
				} else
					console.error(error);
			}

			var result = ContractInstance.GetCourseData(turn,currnetWallet,indexOfCouse, addCourssetoArr);

		}
	);


}

</script>

<br>

<table cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_grd_subjs" style="width:100%;border-collapse:collapse;">
    <tr>

      <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"
        style="font-family: 'Noto Sans TC', sans-serif; font-size:16px;"> ??????????????????
      </button>

      <div class="modal fade bd-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
             <div class="modal-header">
              <p style="font-family: 'Noto Sans TC', sans-serif; font-size:30px; font-style: normal;">??????????????????</p>

              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
              </button>
            </div>
            <div class="modal-body">
               <form name="form1" method="post">
                  <span style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;"> ????????????: </span>
                  <input name="Course_name" type="text" maxlength="64" id="Course_name"><br>
                  <br>
                  <span style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;">????????????:</span>
                  <input name="Course_te" type="text" maxlength="64" id="Course_te"><br>
                  <br>
                  <span style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;">????????????:</span>
                  <input name="Course_time" type="text" maxlength="24" id="Course_time"><br>
                  <br>
                  <span style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;">????????????:</span>
                  <input name="Course_room" type="text" maxlength="24" id="Course_room"><br>
                  <br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>

              <button type="sumit" class="btn btn-primary btn-lg" id = "submit"
                      style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;">??????
              </button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal -->
      </div>
<!---------------------------- ??????????????????????????? ---------------------------->

<table  class="table table-bordered table-hover" id = tb_body>
<th scope="col">????????????</th>
      <th scope="col">????????????</th>
      <th scope="col">?????????  </th>
      <th scope="col">??????    </th>
      <th scope="col">????????????</th>
      <th scope="col">????????????</th>
      <th scope="col">????????????</th>
      <th scope="col">????????????</th>
      <th scope="col">????????????</th>
      <th scope="col">????????????</th>

<?php
if (isset($_POST["Course_name"]) || isset($_POST["Course_te"]) || isset($_POST["Course_room"])) {
    searchCourse();
}

function searchCourse()
{
    include "mysql_connect.inc.php";

    $nameTF = isset($_POST["Course_name"]);
    $teTF = isset($_POST["Course_te"]);
    $roomTF = isset($_POST["Course_room"]);

    if ($nameTF) {
        $Course_name = $_POST["Course_name"];
    }

    if ($teTF) {
        $Course_te = $_POST["Course_te"];
    }

    if ($roomTF) {
        $Course_room = $_POST["Course_room"];
    }

    $sql_select = "SELECT * FROM course where course_name like '%$Course_name%' and teacher like '%$Course_te%' and  classroom like '%$Course_room%'";

    //3.data ??????
    $result = mysqli_query($conn, $sql_select);

    while ($row = mysqli_fetch_row($result)) {
        $a = "\"";
        $course_code = $a . $row[0] . $a;
        $course_name = $a . $row[1] . $a;
        $course_std = $a . $row[7] . $a;
        echo "<tr><th><a href=javascript:void(0); onclick='bid($course_code);'>$row[0]</a></th>";
        echo "<th>$row[1] </th>";
        echo "<th>$row[2] </th>";
        echo "<th>$row[3] </th>";
        echo "<th>$row[4] </th>";
        echo "<th>$row[5] </th>";
        echo "<th>$row[6] </th>";
        echo "<th>$row[7] </th>";
        echo "<th>$row[8] </th>";
        echo "<th>$row[9] </th></td></tr>";
    }
}
?>

</tr>
</table>
</div>
</div>

<?php

include "mysql_connect.inc.php";

//?????????????????????????????????????????????
//?????????????????????????????????????????????
//???????????????popover
if ($_SESSION['username'] != null) {

    $id = $_SESSION['username'];
    //??????????????????????????????????????????????????????
    $sql = "SELECT * FROM member where username ='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
    $name = $row[0];
    $phone = $row[3];
    $birthday = $row[4];
    $wallet = $row[5];
    $money = $row[6];

} else {
    echo '???????????????????????????!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>

<style type="text/css">
      .popover{
            max-width:650px;
}
</style>

<!--web????????????-->
<div id ="hid">
      <p id="text5" name="text5"></p>
</div>


<div id="popover_content_wrapper" style="display: none">

      <div><i class="fa fa-user-circle"></i> : <?php echo $name; ?></div>
      <div><i class="fa fa-id-card"></i> : <?php echo $id; ?></div>
      <div><i class="fa fa-phone"></i>  :  <?php echo $phone; ?></div>
      <div><i class="fa fa-birthday-cake"></i> : <?php echo $birthday; ?></div>
      <div><i class="fa fa-credit-card-alt"></i> : <span id="money" class="display: inline;"><?php echo $money; ?></span></div>

</div>

<script>


$('#example-popover').popover({});
var popover = $('#example-popover').data('popover');

function updateInfo() {
      $('#example-popover').attr('data-content', $('#popover_content_wrapper').html());
}
setTimeout(updateInfo ,1000);
</script>
</form>
</body>
</html>
