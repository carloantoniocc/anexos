<?php
class form_mant_usuarios_form extends form_mant_usuarios_apl
{
function Form_Init()
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
?>
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - usuarios"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - usuarios"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
<?php
header("X-XSS-Protection: 0");
?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
<?php
if ($this->Embutida_form && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['sc_modal'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['sc_redir_atualiz'] == 'ok')
{
?>
  var sc_closeChange = true;
<?php
}
else
{
?>
  var sc_closeChange = false;
<?php
}
?>
 </SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
 </style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_mant_usuarios/form_mant_usuarios_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_mant_usuarios_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_binicio_off = "<?php echo $this->arr_buttons['binicio_off']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bavanca_off = "<?php echo $this->arr_buttons['bavanca_off']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bretorna_off = "<?php echo $this->arr_buttons['bretorna_off']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_bfinal_off  = "<?php echo $this->arr_buttons['bfinal_off']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).show();
       $("#sc_b_ini_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ini_" + str_pos).show();
       $("#gbl_sc_b_ini_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).show();
       $("#sc_b_ret_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ret_" + str_pos).show();
       $("#gbl_sc_b_ret_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).hide();
       $("#sc_b_ini_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ini_" + str_pos).hide();
       $("#gbl_sc_b_ini_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).hide();
       $("#sc_b_ret_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ret_" + str_pos).hide();
       $("#gbl_sc_b_ret_off_" + str_pos).show();
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).show();
       $("#sc_b_fim_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_fim_" + str_pos).show();
       $("#gbl_sc_b_fim_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).show();
       $("#sc_b_avc_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_avc_" + str_pos).show();
       $("#gbl_sc_b_avc_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).hide();
       $("#sc_b_fim_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_fim_" + str_pos).hide();
       $("#gbl_sc_b_fim_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).hide();
       $("#sc_b_avc_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_avc_" + str_pos).hide();
       $("#gbl_sc_b_avc_off_" + str_pos).show();
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo $this->Ini->Nm_lang['lang_othr_smry_info']?>]";
    nm_sumario = nm_sumario.replace("?start?", reg_ini);
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
function navpage_atualiza(str_navpage)
{
    if (document.getElementById("sc_b_navpage_b")) document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
}
<?php

include_once('form_mant_usuarios_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {


  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).load(function() {
     scQuickSearchInit(false, '');
     if (document.getElementById('SC_fast_search_t')) {
         $('#SC_fast_search_t').listen();
     }
     if (document.getElementById('SC_fast_search_t')) {
         scQuickSearchKeyUp('t', null);
     }
     scQSInit = false;
   });
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if ('' == sPos || 't' == sPos) scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'quicksearchph_t');
     }
   }
   function scQuickSearchSize(sIdInput, sIdClose, sPlaceHolder) {
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iCloseW = oClose.width(),
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'height': Math.max(oInput.height(), 16) + 'px',
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
   }
   function scQuickSearchKeyUp(sPos, e) {
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['recarga'];
}
if ('novo' == $opcao_botoes && $this->Embutida_form)
{
    $opcao_botoes = 'inicio';
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_mant_usuarios_js0.php");
?>
<script type="text/javascript"> 
  sc_quant_excl = <?php echo count($sc_check_excl); ?>; 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
 </script>
<form name="F1" method="post" 
               action="form_mant_usuarios.php" 
               target="_self"> 
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>"> 
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>"> 
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" /> 
<?php
$_SESSION['scriptcase']['error_span_title']['form_mant_usuarios'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_mant_usuarios'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?>ERROR</td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['mostra_cab'] != "N"))
  {
?>
<tr><td>
<style>
#lin1_col1 { padding-left:9px; padding-top:7px;  height:27px; overflow:hidden; text-align:left;}			 
#lin1_col2 { padding-right:9px; padding-top:7px; height:27px; text-align:right; overflow:hidden;   font-size:12px; font-weight:normal;}
</style>

<div style="width: 100%">
 <div class="scFormHeader" style="height:11px; display: block; border-width:0px; "></div>
 <div style="height:37px; background-color:#FFFFFF; border-width:0px 0px 1px 0px;  border-style: dashed; border-color:#ddd; display: block">
 	<table style="width:100%; border-collapse:collapse; padding:0;">
    	<tr>
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - usuarios"; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - usuarios"; } ?></span></td>
            <td id="lin1_col2" class="scFormHeaderFont"><span><?php echo date($this->dateDefaultFormat()); ?></span></td>
        </tr>
    </table>		 
 </div>
</div>
</td></tr>
<?php
  }
?>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="20" onChange="change_fast_t = 'CH';" alt="{watermark:'<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>', watermarkClass: 'scFormToolbarInputWm', maxLength: 255}">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = ''; nm_move('fast_search', 't');">
          </span>
<?php 
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bquick_search", "if (change_fast_t == 'CH') {nm_move('fast_search', 't')}", "if (change_fast_t == 'CH') {nm_move('fast_search', 't')}", "fast_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($this->Embutida_form) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "do_ajax_form_mant_usuarios_add_new_line(); return false;", "do_ajax_form_mant_usuarios_add_new_line(); return false;", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "nm_move ('novo');", "nm_move ('novo');", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir');", "nm_atualiza ('incluir');", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "R") && (!$this->Embutida_call)) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] == "R") && (!$this->Embutida_call)) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['empty_filter'] = true;
       }
       echo "<tr><td>";
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
     <div id="SC_tab_mult_reg">
<?php
}

function Form_Table($Table_refresh = false)
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
   if ($Table_refresh) 
   { 
       ob_start();
   }
?>
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;">   <tr>
<?php
$orderColName = '';
$orderColOrient = '';
?>
    <script type="text/javascript">
     var orderImgAsc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_asc ?>";
     var orderImgDesc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_desc ?>";
     var orderImgNone = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort ?>";
     var orderColName = "";
     function scSetOrderColumn(clickedColumn) {
      $(".sc-ui-img-order-column").attr("src", orderImgNone);
      if (clickedColumn != orderColName) {
       orderColName = clickedColumn;
       orderColOrient = orderImgAsc;
      }
      else if ("" != orderColName) {
       orderColOrient = orderColOrient == orderImgAsc ? orderImgDesc : orderImgAsc;
      }
      else {
       orderColName = "";
       orderColOrient = "";
      }
      $("#sc-id-img-order-" + orderColName).attr("src", orderColOrient);
     }
    </script>
<?php
     $Col_span = "";


       if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && $this->nmgp_botoes['delete'] == "on") { $Col_span = " colspan=2"; }
    if (!$this->Embutida_form && $this->nmgp_opcao == "novo") { $Col_span = " colspan=2"; }
 ?>

    <TD class="scFormLabelOddMult" style="display: none;" <?php echo $Col_span ?>> &nbsp; </TD>
   
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] == "on") {?>
    <TD class="scFormLabelOddMult"  width="10">  </TD>
   <?php }?>
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] != "on") {?>
    <TD class="scFormLabelOddMult"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php if ((!isset($this->nmgp_cmp_hidden['id_']) || $this->nmgp_cmp_hidden['id_'] == 'on') && ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir"))) { 
      if (!isset($this->nm_new_label['id_'])) {
          $this->nm_new_label['id_'] = "Correlativo"; } ?>

    <TD class="scFormLabelOddMult css_id__label" id="hidden_field_label_id_" style="<?php echo $sStyleHidden_id_; ?>" > <?php echo $this->nm_new_label['id_'] ?> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['fecha_']) && $this->nmgp_cmp_hidden['fecha_'] == 'off') { $sStyleHidden_fecha_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['fecha_']) || $this->nmgp_cmp_hidden['fecha_'] == 'on') {
      if (!isset($this->nm_new_label['fecha_'])) {
          $this->nm_new_label['fecha_'] = "Fecha Ingreso"; } ?>
<?php
          $date_format_show = strtolower(str_replace(';', ' ', $this->field_config['fecha_']['date_format']));
          $date_format_show = str_replace("dd", $this->Ini->Nm_lang['lang_othr_date_days'], $date_format_show);
          $date_format_show = str_replace("mm", $this->Ini->Nm_lang['lang_othr_date_mnth'], $date_format_show);
          $date_format_show = str_replace("yyyy", $this->Ini->Nm_lang['lang_othr_date_year'], $date_format_show);
          $date_format_show = str_replace("aaaa", $this->Ini->Nm_lang['lang_othr_date_year'], $date_format_show);
          $date_format_show = str_replace("hh", $this->Ini->Nm_lang['lang_othr_date_hour'], $date_format_show);
          $date_format_show = str_replace("ii", $this->Ini->Nm_lang['lang_othr_date_mint'], $date_format_show);
          $date_format_show = str_replace("ss", $this->Ini->Nm_lang['lang_othr_date_scnd'], $date_format_show);
?>

    <TD class="scFormLabelOddMult css_fecha__label" id="hidden_field_label_fecha_" style="<?php echo $sStyleHidden_fecha_; ?>" > <?php echo $this->nm_new_label['fecha_'] ?><br><?php echo $date_format_show ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['ap_pat_']) && $this->nmgp_cmp_hidden['ap_pat_'] == 'off') { $sStyleHidden_ap_pat_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['ap_pat_']) || $this->nmgp_cmp_hidden['ap_pat_'] == 'on') {
      if (!isset($this->nm_new_label['ap_pat_'])) {
          $this->nm_new_label['ap_pat_'] = "Apellido Paterno"; } ?>

    <TD class="scFormLabelOddMult css_ap_pat__label" id="hidden_field_label_ap_pat_" style="<?php echo $sStyleHidden_ap_pat_; ?>" > <?php echo $this->nm_new_label['ap_pat_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['ap_mat_']) && $this->nmgp_cmp_hidden['ap_mat_'] == 'off') { $sStyleHidden_ap_mat_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['ap_mat_']) || $this->nmgp_cmp_hidden['ap_mat_'] == 'on') {
      if (!isset($this->nm_new_label['ap_mat_'])) {
          $this->nm_new_label['ap_mat_'] = "Apellido Materno"; } ?>

    <TD class="scFormLabelOddMult css_ap_mat__label" id="hidden_field_label_ap_mat_" style="<?php echo $sStyleHidden_ap_mat_; ?>" > <?php echo $this->nm_new_label['ap_mat_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['nombres_']) && $this->nmgp_cmp_hidden['nombres_'] == 'off') { $sStyleHidden_nombres_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['nombres_']) || $this->nmgp_cmp_hidden['nombres_'] == 'on') {
      if (!isset($this->nm_new_label['nombres_'])) {
          $this->nm_new_label['nombres_'] = "Nombres"; } ?>

    <TD class="scFormLabelOddMult css_nombres__label" id="hidden_field_label_nombres_" style="<?php echo $sStyleHidden_nombres_; ?>" > <?php echo $this->nm_new_label['nombres_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['correo_']) && $this->nmgp_cmp_hidden['correo_'] == 'off') { $sStyleHidden_correo_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['correo_']) || $this->nmgp_cmp_hidden['correo_'] == 'on') {
      if (!isset($this->nm_new_label['correo_'])) {
          $this->nm_new_label['correo_'] = "Correo"; } ?>

    <TD class="scFormLabelOddMult css_correo__label" id="hidden_field_label_correo_" style="<?php echo $sStyleHidden_correo_; ?>" > <?php echo $this->nm_new_label['correo_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['anexo_']) && $this->nmgp_cmp_hidden['anexo_'] == 'off') { $sStyleHidden_anexo_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['anexo_']) || $this->nmgp_cmp_hidden['anexo_'] == 'on') {
      if (!isset($this->nm_new_label['anexo_'])) {
          $this->nm_new_label['anexo_'] = "Anexo"; } ?>

    <TD class="scFormLabelOddMult css_anexo__label" id="hidden_field_label_anexo_" style="<?php echo $sStyleHidden_anexo_; ?>" > <?php echo $this->nm_new_label['anexo_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['depto_']) && $this->nmgp_cmp_hidden['depto_'] == 'off') { $sStyleHidden_depto_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['depto_']) || $this->nmgp_cmp_hidden['depto_'] == 'on') {
      if (!isset($this->nm_new_label['depto_'])) {
          $this->nm_new_label['depto_'] = "Departamento"; } ?>

    <TD class="scFormLabelOddMult css_depto__label" id="hidden_field_label_depto_" style="<?php echo $sStyleHidden_depto_; ?>" > <?php echo $this->nm_new_label['depto_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['piso_']) && $this->nmgp_cmp_hidden['piso_'] == 'off') { $sStyleHidden_piso_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['piso_']) || $this->nmgp_cmp_hidden['piso_'] == 'on') {
      if (!isset($this->nm_new_label['piso_'])) {
          $this->nm_new_label['piso_'] = "Piso"; } ?>

    <TD class="scFormLabelOddMult css_piso__label" id="hidden_field_label_piso_" style="<?php echo $sStyleHidden_piso_; ?>" > <?php echo $this->nm_new_label['piso_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['estado_']) && $this->nmgp_cmp_hidden['estado_'] == 'off') { $sStyleHidden_estado_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['estado_']) || $this->nmgp_cmp_hidden['estado_'] == 'on') {
      if (!isset($this->nm_new_label['estado_'])) {
          $this->nm_new_label['estado_'] = "Estado"; } ?>

    <TD class="scFormLabelOddMult css_estado__label" id="hidden_field_label_estado_" style="<?php echo $sStyleHidden_estado_; ?>" > <?php echo $this->nm_new_label['estado_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['nodo_']) && $this->nmgp_cmp_hidden['nodo_'] == 'off') { $sStyleHidden_nodo_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['nodo_']) || $this->nmgp_cmp_hidden['nodo_'] == 'on') {
      if (!isset($this->nm_new_label['nodo_'])) {
          $this->nm_new_label['nodo_'] = "Establecimiento"; } ?>

    <TD class="scFormLabelOddMult css_nodo__label" id="hidden_field_label_nodo_" style="<?php echo $sStyleHidden_nodo_; ?>" > <?php echo $this->nm_new_label['nodo_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['imagen_']) && $this->nmgp_cmp_hidden['imagen_'] == 'off') { $sStyleHidden_imagen_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['imagen_']) || $this->nmgp_cmp_hidden['imagen_'] == 'on') {
      if (!isset($this->nm_new_label['imagen_'])) {
          $this->nm_new_label['imagen_'] = ""; } ?>

    <TD class="scFormLabelOddMult css_imagen__label" id="hidden_field_label_imagen_" style="<?php echo $sStyleHidden_imagen_; ?>" > <?php echo $this->nm_new_label['imagen_'] ?> </TD>
   <?php } ?>





    <script type="text/javascript">
     var orderColOrient = "<?php echo $orderColOrient ?>";
     scSetOrderColumn("<?php echo $orderColName ?>");
    </script>
   </tr>
<?php   
} 
function Form_Corpo($Line_Add = false, $Table_refresh = false) 
{ 
   global $sc_seq_vert; 
   if ($Line_Add) 
   { 
       ob_start();
       $iStart = sizeof($this->form_vert_form_mant_usuarios);
       $guarda_nmgp_opcao = $this->nmgp_opcao;
       $guarda_form_vert_form_mant_usuarios = $this->form_vert_form_mant_usuarios;
       $this->nmgp_opcao = 'novo';
   } 
   if ($this->Embutida_form && empty($this->form_vert_form_mant_usuarios))
   {
       $sc_seq_vert = 0;
   }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['id_']))
           {
               $this->nmgp_cmp_readonly['id_'] = 'on';
           }
   foreach ($this->form_vert_form_mant_usuarios as $sc_seq_vert => $sc_lixo)
   {
       $this->clave_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['clave_'];
       $this->modelo_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['modelo_'];
       $this->mac_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['mac_'];
       $this->categoria_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['categoria_'];
       $this->observaciones_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['observaciones_'];
       $this->modelos_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['modelos_'];
       $this->categorias_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['categorias_'];
       $this->foto_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['foto_'];
       if (isset($this->Embutida_ronly) && $this->Embutida_ronly && !$Line_Add)
       {
           $this->nmgp_cmp_readonly['id_'] = true;
           $this->nmgp_cmp_readonly['fecha_'] = true;
           $this->nmgp_cmp_readonly['ap_pat_'] = true;
           $this->nmgp_cmp_readonly['ap_mat_'] = true;
           $this->nmgp_cmp_readonly['nombres_'] = true;
           $this->nmgp_cmp_readonly['correo_'] = true;
           $this->nmgp_cmp_readonly['anexo_'] = true;
           $this->nmgp_cmp_readonly['depto_'] = true;
           $this->nmgp_cmp_readonly['piso_'] = true;
           $this->nmgp_cmp_readonly['estado_'] = true;
           $this->nmgp_cmp_readonly['nodo_'] = true;
           $this->nmgp_cmp_readonly['imagen_'] = true;
       }
       elseif ($Line_Add)
       {
           if (!isset($this->nmgp_cmp_readonly['id_']) || $this->nmgp_cmp_readonly['id_'] != "on") {$this->nmgp_cmp_readonly['id_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['fecha_']) || $this->nmgp_cmp_readonly['fecha_'] != "on") {$this->nmgp_cmp_readonly['fecha_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['ap_pat_']) || $this->nmgp_cmp_readonly['ap_pat_'] != "on") {$this->nmgp_cmp_readonly['ap_pat_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['ap_mat_']) || $this->nmgp_cmp_readonly['ap_mat_'] != "on") {$this->nmgp_cmp_readonly['ap_mat_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['nombres_']) || $this->nmgp_cmp_readonly['nombres_'] != "on") {$this->nmgp_cmp_readonly['nombres_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['correo_']) || $this->nmgp_cmp_readonly['correo_'] != "on") {$this->nmgp_cmp_readonly['correo_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['anexo_']) || $this->nmgp_cmp_readonly['anexo_'] != "on") {$this->nmgp_cmp_readonly['anexo_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['depto_']) || $this->nmgp_cmp_readonly['depto_'] != "on") {$this->nmgp_cmp_readonly['depto_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['piso_']) || $this->nmgp_cmp_readonly['piso_'] != "on") {$this->nmgp_cmp_readonly['piso_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['estado_']) || $this->nmgp_cmp_readonly['estado_'] != "on") {$this->nmgp_cmp_readonly['estado_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['nodo_']) || $this->nmgp_cmp_readonly['nodo_'] != "on") {$this->nmgp_cmp_readonly['nodo_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['imagen_']) || $this->nmgp_cmp_readonly['imagen_'] != "on") {$this->nmgp_cmp_readonly['imagen_'] = false;}
       }
              foreach ($this->form_vert_form_preenchimento[$sc_seq_vert] as $sCmpNome => $mCmpVal)
              {
                  eval("\$this->" . $sCmpNome . " = \$mCmpVal;");
              }
        $this->id_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['id_']; 
       $id_ = $this->id_; 
       $sStyleHidden_id_ = '';
       if (isset($sCheckRead_id_))
       {
           unset($sCheckRead_id_);
       }
       if (isset($this->nmgp_cmp_readonly['id_']))
       {
           $sCheckRead_id_ = $this->nmgp_cmp_readonly['id_'];
       }
       if (isset($this->nmgp_cmp_hidden['id_']) && $this->nmgp_cmp_hidden['id_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['id_']);
           $sStyleHidden_id_ = 'display: none;';
       }
       $bTestReadOnly_id_ = true;
       $sStyleReadLab_id_ = 'display: none;';
       $sStyleReadInp_id_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["id_"]) &&  $this->nmgp_cmp_readonly["id_"] == "on"))
       {
           $bTestReadOnly_id_ = false;
           unset($this->nmgp_cmp_readonly['id_']);
           $sStyleReadLab_id_ = '';
           $sStyleReadInp_id_ = 'display: none;';
       }
       $this->fecha_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['fecha_']; 
       $fecha_ = $this->fecha_; 
       $sStyleHidden_fecha_ = '';
       if (isset($sCheckRead_fecha_))
       {
           unset($sCheckRead_fecha_);
       }
       if (isset($this->nmgp_cmp_readonly['fecha_']))
       {
           $sCheckRead_fecha_ = $this->nmgp_cmp_readonly['fecha_'];
       }
       if (isset($this->nmgp_cmp_hidden['fecha_']) && $this->nmgp_cmp_hidden['fecha_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['fecha_']);
           $sStyleHidden_fecha_ = 'display: none;';
       }
       $bTestReadOnly_fecha_ = true;
       $sStyleReadLab_fecha_ = 'display: none;';
       $sStyleReadInp_fecha_ = '';
       if (isset($this->nmgp_cmp_readonly['fecha_']) && $this->nmgp_cmp_readonly['fecha_'] == 'on')
       {
           $bTestReadOnly_fecha_ = false;
           unset($this->nmgp_cmp_readonly['fecha_']);
           $sStyleReadLab_fecha_ = '';
           $sStyleReadInp_fecha_ = 'display: none;';
       }
       $this->ap_pat_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['ap_pat_']; 
       $ap_pat_ = $this->ap_pat_; 
       $sStyleHidden_ap_pat_ = '';
       if (isset($sCheckRead_ap_pat_))
       {
           unset($sCheckRead_ap_pat_);
       }
       if (isset($this->nmgp_cmp_readonly['ap_pat_']))
       {
           $sCheckRead_ap_pat_ = $this->nmgp_cmp_readonly['ap_pat_'];
       }
       if (isset($this->nmgp_cmp_hidden['ap_pat_']) && $this->nmgp_cmp_hidden['ap_pat_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['ap_pat_']);
           $sStyleHidden_ap_pat_ = 'display: none;';
       }
       $bTestReadOnly_ap_pat_ = true;
       $sStyleReadLab_ap_pat_ = 'display: none;';
       $sStyleReadInp_ap_pat_ = '';
       if (isset($this->nmgp_cmp_readonly['ap_pat_']) && $this->nmgp_cmp_readonly['ap_pat_'] == 'on')
       {
           $bTestReadOnly_ap_pat_ = false;
           unset($this->nmgp_cmp_readonly['ap_pat_']);
           $sStyleReadLab_ap_pat_ = '';
           $sStyleReadInp_ap_pat_ = 'display: none;';
       }
       $this->ap_mat_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['ap_mat_']; 
       $ap_mat_ = $this->ap_mat_; 
       $sStyleHidden_ap_mat_ = '';
       if (isset($sCheckRead_ap_mat_))
       {
           unset($sCheckRead_ap_mat_);
       }
       if (isset($this->nmgp_cmp_readonly['ap_mat_']))
       {
           $sCheckRead_ap_mat_ = $this->nmgp_cmp_readonly['ap_mat_'];
       }
       if (isset($this->nmgp_cmp_hidden['ap_mat_']) && $this->nmgp_cmp_hidden['ap_mat_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['ap_mat_']);
           $sStyleHidden_ap_mat_ = 'display: none;';
       }
       $bTestReadOnly_ap_mat_ = true;
       $sStyleReadLab_ap_mat_ = 'display: none;';
       $sStyleReadInp_ap_mat_ = '';
       if (isset($this->nmgp_cmp_readonly['ap_mat_']) && $this->nmgp_cmp_readonly['ap_mat_'] == 'on')
       {
           $bTestReadOnly_ap_mat_ = false;
           unset($this->nmgp_cmp_readonly['ap_mat_']);
           $sStyleReadLab_ap_mat_ = '';
           $sStyleReadInp_ap_mat_ = 'display: none;';
       }
       $this->nombres_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['nombres_']; 
       $nombres_ = $this->nombres_; 
       $sStyleHidden_nombres_ = '';
       if (isset($sCheckRead_nombres_))
       {
           unset($sCheckRead_nombres_);
       }
       if (isset($this->nmgp_cmp_readonly['nombres_']))
       {
           $sCheckRead_nombres_ = $this->nmgp_cmp_readonly['nombres_'];
       }
       if (isset($this->nmgp_cmp_hidden['nombres_']) && $this->nmgp_cmp_hidden['nombres_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['nombres_']);
           $sStyleHidden_nombres_ = 'display: none;';
       }
       $bTestReadOnly_nombres_ = true;
       $sStyleReadLab_nombres_ = 'display: none;';
       $sStyleReadInp_nombres_ = '';
       if (isset($this->nmgp_cmp_readonly['nombres_']) && $this->nmgp_cmp_readonly['nombres_'] == 'on')
       {
           $bTestReadOnly_nombres_ = false;
           unset($this->nmgp_cmp_readonly['nombres_']);
           $sStyleReadLab_nombres_ = '';
           $sStyleReadInp_nombres_ = 'display: none;';
       }
       $this->correo_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['correo_']; 
       $correo_ = $this->correo_; 
       $sStyleHidden_correo_ = '';
       if (isset($sCheckRead_correo_))
       {
           unset($sCheckRead_correo_);
       }
       if (isset($this->nmgp_cmp_readonly['correo_']))
       {
           $sCheckRead_correo_ = $this->nmgp_cmp_readonly['correo_'];
       }
       if (isset($this->nmgp_cmp_hidden['correo_']) && $this->nmgp_cmp_hidden['correo_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['correo_']);
           $sStyleHidden_correo_ = 'display: none;';
       }
       $bTestReadOnly_correo_ = true;
       $sStyleReadLab_correo_ = 'display: none;';
       $sStyleReadInp_correo_ = '';
       if (isset($this->nmgp_cmp_readonly['correo_']) && $this->nmgp_cmp_readonly['correo_'] == 'on')
       {
           $bTestReadOnly_correo_ = false;
           unset($this->nmgp_cmp_readonly['correo_']);
           $sStyleReadLab_correo_ = '';
           $sStyleReadInp_correo_ = 'display: none;';
       }
       $this->anexo_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['anexo_']; 
       $anexo_ = $this->anexo_; 
       $sStyleHidden_anexo_ = '';
       if (isset($sCheckRead_anexo_))
       {
           unset($sCheckRead_anexo_);
       }
       if (isset($this->nmgp_cmp_readonly['anexo_']))
       {
           $sCheckRead_anexo_ = $this->nmgp_cmp_readonly['anexo_'];
       }
       if (isset($this->nmgp_cmp_hidden['anexo_']) && $this->nmgp_cmp_hidden['anexo_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['anexo_']);
           $sStyleHidden_anexo_ = 'display: none;';
       }
       $bTestReadOnly_anexo_ = true;
       $sStyleReadLab_anexo_ = 'display: none;';
       $sStyleReadInp_anexo_ = '';
       if (isset($this->nmgp_cmp_readonly['anexo_']) && $this->nmgp_cmp_readonly['anexo_'] == 'on')
       {
           $bTestReadOnly_anexo_ = false;
           unset($this->nmgp_cmp_readonly['anexo_']);
           $sStyleReadLab_anexo_ = '';
           $sStyleReadInp_anexo_ = 'display: none;';
       }
       $this->depto_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['depto_']; 
       $depto_ = $this->depto_; 
       $sStyleHidden_depto_ = '';
       if (isset($sCheckRead_depto_))
       {
           unset($sCheckRead_depto_);
       }
       if (isset($this->nmgp_cmp_readonly['depto_']))
       {
           $sCheckRead_depto_ = $this->nmgp_cmp_readonly['depto_'];
       }
       if (isset($this->nmgp_cmp_hidden['depto_']) && $this->nmgp_cmp_hidden['depto_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['depto_']);
           $sStyleHidden_depto_ = 'display: none;';
       }
       $bTestReadOnly_depto_ = true;
       $sStyleReadLab_depto_ = 'display: none;';
       $sStyleReadInp_depto_ = '';
       if (isset($this->nmgp_cmp_readonly['depto_']) && $this->nmgp_cmp_readonly['depto_'] == 'on')
       {
           $bTestReadOnly_depto_ = false;
           unset($this->nmgp_cmp_readonly['depto_']);
           $sStyleReadLab_depto_ = '';
           $sStyleReadInp_depto_ = 'display: none;';
       }
       $this->piso_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['piso_']; 
       $piso_ = $this->piso_; 
       $sStyleHidden_piso_ = '';
       if (isset($sCheckRead_piso_))
       {
           unset($sCheckRead_piso_);
       }
       if (isset($this->nmgp_cmp_readonly['piso_']))
       {
           $sCheckRead_piso_ = $this->nmgp_cmp_readonly['piso_'];
       }
       if (isset($this->nmgp_cmp_hidden['piso_']) && $this->nmgp_cmp_hidden['piso_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['piso_']);
           $sStyleHidden_piso_ = 'display: none;';
       }
       $bTestReadOnly_piso_ = true;
       $sStyleReadLab_piso_ = 'display: none;';
       $sStyleReadInp_piso_ = '';
       if (isset($this->nmgp_cmp_readonly['piso_']) && $this->nmgp_cmp_readonly['piso_'] == 'on')
       {
           $bTestReadOnly_piso_ = false;
           unset($this->nmgp_cmp_readonly['piso_']);
           $sStyleReadLab_piso_ = '';
           $sStyleReadInp_piso_ = 'display: none;';
       }
       $this->estado_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['estado_']; 
       $estado_ = $this->estado_; 
       $sStyleHidden_estado_ = '';
       if (isset($sCheckRead_estado_))
       {
           unset($sCheckRead_estado_);
       }
       if (isset($this->nmgp_cmp_readonly['estado_']))
       {
           $sCheckRead_estado_ = $this->nmgp_cmp_readonly['estado_'];
       }
       if (isset($this->nmgp_cmp_hidden['estado_']) && $this->nmgp_cmp_hidden['estado_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['estado_']);
           $sStyleHidden_estado_ = 'display: none;';
       }
       $bTestReadOnly_estado_ = true;
       $sStyleReadLab_estado_ = 'display: none;';
       $sStyleReadInp_estado_ = '';
       if (isset($this->nmgp_cmp_readonly['estado_']) && $this->nmgp_cmp_readonly['estado_'] == 'on')
       {
           $bTestReadOnly_estado_ = false;
           unset($this->nmgp_cmp_readonly['estado_']);
           $sStyleReadLab_estado_ = '';
           $sStyleReadInp_estado_ = 'display: none;';
       }
       $this->nodo_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['nodo_']; 
       $nodo_ = $this->nodo_; 
       $sStyleHidden_nodo_ = '';
       if (isset($sCheckRead_nodo_))
       {
           unset($sCheckRead_nodo_);
       }
       if (isset($this->nmgp_cmp_readonly['nodo_']))
       {
           $sCheckRead_nodo_ = $this->nmgp_cmp_readonly['nodo_'];
       }
       if (isset($this->nmgp_cmp_hidden['nodo_']) && $this->nmgp_cmp_hidden['nodo_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['nodo_']);
           $sStyleHidden_nodo_ = 'display: none;';
       }
       $bTestReadOnly_nodo_ = true;
       $sStyleReadLab_nodo_ = 'display: none;';
       $sStyleReadInp_nodo_ = '';
       if (isset($this->nmgp_cmp_readonly['nodo_']) && $this->nmgp_cmp_readonly['nodo_'] == 'on')
       {
           $bTestReadOnly_nodo_ = false;
           unset($this->nmgp_cmp_readonly['nodo_']);
           $sStyleReadLab_nodo_ = '';
           $sStyleReadInp_nodo_ = 'display: none;';
       }
       $this->imagen_ = $this->form_vert_form_mant_usuarios[$sc_seq_vert]['imagen_']; 
       $imagen_ = $this->imagen_; 
       $sStyleHidden_imagen_ = '';
       if (isset($sCheckRead_imagen_))
       {
           unset($sCheckRead_imagen_);
       }
       if (isset($this->nmgp_cmp_readonly['imagen_']))
       {
           $sCheckRead_imagen_ = $this->nmgp_cmp_readonly['imagen_'];
       }
       if (isset($this->nmgp_cmp_hidden['imagen_']) && $this->nmgp_cmp_hidden['imagen_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['imagen_']);
           $sStyleHidden_imagen_ = 'display: none;';
       }
       $bTestReadOnly_imagen_ = true;
       $sStyleReadLab_imagen_ = 'display: none;';
       $sStyleReadInp_imagen_ = '';
       if (isset($this->nmgp_cmp_readonly['imagen_']) && $this->nmgp_cmp_readonly['imagen_'] == 'on')
       {
           $bTestReadOnly_imagen_ = false;
           unset($this->nmgp_cmp_readonly['imagen_']);
           $sStyleReadLab_imagen_ = '';
           $sStyleReadInp_imagen_ = 'display: none;';
       }

       $nm_cor_fun_vert = ($nm_cor_fun_vert == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
       $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);

       $sHideNewLine = '';
?>   
   <tr id="idVertRow<?php echo $sc_seq_vert; ?>"<?php echo $sHideNewLine; ?>>


   
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_seq<?php echo $sc_seq_vert; ?>"  style="display: none;"> <?php echo $sc_seq_vert; ?> </TD>
   
   <?php if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && $this->nmgp_botoes['delete'] == "on") {?>
    <TD class="scFormDataOddMult" > 
<input type="checkbox" name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\""; if (in_array($sc_seq_vert, $sc_check_excl)) { echo " checked";} ?> onclick="if (this.checked) {sc_quant_excl++; } else {sc_quant_excl--; }" class="sc-js-input" alt="{type: 'checkbox', enterTab: false}"> </TD>
   <?php }?>
   <?php if (!$this->Embutida_form && $this->nmgp_opcao == "novo") {?>
    <TD class="scFormDataOddMult" > 
<input type="checkbox" name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\"" ; if (in_array($sc_seq_vert, $sc_check_incl)) { echo " checked";} ?> class="sc-js-input" alt="{type: 'checkbox', enterTab: false}"> </TD>
   <?php }?>
   <?php if ($this->Embutida_form) {?>
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_actions<?php echo $sc_seq_vert; ?>" NOWRAP> <?php if ($this->nmgp_botoes['delete'] == "on" && $this->nmgp_opcao != "novo") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php
if ($this->nmgp_botoes['update'] == "on" && $this->nmgp_opcao != "novo") {
    if ($this->Embutida_ronly) {
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
        $sButDisp = 'display: none';
    }
    else
    {
        $sButDisp = '';
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "" . $sButDisp. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
}
?>

<?php if ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_opcao == "novo") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_incluir", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "sc_ins_line_" . $sc_seq_vert . "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php if ($this->nmgp_botoes['delete'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($Line_Add && $this->Embutida_ronly) {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($this->nmgp_botoes['update'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php }?>
<?php if ($this->nmgp_botoes['insert'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_novo", "do_ajax_form_mant_usuarios_add_new_line(" . $sc_seq_vert . ")", "do_ajax_form_mant_usuarios_add_new_line(" . $sc_seq_vert . ")", "sc_new_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php
  $Style_add_line = (!$Line_Add) ? "display: none" : "";
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_mant_usuarios_cancel_insert(" . $sc_seq_vert . ")", "do_ajax_form_mant_usuarios_cancel_insert(" . $sc_seq_vert . ")", "sc_canceli_line_" . $sc_seq_vert . "", "", "", "" . $Style_add_line . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_mant_usuarios_cancel_update(" . $sc_seq_vert . ")", "do_ajax_form_mant_usuarios_cancel_update(" . $sc_seq_vert . ")", "sc_cancelu_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['id_']) && $this->nmgp_cmp_hidden['id_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($id_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOddMult css_id__line" id="hidden_field_data_id_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_id_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_id__line" style="vertical-align: top;padding: 0px"><span id="id_read_on_id_<?php echo $sc_seq_vert ?>" class="css_id__line" style="<?php echo $sStyleReadLab_id_; ?>"><?php echo $this->form_encode_input($this->id_); ?></span><span id="id_read_off_id_<?php echo $sc_seq_vert ?>" style="<?php echo $sStyleReadInp_id_; ?>"><input type="hidden" id="id_sc_field_id_<?php echo $sc_seq_vert ?>" name="id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($id_) . "\">"?><span id="id_ajax_label_id_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($id_); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['fecha_']) && $this->nmgp_cmp_hidden['fecha_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fecha_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($fecha_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_fecha__line" id="hidden_field_data_fecha_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_fecha_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_fecha__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_fecha_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fecha_"]) &&  $this->nmgp_cmp_readonly["fecha_"] == "on") { 

 ?>
<input type="hidden" name="fecha_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($fecha_) . "\">" . $fecha_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_fecha_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-fecha_<?php echo $sc_seq_vert ?> css_fecha__line" style="<?php echo $sStyleReadLab_fecha_; ?>"><?php echo $this->form_encode_input($fecha_); ?></span><span id="id_read_off_fecha_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fecha_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_fecha__obj" style="" id="id_sc_field_fecha_<?php echo $sc_seq_vert ?>" type=text name="fecha_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($fecha_) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['fecha_']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fecha_']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['fecha_']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fecha_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fecha_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['ap_pat_']) && $this->nmgp_cmp_hidden['ap_pat_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ap_pat_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($ap_pat_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_ap_pat__line" id="hidden_field_data_ap_pat_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_ap_pat_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_ap_pat__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_ap_pat_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_pat_"]) &&  $this->nmgp_cmp_readonly["ap_pat_"] == "on") { 

 ?>
<input type="hidden" name="ap_pat_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($ap_pat_) . "\">" . $ap_pat_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_ap_pat_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-ap_pat_<?php echo $sc_seq_vert ?> css_ap_pat__line" style="<?php echo $sStyleReadLab_ap_pat_; ?>"><?php echo $this->form_encode_input($this->ap_pat_); ?></span><span id="id_read_off_ap_pat_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ap_pat_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_ap_pat__obj" style="" id="id_sc_field_ap_pat_<?php echo $sc_seq_vert ?>" type=text name="ap_pat_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($ap_pat_) ?>"
 size=20 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_pat_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_pat_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['ap_mat_']) && $this->nmgp_cmp_hidden['ap_mat_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ap_mat_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($ap_mat_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_ap_mat__line" id="hidden_field_data_ap_mat_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_ap_mat_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_ap_mat__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_ap_mat_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_mat_"]) &&  $this->nmgp_cmp_readonly["ap_mat_"] == "on") { 

 ?>
<input type="hidden" name="ap_mat_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($ap_mat_) . "\">" . $ap_mat_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_ap_mat_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-ap_mat_<?php echo $sc_seq_vert ?> css_ap_mat__line" style="<?php echo $sStyleReadLab_ap_mat_; ?>"><?php echo $this->form_encode_input($this->ap_mat_); ?></span><span id="id_read_off_ap_mat_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ap_mat_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_ap_mat__obj" style="" id="id_sc_field_ap_mat_<?php echo $sc_seq_vert ?>" type=text name="ap_mat_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($ap_mat_) ?>"
 size=20 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_mat_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_mat_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['nombres_']) && $this->nmgp_cmp_hidden['nombres_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nombres_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($nombres_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_nombres__line" id="hidden_field_data_nombres_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_nombres_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_nombres__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_nombres_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nombres_"]) &&  $this->nmgp_cmp_readonly["nombres_"] == "on") { 

 ?>
<input type="hidden" name="nombres_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($nombres_) . "\">" . $nombres_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_nombres_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-nombres_<?php echo $sc_seq_vert ?> css_nombres__line" style="<?php echo $sStyleReadLab_nombres_; ?>"><?php echo $this->form_encode_input($this->nombres_); ?></span><span id="id_read_off_nombres_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nombres_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_nombres__obj" style="" id="id_sc_field_nombres_<?php echo $sc_seq_vert ?>" type=text name="nombres_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($nombres_) ?>"
 size=20 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nombres_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nombres_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['correo_']) && $this->nmgp_cmp_hidden['correo_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="correo_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($correo_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_correo__line" id="hidden_field_data_correo_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_correo_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_correo__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_correo_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["correo_"]) &&  $this->nmgp_cmp_readonly["correo_"] == "on") { 

 ?>
<input type="hidden" name="correo_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($correo_) . "\">" . $correo_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_correo_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-correo_<?php echo $sc_seq_vert ?> css_correo__line" style="<?php echo $sStyleReadLab_correo_; ?>"><?php echo $this->form_encode_input($this->correo_); ?></span><span id="id_read_off_correo_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_correo_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_correo__obj" style="" id="id_sc_field_correo_<?php echo $sc_seq_vert ?>" type=text name="correo_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($correo_) ?>"
 size=50 maxlength=32767 alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}">&nbsp;<?php if ($this->nmgp_opcao != "novo"){ ?><?php echo nmButtonOutput($this->arr_buttons, "bemail", "if (document.F1.correo_" . $sc_seq_vert . ".value != '') {window.open('mailto:' + document.F1.correo_" . $sc_seq_vert . ".value); }", "if (document.F1.correo_" . $sc_seq_vert . ".value != '') {window.open('mailto:' + document.F1.correo_" . $sc_seq_vert . ".value); }", "correo_" . $sc_seq_vert . "_mail", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_correo_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_correo_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['anexo_']) && $this->nmgp_cmp_hidden['anexo_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="anexo_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($anexo_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_anexo__line" id="hidden_field_data_anexo_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_anexo_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_anexo__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_anexo_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["anexo_"]) &&  $this->nmgp_cmp_readonly["anexo_"] == "on") { 

 ?>
<input type="hidden" name="anexo_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($anexo_) . "\">" . $anexo_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_anexo_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-anexo_<?php echo $sc_seq_vert ?> css_anexo__line" style="<?php echo $sStyleReadLab_anexo_; ?>"><?php echo $this->form_encode_input($this->anexo_); ?></span><span id="id_read_off_anexo_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_anexo_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_anexo__obj" style="" id="id_sc_field_anexo_<?php echo $sc_seq_vert ?>" type=text name="anexo_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($anexo_) ?>"
 size=6 alt="{datatype: 'integer', maxLength: 6, thousandsSep: '', thousandsFormat: <?php echo $this->field_config['anexo_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_anexo_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_anexo_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['depto_']) && $this->nmgp_cmp_hidden['depto_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="depto_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->depto_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_depto__line" id="hidden_field_data_depto_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_depto_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_depto__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_depto_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["depto_"]) &&  $this->nmgp_cmp_readonly["depto_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $old_value_fecha_ = $this->fecha_;
   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_ = $this->id_;
   $unformatted_value_fecha_ = $this->fecha_;
   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT Id, Descripcion 
FROM Departamentos 
ORDER BY Descripcion";

   $this->id_ = $old_value_id_;
   $this->fecha_ = $old_value_fecha_;
   $this->anexo_ = $old_value_anexo_;
   $this->piso_ = $old_value_piso_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $depto__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->depto__1))
          {
              foreach ($this->depto__1 as $tmp_depto_)
              {
                  if (trim($tmp_depto_) === trim($cadaselect[1])) { $depto__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->depto_) === trim($cadaselect[1])) { $depto__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="depto_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($depto_) . "\">" . $depto__look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $old_value_fecha_ = $this->fecha_;
   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_ = $this->id_;
   $unformatted_value_fecha_ = $this->fecha_;
   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT Id, Descripcion 
FROM Departamentos 
ORDER BY Descripcion";

   $this->id_ = $old_value_id_;
   $this->fecha_ = $old_value_fecha_;
   $this->anexo_ = $old_value_anexo_;
   $this->piso_ = $old_value_piso_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_depto_'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $depto__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->depto__1))
          {
              foreach ($this->depto__1 as $tmp_depto_)
              {
                  if (trim($tmp_depto_) === trim($cadaselect[1])) { $depto__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->depto_) === trim($cadaselect[1])) { $depto__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($depto__look))
          {
              $depto__look = $this->depto_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_depto_" . $sc_seq_vert . "\" class=\"css_depto__line\" style=\"" .  $sStyleReadLab_depto_ . "\">" . $this->form_encode_input($depto__look) . "</span><span id=\"id_read_off_depto_" . $sc_seq_vert . "\" style=\"" . $sStyleReadInp_depto_ . "\">";
   echo " <span id=\"idAjaxSelect_depto_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult css_depto__obj\" style=\"\" id=\"id_sc_field_depto_" . $sc_seq_vert . "\" name=\"depto_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->depto_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->depto_)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_depto_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_depto_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['piso_']) && $this->nmgp_cmp_hidden['piso_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="piso_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($piso_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_piso__line" id="hidden_field_data_piso_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_piso_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_piso__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_piso_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["piso_"]) &&  $this->nmgp_cmp_readonly["piso_"] == "on") { 

 ?>
<input type="hidden" name="piso_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($piso_) . "\">" . $piso_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_piso_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-piso_<?php echo $sc_seq_vert ?> css_piso__line" style="<?php echo $sStyleReadLab_piso_; ?>"><?php echo $this->form_encode_input($this->piso_); ?></span><span id="id_read_off_piso_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_piso_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_piso__obj" style="" id="id_sc_field_piso_<?php echo $sc_seq_vert ?>" type=text name="piso_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($piso_) ?>"
 size=2 alt="{datatype: 'integer', maxLength: 2, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['piso_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['piso_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_piso_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_piso_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['estado_']) && $this->nmgp_cmp_hidden['estado_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="estado_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->estado_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_estado__line" id="hidden_field_data_estado_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_estado_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_estado__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_estado_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["estado_"]) &&  $this->nmgp_cmp_readonly["estado_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $old_value_fecha_ = $this->fecha_;
   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_ = $this->id_;
   $unformatted_value_fecha_ = $this->fecha_;
   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT id_est, desc_est 
FROM estado 
ORDER BY desc_est";

   $this->id_ = $old_value_id_;
   $this->fecha_ = $old_value_fecha_;
   $this->anexo_ = $old_value_anexo_;
   $this->piso_ = $old_value_piso_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $estado__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estado__1))
          {
              foreach ($this->estado__1 as $tmp_estado_)
              {
                  if (trim($tmp_estado_) === trim($cadaselect[1])) { $estado__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estado_) === trim($cadaselect[1])) { $estado__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="estado_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($estado_) . "\">" . $estado__look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $old_value_fecha_ = $this->fecha_;
   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_ = $this->id_;
   $unformatted_value_fecha_ = $this->fecha_;
   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT id_est, desc_est 
FROM estado 
ORDER BY desc_est";

   $this->id_ = $old_value_id_;
   $this->fecha_ = $old_value_fecha_;
   $this->anexo_ = $old_value_anexo_;
   $this->piso_ = $old_value_piso_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_estado_'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $estado__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estado__1))
          {
              foreach ($this->estado__1 as $tmp_estado_)
              {
                  if (trim($tmp_estado_) === trim($cadaselect[1])) { $estado__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estado_) === trim($cadaselect[1])) { $estado__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($estado__look))
          {
              $estado__look = $this->estado_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_estado_" . $sc_seq_vert . "\" class=\"css_estado__line\" style=\"" .  $sStyleReadLab_estado_ . "\">" . $this->form_encode_input($estado__look) . "</span><span id=\"id_read_off_estado_" . $sc_seq_vert . "\" style=\"" . $sStyleReadInp_estado_ . "\">";
   echo " <span id=\"idAjaxSelect_estado_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult css_estado__obj\" style=\"\" id=\"id_sc_field_estado_" . $sc_seq_vert . "\" name=\"estado_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->estado_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->estado_)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estado_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estado_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['nodo_']) && $this->nmgp_cmp_hidden['nodo_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="nodo_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->nodo_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_nodo__line" id="hidden_field_data_nodo_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_nodo_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_nodo__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_nodo_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nodo_"]) &&  $this->nmgp_cmp_readonly["nodo_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $old_value_fecha_ = $this->fecha_;
   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_ = $this->id_;
   $unformatted_value_fecha_ = $this->fecha_;
   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT id, Descripcion 
FROM tbl_establecimiento 
ORDER BY Descripcion";

   $this->id_ = $old_value_id_;
   $this->fecha_ = $old_value_fecha_;
   $this->anexo_ = $old_value_anexo_;
   $this->piso_ = $old_value_piso_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $nodo__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->nodo__1))
          {
              foreach ($this->nodo__1 as $tmp_nodo_)
              {
                  if (trim($tmp_nodo_) === trim($cadaselect[1])) { $nodo__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->nodo_) === trim($cadaselect[1])) { $nodo__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="nodo_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($nodo_) . "\">" . $nodo__look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $old_value_fecha_ = $this->fecha_;
   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_ = $this->id_;
   $unformatted_value_fecha_ = $this->fecha_;
   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT id, Descripcion 
FROM tbl_establecimiento 
ORDER BY Descripcion";

   $this->id_ = $old_value_id_;
   $this->fecha_ = $old_value_fecha_;
   $this->anexo_ = $old_value_anexo_;
   $this->piso_ = $old_value_piso_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['Lookup_nodo_'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $nodo__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->nodo__1))
          {
              foreach ($this->nodo__1 as $tmp_nodo_)
              {
                  if (trim($tmp_nodo_) === trim($cadaselect[1])) { $nodo__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->nodo_) === trim($cadaselect[1])) { $nodo__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($nodo__look))
          {
              $nodo__look = $this->nodo_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_nodo_" . $sc_seq_vert . "\" class=\"css_nodo__line\" style=\"" .  $sStyleReadLab_nodo_ . "\">" . $this->form_encode_input($nodo__look) . "</span><span id=\"id_read_off_nodo_" . $sc_seq_vert . "\" style=\"" . $sStyleReadInp_nodo_ . "\">";
   echo " <span id=\"idAjaxSelect_nodo_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult css_nodo__obj\" style=\"\" id=\"id_sc_field_nodo_" . $sc_seq_vert . "\" name=\"nodo_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->nodo_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->nodo_)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nodo_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nodo_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['imagen_']) && $this->nmgp_cmp_hidden['imagen_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="imagen_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($imagen_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_imagen__line" id="hidden_field_data_imagen_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_imagen_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_imagen__line" style="vertical-align: top;padding: 0px"><?php
          if (!is_file($this->Ini->root  . $this->Ini->path_imag_cab . "/sys__NM__img__NM__ojo.png"))
          { 
              $imagen_ = "&nbsp;" ;  
          } 
          else 
          { 
              $imagen_ = "<img border=\"0\" src=\"" . $this->Ini->path_imag_cab . "/sys__NM__img__NM__ojo.png\"/>" ; 
          } 
?>
<span id="id_imghtml_imagen_<?php echo $sc_seq_vert; ?>"><a href="javascript:nm_gp_submit('<?php echo $this->Ini->link_form_foto_edit . "', '$this->nm_location', 'id*scin" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['dados_form'][$sc_seq_vert]['id_'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutNMSC_modal*scinok*scoutsc_redir_atualiz*scinok*scoutsc_redir_insert*scinok*scout', '', 'modal', '440', '630', 'form_foto')\"><font color=\"" . $this->Ini->cor_link_dados . "\">" . $imagen_ ; ?></font></a></span>
<?php if ($bTestReadOnly_imagen_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["imagen_"]) &&  $this->nmgp_cmp_readonly["imagen_"] == "on") { 

 ?>
<input type="hidden" name="imagen_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($imagen_) . "\">" . $imagen_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_imagen_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-imagen_<?php echo $sc_seq_vert ?> css_imagen__line" style="<?php echo $sStyleReadLab_imagen_; ?>"><?php echo $this->form_encode_input($this->imagen_); ?></span><span id="id_read_off_imagen_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_imagen_; ?>"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_imagen_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_imagen_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





   </tr>
<?php   
        if (isset($sCheckRead_id_))
       {
           $this->nmgp_cmp_readonly['id_'] = $sCheckRead_id_;
       }
       if ('display: none;' == $sStyleHidden_id_)
       {
           $this->nmgp_cmp_hidden['id_'] = 'off';
       }
       if (isset($sCheckRead_fecha_))
       {
           $this->nmgp_cmp_readonly['fecha_'] = $sCheckRead_fecha_;
       }
       if ('display: none;' == $sStyleHidden_fecha_)
       {
           $this->nmgp_cmp_hidden['fecha_'] = 'off';
       }
       if (isset($sCheckRead_ap_pat_))
       {
           $this->nmgp_cmp_readonly['ap_pat_'] = $sCheckRead_ap_pat_;
       }
       if ('display: none;' == $sStyleHidden_ap_pat_)
       {
           $this->nmgp_cmp_hidden['ap_pat_'] = 'off';
       }
       if (isset($sCheckRead_ap_mat_))
       {
           $this->nmgp_cmp_readonly['ap_mat_'] = $sCheckRead_ap_mat_;
       }
       if ('display: none;' == $sStyleHidden_ap_mat_)
       {
           $this->nmgp_cmp_hidden['ap_mat_'] = 'off';
       }
       if (isset($sCheckRead_nombres_))
       {
           $this->nmgp_cmp_readonly['nombres_'] = $sCheckRead_nombres_;
       }
       if ('display: none;' == $sStyleHidden_nombres_)
       {
           $this->nmgp_cmp_hidden['nombres_'] = 'off';
       }
       if (isset($sCheckRead_correo_))
       {
           $this->nmgp_cmp_readonly['correo_'] = $sCheckRead_correo_;
       }
       if ('display: none;' == $sStyleHidden_correo_)
       {
           $this->nmgp_cmp_hidden['correo_'] = 'off';
       }
       if (isset($sCheckRead_anexo_))
       {
           $this->nmgp_cmp_readonly['anexo_'] = $sCheckRead_anexo_;
       }
       if ('display: none;' == $sStyleHidden_anexo_)
       {
           $this->nmgp_cmp_hidden['anexo_'] = 'off';
       }
       if (isset($sCheckRead_depto_))
       {
           $this->nmgp_cmp_readonly['depto_'] = $sCheckRead_depto_;
       }
       if ('display: none;' == $sStyleHidden_depto_)
       {
           $this->nmgp_cmp_hidden['depto_'] = 'off';
       }
       if (isset($sCheckRead_piso_))
       {
           $this->nmgp_cmp_readonly['piso_'] = $sCheckRead_piso_;
       }
       if ('display: none;' == $sStyleHidden_piso_)
       {
           $this->nmgp_cmp_hidden['piso_'] = 'off';
       }
       if (isset($sCheckRead_estado_))
       {
           $this->nmgp_cmp_readonly['estado_'] = $sCheckRead_estado_;
       }
       if ('display: none;' == $sStyleHidden_estado_)
       {
           $this->nmgp_cmp_hidden['estado_'] = 'off';
       }
       if (isset($sCheckRead_nodo_))
       {
           $this->nmgp_cmp_readonly['nodo_'] = $sCheckRead_nodo_;
       }
       if ('display: none;' == $sStyleHidden_nodo_)
       {
           $this->nmgp_cmp_hidden['nodo_'] = 'off';
       }
       if (isset($sCheckRead_imagen_))
       {
           $this->nmgp_cmp_readonly['imagen_'] = $sCheckRead_imagen_;
       }
       if ('display: none;' == $sStyleHidden_imagen_)
       {
           $this->nmgp_cmp_hidden['imagen_'] = 'off';
       }

   }
   if ($Line_Add) 
   { 
       $this->New_Line = ob_get_contents();
       ob_end_clean();
       $this->nmgp_opcao = $guarda_nmgp_opcao;
       $this->form_vert_form_mant_usuarios = $guarda_form_vert_form_mant_usuarios;
   } 
   if ($Table_refresh) 
   { 
       $this->Table_refresh = ob_get_contents();
       ob_end_clean();
   } 
}

function Form_Fim() 
{
   global $sc_seq_vert, $opcao_botoes, $nm_url_saida; 
?>   
</TABLE></div><!-- bloco_f -->
 </div> 
<?php
$iContrVert = $this->Embutida_form ? $sc_seq_vert + 1 : $sc_seq_vert + 1;
if ($sc_seq_vert < $this->sc_max_reg)
{
    echo " <script type=\"text/javascript\">";
    echo "    bRefreshTable = true;";
    echo "</script>";
}
?>
<input type="hidden" name="sc_contr_vert" value="<?php echo $this->form_encode_input($iContrVert); ?>">
<?php
    $sEmptyStyle = 0 == $sc_seq_vert ? '' : 'display: none;';
?>
</td></tr>
<tr id="sc-ui-empty-form" style="<?php echo $sEmptyStyle; ?>"><td class="scFormPageText" style="padding: 10px; text-align: center; font-weight: bold">
<?php echo $this->Ini->Nm_lang['lang_errm_empt'];
?>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "birpara", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", "brec_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
      }
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['qtline'] == "on")
      {
?> 
          <span class="<?php echo $this->css_css_toolbar_obj ?>" style="border: 0px;"><?php echo $this->Ini->Nm_lang['lang_btns_rows'] ?></span>
          <select class="scFormToolbarInput" name="nmgp_quant_linhas_b" onchange="document.F7.nmgp_max_line.value = this.value; document.F7.submit();"> 
<?php 
              $obj_sel = ($this->sc_max_reg == '10') ? " selected" : "";
?> 
           <option value="10" <?php echo $obj_sel ?>>10</option>
<?php 
              $obj_sel = ($this->sc_max_reg == '15') ? " selected" : "";
?> 
           <option value="15" <?php echo $obj_sel ?>>15</option>
<?php 
              $obj_sel = ($this->sc_max_reg == '20') ? " selected" : "";
?> 
           <option value="20" <?php echo $obj_sel ?>>20</option>
<?php 
              $obj_sel = ($this->sc_max_reg == '50') ? " selected" : "";
?> 
           <option value="50" <?php echo $obj_sel ?>>50</option>
          </select>
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio_off", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna_off", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca_off", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal_off", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>
<script>
 var iAjaxNewLine = <?php echo $sc_seq_vert; ?>;
<?php
if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_modal']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['run_modal'])
{
?>
 for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) {
  scJQElementsAdd(iLine);
 }
<?php
}
else
{
?>
 $(function() {
  setTimeout(function() { for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) { scJQElementsAdd(iLine); } }, 250);
 });
<?php
}
?>
</script>
<div id="new_line_dummy" style="display: none">
</div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
   </td></tr></table>
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['masterValue']);
?>
}
<?php
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_mant_usuarios");
 parent.scAjaxDetailHeight("form_mant_usuarios", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_mant_usuarios", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_mant_usuarios", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
?>
<script type="text/javascript">
_scAjaxShowMessage(scMsgDefTitle, "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", false, sc_ajaxMsgTime, false, "Ok", 0, 0, 0, 0, "", "", "", false, true);
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mant_usuarios']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
</body> 
</html> 
<?php 
 } 
} 
?> 
