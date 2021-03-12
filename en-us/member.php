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
      &emsp;<button class="btn btn-primary" id = "example-popover" title="學生資訊" data-toggle="popover" data-trigger="hover"
            data-html="true" data-content="Some content" style="font-family: 'Noto Sans TC', sans-serif; font-size:12px; font-style: normal;" >Profile
      </button>
                  <li class="closed"><span class="fa fa-plus-square">COLLEGE OF SCIENCE AND ENGINEERING</span>
                        <ul>
                            <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('E_U');">BACHELOR</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF APPLIED MATHEMATICS</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_UMA');">DIVISION OF MATHEMATICAL SCIENCE</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_UST');">DIVISION OF STATISTICAL SCIENCE</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_M');">MASTER</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_MST');">MASTER PROGRAM OF STATISTICS</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF CHEMISTRY</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CHEML_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CHEML_M');">MASTER PROGRAM OF CHEMISTRY</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF LIFE SCIENCE</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('LF_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('LF_M');">MASTER PROGRAM OF BIOTECHNOLOGY</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF PHYSICS</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_UPH');">DIVISION OF PHYSICS</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_UN');">DIVISION OF NANO AND PHOTOELECTRIC SCIENCE</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_MN');">DIVISION OF NANO AND PHOTOELECTRIC SCIENCE</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_MI');">INTERNATIONAL MASTER PROGRAM OF APPLIED PHYSICS</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF COMPUTER SCIENCE AND INFORMATION ENGINEERING </span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CSIE_UN');">BACHELOR PROGRAM</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CSIE_UI');">BACHELOR PROGRAM OF COMPUTER SCIENCE AND INFORMATION ENGINEERING (INTERNATIONAL)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CSIE_MN');">MASTER PROGRAM</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CSIE_MI');">MASTER PROGRAM OF COMPUTER SCIENCE AND INFORMATION ENGINEERING (INTERNATIONAL)</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF MATERIALS SCIENCE AND ENGINEERING</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MS_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MS_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF ELECTRICAL ENGINEERING</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EE_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EE_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF OPTO-ELECTRONIC ENGINEERING</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('OE_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('OE_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">COLLEGE OF MANAGEMENT</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MSF_U');">BACHELOR</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">BACHELOR PROGRAM OF MANAGEMENT SCIENCE AND FINANCE (INTERNATIONAL PROGRAM)</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MA_U');">BACHELOR</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF BUSINESS ADMINISTRATION</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('BM_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('BM_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF INTERNATIONAL BUSINESS</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IB_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IB_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF ACCOUNTING</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ACCT_U');">BACHELOR</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">MASTER OF ACCOUNTING AND FINANCE PROGRAM</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ACCT_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF INFORMATION MANAGEMENT</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IM_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IM_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF FINANCE</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('FIN_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('FIN_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF TOURISM, RECREATION AND LEISURE STUDIES</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('GSL_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF TOURISM, RECREATION AND LEISURE STUDIES</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TRLS_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TRLS_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">COLLEGE OF HUMANITIES AND SOCIAL SCIENCES</span>
                        <ul>
                               <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('HASS_U');">BACHELOR</a></span></li>
                               <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF SINOPHONE LITERATURES</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SILII_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SILII_M');">MASTER</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SILII_MD');">DIVISION OF CREATIVE WRITING</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SILII_MC');">DIVISION OF LITERATURE AND CULTURAL STUDIES</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF ENGLISH</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EL_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EL_MT');">DIVISION OF TEACHING ENGLISH TO SPEAKERS OF OTHER LANGUAGES</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EL_MM');">DIVISION OF LITERATURE AND MEDIA</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF HISTORY</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('HIST_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('HIST_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF COUNSELING AND CLINICAL PSYCHOLOGY</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CP_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CP_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF ECONOMICS</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EC_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EC_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF CHINESE LANGUAGE AND LITERATURE</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CLL_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CLL_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">Collapse DEPARTMENT OF TAIWAN AND REGIONAL STUDIES </span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TS_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TS_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF SOCIOLOGY</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SD_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SD_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF PUBLIC ADMINISTRATION</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PA_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PA_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">GRADUATE INSTITUTE OF FINANCIAL AND ECONOMIC LAW</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('FEL_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF LAW</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('UPOL_U');">BACHELOR</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">INDIGENOUS LAW PROGRAM</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('UPIL_U');">BACHELOR</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">COLLEGE OF INDIGENOUS STUDIES</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CIS_U');">BACHELOR</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF ETHNIC RELATIONS AND CULTURES</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ERC_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ERC_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">Collapse DEPARTMENT OF INDIGENOUS LANGUAGES AND COMMUNICATION </span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('LCL_U');">BACHELOR</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF INDIGENOUS AFFAIRS AND DEVELOPMENT</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IDSW_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IDSW_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">Collapse UNDERGRADUATE PROGRAM OF INDIGENOUS SOCIAL WORK </span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ISW_U');">BACHELOR</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">COLLEGE OF THE ARTS</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AD_U');">BACHELOR</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF ARTS AND CREATIVE INDUSTRIES</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ACI_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ACI_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF MUSIC</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MUS_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MUS_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF ARTS AND DESIGN</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AD_UU');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AD_MM');">MASTER</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">HUA-SHIH COLLEGE OF EDUCATION</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CE_U');">BACHELOR</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF EARLY CHILDHOOD EDUCATION</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ECE_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ECE_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF SPECIAL EDUCATION</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SPE_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SPE_M');">MASTER PROGRAM OF INDIVIDUALS WITH SPECIAL NEEDS AND ASSISTIVE TECHNOLOGY</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">MASTER PROGRAM OF INDIVIDUALS WITH SPECIAL NEEDS AND ASSISTIVE TECHNOLOGY</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EAM_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EAM_M');">MASTER</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EAM_MM');">EXTENSIVE MASTER PROGRAM OF SCHOOL ADMINISTRATION</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF EDUCATION AND HUMAN POTENTIALS DEVELOPMENT</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CDPD_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CDPD_M');">MASTER PROGRAM OF EDUCATION</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ME_M');">MASTER PROGRAM OF MULTICULTURAL EDUCATION</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SCE_M');">MASTER PROGRAM OF SCIENCE EDUCATION</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">DEPARTMENT OF PHYSICAL EDUCATION AND KINESIOLOGY</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PE_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PE_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">COLLEGE OF ENVIRONMENTAL STUDIES</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CES_U');">BACHELOR</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">COLLEGE OF ENVIRONMENTAL STUDIES</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('NRE_U');">BACHELOR</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('NRE_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">MASTER OF HUMANITY AND ENVIRONMENTAL SCIENCE PROGRAM</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('HES_M');">MASTER</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">COLLEGE OF MARINE SCIENCES</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MBE_M');">GRADUATE INSTITUTE OF MARINE BIOLOGY</a></span></li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">CENTER FOR TEACHER EDUCATION</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TH_U');">CENTER FOR TEACHER EDUCATION</a></span></li>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EP_U');">EDUCATION PROGRAM FOR SECONDARY TEACHER EDUCATION</a></span></li>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ETH_U');">THE PROGRAM FOR PROMOTING SPECIALTIES OF PROMINENT TEACHER-TO-BE OF NDHU</a></span></li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">GENERAL EDUCATION CENTER</span>
                        <ul>
                              <li class="closed"><span class="fa fa-plus-square">Core Courses(For Freshman)</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('GC_U');">Languages</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('YY_U');">Physical Education and Military Training</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
      </ul>
</div>

<!-------------------------------最上面預排----------------------->

<div class="col-sm-9">
<table  class="table table-bordered table-hover" id = tb_body1>

      <th scope="col">Course No.</th>
      <th scope="col">Course name</th>
      <th scope="col">Required/Optional</th>
      <th scope="col">Lecturer </th>
      <th scope="col">Time</th>
      <th scope="col">Classroom</th>
      <th scope="col"> Credits/Hours</th>
      <th scope="col">Student Maximum</th>
      <th scope="col"> Liberal Education</th>
      <th scope="col">Remark</th>

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
        style="font-family: 'Noto Sans TC', sans-serif; font-size:16px;"> Conditional query course
      </button>

      <div class="modal fade bd-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
             <div class="modal-header">
              <p style="font-family: 'Noto Sans TC', sans-serif; font-size:30px; font-style: normal;">開放課程查詢</p>

              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
              </button>
            </div>
            <div class="modal-body">
               <form name="form1" method="post">
                  <span style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;"> Course:  &nbsp;&nbsp; </span>
                  <input name="Course_name" type="text" maxlength="64" id="Course_name"><br>
                  <br>
                  <span style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;">Lecturer: </span>
                  <input name="Course_te" type="text" maxlength="64" id="Course_te"><br>
                  <br>
                  <span style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;">Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                  <input name="Course_time" type="text" maxlength="24" id="Course_time"><br>
                  <br>
                  <span style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;">Classroom: </span>
                  <input name="Course_room" type="text" maxlength="24" id="Course_room"><br>
                  <br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>

              <button type="sumit" class="btn btn-primary btn-lg" id = "submit"
                      style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;">OK/Confirm
              </button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal -->
      </div>
<!---------------------------- 顯示所有資工系課程 ---------------------------->

<table  class="table table-bordered table-hover" id = tb_body>
<th scope="col">Course No.</th>
      <th scope="col">Course Name</th>
      <th scope="col">Required/Optional</th>
      <th scope="col">Lecturer</th>
      <th scope="col">Time</th>
      <th scope="col">Classroom</th>
      <th scope="col">Credits  </th>
      <th scope="col">Student Maximum</th>
      <th scope="col">Liberal Education</th>
      <th scope="col">Remark</th>

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

    //3.data 解析
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

//此判斷為判定觀看此頁有沒有權限
//路人或不相關的使用者要給予排除
//資料應用於popover
if ($_SESSION['username'] != null) {

    $id = $_SESSION['username'];
    //將資料庫裡的所有會員資料顯示在畫面上
    $sql = "SELECT * FROM member where username ='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
    $name = $row[0];
    $phone = $row[3];
    $birthday = $row[4];
    $wallet = $row[5];
    $money = $row[6];

} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>

<style type="text/css">
      .popover{
            max-width:650px;
}
</style>

<!--web端暫存器-->
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
