<?php
//
class form_usuarios_1_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'         => '',
                                'param'          => array(),
                                'autoComp'       => '',
                                'rsSize'         => '',
                                'msgDisplay'     => '',
                                'errList'        => array(),
                                'fldList'        => array(),
                                'focus'          => '',
                                'navStatus'      => array(),
                                'navSummary'     => array(),
                                'navPage'        => array(),
                                'redir'          => array(),
                                'blockDisplay'   => array(),
                                'fieldDisplay'   => array(),
                                'fieldLabel'     => array(),
                                'readOnly'       => array(),
                                'btnVars'        => array(),
                                'ajaxAlert'      => '',
                                'ajaxMessage'    => '',
                                'ajaxJavascript' => array(),
                                'buttonDisplay'  => array(),
                                'calendarReload' => false,
                                'quickSearchRes' => false,
                                'displayMsg'     => false,
                                'displayMsgTxt'  => '',
                                'dyn_search'     => array(),
                                'empty_filter'   => '',
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $id_;
   var $clave_;
   var $fecha_;
   var $ap_pat_;
   var $ap_mat_;
   var $nombres_;
   var $correo_;
   var $anexo_;
   var $depto_;
   var $depto__1;
   var $modelo_;
   var $mac_;
   var $categoria_;
   var $observaciones_;
   var $piso_;
   var $estado_;
   var $modelos_;
   var $modelos__1;
   var $categorias_;
   var $categorias__1;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $sc_teve_incl = false;
   var $sc_teve_excl = false;
   var $sc_teve_alt  = false;
   var $sc_after_all_insert = false;
   var $sc_after_all_update = false;
   var $sc_max_reg = 25; 
   var $sc_max_reg_incl = 10; 
   var $form_vert_form_usuarios_1 = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = true;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['anexo_']))
          {
              $this->anexo_ = $this->NM_ajax_info['param']['anexo_'];
          }
          if (isset($this->NM_ajax_info['param']['ap_mat_']))
          {
              $this->ap_mat_ = $this->NM_ajax_info['param']['ap_mat_'];
          }
          if (isset($this->NM_ajax_info['param']['ap_pat_']))
          {
              $this->ap_pat_ = $this->NM_ajax_info['param']['ap_pat_'];
          }
          if (isset($this->NM_ajax_info['param']['categorias_']))
          {
              $this->categorias_ = $this->NM_ajax_info['param']['categorias_'];
          }
          if (isset($this->NM_ajax_info['param']['correo_']))
          {
              $this->correo_ = $this->NM_ajax_info['param']['correo_'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['depto_']))
          {
              $this->depto_ = $this->NM_ajax_info['param']['depto_'];
          }
          if (isset($this->NM_ajax_info['param']['fecha_']))
          {
              $this->fecha_ = $this->NM_ajax_info['param']['fecha_'];
          }
          if (isset($this->NM_ajax_info['param']['id_']))
          {
              $this->id_ = $this->NM_ajax_info['param']['id_'];
          }
          if (isset($this->NM_ajax_info['param']['mac_']))
          {
              $this->mac_ = $this->NM_ajax_info['param']['mac_'];
          }
          if (isset($this->NM_ajax_info['param']['modelos_']))
          {
              $this->modelos_ = $this->NM_ajax_info['param']['modelos_'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_fast_search']))
          {
              $this->nmgp_arg_fast_search = $this->NM_ajax_info['param']['nmgp_arg_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_cond_fast_search']))
          {
              $this->nmgp_cond_fast_search = $this->NM_ajax_info['param']['nmgp_cond_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_fast_search']))
          {
              $this->nmgp_fast_search = $this->NM_ajax_info['param']['nmgp_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_refresh_row']))
          {
              $this->nmgp_refresh_row = $this->NM_ajax_info['param']['nmgp_refresh_row'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['nombres_']))
          {
              $this->nombres_ = $this->NM_ajax_info['param']['nombres_'];
          }
          if (isset($this->NM_ajax_info['param']['observaciones_']))
          {
              $this->observaciones_ = $this->NM_ajax_info['param']['observaciones_'];
          }
          if (isset($this->NM_ajax_info['param']['piso_']))
          {
              $this->piso_ = $this->NM_ajax_info['param']['piso_'];
          }
          if (isset($this->NM_ajax_info['param']['sc_clone']))
          {
              $this->sc_clone = $this->NM_ajax_info['param']['sc_clone'];
          }
          if (isset($this->NM_ajax_info['param']['sc_seq_clone']))
          {
              $this->sc_seq_clone = $this->NM_ajax_info['param']['sc_seq_clone'];
          }
          if (isset($this->NM_ajax_info['param']['sc_seq_vert']))
          {
              $this->sc_seq_vert = $this->NM_ajax_info['param']['sc_seq_vert'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->sc_conv_var = array();
      $this->sc_conv_var['id'] = "id_";
      $this->sc_conv_var['clave'] = "clave_";
      $this->sc_conv_var['fecha'] = "fecha_";
      $this->sc_conv_var['ap_pat'] = "ap_pat_";
      $this->sc_conv_var['ap_mat'] = "ap_mat_";
      $this->sc_conv_var['nombres'] = "nombres_";
      $this->sc_conv_var['correo'] = "correo_";
      $this->sc_conv_var['anexo'] = "anexo_";
      $this->sc_conv_var['depto'] = "depto_";
      $this->sc_conv_var['modelo'] = "modelo_";
      $this->sc_conv_var['mac'] = "mac_";
      $this->sc_conv_var['categoria'] = "categoria_";
      $this->sc_conv_var['observaciones'] = "observaciones_";
      $this->sc_conv_var['piso'] = "piso_";
      $this->sc_conv_var['estado'] = "estado_";
      $this->sc_conv_var['modelos'] = "modelos_";
      $this->sc_conv_var['categorias'] = "categorias_";
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (isset($this->sc_conv_var[$nmgp_campo]))
               {
                   $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
               {
                   $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['nm_run_menu'] = 1;
      } 
      if (isset($_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $this->NM_where_filter = "";
          $tem_where_parms       = false;
          $nmgp_parms = NM_decode_input($nmgp_parms);
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_usuarios_1($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $this->$cadapar[0] = $cadapar[1];
                 if ($cadapar[0] == "Id_")
                 {
                     $this->NM_where_filter .= (empty($this->NM_where_filter)) ? "(" : " and ";
                     $this->NM_where_filter .= " = '" . $this->Id_ . "'";
                     $this->has_where_params = true;
                     $tem_where_parms        = true;
                 }
                 elseif ($cadapar[0] == "NM_where_filter")
                 {
                     $this->has_where_params = false;
                     $tem_where_parms        = false;
                 }
             }
             $ix++;
          }
          if ($tem_where_parms)
          {
              $this->NM_where_filter .= ")";
          }
          else
          {
              unset($this->NM_where_filter);
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $this->$cadapar[0] = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_usuarios_1_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_usuarios_1']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_usuarios_1']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_usuarios_1'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_usuarios_1']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_usuarios_1']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_usuarios_1') . "/form_usuarios_1.php";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_usuarios_1']['label'] = "form_usuarios_1";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_usuarios_1")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form = (isset($_SESSION['scriptcase']['str_button_all'])) ? $_SESSION['scriptcase']['str_button_all'] : "misbotones";
      $_SESSION['scriptcase']['str_button_all'] = $this->Ini->Str_btn_form;
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $this->Db = $this->Ini->Db; 
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok_mult)   ? ""     : $str_img_status_ok_mult;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err_mult)  ? ""     : $str_img_status_err_mult;
      $this->Ini->Css_status      = "scFormInputErrorMult";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);



      $_SESSION['scriptcase']['error_icon']['form_usuarios_1']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_usuarios_1'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz . "form_usuarios_1.php"; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['qsearch'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      if ('total' == $this->form_paginacao)
      {
          $this->nmgp_botoes['first']   = "off";
          $this->nmgp_botoes['back']    = "off";
          $this->nmgp_botoes['forward'] = "off";
          $this->nmgp_botoes['last']    = "off";
          $this->nmgp_botoes['navpage'] = "off";
          $this->nmgp_botoes['goto']    = "off";
          $this->nmgp_botoes['qtline']  = "off";
          $this->nmgp_botoes['summary'] = "off";
      }
      else
      {
      $this->nmgp_botoes['first'] = "off";
      $this->nmgp_botoes['back'] = "off";
      $this->nmgp_botoes['forward'] = "off";
      $this->nmgp_botoes['last'] = "off";
      $this->nmgp_botoes['summary'] = "off";
      $this->nmgp_botoes['navpage'] = "on";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      }
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios_1']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field . "_"] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field . "_"] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field . "_"] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field . "_"] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['exit'];
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_usuarios_1", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 
      if (isset($_GET['nm_cal_display']))
      {
          if ($this->Embutida_proc)
          { 
              include_once($this->Ini->path_embutida . 'form_usuarios_1/form_usuarios_1_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_usuarios_1_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_usuarios_1_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_usuarios_1_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_usuarios_1/form_usuarios_1_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_usuarios_1_erro.class.php"); 
      }
      $this->Erro      = new form_usuarios_1_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['opcao']))
         { 
             if ($this->id_ != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->sc_evento = $this->nmgp_opcao;
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- fecha_
      $this->field_config['fecha_']                 = array();
      $this->field_config['fecha_']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fecha_']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fecha_']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fecha_');
      //-- anexo_
      $this->field_config['anexo_']               = array();
      $this->field_config['anexo_']['symbol_grp'] = '';
      $this->field_config['anexo_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['anexo_']['symbol_dec'] = '';
      $this->field_config['anexo_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['anexo_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- piso_
      $this->field_config['piso_']               = array();
      $this->field_config['piso_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['piso_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['piso_']['symbol_dec'] = '';
      $this->field_config['piso_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['piso_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- id_
      $this->field_config['id_']               = array();
      $this->field_config['id_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['id_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['id_']['symbol_dec'] = '';
      $this->field_config['id_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['id_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- clave_
      $this->field_config['clave_']               = array();
      $this->field_config['clave_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['clave_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['clave_']['symbol_dec'] = '';
      $this->field_config['clave_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['clave_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- estado_
      $this->field_config['estado_']               = array();
      $this->field_config['estado_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['estado_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['estado_']['symbol_dec'] = '';
      $this->field_config['estado_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['estado_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz . "form_usuarios_1.php"; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['opc_edit'] = true;  
      $sc_contr_vert = $GLOBALS["sc_contr_vert"];
      $sc_seq_vert   = 1; 
      $sc_opc_salva  = $this->nmgp_opcao; 
      $sc_todas_Crit = "";
      $sc_check_excl = array(); 
      $sc_check_incl = array(); 
      if (is_array($GLOBALS["sc_check_vert"])) 
      { 
          if ($this->nmgp_opcao == "incluir" || ($this->nmgp_opcao == "recarga" && $this->nmgp_opc_ant == "novo"))
          {
              $sc_check_incl = $GLOBALS["sc_check_vert"]; 
          }
          elseif ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir" || $this->nmgp_opcao == "recarga")
          {
              $sc_check_excl = $GLOBALS["sc_check_vert"]; 
          }
      } 
      elseif ($this->nmgp_opcao == 'incluir' && isset($_POST['upload_file_row']) && '' != $_POST['upload_file_row'])
      {
          $sc_check_incl = array($_POST['upload_file_row']);
      }
      if (empty($this->nmgp_opcao)) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "novo";
         $this->nm_select_banco();
         $this->nm_gera_html();
         $this->NM_ajax_info['newline'] = NM_utf8_urldecode($this->New_Line);
         $this->NM_close_db();
         form_usuarios_1_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'backup_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "igual";
         $this->nm_tira_formatacao();
         $this->nm_converte_datas();
         $this->nm_select_banco();
         $this->ajax_return_values();
         $this->NM_close_db();
         form_usuarios_1_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'submit_form' == $this->NM_ajax_opcao)
      {
         if (isset($this->ap_pat_)) { $this->nm_limpa_alfa($this->ap_pat_); }
         if (isset($this->ap_mat_)) { $this->nm_limpa_alfa($this->ap_mat_); }
         if (isset($this->nombres_)) { $this->nm_limpa_alfa($this->nombres_); }
         if (isset($this->correo_)) { $this->nm_limpa_alfa($this->correo_); }
         if (isset($this->anexo_)) { $this->nm_limpa_alfa($this->anexo_); }
         if (isset($this->depto_)) { $this->nm_limpa_alfa($this->depto_); }
         if (isset($this->mac_)) { $this->nm_limpa_alfa($this->mac_); }
         if (isset($this->observaciones_)) { $this->nm_limpa_alfa($this->observaciones_); }
         if (isset($this->piso_)) { $this->nm_limpa_alfa($this->piso_); }
         if (isset($this->modelos_)) { $this->nm_limpa_alfa($this->modelos_); }
         if (isset($this->categorias_)) { $this->nm_limpa_alfa($this->categorias_); }
         if (isset($this->Sc_num_lin_alt) && $this->Sc_num_lin_alt > 0) 
         {
             $sc_seq_vert = $this->Sc_num_lin_alt;
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_form'][$sc_seq_vert];
             $this->id_ = $this->nmgp_dados_form['id_']; 
             $this->clave_ = $this->nmgp_dados_form['clave_']; 
             $this->modelo_ = $this->nmgp_dados_form['modelo_']; 
             $this->categoria_ = $this->nmgp_dados_form['categoria_']; 
             $this->estado_ = $this->nmgp_dados_form['estado_']; 
         }
         $this->controle_form_vert();
         if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
         {
             $this->NM_rollback_db();
              if ($this->NM_ajax_flag)
              {
                  if (!isset($this->NM_ajax_info['errList']['geral_form_usuarios_1']) || !is_array($this->NM_ajax_info['errList']['geral_form_usuarios_1']))
                  {
                      $this->NM_ajax_info['errList']['geral_form_usuarios_1'] = array();
                  }
                  if ($Campos_Crit != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_usuarios_1'][] = $Campos_Crit;
                  }
                  if (!empty($Campos_Falta))
                  {
                      $this->NM_ajax_info['errList']['geral_form_usuarios_1'][] = $this->Formata_Campos_Falta($Campos_Falta);
                  }
                  if ($this->Campos_Mens_erro != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_usuarios_1'][] = $this->Campos_Mens_erro;
                  }
                  $this->NM_gera_nav_page(); 
                  $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              }
         }
         else
         {
             $this->NM_commit_db();
         }
         if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_teve_alt && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_excl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
         }
         $this->NM_close_db();
         form_usuarios_1_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
          if ('validate_fecha_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fecha_');
          }
          if ('validate_ap_pat_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ap_pat_');
          }
          if ('validate_ap_mat_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ap_mat_');
          }
          if ('validate_nombres_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nombres_');
          }
          if ('validate_correo_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'correo_');
          }
          if ('validate_anexo_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'anexo_');
          }
          if ('validate_depto_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'depto_');
          }
          if ('validate_modelos_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'modelos_');
          }
          if ('validate_mac_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'mac_');
          }
          if ('validate_categorias_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'categorias_');
          }
          if ('validate_observaciones_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'observaciones_');
          }
          if ('validate_piso_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'piso_');
          }
          form_usuarios_1_pack_ajax_response();
          exit;
      }
      while ($sc_contr_vert > $sc_seq_vert) 
      { 
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
         $this->fecha_ = $GLOBALS["fecha_" . $sc_seq_vert]; 
         $this->ap_pat_ = $GLOBALS["ap_pat_" . $sc_seq_vert]; 
         $this->ap_mat_ = $GLOBALS["ap_mat_" . $sc_seq_vert]; 
         $this->nombres_ = $GLOBALS["nombres_" . $sc_seq_vert]; 
         $this->correo_ = $GLOBALS["correo_" . $sc_seq_vert]; 
         $this->anexo_ = $GLOBALS["anexo_" . $sc_seq_vert]; 
         $this->depto_ = $GLOBALS["depto_" . $sc_seq_vert]; 
         $this->modelos_ = $GLOBALS["modelos_" . $sc_seq_vert]; 
         $this->mac_ = $GLOBALS["mac_" . $sc_seq_vert]; 
         $this->categorias_ = $GLOBALS["categorias_" . $sc_seq_vert]; 
         $this->observaciones_ = $GLOBALS["observaciones_" . $sc_seq_vert]; 
         $this->piso_ = $GLOBALS["piso_" . $sc_seq_vert]; 
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_form'][$sc_seq_vert];
             $this->id_ = $this->nmgp_dados_form['id_']; 
             $this->clave_ = $this->nmgp_dados_form['clave_']; 
             $this->modelo_ = $this->nmgp_dados_form['modelo_']; 
             $this->categoria_ = $this->nmgp_dados_form['categoria_']; 
             $this->estado_ = $this->nmgp_dados_form['estado_']; 
         }
         if (isset($this->ap_pat_)) { $this->nm_limpa_alfa($this->ap_pat_); }
         if (isset($this->ap_mat_)) { $this->nm_limpa_alfa($this->ap_mat_); }
         if (isset($this->nombres_)) { $this->nm_limpa_alfa($this->nombres_); }
         if (isset($this->correo_)) { $this->nm_limpa_alfa($this->correo_); }
         if (isset($this->anexo_)) { $this->nm_limpa_alfa($this->anexo_); }
         if (isset($this->depto_)) { $this->nm_limpa_alfa($this->depto_); }
         if (isset($this->mac_)) { $this->nm_limpa_alfa($this->mac_); }
         if (isset($this->observaciones_)) { $this->nm_limpa_alfa($this->observaciones_); }
         if (isset($this->piso_)) { $this->nm_limpa_alfa($this->piso_); }
         if (isset($this->modelos_)) { $this->nm_limpa_alfa($this->modelos_); }
         if (isset($this->categorias_)) { $this->nm_limpa_alfa($this->categorias_); }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_form'])) 
         {
            $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_form'][$sc_seq_vert];
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'])) 
         {
            $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert];
         }
         if ($this->nmgp_opcao != "recarga" && in_array($sc_seq_vert, $sc_check_excl))
         {
             $this->nmgp_opcao = "excluir";
         }
         if ($this->nmgp_opcao == "incluir" && !in_array($sc_seq_vert, $sc_check_incl))
         { }
         else
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_disabled'] = array();
             $this->controle_form_vert(); 
             $this->nmgp_opcao = $sc_opc_salva; 
             if ($this->nmgp_opcao != "recarga"  && $this->nmgp_opcao != "muda_form" && ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != ""))
             {
                 $sc_todas_Crit .= (!empty($sc_todas_Crit)) ? "<br>" : ""; 
                 $sc_todas_Crit .= "<B>" . $this->Ini->Nm_lang['lang_errm_line'] . $sc_seq_vert . "</B>: "; 
                 $sc_todas_Crit .= $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
                 $this->Campos_Mens_erro = ""; 
             }
             if ($this->nmgp_opcao != "recarga") 
             {
                $this->nm_guardar_campos();
                $this->nm_formatar_campos();
             }
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['fecha_'] =  $this->fecha_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['ap_pat_'] =  $this->ap_pat_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['ap_mat_'] =  $this->ap_mat_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['nombres_'] =  $this->nombres_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['correo_'] =  $this->correo_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['anexo_'] =  $this->anexo_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['depto_'] =  $this->depto_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['modelos_'] =  $this->modelos_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['mac_'] =  $this->mac_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['categorias_'] =  $this->categorias_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['observaciones_'] =  $this->observaciones_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['piso_'] =  $this->piso_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['id_'] =  $this->id_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['clave_'] =  $this->clave_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['modelo_'] =  $this->modelo_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['categoria_'] =  $this->categoria_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['estado_'] =  $this->estado_; 
         }
         $sc_seq_vert++; 
      } 
      if (!empty($sc_todas_Crit)) 
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sc_todas_Crit); 
          if ($this->nmgp_opcao == "incluir")
          { 
              $this->nmgp_opcao = "novo"; 
          }
      } 
      elseif ($this->nmgp_opcao == "incluir")
      { 
          $this->nmgp_opcao = "novo"; 
      }
      if ($this->nmgp_opcao == 'incluir' && isset($_POST['upload_file_row']) && '' != $_POST['upload_file_row'])
      {
          $this->nmgp_opcao = 'igual';
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form") 
      { 
          if ($this->sc_teve_incl) 
          { 
              $this->sc_after_all_insert = true;
          }
          if ($this->sc_teve_alt || $this->sc_teve_excl) 
          { 
              $this->sc_after_all_update = true;
          }
          if (empty($sc_todas_Crit)) 
          { 
              $this->NM_commit_db(); 
              $this->nm_select_banco();
              $sc_check_excl = array(); 
          } 
          else
          { 
              $this->NM_rollback_db(); 
          } 
      } 
      if ($this->nmgp_opcao == "recarga") 
      { 
          $this->NM_gera_nav_page(); 
      } 
      if ($this->NM_ajax_flag && ('navigate_form' == $this->NM_ajax_opcao || !empty($this->nmgp_refresh_fields)))
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          $this->NM_close_db();
          form_usuarios_1_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
      {
          $this->nm_gera_html();
          $this->NM_ajax_info['tableRefresh'] = NM_charset_to_utf8($this->Table_refresh . $this->New_Line) . '</table>';
          $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
          $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
          $this->NM_ajax_info['rsSize'] = sizeof($this->form_vert_form_usuarios_1);
          $this->NM_ajax_info['fldList']['id_']['keyVal'] = sc_htmlentities($this->nmgp_dados_form['id_']);
          $this->NM_close_db();
          form_usuarios_1_pack_ajax_response();
          exit;
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_teve_alt && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_excl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      $this->nm_todas_criticas = $sc_todas_Crit;
      $this->nm_gera_html();
      $this->NM_close_db(); 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "&script_case_session=" . session_id() . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
   function controle_form_vert()
   {
     global $nm_opc_lookup,$Campos_Crit, $Campos_Falta, $Campos_Erros, 
            $glo_senha_protect, $nm_apl_dependente, $nm_form_submit;

//
//-----> 
//
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_usuarios_1_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          return; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_usuarios_1']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && $this->nmgp_opcao != "menu_link")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
   }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'fecha_':
               return "Fecha";
               break;
           case 'ap_pat_':
               return "Apellido Paterno";
               break;
           case 'ap_mat_':
               return "Apellido Materno";
               break;
           case 'nombres_':
               return "Nombres";
               break;
           case 'correo_':
               return "Correo";
               break;
           case 'anexo_':
               return "Anexo";
               break;
           case 'depto_':
               return "Departamento";
               break;
           case 'modelos_':
               return "Modelo";
               break;
           case 'mac_':
               return "MAC";
               break;
           case 'categorias_':
               return "Categoria";
               break;
           case 'observaciones_':
               return "Observaciones";
               break;
           case 'piso_':
               return "Piso";
               break;
           case 'id_':
               return "Id";
               break;
           case 'clave_':
               return "Clave";
               break;
           case 'modelo_':
               return "Modelo";
               break;
           case 'categoria_':
               return "Categoria";
               break;
           case 'estado_':
               return "Estado";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if ('' == $filtro && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_usuarios_1']) || !is_array($this->NM_ajax_info['errList']['geral_form_usuarios_1']))
              {
                  $this->NM_ajax_info['errList']['geral_form_usuarios_1'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_usuarios_1'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'fecha_' == $filtro)
        $this->ValidateField_fecha_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ap_pat_' == $filtro)
        $this->ValidateField_ap_pat_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ap_mat_' == $filtro)
        $this->ValidateField_ap_mat_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nombres_' == $filtro)
        $this->ValidateField_nombres_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'correo_' == $filtro)
        $this->ValidateField_correo_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'anexo_' == $filtro)
        $this->ValidateField_anexo_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'depto_' == $filtro)
        $this->ValidateField_depto_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'modelos_' == $filtro)
        $this->ValidateField_modelos_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'mac_' == $filtro)
        $this->ValidateField_mac_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'categorias_' == $filtro)
        $this->ValidateField_categorias_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'observaciones_' == $filtro)
        $this->ValidateField_observaciones_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'piso_' == $filtro)
        $this->ValidateField_piso_($Campos_Crit, $Campos_Falta, $Campos_Erros);
