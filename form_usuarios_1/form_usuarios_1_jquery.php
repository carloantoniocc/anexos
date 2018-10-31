
function scJQGeneralAdd() {
  $('input:text.sc-js-input').listen();
  $('input:password.sc-js-input').listen();
  $('input:checkbox.sc-js-input').listen();
  $('input:radio.sc-js-input').listen();
  $('select.sc-js-input').listen();
  $('textarea.sc-js-input').listen();

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if (false == scSetFocusOnField($oField) && $("#id_ac_" + sField).length > 0) {
    scSetFocusOnField($("#id_ac_" + sField));
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["fecha_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["ap_pat_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["ap_mat_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nombres_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["correo_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["anexo_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["depto_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["modelos_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["mac_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["categorias_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["observaciones_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["piso_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["fecha_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fecha_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ap_pat_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ap_pat_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ap_mat_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ap_mat_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nombres_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombres_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["correo_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["correo_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["anexo_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["anexo_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["depto_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["depto_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["modelos_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["modelos_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mac_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mac_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["categorias_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["categorias_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["observaciones_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["observaciones_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["piso_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["piso_" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_active_all() {
  for (var i = 1; i < iAjaxNewLine; i++) {
    if (scEventControl_active(i)) {
      return true;
    }
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("depto_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("modelos_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("categorias_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_fecha_' + iSeqRow).bind('blur', function() { sc_form_usuarios_1_fecha__onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_usuarios_1_fecha__onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_usuarios_1_fecha__onfocus(this, iSeqRow) });
  $('#id_sc_field_ap_pat_' + iSeqRow).bind('blur', function() { sc_form_usuarios_1_ap_pat__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_usuarios_1_ap_pat__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_usuarios_1_ap_pat__onfocus(this, iSeqRow) });
  $('#id_sc_field_ap_mat_' + iSeqRow).bind('blur', function() { sc_form_usuarios_1_ap_mat__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_usuarios_1_ap_mat__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_usuarios_1_ap_mat__onfocus(this, iSeqRow) });
  $('#id_sc_field_nombres_' + iSeqRow).bind('blur', function() { sc_form_usuarios_1_nombres__onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_usuarios_1_nombres__onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_usuarios_1_nombres__onfocus(this, iSeqRow) });
  $('#id_sc_field_correo_' + iSeqRow).bind('blur', function() { sc_form_usuarios_1_correo__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_usuarios_1_correo__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_usuarios_1_correo__onfocus(this, iSeqRow) });
  $('#id_sc_field_anexo_' + iSeqRow).bind('blur', function() { sc_form_usuarios_1_anexo__onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_usuarios_1_anexo__onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_usuarios_1_anexo__onfocus(this, iSeqRow) });
  $('#id_sc_field_depto_' + iSeqRow).bind('blur', function() { sc_form_usuarios_1_depto__onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_usuarios_1_depto__onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_usuarios_1_depto__onfocus(this, iSeqRow) });
  $('#id_sc_field_mac_' + iSeqRow).bind('blur', function() { sc_form_usuarios_1_mac__onblur(this, iSeqRow) })
                                  .bind('change', function() { sc_form_usuarios_1_mac__onchange(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_usuarios_1_mac__onfocus(this, iSeqRow) });
  $('#id_sc_field_observaciones_' + iSeqRow).bind('blur', function() { sc_form_usuarios_1_observaciones__onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_usuarios_1_observaciones__onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_usuarios_1_observaciones__onfocus(this, iSeqRow) });
  $('#id_sc_field_piso_' + iSeqRow).bind('blur', function() { sc_form_usuarios_1_piso__onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_usuarios_1_piso__onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_usuarios_1_piso__onfocus(this, iSeqRow) });
  $('#id_sc_field_modelos_' + iSeqRow).bind('blur', function() { sc_form_usuarios_1_modelos__onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_usuarios_1_modelos__onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_usuarios_1_modelos__onfocus(this, iSeqRow) });
  $('#id_sc_field_categorias_' + iSeqRow).bind('blur', function() { sc_form_usuarios_1_categorias__onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_usuarios_1_categorias__onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_usuarios_1_categorias__onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_usuarios_1_fecha__onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_1_validate_fecha_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_usuarios_1_fecha__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_usuarios_1_fecha__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_usuarios_1_ap_pat__onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_1_validate_ap_pat_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_usuarios_1_ap_pat__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_usuarios_1_ap_pat__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_usuarios_1_ap_mat__onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_1_validate_ap_mat_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_usuarios_1_ap_mat__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_usuarios_1_ap_mat__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_usuarios_1_nombres__onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_1_validate_nombres_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_usuarios_1_nombres__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_usuarios_1_nombres__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_usuarios_1_correo__onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_1_validate_correo_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_usuarios_1_correo__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_usuarios_1_correo__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_usuarios_1_anexo__onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_1_validate_anexo_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_usuarios_1_anexo__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_usuarios_1_anexo__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_usuarios_1_depto__onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_1_validate_depto_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_usuarios_1_depto__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_usuarios_1_depto__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_usuarios_1_mac__onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_1_validate_mac_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_usuarios_1_mac__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_usuarios_1_mac__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_usuarios_1_observaciones__onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_1_validate_observaciones_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_usuarios_1_observaciones__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_usuarios_1_observaciones__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_usuarios_1_piso__onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_1_validate_piso_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_usuarios_1_piso__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_usuarios_1_piso__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_usuarios_1_modelos__onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_1_validate_modelos_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_usuarios_1_modelos__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_usuarios_1_modelos__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_usuarios_1_categorias__onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_1_validate_categorias_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_usuarios_1_categorias__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_usuarios_1_categorias__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_fecha_" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha_" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fecha_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd
