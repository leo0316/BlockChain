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
            data-html="true" data-content="Some content" style="font-family: 'Noto Sans TC', sans-serif; font-size:14px; font-style: normal;" >個人資訊
      </button>
                  <li class="closed"><span class="fa fa-plus-square">理工學院</span>
                        <ul>
                            <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('E_U');">學士班</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">應用數學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_UMA');">數學科學組(學士班)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_UST');">統計科學組(學士班)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_M');">碩士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AM_MST');">統計碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">化學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CHEML_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CHEML_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">生命科學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('LF_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('LF_M');">生物技術碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">物理系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_UPH');">物理組(學士班)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_UN');">奈米與光電科學組(學士班)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_MN');">應用物理碩士班一般組</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PHY_MI');">應用物理碩士班國際組</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">資訊工程系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CSIE_UN');">資工組(學士班)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CSIE_UI');">國際組(學士班)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CSIE_MN');">資工組(碩士班)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CSIE_MI');">國際組(碩士班)</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">材料科學與工程學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MS_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MS_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">電機工程學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EE_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EE_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">光電工程學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('OE_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('OE_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">管理學院</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MSF_U');">學士班</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">管理學院管理科學與財金國際學士學位學程</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MA_U');">學士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">企業管理學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('BM_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('BM_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">國際企業學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IB_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IB_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">會計學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ACCT_U');">學士班</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">會計與財務碩士學位學程</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ACCT_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">資訊管理學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IM_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IM_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">財務金融學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('FIN_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('FIN_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">運籌管理研究所</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('GSL_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">觀光暨休閒遊憩學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TRLS_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TRLS_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">人文社會科學學院</span>
                        <ul>
                               <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('HASS_U');">學士班</a></span></li>
                               <li class="closed"><span class="fa fa-plus-square">華文文學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SILII_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SILII_M');">碩士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SILII_MD');">創作組(碩士班)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SILII_MC');">文學暨文化研究組(碩士班)</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">英美語文學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EL_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EL_MT');">英語教學組(碩士班)</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EL_MM');">文學媒體組(碩士班)</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">歷史學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('HIST_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('HIST_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">諮商與臨床心理學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CP_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CP_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">經濟學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EC_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EC_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">中國語文學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CLL_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CLL_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">臺灣文化學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TS_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TS_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">社會學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SD_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SD_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">公共行政學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PA_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PA_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">財經法律研究所</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('FEL_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">法律學士學位學程</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('UPOL_U');">學士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">法律學士學位學程原住民專班</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('UPIL_U');">學士班</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">原住民民族院</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CIS_U');">學士班</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">族群關係與文化學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ERC_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ERC_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">民族語言與傳播學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('LCL_U');">學士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">民族事務與發展學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IDSW_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('IDSW_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">民族社會工作學士學位學程</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ISW_U');">學士班</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">藝術學院</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AD_U');">學士班</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">藝術創意產業學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ACI_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ACI_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">音樂學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MUS_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MUS_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">藝術與設計學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AD_UU');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('AD_MM');">碩士班</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">花師教育學院</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CE_U');">學士班</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">幼兒教育學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ECE_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ECE_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">特殊教育學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SPE_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SPE_M');">身心障礙與輔助科技碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">教育行政與管理學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EAM_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EAM_M');">碩士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EAM_MM');">學校行政碩士學位班(碩士班)</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">教育與潛能開發學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CDPD_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CDPD_M');">教育碩士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ME_M');">多元文化教育碩士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('SCE_M');">科學教育碩士班</a></span></li>
                                    </ul>
                              </li>
                              <li class="closed"><span class="fa fa-plus-square">體育與運動科學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PE_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('PE_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">環境學院</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('CES_U');">學士班</a></span></li>
                              <li class="closed"><span class="fa fa-plus-square">自然資源與環境學系</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('NRE_U');">學士班</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('NRE_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                               <li class="closed"><span class="fa fa-plus-square">人文與環境碩士學位學程</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('HES_M');">碩士班</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">海洋學院</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('MBE_M');">海洋生物碩士班</a></span></li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">師資培育中心</span>
                        <ul>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('TH_U');">小學教育(學士班)</a></span></li>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('EP_U');">中學教育(學士班)</a></span></li>
                              <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('ETH_U');">卓越儲備教師增能學程(學士班)</a></span></li>
                        </ul>
                  </li>
                  <li class="closed"><span class="fa fa-plus-square">通識教育中心</span>
                        <ul>
                              <li class="closed"><span class="fa fa-plus-square">校核心課程(新生)</span>
                                    <ul>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('GC_U');">語文</a></span></li>
                                          <li><span class="fa fa-minus-square"><a href="javascript:departmentSelect('YY_U');">體育與軍訓</a></span></li>
                                    </ul>
                              </li>
                        </ul>
                  </li>
      </ul>
</div>

<!-------------------------------最上面預排----------------------->

<div class="col-sm-9">
<table  class="table table-bordered table-hover" id = tb_body1>

      <th scope="col">課程編號</th>
      <th scope="col">課程名稱</th>
      <th scope="col">必選修  </th>
      <th scope="col">教師    </th>
      <th scope="col">時間　　</th>
      <th scope="col">教室　　</th>
      <th scope="col">學分　　</th>
      <th scope="col">限修人數</th>
      <th scope="col">通識領域</th>
      <th scope="col">備註　　</th>

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
        style="font-family: 'Noto Sans TC', sans-serif; font-size:16px;"> 開放課程查詢
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
                  <span style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;"> 課程名稱: </span>
                  <input name="Course_name" type="text" maxlength="64" id="Course_name"><br>
                  <br>
                  <span style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;">授課教師:</span>
                  <input name="Course_te" type="text" maxlength="64" id="Course_te"><br>
                  <br>
                  <span style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;">上課時間:</span>
                  <input name="Course_time" type="text" maxlength="24" id="Course_time"><br>
                  <br>
                  <span style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;">上課教室:</span>
                  <input name="Course_room" type="text" maxlength="24" id="Course_room"><br>
                  <br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>

              <button type="sumit" class="btn btn-primary btn-lg" id = "submit"
                      style="font-family: 'Noto Sans TC', sans-serif; font-size:18px;">確定
              </button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal -->
      </div>
<!---------------------------- 顯示所有資工系課程 ---------------------------->

<table  class="table table-bordered table-hover" id = tb_body>
<th scope="col">課程編號</th>
      <th scope="col">課程名稱</th>
      <th scope="col">必選修  </th>
      <th scope="col">教師    </th>
      <th scope="col">時間　　</th>
      <th scope="col">教室　　</th>
      <th scope="col">學分　　</th>
      <th scope="col">限修人數</th>
      <th scope="col">通識領域</th>
      <th scope="col">備註　　</th>

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