//-- converter datas   
      $this->nm_converte_datas();
//---
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_fecha_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->fecha_, $this->field_config['fecha_']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao == "incluir")
      { 
          $guarda_datahora = $this->field_config['fecha_']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fecha_']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fecha_']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fecha_']['date_sep']) ; 
          if (trim($this->fecha_) != "")  
          { 
              if ($teste_validade->Data($this->fecha_, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "Fecha; " ; 
                  if (!isset($Campos_Erros['fecha_']))
                  {
                      $Campos_Erros['fecha_'] = array();
                  }
                  $Campos_Erros['fecha_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fecha_']) || !is_array($this->NM_ajax_info['errList']['fecha_']))
                  {
                      $this->NM_ajax_info['errList']['fecha_'] = array();
                  }
                  $this->NM_ajax_info['errList']['fecha_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['fecha_']['date_format'] = $guarda_datahora; 
       } 
    } // ValidateField_fecha_

    function ValidateField_ap_pat_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao == "incluir")
      { 
          if (NM_utf8_strlen($this->ap_pat_) > 20) 
          { 
              $Campos_Crit .= "Apellido Paterno " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['ap_pat_']))
              {
                  $Campos_Erros['ap_pat_'] = array();
              }
              $Campos_Erros['ap_pat_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['ap_pat_']) || !is_array($this->NM_ajax_info['errList']['ap_pat_']))
              {
                  $this->NM_ajax_info['errList']['ap_pat_'] = array();
              }
              $this->NM_ajax_info['errList']['ap_pat_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_ap_pat_

    function ValidateField_ap_mat_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao == "incluir")
      { 
          if (NM_utf8_strlen($this->ap_mat_) > 20) 
          { 
              $Campos_Crit .= "Apellido Materno " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['ap_mat_']))
              {
                  $Campos_Erros['ap_mat_'] = array();
              }
              $Campos_Erros['ap_mat_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['ap_mat_']) || !is_array($this->NM_ajax_info['errList']['ap_mat_']))
              {
                  $this->NM_ajax_info['errList']['ap_mat_'] = array();
              }
              $this->NM_ajax_info['errList']['ap_mat_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_ap_mat_

    function ValidateField_nombres_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao == "incluir")
      { 
          if (NM_utf8_strlen($this->nombres_) > 20) 
          { 
              $Campos_Crit .= "Nombres " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nombres_']))
              {
                  $Campos_Erros['nombres_'] = array();
              }
              $Campos_Erros['nombres_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nombres_']) || !is_array($this->NM_ajax_info['errList']['nombres_']))
              {
                  $this->NM_ajax_info['errList']['nombres_'] = array();
              }
              $this->NM_ajax_info['errList']['nombres_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_nombres_

    function ValidateField_correo_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao == "incluir")
      { 
          if (NM_utf8_strlen($this->correo_) > 20) 
          { 
              $Campos_Crit .= "Correo " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['correo_']))
              {
                  $Campos_Erros['correo_'] = array();
              }
              $Campos_Erros['correo_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['correo_']) || !is_array($this->NM_ajax_info['errList']['correo_']))
              {
                  $this->NM_ajax_info['errList']['correo_'] = array();
              }
              $this->NM_ajax_info['errList']['correo_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_correo_

    function ValidateField_anexo_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->anexo_ == "")  
      { 
          $this->anexo_ = 0;
          $this->sc_force_zero[] = 'anexo_';
      } 
      nm_limpa_numero($this->anexo_, $this->field_config['anexo_']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->anexo_ != '')  
          { 
              $iTestSize = 6;
              if (strlen($this->anexo_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Anexo: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['anexo_']))
                  {
                      $Campos_Erros['anexo_'] = array();
                  }
                  $Campos_Erros['anexo_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['anexo_']) || !is_array($this->NM_ajax_info['errList']['anexo_']))
                  {
                      $this->NM_ajax_info['errList']['anexo_'] = array();
                  }
                  $this->NM_ajax_info['errList']['anexo_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->anexo_, 6, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Anexo; " ; 
                  if (!isset($Campos_Erros['anexo_']))
                  {
                      $Campos_Erros['anexo_'] = array();
                  }
                  $Campos_Erros['anexo_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['anexo_']) || !is_array($this->NM_ajax_info['errList']['anexo_']))
                  {
                      $this->NM_ajax_info['errList']['anexo_'] = array();
                  }
                  $this->NM_ajax_info['errList']['anexo_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_anexo_

    function ValidateField_depto_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
   if ($this->nmgp_opcao == "incluir")
   {
               if (!empty($this->depto_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_depto_']) && !in_array($this->depto_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_depto_']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['depto_']))
                   {
                       $Campos_Erros['depto_'] = array();
                   }
                   $Campos_Erros['depto_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['depto_']) || !is_array($this->NM_ajax_info['errList']['depto_']))
                   {
                       $this->NM_ajax_info['errList']['depto_'] = array();
                   }
                   $this->NM_ajax_info['errList']['depto_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
   }
    } // ValidateField_depto_

    function ValidateField_modelos_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->modelos_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_modelos_']) && !in_array($this->modelos_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_modelos_']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['modelos_']))
                   {
                       $Campos_Erros['modelos_'] = array();
                   }
                   $Campos_Erros['modelos_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['modelos_']) || !is_array($this->NM_ajax_info['errList']['modelos_']))
                   {
                       $this->NM_ajax_info['errList']['modelos_'] = array();
                   }
                   $this->NM_ajax_info['errList']['modelos_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_modelos_

    function ValidateField_mac_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->mac_) > 20) 
          { 
              $Campos_Crit .= "MAC " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['mac_']))
              {
                  $Campos_Erros['mac_'] = array();
              }
              $Campos_Erros['mac_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['mac_']) || !is_array($this->NM_ajax_info['errList']['mac_']))
              {
                  $this->NM_ajax_info['errList']['mac_'] = array();
              }
              $this->NM_ajax_info['errList']['mac_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_mac_

    function ValidateField_categorias_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->categorias_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_categorias_']) && !in_array($this->categorias_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_categorias_']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['categorias_']))
                   {
                       $Campos_Erros['categorias_'] = array();
                   }
                   $Campos_Erros['categorias_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['categorias_']) || !is_array($this->NM_ajax_info['errList']['categorias_']))
                   {
                       $this->NM_ajax_info['errList']['categorias_'] = array();
                   }
                   $this->NM_ajax_info['errList']['categorias_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_categorias_

    function ValidateField_observaciones_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->observaciones_) > 30) 
          { 
              $Campos_Crit .= "Observaciones " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['observaciones_']))
              {
                  $Campos_Erros['observaciones_'] = array();
              }
              $Campos_Erros['observaciones_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['observaciones_']) || !is_array($this->NM_ajax_info['errList']['observaciones_']))
              {
                  $this->NM_ajax_info['errList']['observaciones_'] = array();
              }
              $this->NM_ajax_info['errList']['observaciones_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_observaciones_

    function ValidateField_piso_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->piso_ == "")  
      { 
          $this->piso_ = 0;
          $this->sc_force_zero[] = 'piso_';
      } 
      nm_limpa_numero($this->piso_, $this->field_config['piso_']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->piso_ != '')  
          { 
              $iTestSize = 2;
              if (strlen($this->piso_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Piso: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['piso_']))
                  {
                      $Campos_Erros['piso_'] = array();
                  }
                  $Campos_Erros['piso_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['piso_']) || !is_array($this->NM_ajax_info['errList']['piso_']))
                  {
                      $this->NM_ajax_info['errList']['piso_'] = array();
                  }
                  $this->NM_ajax_info['errList']['piso_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->piso_, 2, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Piso; " ; 
                  if (!isset($Campos_Erros['piso_']))
                  {
                      $Campos_Erros['piso_'] = array();
                  }
                  $Campos_Erros['piso_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['piso_']) || !is_array($this->NM_ajax_info['errList']['piso_']))
                  {
                      $this->NM_ajax_info['errList']['piso_'] = array();
                  }
                  $this->NM_ajax_info['errList']['piso_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_piso_

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['fecha_'] = $this->fecha_;
    $this->nmgp_dados_form['ap_pat_'] = $this->ap_pat_;
    $this->nmgp_dados_form['ap_mat_'] = $this->ap_mat_;
    $this->nmgp_dados_form['nombres_'] = $this->nombres_;
    $this->nmgp_dados_form['correo_'] = $this->correo_;
    $this->nmgp_dados_form['anexo_'] = $this->anexo_;
    $this->nmgp_dados_form['depto_'] = $this->depto_;
    $this->nmgp_dados_form['modelos_'] = $this->modelos_;
    $this->nmgp_dados_form['mac_'] = $this->mac_;
    $this->nmgp_dados_form['categorias_'] = $this->categorias_;
    $this->nmgp_dados_form['observaciones_'] = $this->observaciones_;
    $this->nmgp_dados_form['piso_'] = $this->piso_;
    $this->nmgp_dados_form['id_'] = $this->id_;
    $this->nmgp_dados_form['clave_'] = $this->clave_;
    $this->nmgp_dados_form['modelo_'] = $this->modelo_;
    $this->nmgp_dados_form['categoria_'] = $this->categoria_;
    $this->nmgp_dados_form['estado_'] = $this->estado_;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_form'][$sc_seq_vert] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_data($this->fecha_, $this->field_config['fecha_']['date_sep']) ; 
      nm_limpa_numero($this->anexo_, $this->field_config['anexo_']['symbol_grp']) ; 
      nm_limpa_numero($this->piso_, $this->field_config['piso_']['symbol_grp']) ; 
      nm_limpa_numero($this->id_, $this->field_config['id_']['symbol_grp']) ; 
      nm_limpa_numero($this->clave_, $this->field_config['clave_']['symbol_grp']) ; 
      nm_limpa_numero($this->estado_, $this->field_config['estado_']['symbol_grp']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~ei', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "anexo_")
      {
          nm_limpa_numero($this->anexo_, $this->field_config['anexo_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "piso_")
      {
          nm_limpa_numero($this->piso_, $this->field_config['piso_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "id_")
      {
          nm_limpa_numero($this->id_, $this->field_config['id_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "clave_")
      {
          nm_limpa_numero($this->clave_, $this->field_config['clave_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "estado_")
      {
          nm_limpa_numero($this->estado_, $this->field_config['estado_']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
      if ((!empty($this->fecha_) && 'null' != $this->fecha_) || (!empty($format_fields) && isset($format_fields['fecha_'])))
      {
          nm_volta_data($this->fecha_, $this->field_config['fecha_']['date_format']) ; 
          nmgp_Form_Datas($this->fecha_, $this->field_config['fecha_']['date_format'], $this->field_config['fecha_']['date_sep']) ;  
      }
      elseif ('null' == $this->fecha_ || '' == $this->fecha_)
      {
          $this->fecha_ = '';
      }
      if (!empty($this->anexo_) || (!empty($format_fields) && isset($format_fields['anexo_'])))
      {
          nmgp_Form_Num_Val($this->anexo_, $this->field_config['anexo_']['symbol_grp'], $this->field_config['anexo_']['symbol_dec'], "0", "S", "", "", "", "-", $this->field_config['anexo_']['symbol_fmt']) ; 
      }
      if (!empty($this->piso_) || (!empty($format_fields) && isset($format_fields['piso_'])))
      {
          nmgp_Form_Num_Val($this->piso_, $this->field_config['piso_']['symbol_grp'], $this->field_config['piso_']['symbol_dec'], "0", "S", "", "", "", "-", $this->field_config['piso_']['symbol_fmt']) ; 
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               $x = 0;
               foreach ($str as $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
                   $x++;
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
//
//-- 
   function nm_converte_datas($use_null = true, $bForce = false)
   {
      $guarda_format_hora = $this->field_config['fecha_']['date_format'];
      if ($this->fecha_ != "")  
      { 
          nm_conv_data($this->fecha_, $this->field_config['fecha_']['date_format']) ; 
          $this->fecha__hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fecha__hora = substr($this->fecha__hora, 0, -4);
          }
      } 
      if ($this->fecha_ == "" && $use_null)  
      { 
          $this->fecha_ = "null" ; 
      } 
      $this->field_config['fecha_']['date_format'] = $guarda_format_hora;
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
       return $dt_out;
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_all_vert();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['id_']['keyVal'] = form_usuarios_1_pack_protect_string($this->nmgp_dados_form['id_']);
          }
   } // ajax_return_values
   function ajax_return_values_all_vert()
   {
          if (isset($this->nmgp_refresh_fields) && isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row] = $this->NM_ajax_info['param'];
              if ((isset($this->Embutida_ronly) && $this->Embutida_ronly) || $this->NM_ajax_force_values)
              {
                  if (isset($this->NM_ajax_changed['fecha_']) && $this->NM_ajax_changed['fecha_'])
                  {
                      $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['fecha_'] = $this->fecha_;
                  }
                  if (isset($this->NM_ajax_changed['ap_pat_']) && $this->NM_ajax_changed['ap_pat_'])
                  {
                      $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['ap_pat_'] = $this->ap_pat_;
                  }
                  if (isset($this->NM_ajax_changed['ap_mat_']) && $this->NM_ajax_changed['ap_mat_'])
                  {
                      $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['ap_mat_'] = $this->ap_mat_;
                  }
                  if (isset($this->NM_ajax_changed['nombres_']) && $this->NM_ajax_changed['nombres_'])
                  {
                      $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['nombres_'] = $this->nombres_;
                  }
                  if (isset($this->NM_ajax_changed['correo_']) && $this->NM_ajax_changed['correo_'])
                  {
                      $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['correo_'] = $this->correo_;
                  }
                  if (isset($this->NM_ajax_changed['anexo_']) && $this->NM_ajax_changed['anexo_'])
                  {
                      $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['anexo_'] = $this->anexo_;
                  }
                  if (isset($this->NM_ajax_changed['depto_']) && $this->NM_ajax_changed['depto_'])
                  {
                      $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['depto_'] = $this->depto_;
                  }
                  if (isset($this->NM_ajax_changed['modelos_']) && $this->NM_ajax_changed['modelos_'])
                  {
                      $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['modelos_'] = $this->modelos_;
                  }
                  if (isset($this->NM_ajax_changed['mac_']) && $this->NM_ajax_changed['mac_'])
                  {
                      $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['mac_'] = $this->mac_;
                  }
                  if (isset($this->NM_ajax_changed['categorias_']) && $this->NM_ajax_changed['categorias_'])
                  {
                      $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['categorias_'] = $this->categorias_;
                  }
                  if (isset($this->NM_ajax_changed['observaciones_']) && $this->NM_ajax_changed['observaciones_'])
                  {
                      $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['observaciones_'] = $this->observaciones_;
                  }
                  if (isset($this->NM_ajax_changed['piso_']) && $this->NM_ajax_changed['piso_'])
                  {
                      $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['piso_'] = $this->piso_;
                  }
              }
          }
          if (isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['ap_pat_'] = $this->ap_pat_;
              $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['ap_mat_'] = $this->ap_mat_;
              $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['nombres_'] = $this->nombres_;
              $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['correo_'] = $this->correo_;
              $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['mac_'] = $this->mac_;
              $this->form_vert_form_usuarios_1[$this->nmgp_refresh_row]['observaciones_'] = $this->observaciones_;
          }
          $this->NM_ajax_info['rsSize'] = sizeof($this->form_vert_form_usuarios_1);
          foreach($this->form_vert_form_usuarios_1 as $sc_seq_vert => $aRecData)
          {
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fecha_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['fecha_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['fecha_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ap_pat_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['ap_pat_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['ap_pat_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ap_mat_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['ap_mat_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['ap_mat_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nombres_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['nombres_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['nombres_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("correo_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['correo_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['correo_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("anexo_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['anexo_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['anexo_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("depto_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['depto_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_depto_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_depto_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_depto_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_depto_'] = array(); 
}
$aLookup[] = array(form_usuarios_1_pack_protect_string('') => form_usuarios_1_pack_protect_string('Seleccione'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_depto_'][] = '';
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fecha_ = $this->fecha_;
   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_ = $this->fecha_;
   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT Id, Descripcion 
FROM Departamentos 
ORDER BY Descripcion";

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
              $aLookup[] = array(form_usuarios_1_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_usuarios_1_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_depto_'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"depto_\"";
          if (isset($this->NM_ajax_info['select_html']['depto_']) && !empty($this->NM_ajax_info['select_html']['depto_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['depto_'] . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $Nm_tp_obj = (isset($this->nmgp_refresh_fields) && in_array("depto_", $this->nmgp_refresh_fields)) ? 'select' : 'text';
                  $this->NM_ajax_info['fldList']['depto_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => $Nm_tp_obj,
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['depto_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['depto_' . $sc_seq_vert]['valList'][$i] = form_usuarios_1_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['depto_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['depto_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['depto_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("modelos_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['modelos_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_modelos_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_modelos_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_modelos_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_modelos_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fecha_ = $this->fecha_;
   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_ = $this->fecha_;
   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT id_mod, desc_mod 
FROM modelos 
ORDER BY desc_mod";

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
              $aLookup[] = array(form_usuarios_1_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_usuarios_1_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_modelos_'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"modelos_\"";
          if (isset($this->NM_ajax_info['select_html']['modelos_']) && !empty($this->NM_ajax_info['select_html']['modelos_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['modelos_'] . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $this->NM_ajax_info['fldList']['modelos_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'select',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['modelos_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['modelos_' . $sc_seq_vert]['valList'][$i] = form_usuarios_1_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['modelos_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['modelos_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['modelos_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("mac_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['mac_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['mac_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("categorias_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['categorias_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_categorias_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_categorias_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_categorias_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_categorias_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fecha_ = $this->fecha_;
   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_ = $this->fecha_;
   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT id_cat, desc_cat 
FROM categorias 
ORDER BY desc_cat";

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
              $aLookup[] = array(form_usuarios_1_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_usuarios_1_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_categorias_'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"categorias_\"";
          if (isset($this->NM_ajax_info['select_html']['categorias_']) && !empty($this->NM_ajax_info['select_html']['categorias_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['categorias_'] . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $this->NM_ajax_info['fldList']['categorias_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'select',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['categorias_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['categorias_' . $sc_seq_vert]['valList'][$i] = form_usuarios_1_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['categorias_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['categorias_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['categorias_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("observaciones_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['observaciones_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['observaciones_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("piso_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['piso_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['piso_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload_record($sc_seq_vert=0)
  {
  }
  function nm_proc_onload($bFormat = true)
  {
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 


   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros

   function nm_acessa_banco() 
   { 
      global $sc_seq_vert,  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      $SC_tem_cmp_update = true; 
      if ($this->nmgp_opcao == "alterar")
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert];
          if ($this->nmgp_dados_select['fecha_'] == $this->fecha_ &&
              $this->nmgp_dados_select['ap_pat_'] == $this->ap_pat_ &&
              $this->nmgp_dados_select['ap_mat_'] == $this->ap_mat_ &&
              $this->nmgp_dados_select['nombres_'] == $this->nombres_ &&
              $this->nmgp_dados_select['correo_'] == $this->correo_ &&
              $this->nmgp_dados_select['anexo_'] == $this->anexo_ &&
              $this->nmgp_dados_select['depto_'] == $this->depto_ &&
              $this->nmgp_dados_select['modelos_'] == $this->modelos_ &&
              $this->nmgp_dados_select['mac_'] == $this->mac_ &&
              $this->nmgp_dados_select['categorias_'] == $this->categorias_ &&
              $this->nmgp_dados_select['observaciones_'] == $this->observaciones_ &&
              $this->nmgp_dados_select['piso_'] == $this->piso_)
          {
              $SC_ex_update = false; 
              $SC_ex_upd_or = false; 
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['fecha_'] = $this->fecha_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['ap_pat_'] = $this->ap_pat_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['ap_mat_'] = $this->ap_mat_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['nombres_'] = $this->nombres_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['correo_'] = $this->correo_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['anexo_'] = $this->anexo_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['depto_'] = $this->depto_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['modelos_'] = $this->modelos_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['mac_'] = $this->mac_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['categorias_'] = $this->categorias_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['observaciones_'] = $this->observaciones_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['piso_'] = $this->piso_;
          }
      }
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if (!in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Db->BeginTrans(); 
          $this->Ini->sc_tem_trans_banco = true; 
      } 
      $NM_val_form['fecha_'] = $this->fecha_;
      $NM_val_form['ap_pat_'] = $this->ap_pat_;
      $NM_val_form['ap_mat_'] = $this->ap_mat_;
      $NM_val_form['nombres_'] = $this->nombres_;
      $NM_val_form['correo_'] = $this->correo_;
      $NM_val_form['anexo_'] = $this->anexo_;
      $NM_val_form['depto_'] = $this->depto_;
      $NM_val_form['modelos_'] = $this->modelos_;
      $NM_val_form['mac_'] = $this->mac_;
      $NM_val_form['categorias_'] = $this->categorias_;
      $NM_val_form['observaciones_'] = $this->observaciones_;
      $NM_val_form['piso_'] = $this->piso_;
      $NM_val_form['id_'] = $this->id_;
      $NM_val_form['clave_'] = $this->clave_;
      $NM_val_form['modelo_'] = $this->modelo_;
      $NM_val_form['categoria_'] = $this->categoria_;
      $NM_val_form['estado_'] = $this->estado_;
      if ($this->id_ == "")  
      { 
          $this->id_ = 0;
      } 
      if ($this->clave_ == "")  
      { 
          $this->clave_ = 0;
          $this->sc_force_zero[] = 'clave_';
      } 
      if ($this->anexo_ == "")  
      { 
          $this->anexo_ = 0;
          $this->sc_force_zero[] = 'anexo_';
      } 
      if ($this->depto_ == "")  
      { 
          $this->depto_ = 0;
          $this->sc_force_zero[] = 'depto_';
      } 
      if ($this->piso_ == "")  
      { 
          $this->piso_ = 0;
          $this->sc_force_zero[] = 'piso_';
      } 
      if ($this->estado_ == "")  
      { 
          $this->estado_ = 0;
          $this->sc_force_zero[] = 'estado_';
      } 
      if ($this->modelos_ == "")  
      { 
          $this->modelos_ = 0;
          $this->sc_force_zero[] = 'modelos_';
      } 
      if ($this->categorias_ == "")  
      { 
          $this->categorias_ = 0;
          $this->sc_force_zero[] = 'categorias_';
      } 
      $nm_bases_lob_geral = array();
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          if ($this->fecha_ == "")  
          { 
              $this->fecha_ = "null"; 
              $NM_val_null[] = "fecha_";
          } 
          $this->ap_pat__before_qstr = $this->ap_pat_;
          $this->ap_pat_ = substr($this->Db->qstr($this->ap_pat_), 1, -1); 
          $this->ap_mat__before_qstr = $this->ap_mat_;
          $this->ap_mat_ = substr($this->Db->qstr($this->ap_mat_), 1, -1); 
          $this->nombres__before_qstr = $this->nombres_;
          $this->nombres_ = substr($this->Db->qstr($this->nombres_), 1, -1); 
          $this->correo__before_qstr = $this->correo_;
          $this->correo_ = substr($this->Db->qstr($this->correo_), 1, -1); 
          $this->modelo__before_qstr = $this->modelo_;
          $this->modelo_ = substr($this->Db->qstr($this->modelo_), 1, -1); 
          $this->mac__before_qstr = $this->mac_;
          $this->mac_ = substr($this->Db->qstr($this->mac_), 1, -1); 
          $this->categoria__before_qstr = $this->categoria_;
          $this->categoria_ = substr($this->Db->qstr($this->categoria_), 1, -1); 
          $this->observaciones__before_qstr = $this->observaciones_;
          $this->observaciones_ = substr($this->Db->qstr($this->observaciones_), 1, -1); 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where Id = $this->id_ ";
          $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where Id = $this->id_ "); 
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_usuarios_1_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_nfnd']; 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              $comando_oracle = "";  
              $comando = "UPDATE " . $this->Ini->nm_tabela . " SET MAC = '$this->mac_', Observaciones = '$this->observaciones_', modelos = $this->modelos_, categorias = $this->categorias_";  
              if (isset($NM_val_form['clave_']) && $NM_val_form['clave_'] != $this->nmgp_dados_select['clave_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " clave = $this->clave_"; 
                  $comando_oracle        .= " clave = $this->clave_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['fecha_']) && $NM_val_form['fecha_'] != $this->nmgp_dados_select['fecha_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " fecha = " . $this->Ini->date_delim . $this->fecha_ . $this->Ini->date_delim1 . ""; 
                  $comando_oracle        .= " fecha = " . $this->Ini->date_delim . $this->fecha_ . $this->Ini->date_delim1 . ""; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['ap_pat_']) && $NM_val_form['ap_pat_'] != $this->nmgp_dados_select['ap_pat_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " Ap_Pat = '$this->ap_pat_'"; 
                  $comando_oracle        .= " Ap_Pat = '$this->ap_pat_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['ap_mat_']) && $NM_val_form['ap_mat_'] != $this->nmgp_dados_select['ap_mat_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " Ap_Mat = '$this->ap_mat_'"; 
                  $comando_oracle        .= " Ap_Mat = '$this->ap_mat_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['nombres_']) && $NM_val_form['nombres_'] != $this->nmgp_dados_select['nombres_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " Nombres = '$this->nombres_'"; 
                  $comando_oracle        .= " Nombres = '$this->nombres_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['correo_']) && $NM_val_form['correo_'] != $this->nmgp_dados_select['correo_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " Correo = '$this->correo_'"; 
                  $comando_oracle        .= " Correo = '$this->correo_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['anexo_']) && $NM_val_form['anexo_'] != $this->nmgp_dados_select['anexo_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " Anexo = $this->anexo_"; 
                  $comando_oracle        .= " Anexo = $this->anexo_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['depto_']) && $NM_val_form['depto_'] != $this->nmgp_dados_select['depto_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " Depto = $this->depto_"; 
                  $comando_oracle        .= " Depto = $this->depto_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['modelo_']) && $NM_val_form['modelo_'] != $this->nmgp_dados_select['modelo_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " Modelo = '$this->modelo_'"; 
                  $comando_oracle        .= " Modelo = '$this->modelo_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['categoria_']) && $NM_val_form['categoria_'] != $this->nmgp_dados_select['categoria_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " Categoria = '$this->categoria_'"; 
                  $comando_oracle        .= " Categoria = '$this->categoria_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['piso_']) && $NM_val_form['piso_'] != $this->nmgp_dados_select['piso_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " Piso = $this->piso_"; 
                  $comando_oracle        .= " Piso = $this->piso_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['estado_']) && $NM_val_form['estado_'] != $this->nmgp_dados_select['estado_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " estado = $this->estado_"; 
                  $comando_oracle        .= " estado = $this->estado_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              $aDoNotUpdate = array();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  $comando = $comando_oracle;  
                  $SC_ex_update = $SC_ex_upd_or;
              }   
              $comando .= " WHERE Id = $this->id_ ";  
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if ($SC_ex_update || $SC_tem_cmp_update)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg(), true); 
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $this->Db->ErrorMsg();  
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_usuarios_1_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
          $this->ap_pat_ = $this->ap_pat__before_qstr;
          $this->ap_mat_ = $this->ap_mat__before_qstr;
          $this->nombres_ = $this->nombres__before_qstr;
          $this->correo_ = $this->correo__before_qstr;
          $this->modelo_ = $this->modelo__before_qstr;
          $this->mac_ = $this->mac__before_qstr;
          $this->categoria_ = $this->categoria__before_qstr;
          $this->observaciones_ = $this->observaciones__before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['db_changed'] = true;

              $this->sc_teve_alt = true; 
              if     (isset($NM_val_form) && isset($NM_val_form['ap_pat_'])) { $this->ap_pat_ = $NM_val_form['ap_pat_']; }
              elseif (isset($this->ap_pat_)) { $this->nm_limpa_alfa($this->ap_pat_); }
              if     (isset($NM_val_form) && isset($NM_val_form['ap_mat_'])) { $this->ap_mat_ = $NM_val_form['ap_mat_']; }
              elseif (isset($this->ap_mat_)) { $this->nm_limpa_alfa($this->ap_mat_); }
              if     (isset($NM_val_form) && isset($NM_val_form['nombres_'])) { $this->nombres_ = $NM_val_form['nombres_']; }
              elseif (isset($this->nombres_)) { $this->nm_limpa_alfa($this->nombres_); }
              if     (isset($NM_val_form) && isset($NM_val_form['correo_'])) { $this->correo_ = $NM_val_form['correo_']; }
              elseif (isset($this->correo_)) { $this->nm_limpa_alfa($this->correo_); }
              if     (isset($NM_val_form) && isset($NM_val_form['anexo_'])) { $this->anexo_ = $NM_val_form['anexo_']; }
              elseif (isset($this->anexo_)) { $this->nm_limpa_alfa($this->anexo_); }
              if     (isset($NM_val_form) && isset($NM_val_form['depto_'])) { $this->depto_ = $NM_val_form['depto_']; }
              elseif (isset($this->depto_)) { $this->nm_limpa_alfa($this->depto_); }
              if     (isset($NM_val_form) && isset($NM_val_form['mac_'])) { $this->mac_ = $NM_val_form['mac_']; }
              elseif (isset($this->mac_)) { $this->nm_limpa_alfa($this->mac_); }
              if     (isset($NM_val_form) && isset($NM_val_form['observaciones_'])) { $this->observaciones_ = $NM_val_form['observaciones_']; }
              elseif (isset($this->observaciones_)) { $this->nm_limpa_alfa($this->observaciones_); }
              if     (isset($NM_val_form) && isset($NM_val_form['piso_'])) { $this->piso_ = $NM_val_form['piso_']; }
              elseif (isset($this->piso_)) { $this->nm_limpa_alfa($this->piso_); }
              if     (isset($NM_val_form) && isset($NM_val_form['modelos_'])) { $this->modelos_ = $NM_val_form['modelos_']; }
              elseif (isset($this->modelos_)) { $this->nm_limpa_alfa($this->modelos_); }
              if     (isset($NM_val_form) && isset($NM_val_form['categorias_'])) { $this->categorias_ = $NM_val_form['categorias_']; }
              elseif (isset($this->categorias_)) { $this->nm_limpa_alfa($this->categorias_); }
              $this->nm_proc_onload_record($this->nmgp_refresh_row);

              $this->nm_formatar_campos();

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('fecha_', 'ap_pat_', 'ap_mat_', 'nombres_', 'correo_', 'anexo_', 'depto_', 'modelos_', 'mac_', 'categorias_', 'observaciones_', 'piso_'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              if (isset($this->Embutida_ronly) && $this->Embutida_ronly)
              {

                  $this->NM_ajax_info['readOnly']['fecha_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['ap_pat_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['ap_mat_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['nombres_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['correo_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['anexo_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['depto_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['modelos_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['mac_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['categorias_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['observaciones_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['piso_' . $this->nmgp_refresh_row] = 'on';


                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }

              $this->nm_tira_formatacao();
              $this->nm_converte_datas();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "Id, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "clave, fecha, Ap_Pat, Ap_Mat, Nombres, Correo, Anexo, Depto, Modelo, MAC, Categoria, Observaciones, Piso, estado, modelos, categorias) VALUES (" . $NM_seq_auto . "$this->clave_, " . $this->Ini->date_delim . $this->fecha_ . $this->Ini->date_delim1 . ", '$this->ap_pat_', '$this->ap_mat_', '$this->nombres_', '$this->correo_', $this->anexo_, $this->depto_, '$this->modelo_', '$this->mac_', '$this->categoria_', '$this->observaciones_', $this->piso_, $this->estado_, $this->modelos_, $this->categorias_)"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "clave, fecha, Ap_Pat, Ap_Mat, Nombres, Correo, Anexo, Depto, Modelo, MAC, Categoria, Observaciones, Piso, estado, modelos, categorias) VALUES (" . $NM_seq_auto . "$this->clave_, " . $this->Ini->date_delim . $this->fecha_ . $this->Ini->date_delim1 . ", '$this->ap_pat_', '$this->ap_mat_', '$this->nombres_', '$this->correo_', $this->anexo_, $this->depto_, '$this->modelo_', '$this->mac_', '$this->categoria_', '$this->observaciones_', $this->piso_, $this->estado_, $this->modelos_, $this->categorias_)"; 
              }
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg(), true); 
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                      { 
                          $this->sc_erro_insert = $this->Db->ErrorMsg();  
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_usuarios_1_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_id()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_rowid()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['db_changed'] = true;

              $this->sc_evento = "insert"; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['total']++; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_qtd']++; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_I_E']++; 
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              $this->sc_teve_incl = true; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['fecha_'] = $this->fecha_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['ap_pat_'] = $this->ap_pat_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['ap_mat_'] = $this->ap_mat_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['nombres_'] = $this->nombres_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['correo_'] = $this->correo_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['anexo_'] = $this->anexo_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['depto_'] = $this->depto_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['modelos_'] = $this->modelos_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['mac_'] = $this->mac_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['categorias_'] = $this->categorias_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['observaciones_'] = $this->observaciones_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert]['piso_'] = $this->piso_;
              if (!empty($this->sc_force_zero))
              {
                  foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
                  {
                      eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
                  }
              }
              $this->sc_force_zero = array();
              if (!empty($NM_val_null))
              {
                  foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
                  {
                      eval('$this->' . $sc_val_null_field . ' = "";');
                  }
              }
              if (isset($this->ap_pat_)) { $this->nm_limpa_alfa($this->ap_pat_); }
              if (isset($this->ap_mat_)) { $this->nm_limpa_alfa($this->ap_mat_); }
              if (isset($this->nombres_)) { $this->nm_limpa_alfa($this->nombres_); }
              if (isset($this->correo_)) { $this->nm_limpa_alfa($this->correo_); }
              if (isset($this->anexo_)) { $this->nm_limpa_alfa($this->anexo_); }
              if (isset($this->depto_)) { $this->nm_limpa_alfa($this->depto_); }
              if (isset($this->mac_)) { $this->nm_limpa_alfa($this->mac_); }
              if (isset($this->observaciones_)) { $this->nm_limpa_alfa($this->observaciones_); }
              if (isset($this->piso_)) { $this->nm_limpa_alfa($this->piso_); }
              if (isset($this->modelos_)) { $this->nm_limpa_alfa($this->modelos_); }
              if (isset($this->categorias_)) { $this->nm_limpa_alfa($this->categorias_); }
              if (isset($this->Embutida_form) && $this->Embutida_form)
              {
                  $this->nm_guardar_campos();
                  $this->nm_proc_onload_record($this->nmgp_refresh_row);
                  $this->nm_formatar_campos();

                  $this->NM_ajax_info['fldList']['fecha_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['fecha_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->fecha_));
                  $this->NM_ajax_info['fldList']['fecha_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_fecha_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['fecha_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['fecha_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['fecha_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['fecha_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['ap_pat_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['ap_pat_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->ap_pat_));
                  $this->NM_ajax_info['fldList']['ap_pat_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_ap_pat_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['ap_pat_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['ap_pat_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['ap_pat_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['ap_pat_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['ap_mat_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['ap_mat_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->ap_mat_));
                  $this->NM_ajax_info['fldList']['ap_mat_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_ap_mat_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['ap_mat_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['ap_mat_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['ap_mat_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['ap_mat_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['nombres_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['nombres_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->nombres_));
                  $this->NM_ajax_info['fldList']['nombres_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_nombres_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['nombres_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['nombres_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['nombres_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['nombres_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->correo_    = str_replace(array('\r\n', '\n\r', '\n', '\r'), array("\r\n", "\n\r", "\n", "\r"), $this->correo_);
                  $tmpLabel_correo_ = nl2br($this->correo_);
                  $this->NM_ajax_info['fldList']['correo_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['correo_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->correo_));
                  $this->NM_ajax_info['fldList']['correo_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_correo_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['correo_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['correo_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['correo_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['correo_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['anexo_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['anexo_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->anexo_));
                  $this->NM_ajax_info['fldList']['anexo_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_anexo_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['anexo_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['anexo_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['anexo_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['anexo_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_depto_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_depto_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_depto_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_depto_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fecha_ = $this->fecha_;
   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_ = $this->fecha_;
   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT Id, Descripcion 
FROM Departamentos 
ORDER BY Descripcion";

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
              $aLookup[] = array(form_usuarios_1_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_usuarios_1_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_depto_'][] = $rs->fields[0];
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == form_usuarios_1_pack_protect_string(NM_charset_to_utf8($this->depto_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_depto_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['depto_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['depto_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->depto_));
                  $this->NM_ajax_info['fldList']['depto_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_depto_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['depto_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['depto_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['depto_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['depto_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_modelos_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_modelos_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_modelos_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_modelos_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fecha_ = $this->fecha_;
   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_ = $this->fecha_;
   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT id_mod, desc_mod 
FROM modelos 
ORDER BY desc_mod";

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
              $aLookup[] = array(form_usuarios_1_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_usuarios_1_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_modelos_'][] = $rs->fields[0];
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == form_usuarios_1_pack_protect_string(NM_charset_to_utf8($this->modelos_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_modelos_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['modelos_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['modelos_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->modelos_));
                  $this->NM_ajax_info['fldList']['modelos_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_modelos_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['modelos_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['modelos_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['modelos_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['modelos_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['mac_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['mac_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->mac_));
                  $this->NM_ajax_info['fldList']['mac_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_mac_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['mac_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['mac_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['mac_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['mac_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_categorias_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_categorias_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_categorias_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_categorias_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fecha_ = $this->fecha_;
   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_ = $this->fecha_;
   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT id_cat, desc_cat 
FROM categorias 
ORDER BY desc_cat";

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
              $aLookup[] = array(form_usuarios_1_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_usuarios_1_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['Lookup_categorias_'][] = $rs->fields[0];
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == form_usuarios_1_pack_protect_string(NM_charset_to_utf8($this->categorias_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_categorias_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['categorias_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['categorias_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->categorias_));
                  $this->NM_ajax_info['fldList']['categorias_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_categorias_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['categorias_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['categorias_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['categorias_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['categorias_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['observaciones_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['observaciones_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->observaciones_));
                  $this->NM_ajax_info['fldList']['observaciones_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_observaciones_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['observaciones_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['observaciones_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['observaciones_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['observaciones_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['piso_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['piso_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->piso_));
                  $this->NM_ajax_info['fldList']['piso_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_piso_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['piso_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['piso_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['piso_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['piso_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['id_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['id_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->id_));
                  $this->NM_ajax_info['fldList']['id_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_id_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }


                  $this->nm_tira_formatacao();
                  $this->nm_converte_datas();

                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->id_ = substr($this->Db->qstr($this->id_), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where Id = $this->id_"; 
          $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where Id = $this->id_ "); 
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_dele_nfnd']; 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where Id = $this->id_ "; 
              $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where Id = $this->id_ "); 
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_usuarios_1_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['db_changed'] = true;

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_qtd']--; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['total']--; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_I_E']--; 
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              $this->sc_teve_excl = true; 
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['parms'] = "id_?#?$this->id_?@?"; 
      }
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->id_ = substr($this->Db->qstr($this->id_), 1, -1); 
      } 
   }
//---------- 
   function nm_select_banco() 
   { 
      global $nm_form_submit, $sc_seq_vert, $sc_check_incl, $teste_validade, $sc_where;
 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['rows']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['rows']))
      {
          $this->sc_max_reg = $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['rows'];
      } 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['rows_ins']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['rows_ins']))
      {
          $this->sc_max_reg_incl = $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios_1']['rows_ins'];
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_qtd_reg']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_qtd_reg'])
      {
          $this->sc_max_reg = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['embutida_liga_qtd_reg'];
      }
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
      $this->form_vert_form_usuarios_1 = array();
      if ($this->nmgp_opcao != "novo") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['parms'] = ""; 
      } 
      if ($this->sc_teve_excl)
      {
          $this->nmgp_opcao = "avanca";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] -= $this->sc_max_reg;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] = 0;
      }
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_filter'] . ")";
          }
      }
      $sc_where = "";
      if ('' != $sc_where_filter)
      {
          $sc_where = (isset($sc_where) && '' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (((isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao) || (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)) && !$this->has_where_params && 'novo' != $this->nmgp_opcao)
      {
          $aNewWhereCond = array();
          if (null != $this->id_)
          {
              $aNewWhereCond[] = "Id = " . $this->id_;
          }
          if (!empty($aNewWhereCond))
          {
              if ('' == $sc_where)
              {
                  $sc_where = " where (";
              }
              else
              {
                  $sc_where .= " and (";
              }
              $sc_where .= implode(" and ", $aNewWhereCond) . ")";
          }
      }
      if ('total' != $this->form_paginacao)
      {
          if ($this->app_is_initializing || $this->sc_teve_excl || $this->sc_teve_incl || (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['total']))
          {
              $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where;
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
              $rt = $this->Db->Execute($nmgp_select);
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit;
              }
              $qt_geral_reg_form_usuarios_1 = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['total'] = $qt_geral_reg_form_usuarios_1;
              $rt->Close();
          }
      if ((isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['total']))
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_I_E'] = 0; 
          if (!$this->sc_teve_excl && !$this->sc_teve_incl) 
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] = 0; 
          } 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->id_))
          {
              $Key_Where = "Id < $this->id_ "; 
              $Where_Start = (empty($sc_where)) ? " where " . $Key_Where :  $sc_where . " and (" . $Key_Where . ")";
              $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $Where_Start; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] = $rt->fields[0];
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_usuarios_1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['total'];
      } 
      if ($this->nmgp_opcao == "inicio" || $this->nmgp_opcao == "ordem") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "navpage" && ($this->nmgp_ordem - 1) <= $qt_geral_reg_form_usuarios_1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] = $this->nmgp_ordem - 1; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] += ($this->sc_max_reg + $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_I_E']); 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] > $qt_geral_reg_form_usuarios_1)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] = $qt_geral_reg_form_usuarios_1 - $this->sc_max_reg; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] = 0; 
              }
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] -= $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] = ($qt_geral_reg_form_usuarios_1 + 1) - $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] = 0; 
          }
      } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_I_E'] = 0; 
      }
      $Cmps_ord_def = array();
      $sc_order_by  = "";
      $sc_order_by = "Id";
      $sc_order_by = str_replace("order by ", "", $sc_order_by);
      $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
      if (!empty($sc_order_by))
      {
          $sc_order_by = " order by $sc_order_by "; 
      }
      if ($this->nmgp_opcao == "ordem" && in_array($this->nmgp_ordem, $Cmps_ord_def)) 
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['ordem_cmp'] != $this->nmgp_ordem)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['ordem_cmp'] = $this->nmgp_ordem; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['ordem_ord'] = ' asc'; 
          }
          elseif ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['ordem_ord'] == ' asc')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['ordem_ord'] = ' desc'; 
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['ordem_ord'] = ' asc'; 
          }
      } 
      if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['ordem_cmp'])) 
      { 
          $sc_order_by = " order by " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['ordem_cmp'] . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['ordem_ord']; 
      } 
      $nmgp_select = "SELECT Id, clave, fecha, Ap_Pat, Ap_Mat, Nombres, Correo, Anexo, Depto, Modelo, MAC, Categoria, Observaciones, Piso, estado, modelos, categorias from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      if ($this->nmgp_opcao != "novo") 
      { 
      if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
      {
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
          $rs = $this->Db->Execute($nmgp_select) ;
      }
      elseif ('total' == $this->form_paginacao)
      {
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
      }
      else
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe'] == "R")
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          else 
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start']) ; 
              } 
              else  
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
                  $rs = $this->Db->Execute($nmgp_select) ; 
                  if (!$rs === false && !$rs->EOF) 
                  { 
                      $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start']) ;  
                  } 
              } 
          } 
      }
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF) 
          { 
              $this->NM_ajax_info['navSummary']['reg_ini'] = 0; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = 0; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = 0; 
          } 
          else 
          { 
              $this->NM_ajax_info['navSummary']['reg_ini'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = 1; 
          } 
          if ($rs->EOF && !$this->proc_fast_search && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['empty_filter']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['empty_filter'])) 
          { 
              $this->nm_flag_saida_novo = "S"; 
              $this->nmgp_opcao = "novo"; 
              $this->sc_evento  = "novo"; 
              if ($this->aba_iframe)
              {
                  $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs->EOF && $this->nmgp_botoes['new'] != "on" && !$this->proc_fast_search)
          {
              $this->nmgp_form_empty = true;
          }
          if ($rs->EOF)
          {
              $sc_seq_vert = 0; 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_filter']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['empty_filter'] = true;
              }
          }
          else
          {
              $sc_seq_vert = 1; 
          }
          if ('total' == $this->form_paginacao)
          {
              $bPagTest = true;
              $this->sc_max_reg = 0;
          }
          else
          {
              $bPagTest = $sc_seq_vert <= $this->sc_max_reg;
          }
          while (!$rs->EOF && $bPagTest)
          { 
              if ('total' == $this->form_paginacao)
              {
                  $this->sc_max_reg++;
              }
              if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
              {
                  $guard_seq_vert = $sc_seq_vert;
                  $sc_seq_vert    = $this->nmgp_refresh_row;
              }
              if ('total' != $this->form_paginacao)
              {
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe'] == "R")
              { 
                  $this->sc_max_reg++;
              } 
              }
              $this->id_ = $rs->fields[0] ; 
              $this->nmgp_dados_select['id_'] = $this->id_;
              $this->clave_ = $rs->fields[1] ; 
              $this->nmgp_dados_select['clave_'] = $this->clave_;
              $this->fecha_ = $rs->fields[2] ; 
              $this->nmgp_dados_select['fecha_'] = $this->fecha_;
              $this->ap_pat_ = $rs->fields[3] ; 
              $this->nmgp_dados_select['ap_pat_'] = $this->ap_pat_;
              $this->ap_mat_ = $rs->fields[4] ; 
              $this->nmgp_dados_select['ap_mat_'] = $this->ap_mat_;
              $this->nombres_ = $rs->fields[5] ; 
              $this->nmgp_dados_select['nombres_'] = $this->nombres_;
              $this->correo_ = $rs->fields[6] ; 
              $this->nmgp_dados_select['correo_'] = $this->correo_;
              $this->anexo_ = $rs->fields[7] ; 
              $this->nmgp_dados_select['anexo_'] = $this->anexo_;
              $this->depto_ = $rs->fields[8] ; 
              $this->nmgp_dados_select['depto_'] = $this->depto_;
              $this->modelo_ = $rs->fields[9] ; 
              $this->nmgp_dados_select['modelo_'] = $this->modelo_;
              $this->mac_ = $rs->fields[10] ; 
              $this->nmgp_dados_select['mac_'] = $this->mac_;
              $this->categoria_ = $rs->fields[11] ; 
              $this->nmgp_dados_select['categoria_'] = $this->categoria_;
              $this->observaciones_ = $rs->fields[12] ; 
              $this->nmgp_dados_select['observaciones_'] = $this->observaciones_;
              $this->piso_ = $rs->fields[13] ; 
              $this->nmgp_dados_select['piso_'] = $this->piso_;
              $this->estado_ = $rs->fields[14] ; 
              $this->nmgp_dados_select['estado_'] = $this->estado_;
              $this->modelos_ = $rs->fields[15] ; 
              $this->nmgp_dados_select['modelos_'] = $this->modelos_;
              $this->categorias_ = $rs->fields[16] ; 
              $this->nmgp_dados_select['categorias_'] = $this->categorias_;
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->id_ = (string)$this->id_; 
              $this->clave_ = (string)$this->clave_; 
              $this->anexo_ = (string)$this->anexo_; 
              $this->depto_ = (string)$this->depto_; 
              $this->piso_ = (string)$this->piso_; 
              $this->estado_ = (string)$this->estado_; 
              $this->modelos_ = (string)$this->modelos_; 
              $this->categorias_ = (string)$this->categorias_; 
              if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['parms'])) 
              { 
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['parms'] = "id_?#?$this->id_?@?";
              } 
              $this->nm_proc_onload_record($sc_seq_vert);
//
//-- 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['dados_select'][$sc_seq_vert] = $this->nmgp_dados_select;
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['fecha_'] =  $this->fecha_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['ap_pat_'] =  $this->ap_pat_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['ap_mat_'] =  $this->ap_mat_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['nombres_'] =  $this->nombres_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['correo_'] =  $this->correo_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['anexo_'] =  $this->anexo_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['depto_'] =  $this->depto_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['modelos_'] =  $this->modelos_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['mac_'] =  $this->mac_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['categorias_'] =  $this->categorias_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['observaciones_'] =  $this->observaciones_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['piso_'] =  $this->piso_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['id_'] =  $this->id_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['clave_'] =  $this->clave_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['modelo_'] =  $this->modelo_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['categoria_'] =  $this->categoria_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['estado_'] =  $this->estado_; 
              $sc_seq_vert++; 
              $rs->MoveNext() ; 
              if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
              {
                  $sc_seq_vert = $guard_seq_vert;
              }
              if ('total' != $this->form_paginacao)
              {
                  $bPagTest = $sc_seq_vert <= $this->sc_max_reg;
              }
          } 
          ksort ($this->form_vert_form_usuarios_1); 
          $rs->Close(); 
          if ($this->form_paginacao == "total")
          {
              $this->SC_nav_page = "";
          }
          else
          {
              $this->NM_gera_nav_page(); 
          }
          $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] < (($qt_geral_reg_form_usuarios_1 + 1) - $this->sc_max_reg);
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['opcao'] = '';
          }
      } 
      if ($this->nmgp_opcao == "novo") 
      { 
          $sc_seq_vert = 1; 
          $sc_check_incl = array(); 
          if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao) 
          { 
              $sc_seq_vert = $this->sc_seq_vert; 
              $this->sc_evento = "novo"; 
              $this->sc_max_reg_incl = $this->sc_seq_vert; 
          } 
          else 
          { 
              $this->sc_max_reg_incl = 0; 
          } 
          while ($sc_seq_vert <= $this->sc_max_reg_incl) 
          { 
              $this->fecha_ =  date('Y') . "-" . date('m')  . "-" . date('d');
              $this->ap_pat_ = "";  
              $this->ap_mat_ = "";  
              $this->nombres_ = "";  
              $this->correo_ = "";  
              $this->anexo_ = "";  
              $this->depto_ = "";  
              $this->mac_ = "";  
              $this->observaciones_ = "";  
              $this->piso_ = "";  
              $this->modelos_ = "";  
              $this->categorias_ = "";  
              $this->nm_proc_onload_record($sc_seq_vert);
              if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['foreign_key']))
              {
                  foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['foreign_key'] as $sFKName => $sFKValue)
                  {
                      if (isset($this->sc_conv_var[$sFKName]))
                      {
                          $sFKName = $this->sc_conv_var[$sFKName];
                      }
                      eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
                  }
              }
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['fecha_'] =  $this->fecha_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['ap_pat_'] =  $this->ap_pat_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['ap_mat_'] =  $this->ap_mat_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['nombres_'] =  $this->nombres_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['correo_'] =  $this->correo_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['anexo_'] =  $this->anexo_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['depto_'] =  $this->depto_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['modelos_'] =  $this->modelos_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['mac_'] =  $this->mac_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['categorias_'] =  $this->categorias_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['observaciones_'] =  $this->observaciones_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['piso_'] =  $this->piso_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['id_'] =  $this->id_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['clave_'] =  $this->clave_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['modelo_'] =  $this->modelo_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['categoria_'] =  $this->categoria_; 
             $this->form_vert_form_usuarios_1[$sc_seq_vert]['estado_'] =  $this->estado_; 
              $sc_seq_vert++; 
          } 
      }  
  }
   function NM_gera_nav_page() 
   {
       $this->SC_nav_page = "";
       $Arr_result        = array();
       $Ind_result        = 0;
       $Reg_Page   = $this->sc_max_reg;
       $Max_link   = 5;
       $Mid_link   = ceil($Max_link / 2);
       $Corr_link  = (($Max_link % 2) == 0) ? 0 : 1;
       $rec_tot    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['total'] + 1;
       $rec_fim    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['reg_start'] + $this->sc_max_reg;
       $rec_fim    = ($rec_fim > $rec_tot) ? $rec_tot : $rec_fim;
       if ($rec_tot == 0)
       {
           return;
       }
       $Qtd_Pages  = ceil($rec_tot / $Reg_Page);
       $Page_Atu   = ceil($rec_fim / $Reg_Page);
       $Link_ini   = 1;
       if ($Page_Atu > $Max_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       elseif ($Page_Atu > $Mid_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       if (($Qtd_Pages - $Link_ini) < $Max_link)
       {
           $Link_ini = ($Qtd_Pages - $Max_link) + 1;
       }
       if ($Link_ini < 1)
       {
           $Link_ini = 1;
       }
       for ($x = 0; $x < $Max_link && $Link_ini <= $Qtd_Pages; $x++)
       {
           $rec = (($Link_ini - 1) * $Reg_Page) + 1;
           if ($Link_ini == $Page_Atu)
           {
               $Arr_result[$Ind_result] = '<span class="scFormToolbarNavOpen" style="vertical-align: middle;">' . $Link_ini . '</span>';
           }
           else
           {
               $Arr_result[$Ind_result] = '<a class="scFormToolbarNav" style="vertical-align: middle;" href="javascript: nm_navpage(' . $rec . ')">' . $Link_ini . '</a>';
           }
           $Link_ini++;
           $Ind_result++;
           if (($x + 1) < $Max_link && $Link_ini <= $Qtd_Pages && '' != $this->Ini->Str_toolbarnav_separator && @is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator))
           {
               $Arr_result[$Ind_result] = '<img src="' . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator . '" align="absmiddle" style="vertical-align: middle;">';
               $Ind_result++;
           }
       }
       if ($_SESSION['scriptcase']['reg_conf']['css_dir'] == "RTL")
       {
           krsort($Arr_result);
       }
       foreach ($Arr_result as $Ind_result => $Lin_result)
       {
           $this->SC_nav_page .= $Lin_result;
       }
   }
//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_usuarios_1_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
   if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao)
   {
        $this->Form_Corpo(true);
   }
   elseif ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
   {
        $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['table_refresh'] = true;
        $this->Form_Table(true);
        $this->Form_Corpo(false, true);
   }
   else
   {
        $this->Form_Init();
        $this->Form_Table();
        $this->Form_Corpo();
        $this->Form_Fim();
   }
 }

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

 function new_date_format($type, $field)
 {
     $new_date_format = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format .= $time_sep;
         }
         else
         {
             $new_date_format .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format;
     if ('DH' == $type)
     {
         $new_date_format                                      = explode(';', $new_date_format);
         $this->field_config[$field]['date_format_js']        = $new_date_format[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function SC_fast_search($field, $arg_search, $data_search)
   {
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_usuarios_1_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      if ($field == "ap_pat_") 
      {
          $this->SC_monta_condicao($comando, "Ap_Pat", $arg_search, $data_search);
      }
      if ($field == "ap_mat_") 
      {
          $this->SC_monta_condicao($comando, "Ap_Mat", $arg_search, $data_search);
      }
      if ($field == "nombres_") 
      {
          $this->SC_monta_condicao($comando, "Nombres", $arg_search, $data_search);
      }
      if ($field == "anexo_") 
      {
          $this->SC_monta_condicao($comando, "Anexo", $arg_search, $data_search);
      }
      if ($field == "modelo_") 
      {
          $this->SC_monta_condicao($comando, "Modelo", $arg_search, $data_search);
      }
      if ($field == "mac_") 
      {
          $this->SC_monta_condicao($comando, "MAC", $arg_search, $data_search);
      }
      if ($field == "categoria_") 
      {
          $this->SC_monta_condicao($comando, "Categoria", $arg_search, $data_search);
      }
      if ($field == "piso_") 
      {
          $this->SC_monta_condicao($comando, "Piso", $arg_search, $data_search);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      $sc_where = " where " . $comando;
      $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_usuarios_1 = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['total'] = $qt_geral_reg_form_usuarios_1;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_usuarios_1_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_usuarios_1_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "id";$nm_numeric[] = "clave";$nm_numeric[] = "anexo";$nm_numeric[] = "depto";$nm_numeric[] = "piso";$nm_numeric[] = "estado";$nm_numeric[] = "modelos";$nm_numeric[] = "categorias";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
      $Nm_datas['fecha'] = "date";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
          if (isset($Nm_datas[$campo_join]))
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
      }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_aspas . $Cmp . $nm_aspas1;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         switch (strtoupper($condicao))
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " like '" . $campo . "%'";
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." like '%" . $campo . "%'";
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." not like '%" . $campo . "%'";
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "GT":     // 
               $comando        .= " $nome > " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "GE":     // 
               $comando        .= " $nome >= " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "LT":     // 
               $comando        .= " $nome < " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "LE":     // 
               $comando        .= " $nome <= " . $nm_aspas . $campo . $nm_aspas1;
            break;
         }
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_outra_jan'])
   {
       $nmgp_saida_form = "form_usuarios_1_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_usuarios_1_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = '_self';
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_usuarios_1_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
     <INPUT type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
      bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
      function scLigEditLookupCall()
      {
<?php
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios_1']['masterValue']);
?>
}
<?php
}
?>
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
}
?>
