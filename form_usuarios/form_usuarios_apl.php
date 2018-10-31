<?php
//
class form_usuarios_apl
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
   var $categorias_;
   var $nodo_;
   var $nodo__1;
   var $foto_;
   var $patente1_;
   var $patente2_;
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
   var $sc_max_reg = 20; 
   var $sc_max_reg_incl = 10; 
   var $form_vert_form_usuarios = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
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
          if (isset($this->NM_ajax_info['param']['foto_']))
          {
              $this->foto_ = $this->NM_ajax_info['param']['foto_'];
          }
          if (isset($this->NM_ajax_info['param']['id_']))
          {
              $this->id_ = $this->NM_ajax_info['param']['id_'];
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
          if (isset($this->NM_ajax_info['param']['nodo_']))
          {
              $this->nodo_ = $this->NM_ajax_info['param']['nodo_'];
          }
          if (isset($this->NM_ajax_info['param']['nombres_']))
          {
              $this->nombres_ = $this->NM_ajax_info['param']['nombres_'];
          }
          if (isset($this->NM_ajax_info['param']['patente1_']))
          {
              $this->patente1_ = $this->NM_ajax_info['param']['patente1_'];
          }
          if (isset($this->NM_ajax_info['param']['patente2_']))
          {
              $this->patente2_ = $this->NM_ajax_info['param']['patente2_'];
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
      $this->sc_conv_var['nodo'] = "nodo_";
      $this->sc_conv_var['foto'] = "foto_";
      $this->sc_conv_var['patente1'] = "patente1_";
      $this->sc_conv_var['patente2'] = "patente2_";
      if (isset($_POST['nmgp_opcao']) && ($_POST['nmgp_opcao'] == "ajax_add_dyn_search" || $_POST['nmgp_opcao'] == "ajax_ch_bi_dyn_search"))
      {
          ob_start();
      }
      if (isset($_GET['nmgp_opcao']) && $_GET['nmgp_opcao'] == "ajax_aut_comp_dyn_search")
      {
          ob_start();
      }
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
          $_SESSION['sc_session'][$script_case_init]['form_usuarios']['nm_run_menu'] = 1;
      } 
      if (isset($_SESSION['sc_session'][$script_case_init]['form_usuarios']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_usuarios']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_usuarios']['embutida_parms']);
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
                 nm_limpa_str_form_usuarios($cadapar[1]);
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
              $_SESSION['sc_session'][$script_case_init]['form_usuarios']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_usuarios']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_usuarios']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_usuarios']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_usuarios']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_usuarios']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_usuarios']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_usuarios']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_usuarios']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_usuarios']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_usuarios']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_usuarios']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_usuarios']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_usuarios_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_usuarios']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_usuarios']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_usuarios'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_usuarios']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_usuarios']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_usuarios') . "/form_usuarios.php";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_usuarios']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - usuarios";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_usuarios")
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
      $this->Ini->Str_btn_form    = trim($str_button);
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

      if (isset($_POST['nmgp_opcao']) && $_POST['nmgp_opcao'] == "ajax_add_dyn_search")
      {
          $Temp = ob_get_clean();
          ob_start();
          $NM_func_dyn_add = "dynamic_search_" . $_POST['parm'];
          $Lin_dyn_add = $this->$NM_func_dyn_add($_POST['seq'], 'S');
          $this->Arr_result = array();
          $Temp = ob_get_clean();
          if ($Temp !== false && trim($Temp) != "")
          {
              $this->Arr_result['htmOutput'] = NM_charset_to_utf8($Temp);
          }
          $this->Arr_result['dyn_add'][] = NM_charset_to_utf8($Lin_dyn_add);
          $oJson = new Services_JSON();
          echo $oJson->encode($this->Arr_result);
          exit;
      }
      if (isset($_GET['nmgp_opcao']) && $_GET['nmgp_opcao'] == "ajax_aut_comp_dyn_search")
      {
          $Temp = ob_get_clean();
          ob_start();
          $NM_func_aut_comp = "lookup_ajax_" . $_GET['field'];
          $parm = ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($_GET['q'])) ? sc_convert_encoding($_GET['q'], $_SESSION['scriptcase']['charset'], "UTF-8") : $_GET['q'];
          $nmgp_def_dados = $this->$NM_func_aut_comp($parm);
          ob_end_clean();
          $count_aut_comp = 0;
          $resp_aut_comp  = array();
          foreach ($nmgp_def_dados as $Ind => $Lista)
          {
             if (is_array($Lista))
             {
                 foreach ($Lista as $Cod => $Valor)
                 {
                     if ($_GET['cod_desc'] == "S")
                     {
                         $Valor = $Cod . " - " . $Valor;
                     }
                     $resp_aut_comp[] = array('label' => $Valor , 'value' => $Cod);
                     $count_aut_comp++;
                 }
             }
             if ($count_aut_comp == $_GET['max_itens'])
             {
                 break;
             }
          }
          $oJson = new Services_JSON();
          echo $oJson->encode($resp_aut_comp);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_aut_comp']);
          exit;
      }

      $this->arr_buttons['admin']['hint']             = "";
      $this->arr_buttons['admin']['type']             = "button";
      $this->arr_buttons['admin']['value']            = "Administración";
      $this->arr_buttons['admin']['display']          = "only_text";
      $this->arr_buttons['admin']['display_position'] = "text_right";
      $this->arr_buttons['admin']['style']            = "default";
      $this->arr_buttons['admin']['image']            = "";


      $_SESSION['scriptcase']['error_icon']['form_usuarios']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_usuarios'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz . "form_usuarios.php"; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['dynsearch'] = "on";
      $this->nmgp_botoes['new']  = "off";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['insert'] = "off";
      $this->nmgp_botoes['update'] = "off";
      $this->nmgp_botoes['delete'] = "off";
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
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "off";
      $this->nmgp_botoes['navpage'] = "on";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      }
      $this->nmgp_botoes['Admin'] = "on";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_usuarios']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field . "_"] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field . "_"] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field . "_"] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field . "_"] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['exit'];
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_usuarios", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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

      if (is_file($this->Ini->path_aplicacao . 'form_usuarios_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_usuarios_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_usuarios/form_usuarios_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_usuarios_erro.class.php"); 
      }
      $this->Erro      = new form_usuarios_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "dyn_search" || $this->nmgp_opcao == "dyn_search_clear")  
      {
          $this->proc_fast_search = true;
          if ($this->nmgp_opcao == "dyn_search_clear")  
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter']);
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['total']);
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['cond_pesq']);
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search']);
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_detal'])) 
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_detal'];
              }
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['empty_filter'])
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['empty_filter']);
                  $this->NM_ajax_info['empty_filter'] = 'ok';
                  form_usuarios_pack_ajax_response();
                  exit;
              }
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_clear'] = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_refresh'] = array();
              $this->html_dynamic_search();
          } 
          else
          {
              $this->SC_proc_dyn_search($this->nmgp_arg_dyn_search);
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
      } 
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opcao']))
         { 
             if ($this->id_ != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['Admin'] = "off";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['Admin'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['botoes']['Admin'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['final'];
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
      if ($nm_opc_form_php == "formphp")
      { 
          if ($nm_call_php == "Admin")
          { 
              $this->sc_btn_Admin();
          } 
          $this->NM_close_db(); 
          exit;
      } 
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
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
      //-- fecha_
      $this->field_config['fecha_']                 = array();
      $this->field_config['fecha_']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fecha_']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fecha_']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fecha_');
      //-- estado_
      $this->field_config['estado_']               = array();
      $this->field_config['estado_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['estado_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['estado_']['symbol_dec'] = '';
      $this->field_config['estado_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['estado_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- modelos_
      $this->field_config['modelos_']               = array();
      $this->field_config['modelos_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['modelos_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['modelos_']['symbol_dec'] = '';
      $this->field_config['modelos_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['modelos_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- categorias_
      $this->field_config['categorias_']               = array();
      $this->field_config['categorias_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['categorias_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['categorias_']['symbol_dec'] = '';
      $this->field_config['categorias_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['categorias_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
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
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz . "form_usuarios.php"; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opc_edit'] = true;  
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
         form_usuarios_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'backup_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "igual";
         $this->nm_tira_formatacao();
         $this->nm_select_banco();
         $this->ajax_return_values();
         $this->NM_close_db();
         form_usuarios_pack_ajax_response();
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
         if (isset($this->piso_)) { $this->nm_limpa_alfa($this->piso_); }
         if (isset($this->nodo_)) { $this->nm_limpa_alfa($this->nodo_); }
         if (isset($this->foto_)) { $this->nm_limpa_alfa($this->foto_); }
         if (isset($this->patente1_)) { $this->nm_limpa_alfa($this->patente1_); }
         if (isset($this->patente2_)) { $this->nm_limpa_alfa($this->patente2_); }
         if (isset($this->Sc_num_lin_alt) && $this->Sc_num_lin_alt > 0) 
         {
             $sc_seq_vert = $this->Sc_num_lin_alt;
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_form'][$sc_seq_vert];
             $this->id_ = $this->nmgp_dados_form['id_']; 
             $this->clave_ = $this->nmgp_dados_form['clave_']; 
             $this->fecha_ = $this->nmgp_dados_form['fecha_']; 
             $this->modelo_ = $this->nmgp_dados_form['modelo_']; 
             $this->mac_ = $this->nmgp_dados_form['mac_']; 
             $this->categoria_ = $this->nmgp_dados_form['categoria_']; 
             $this->observaciones_ = $this->nmgp_dados_form['observaciones_']; 
             $this->estado_ = $this->nmgp_dados_form['estado_']; 
             $this->modelos_ = $this->nmgp_dados_form['modelos_']; 
             $this->categorias_ = $this->nmgp_dados_form['categorias_']; 
         }
         $this->controle_form_vert();
         if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
         {
             $this->NM_rollback_db();
              if ($this->NM_ajax_flag)
              {
                  if (!isset($this->NM_ajax_info['errList']['geral_form_usuarios']) || !is_array($this->NM_ajax_info['errList']['geral_form_usuarios']))
                  {
                      $this->NM_ajax_info['errList']['geral_form_usuarios'] = array();
                  }
                  if ($Campos_Crit != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_usuarios'][] = $Campos_Crit;
                  }
                  if (!empty($Campos_Falta))
                  {
                      $this->NM_ajax_info['errList']['geral_form_usuarios'][] = $this->Formata_Campos_Falta($Campos_Falta);
                  }
                  if ($this->Campos_Mens_erro != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_usuarios'][] = $this->Campos_Mens_erro;
                  }
              }
         }
         else
         {
             $this->NM_commit_db();
         }
         if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_redir_atualiz'] == "ok")
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
         form_usuarios_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
          if ('validate_foto_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'foto_');
          }
          if ('validate_anexo_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'anexo_');
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
          if ('validate_depto_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'depto_');
          }
          if ('validate_piso_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'piso_');
          }
          if ('validate_nodo_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nodo_');
          }
          if ('validate_patente1_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'patente1_');
          }
          if ('validate_patente2_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'patente2_');
          }
          form_usuarios_pack_ajax_response();
          exit;
      }
      while ($sc_contr_vert > $sc_seq_vert) 
      { 
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
         $this->foto_ = $GLOBALS["foto_" . $sc_seq_vert]; 
         $this->anexo_ = $GLOBALS["anexo_" . $sc_seq_vert]; 
         $this->ap_pat_ = $GLOBALS["ap_pat_" . $sc_seq_vert]; 
         $this->ap_mat_ = $GLOBALS["ap_mat_" . $sc_seq_vert]; 
         $this->nombres_ = $GLOBALS["nombres_" . $sc_seq_vert]; 
         $this->correo_ = $GLOBALS["correo_" . $sc_seq_vert]; 
         $this->depto_ = $GLOBALS["depto_" . $sc_seq_vert]; 
         $this->piso_ = $GLOBALS["piso_" . $sc_seq_vert]; 
         $this->nodo_ = $GLOBALS["nodo_" . $sc_seq_vert]; 
         $this->patente1_ = $GLOBALS["patente1_" . $sc_seq_vert]; 
         $this->patente2_ = $GLOBALS["patente2_" . $sc_seq_vert]; 
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_form'][$sc_seq_vert];
             $this->id_ = $this->nmgp_dados_form['id_']; 
             $this->clave_ = $this->nmgp_dados_form['clave_']; 
             $this->fecha_ = $this->nmgp_dados_form['fecha_']; 
             $this->modelo_ = $this->nmgp_dados_form['modelo_']; 
             $this->mac_ = $this->nmgp_dados_form['mac_']; 
             $this->categoria_ = $this->nmgp_dados_form['categoria_']; 
             $this->observaciones_ = $this->nmgp_dados_form['observaciones_']; 
             $this->estado_ = $this->nmgp_dados_form['estado_']; 
             $this->modelos_ = $this->nmgp_dados_form['modelos_']; 
             $this->categorias_ = $this->nmgp_dados_form['categorias_']; 
         }
         if (isset($this->ap_pat_)) { $this->nm_limpa_alfa($this->ap_pat_); }
         if (isset($this->ap_mat_)) { $this->nm_limpa_alfa($this->ap_mat_); }
         if (isset($this->nombres_)) { $this->nm_limpa_alfa($this->nombres_); }
         if (isset($this->correo_)) { $this->nm_limpa_alfa($this->correo_); }
         if (isset($this->anexo_)) { $this->nm_limpa_alfa($this->anexo_); }
         if (isset($this->depto_)) { $this->nm_limpa_alfa($this->depto_); }
         if (isset($this->piso_)) { $this->nm_limpa_alfa($this->piso_); }
         if (isset($this->nodo_)) { $this->nm_limpa_alfa($this->nodo_); }
         if (isset($this->foto_)) { $this->nm_limpa_alfa($this->foto_); }
         if (isset($this->patente1_)) { $this->nm_limpa_alfa($this->patente1_); }
         if (isset($this->patente2_)) { $this->nm_limpa_alfa($this->patente2_); }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_form'])) 
         {
            $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_form'][$sc_seq_vert];
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'])) 
         {
            $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert];
         }
         if ($this->nmgp_opcao != "recarga" && (!in_array($sc_seq_vert, $sc_check_excl) && !in_array($sc_seq_vert, $sc_check_incl) ))
         { }
         else
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_disabled'] = array();
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
             $this->form_vert_form_usuarios[$sc_seq_vert]['foto_'] =  $this->foto_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['anexo_'] =  $this->anexo_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['ap_pat_'] =  $this->ap_pat_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['ap_mat_'] =  $this->ap_mat_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['nombres_'] =  $this->nombres_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['correo_'] =  $this->correo_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['depto_'] =  $this->depto_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['piso_'] =  $this->piso_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['nodo_'] =  $this->nodo_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['patente1_'] =  $this->patente1_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['patente2_'] =  $this->patente2_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['id_'] =  $this->id_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['clave_'] =  $this->clave_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['fecha_'] =  $this->fecha_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['modelo_'] =  $this->modelo_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['mac_'] =  $this->mac_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['categoria_'] =  $this->categoria_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['observaciones_'] =  $this->observaciones_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['estado_'] =  $this->estado_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['modelos_'] =  $this->modelos_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['categorias_'] =  $this->categorias_; 
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
          form_usuarios_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
      {
          $this->nm_gera_html();
          $this->NM_ajax_info['tableRefresh'] = NM_charset_to_utf8($this->Table_refresh . $this->New_Line) . '</table>';
          $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
          $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
          $this->NM_ajax_info['rsSize'] = sizeof($this->form_vert_form_usuarios);
          $this->NM_ajax_info['fldList']['id_']['keyVal'] = sc_htmlentities($this->nmgp_dados_form['id_']);
          $this->NM_close_db();
          form_usuarios_pack_ajax_response();
          exit;
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_redir_atualiz'] == "ok")
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_usuarios_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          return; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_usuarios']['contr_erro'] = 'off';
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
   function sc_btn_Admin() 
   {
        global $nm_url_saida, $teste_validade, 
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;
 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
 <head>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
    <SCRIPT type="text/javascript">
      var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
    </SCRIPT>
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
    <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
    <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 </head>
  <body class="scFormPage">
      <table class="scFormTabela" align="center"><tr><td>
<?php
      $nmgp_opcao_saida_php = "igual";
      $nmgp_opc_ant_saida_php = "";
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opc_ant'] == "novo" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opc_ant'] == "incluir")
      {
          $nmgp_opc_ant_saida_php = "novo";
          $nmgp_opcao_saida_php   = "recarga";
      }
      $nm_f_saida = "form_usuarios.php";
      nm_limpa_numero($this->anexo_, $this->field_config['anexo_']['symbol_grp']) ; 
      nm_limpa_numero($this->piso_, $this->field_config['piso_']['symbol_grp']) ; 
      $_SESSION['scriptcase']['form_usuarios']['contr_erro'] = 'on';
  if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($this->Ini->path_link . "" . SC_dir_app_name('menu') . "/menu.php", $this->nm_location, "","_self", '', 440, 630);
 };
$_SESSION['scriptcase']['form_usuarios']['contr_erro'] = 'off'; 
?>
      </td></tr><tr><td align="center">
      <form name="FPHP" method="post" 
                        action="<?php echo $nm_f_saida ?>" 
                        target="_self">
      <input type=hidden name="nmgp_opcao" value=""/>
      <input type=hidden name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"/>
      <input type=hidden name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>"/>
      <input type=hidden name="id_" value="<?php echo $this->form_encode_input($this->id_) ?>"/>
      <input type=hidden name="nmgp_opcao" value="<?php echo $this->form_encode_input($nmgp_opcao_saida_php); ?>"/>
      <input type=hidden name="nmgp_opc_ant" value="<?php echo $this->form_encode_input($nmgp_opc_ant_saida_php); ?>"/>
      <input type=submit name="nmgp_bok" value="<?php echo $this->Ini->Nm_lang['lang_btns_cfrm'] ?>"/>
      </form>
      </td></tr></table>
      </body>
      </html>
<?php
       if (isset($this->redir_modal) && !empty($this->redir_modal))
       {
           echo "<script type=\"text/javascript\">" . $this->redir_modal . "</script>";
           $this->redir_modal = "";
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
           case 'foto_':
               return "";
               break;
           case 'anexo_':
               return "Anexo";
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
           case 'depto_':
               return "Departamento";
               break;
           case 'piso_':
               return "Piso";
               break;
           case 'nodo_':
               return "Establecimiento";
               break;
           case 'patente1_':
               return "Patente1";
               break;
           case 'patente2_':
               return "Patente2";
               break;
           case 'id_':
               return "Id";
               break;
           case 'clave_':
               return "Clave";
               break;
           case 'fecha_':
               return "Fecha";
               break;
           case 'modelo_':
               return "Modelo Telefono";
               break;
           case 'mac_':
               return "MAC";
               break;
           case 'categoria_':
               return "Categoria";
               break;
           case 'observaciones_':
               return "Observaciones";
               break;
           case 'estado_':
               return "Estado";
               break;
           case 'modelos_':
               return "Modelos";
               break;
           case 'categorias_':
               return "Categorias";
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
     global $nm_browser, $teste_validade, $sc_seq_vert;
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if ('' == $filtro && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_usuarios']) || !is_array($this->NM_ajax_info['errList']['geral_form_usuarios']))
              {
                  $this->NM_ajax_info['errList']['geral_form_usuarios'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_usuarios'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'foto_' == $filtro)
        $this->ValidateField_foto_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'anexo_' == $filtro)
        $this->ValidateField_anexo_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ap_pat_' == $filtro)
        $this->ValidateField_ap_pat_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ap_mat_' == $filtro)
        $this->ValidateField_ap_mat_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nombres_' == $filtro)
        $this->ValidateField_nombres_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'correo_' == $filtro)
        $this->ValidateField_correo_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'depto_' == $filtro)
        $this->ValidateField_depto_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'piso_' == $filtro)
        $this->ValidateField_piso_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nodo_' == $filtro)
        $this->ValidateField_nodo_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'patente1_' == $filtro)
        $this->ValidateField_patente1_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'patente2_' == $filtro)
        $this->ValidateField_patente2_($Campos_Crit, $Campos_Falta, $Campos_Erros);
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

    function ValidateField_foto_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->foto_) != "")  
          { 
          } 
      } 
    } // ValidateField_foto_

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

    function ValidateField_ap_pat_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->ap_pat_ = sc_strtoupper($this->ap_pat_); 
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
          if (trim($this->correo_) != "")  
          { 
              if ($teste_validade->Email($this->correo_) == false)  
              { 
                      $Campos_Crit .= "Correo; " ; 
                  if (!isset($Campos_Erros['correo_']))
                  {
                      $Campos_Erros['correo_'] = array();
                  }
                  $Campos_Erros['correo_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                      if (!isset($this->NM_ajax_info['errList']['correo_']) || !is_array($this->NM_ajax_info['errList']['correo_']))
                      {
                          $this->NM_ajax_info['errList']['correo_'] = array();
                      }
                      $this->NM_ajax_info['errList']['correo_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_correo_

    function ValidateField_depto_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
   if ($this->nmgp_opcao == "incluir")
   {
               if (!empty($this->depto_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_depto_']) && !in_array($this->depto_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_depto_']))
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

    function ValidateField_nodo_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
   if ($this->nmgp_opcao == "incluir")
   {
               if (!empty($this->nodo_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_nodo_']) && !in_array($this->nodo_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_nodo_']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['nodo_']))
                   {
                       $Campos_Erros['nodo_'] = array();
                   }
                   $Campos_Erros['nodo_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['nodo_']) || !is_array($this->NM_ajax_info['errList']['nodo_']))
                   {
                       $this->NM_ajax_info['errList']['nodo_'] = array();
                   }
                   $this->NM_ajax_info['errList']['nodo_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
   }
    } // ValidateField_nodo_

    function ValidateField_patente1_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->patente1_) > 6) 
          { 
              $Campos_Crit .= "Patente1 " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['patente1_']))
              {
                  $Campos_Erros['patente1_'] = array();
              }
              $Campos_Erros['patente1_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['patente1_']) || !is_array($this->NM_ajax_info['errList']['patente1_']))
              {
                  $this->NM_ajax_info['errList']['patente1_'] = array();
              }
              $this->NM_ajax_info['errList']['patente1_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_patente1_

    function ValidateField_patente2_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->patente2_) > 6) 
          { 
              $Campos_Crit .= "Patente2 " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['patente2_']))
              {
                  $Campos_Erros['patente2_'] = array();
              }
              $Campos_Erros['patente2_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['patente2_']) || !is_array($this->NM_ajax_info['errList']['patente2_']))
              {
                  $this->NM_ajax_info['errList']['patente2_'] = array();
              }
              $this->NM_ajax_info['errList']['patente2_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_patente2_

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
    $this->nmgp_dados_form['foto_'] = $this->foto_;
    $this->nmgp_dados_form['anexo_'] = $this->anexo_;
    $this->nmgp_dados_form['ap_pat_'] = $this->ap_pat_;
    $this->nmgp_dados_form['ap_mat_'] = $this->ap_mat_;
    $this->nmgp_dados_form['nombres_'] = $this->nombres_;
    $this->nmgp_dados_form['correo_'] = $this->correo_;
    $this->nmgp_dados_form['depto_'] = $this->depto_;
    $this->nmgp_dados_form['piso_'] = $this->piso_;
    $this->nmgp_dados_form['nodo_'] = $this->nodo_;
    $this->nmgp_dados_form['patente1_'] = $this->patente1_;
    $this->nmgp_dados_form['patente2_'] = $this->patente2_;
    $this->nmgp_dados_form['id_'] = $this->id_;
    $this->nmgp_dados_form['clave_'] = $this->clave_;
    $this->nmgp_dados_form['fecha_'] = $this->fecha_;
    $this->nmgp_dados_form['modelo_'] = $this->modelo_;
    $this->nmgp_dados_form['mac_'] = $this->mac_;
    $this->nmgp_dados_form['categoria_'] = $this->categoria_;
    $this->nmgp_dados_form['observaciones_'] = $this->observaciones_;
    $this->nmgp_dados_form['estado_'] = $this->estado_;
    $this->nmgp_dados_form['modelos_'] = $this->modelos_;
    $this->nmgp_dados_form['categorias_'] = $this->categorias_;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_form'][$sc_seq_vert] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_numero($this->anexo_, $this->field_config['anexo_']['symbol_grp']) ; 
      nm_limpa_numero($this->piso_, $this->field_config['piso_']['symbol_grp']) ; 
      nm_limpa_numero($this->id_, $this->field_config['id_']['symbol_grp']) ; 
      nm_limpa_numero($this->clave_, $this->field_config['clave_']['symbol_grp']) ; 
      nm_limpa_data($this->fecha_, $this->field_config['fecha_']['date_sep']) ; 
      nm_limpa_numero($this->estado_, $this->field_config['estado_']['symbol_grp']) ; 
      nm_limpa_numero($this->modelos_, $this->field_config['modelos_']['symbol_grp']) ; 
      nm_limpa_numero($this->categorias_, $this->field_config['categorias_']['symbol_grp']) ; 
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
      if ($Nome_Campo == "modelos_")
      {
          nm_limpa_numero($this->modelos_, $this->field_config['modelos_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "categorias_")
      {
          nm_limpa_numero($this->categorias_, $this->field_config['categorias_']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
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
              $this->NM_ajax_info['fldList']['id_']['keyVal'] = form_usuarios_pack_protect_string($this->nmgp_dados_form['id_']);
          }
   } // ajax_return_values
   function ajax_return_values_all_vert()
   {
          if (isset($this->nmgp_refresh_fields) && isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_usuarios[$this->nmgp_refresh_row] = $this->NM_ajax_info['param'];
              if ((isset($this->Embutida_ronly) && $this->Embutida_ronly) || $this->NM_ajax_force_values)
              {
                  if (isset($this->NM_ajax_changed['foto_']) && $this->NM_ajax_changed['foto_'])
                  {
                      $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['foto_'] = $this->foto_;
                  }
                  if (isset($this->NM_ajax_changed['anexo_']) && $this->NM_ajax_changed['anexo_'])
                  {
                      $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['anexo_'] = $this->anexo_;
                  }
                  if (isset($this->NM_ajax_changed['ap_pat_']) && $this->NM_ajax_changed['ap_pat_'])
                  {
                      $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['ap_pat_'] = $this->ap_pat_;
                  }
                  if (isset($this->NM_ajax_changed['ap_mat_']) && $this->NM_ajax_changed['ap_mat_'])
                  {
                      $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['ap_mat_'] = $this->ap_mat_;
                  }
                  if (isset($this->NM_ajax_changed['nombres_']) && $this->NM_ajax_changed['nombres_'])
                  {
                      $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['nombres_'] = $this->nombres_;
                  }
                  if (isset($this->NM_ajax_changed['correo_']) && $this->NM_ajax_changed['correo_'])
                  {
                      $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['correo_'] = $this->correo_;
                  }
                  if (isset($this->NM_ajax_changed['depto_']) && $this->NM_ajax_changed['depto_'])
                  {
                      $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['depto_'] = $this->depto_;
                  }
                  if (isset($this->NM_ajax_changed['piso_']) && $this->NM_ajax_changed['piso_'])
                  {
                      $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['piso_'] = $this->piso_;
                  }
                  if (isset($this->NM_ajax_changed['nodo_']) && $this->NM_ajax_changed['nodo_'])
                  {
                      $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['nodo_'] = $this->nodo_;
                  }
                  if (isset($this->NM_ajax_changed['patente1_']) && $this->NM_ajax_changed['patente1_'])
                  {
                      $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['patente1_'] = $this->patente1_;
                  }
                  if (isset($this->NM_ajax_changed['patente2_']) && $this->NM_ajax_changed['patente2_'])
                  {
                      $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['patente2_'] = $this->patente2_;
                  }
              }
          }
          if (isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['foto_'] = $this->foto_;
              $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['ap_pat_'] = $this->ap_pat_;
              $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['ap_mat_'] = $this->ap_mat_;
              $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['nombres_'] = $this->nombres_;
              $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['correo_'] = $this->correo_;
              $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['patente1_'] = $this->patente1_;
              $this->form_vert_form_usuarios[$this->nmgp_refresh_row]['patente2_'] = $this->patente2_;
          }
          $this->NM_ajax_info['rsSize'] = sizeof($this->form_vert_form_usuarios);
          foreach($this->form_vert_form_usuarios as $sc_seq_vert => $aRecData)
          {
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("foto_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['foto_']);
                  $aLookup = array();
          if (!is_file($this->Ini->root  . $this->Ini->path_imag_cab . "/sys__NM__img__NM__ojo.png"))
          { 
              $foto_ = "&nbsp;" ;  
          } 
          else 
          { 
              $foto_ = "<img border=\"0\" src=\"" . $this->Ini->path_imag_cab . "/sys__NM__img__NM__ojo.png\"/>" ; 
          } 
          $sTmpImgHtml = "<a href=\"javascript:nm_gp_submit('" . $this->Ini->link_form_foto_ver_edit . "', '$this->nm_location', 'id?#?" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_form'][$sc_seq_vert]['id_'] . "?@?NM_btn_insert?#?S?@?NM_btn_update?#?S?@?NM_btn_delete?#?S?@?NM_btn_navega?#?N?@?', '', '_self', '0', '0', 'form_foto_ver')\"><font color=\"" . $this->Ini->cor_link_dados . "\">" . $foto_ . "</font></a>";
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['foto_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'imagehtml',
                       'valList' => array($sTmpValue),
               'imgHtml' => $sTmpImgHtml,
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
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("depto_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['depto_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_depto_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_depto_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_depto_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_depto_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();


   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT Id, Descripcion 
FROM Departamentos 
ORDER BY Descripcion";

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
              $aLookup[] = array(form_usuarios_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_usuarios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_depto_'][] = $rs->fields[0];
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
              $this->NM_ajax_info['fldList']['depto_' . $sc_seq_vert]['valList'][$i] = form_usuarios_pack_protect_string($v);
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
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nodo_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['nodo_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_nodo_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_nodo_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_nodo_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_nodo_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();


   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT id, Descripcion 
FROM tbl_establecimiento 
ORDER BY Descripcion";

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
              $aLookup[] = array(form_usuarios_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_usuarios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_nodo_'][] = $rs->fields[0];
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
          $sSelComp = "name=\"nodo_\"";
          if (isset($this->NM_ajax_info['select_html']['nodo_']) && !empty($this->NM_ajax_info['select_html']['nodo_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['nodo_'] . "\";");
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
                  $Nm_tp_obj = (isset($this->nmgp_refresh_fields) && in_array("nodo_", $this->nmgp_refresh_fields)) ? 'select' : 'text';
                  $this->NM_ajax_info['fldList']['nodo_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => $Nm_tp_obj,
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['nodo_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['nodo_' . $sc_seq_vert]['valList'][$i] = form_usuarios_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['nodo_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['nodo_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['nodo_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("patente1_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['patente1_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['patente1_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("patente2_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['patente2_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['patente2_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['upload_dir'][$fieldName][] = $newName;
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
          $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert];
          if ($this->nmgp_dados_select['foto_'] == $this->foto_ &&
              $this->nmgp_dados_select['anexo_'] == $this->anexo_ &&
              $this->nmgp_dados_select['ap_pat_'] == $this->ap_pat_ &&
              $this->nmgp_dados_select['ap_mat_'] == $this->ap_mat_ &&
              $this->nmgp_dados_select['nombres_'] == $this->nombres_ &&
              $this->nmgp_dados_select['correo_'] == $this->correo_ &&
              $this->nmgp_dados_select['depto_'] == $this->depto_ &&
              $this->nmgp_dados_select['piso_'] == $this->piso_ &&
              $this->nmgp_dados_select['nodo_'] == $this->nodo_ &&
              $this->nmgp_dados_select['patente1_'] == $this->patente1_ &&
              $this->nmgp_dados_select['patente2_'] == $this->patente2_)
          {
              $SC_ex_update = false; 
              $SC_ex_upd_or = false; 
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['foto_'] = $this->foto_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['anexo_'] = $this->anexo_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['ap_pat_'] = $this->ap_pat_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['ap_mat_'] = $this->ap_mat_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['nombres_'] = $this->nombres_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['correo_'] = $this->correo_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['depto_'] = $this->depto_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['piso_'] = $this->piso_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['nodo_'] = $this->nodo_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['patente1_'] = $this->patente1_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['patente2_'] = $this->patente2_;
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
      $NM_val_form['foto_'] = $this->foto_;
      $NM_val_form['anexo_'] = $this->anexo_;
      $NM_val_form['ap_pat_'] = $this->ap_pat_;
      $NM_val_form['ap_mat_'] = $this->ap_mat_;
      $NM_val_form['nombres_'] = $this->nombres_;
      $NM_val_form['correo_'] = $this->correo_;
      $NM_val_form['depto_'] = $this->depto_;
      $NM_val_form['piso_'] = $this->piso_;
      $NM_val_form['nodo_'] = $this->nodo_;
      $NM_val_form['patente1_'] = $this->patente1_;
      $NM_val_form['patente2_'] = $this->patente2_;
      $NM_val_form['id_'] = $this->id_;
      $NM_val_form['clave_'] = $this->clave_;
      $NM_val_form['fecha_'] = $this->fecha_;
      $NM_val_form['modelo_'] = $this->modelo_;
      $NM_val_form['mac_'] = $this->mac_;
      $NM_val_form['categoria_'] = $this->categoria_;
      $NM_val_form['observaciones_'] = $this->observaciones_;
      $NM_val_form['estado_'] = $this->estado_;
      $NM_val_form['modelos_'] = $this->modelos_;
      $NM_val_form['categorias_'] = $this->categorias_;
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
      if ($this->nodo_ == "")  
      { 
          $this->nodo_ = 0;
          $this->sc_force_zero[] = 'nodo_';
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
          $this->foto__before_qstr = $this->foto_;
          $this->foto_ = substr($this->Db->qstr($this->foto_), 1, -1); 
          $this->patente1__before_qstr = $this->patente1_;
          $this->patente1_ = substr($this->Db->qstr($this->patente1_), 1, -1); 
          $this->patente2__before_qstr = $this->patente2_;
          $this->patente2_ = substr($this->Db->qstr($this->patente2_), 1, -1); 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['foreign_key'] as $sFKName => $sFKValue)
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
                 form_usuarios_pack_ajax_response();
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
              $comando = "UPDATE " . $this->Ini->nm_tabela . " SET foto = '$this->foto_', patente1 = '$this->patente1_', patente2 = '$this->patente2_'";  
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
              if (isset($NM_val_form['mac_']) && $NM_val_form['mac_'] != $this->nmgp_dados_select['mac_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " MAC = '$this->mac_'"; 
                  $comando_oracle        .= " MAC = '$this->mac_'"; 
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
              if (isset($NM_val_form['observaciones_']) && $NM_val_form['observaciones_'] != $this->nmgp_dados_select['observaciones_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " Observaciones = '$this->observaciones_'"; 
                  $comando_oracle        .= " Observaciones = '$this->observaciones_'"; 
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
              if (isset($NM_val_form['modelos_']) && $NM_val_form['modelos_'] != $this->nmgp_dados_select['modelos_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " modelos = $this->modelos_"; 
                  $comando_oracle        .= " modelos = $this->modelos_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['categorias_']) && $NM_val_form['categorias_'] != $this->nmgp_dados_select['categorias_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " categorias = $this->categorias_"; 
                  $comando_oracle        .= " categorias = $this->categorias_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['nodo_']) && $NM_val_form['nodo_'] != $this->nmgp_dados_select['nodo_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " nodo = $this->nodo_"; 
                  $comando_oracle        .= " nodo = $this->nodo_"; 
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
                                  form_usuarios_pack_ajax_response();
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
          $this->foto_ = $this->foto__before_qstr;
          $this->patente1_ = $this->patente1__before_qstr;
          $this->patente2_ = $this->patente2__before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['db_changed'] = true;

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
              if     (isset($NM_val_form) && isset($NM_val_form['piso_'])) { $this->piso_ = $NM_val_form['piso_']; }
              elseif (isset($this->piso_)) { $this->nm_limpa_alfa($this->piso_); }
              if     (isset($NM_val_form) && isset($NM_val_form['nodo_'])) { $this->nodo_ = $NM_val_form['nodo_']; }
              elseif (isset($this->nodo_)) { $this->nm_limpa_alfa($this->nodo_); }
              if     (isset($NM_val_form) && isset($NM_val_form['foto_'])) { $this->foto_ = $NM_val_form['foto_']; }
              elseif (isset($this->foto_)) { $this->nm_limpa_alfa($this->foto_); }
              if     (isset($NM_val_form) && isset($NM_val_form['patente1_'])) { $this->patente1_ = $NM_val_form['patente1_']; }
              elseif (isset($this->patente1_)) { $this->nm_limpa_alfa($this->patente1_); }
              if     (isset($NM_val_form) && isset($NM_val_form['patente2_'])) { $this->patente2_ = $NM_val_form['patente2_']; }
              elseif (isset($this->patente2_)) { $this->nm_limpa_alfa($this->patente2_); }

              $this->nm_formatar_campos();

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('foto_', 'anexo_', 'ap_pat_', 'ap_mat_', 'nombres_', 'correo_', 'depto_', 'piso_', 'nodo_', 'patente1_', 'patente2_'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              if (isset($this->Embutida_ronly) && $this->Embutida_ronly)
              {

                  $this->NM_ajax_info['readOnly']['foto_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['anexo_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['ap_pat_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['ap_mat_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['nombres_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['correo_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['depto_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['piso_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['nodo_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['patente1_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['patente2_' . $this->nmgp_refresh_row] = 'on';


                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['foreign_key'] as $sFKName => $sFKValue)
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
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "clave, fecha, Ap_Pat, Ap_Mat, Nombres, Correo, Anexo, Depto, Modelo, MAC, Categoria, Observaciones, Piso, estado, modelos, categorias, nodo, foto, patente1, patente2) VALUES (" . $NM_seq_auto . "$this->clave_, " . $this->Ini->date_delim . $this->fecha_ . $this->Ini->date_delim1 . ", '$this->ap_pat_', '$this->ap_mat_', '$this->nombres_', '$this->correo_', $this->anexo_, $this->depto_, '$this->modelo_', '$this->mac_', '$this->categoria_', '$this->observaciones_', $this->piso_, $this->estado_, $this->modelos_, $this->categorias_, $this->nodo_, '$this->foto_', '$this->patente1_', '$this->patente2_')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "clave, fecha, Ap_Pat, Ap_Mat, Nombres, Correo, Anexo, Depto, Modelo, MAC, Categoria, Observaciones, Piso, estado, modelos, categorias, nodo, foto, patente1, patente2) VALUES (" . $NM_seq_auto . "$this->clave_, " . $this->Ini->date_delim . $this->fecha_ . $this->Ini->date_delim1 . ", '$this->ap_pat_', '$this->ap_mat_', '$this->nombres_', '$this->correo_', $this->anexo_, $this->depto_, '$this->modelo_', '$this->mac_', '$this->categoria_', '$this->observaciones_', $this->piso_, $this->estado_, $this->modelos_, $this->categorias_, $this->nodo_, '$this->foto_', '$this->patente1_', '$this->patente2_')"; 
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
                              form_usuarios_pack_ajax_response();
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['db_changed'] = true;

              $this->sc_evento = "insert"; 
              $this->sc_teve_incl = true; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['foto_'] = $this->foto_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['anexo_'] = $this->anexo_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['ap_pat_'] = $this->ap_pat_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['ap_mat_'] = $this->ap_mat_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['nombres_'] = $this->nombres_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['correo_'] = $this->correo_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['depto_'] = $this->depto_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['piso_'] = $this->piso_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['nodo_'] = $this->nodo_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['patente1_'] = $this->patente1_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert]['patente2_'] = $this->patente2_;
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
              if (isset($this->piso_)) { $this->nm_limpa_alfa($this->piso_); }
              if (isset($this->nodo_)) { $this->nm_limpa_alfa($this->nodo_); }
              if (isset($this->foto_)) { $this->nm_limpa_alfa($this->foto_); }
              if (isset($this->patente1_)) { $this->nm_limpa_alfa($this->patente1_); }
              if (isset($this->patente2_)) { $this->nm_limpa_alfa($this->patente2_); }
              if (isset($this->Embutida_form) && $this->Embutida_form)
              {
                  $this->nm_guardar_campos();
                  $this->nm_formatar_campos();

          if (!is_file($this->Ini->root  . $this->Ini->path_imag_cab . "/sys__NM__img__NM__ojo.png"))
          { 
              $foto_ = "&nbsp;" ;  
          } 
          else 
          { 
              $foto_ = "<img border=\"0\" src=\"" . $this->Ini->path_imag_cab . "/sys__NM__img__NM__ojo.png\"/>" ; 
          } 
          $sTmpImgHtml = "<a href=\"javascript:nm_gp_submit('" . $this->Ini->link_form_foto_ver_edit . "', '$this->nm_location', 'id?#?" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_form'][$sc_seq_vert]['id_'] . "?@?NM_btn_insert?#?S?@?NM_btn_update?#?S?@?NM_btn_delete?#?S?@?NM_btn_navega?#?N?@?', '', '_self', '0', '0', 'form_foto_ver')\"><font color=\"" . $this->Ini->cor_link_dados . "\">" . $foto_ . "</font></a>";
                  $this->NM_ajax_info['fldList']['foto_' . $this->nmgp_refresh_row]['type']    = 'imagehtml';
                  $this->NM_ajax_info['fldList']['foto_' . $this->nmgp_refresh_row]['imgHtml'] = $sTmpImgHtml;
                  $this->NM_ajax_info['fldList']['foto_' . $this->nmgp_refresh_row]['valList'] = array();
                  $this->NM_ajax_info['fldList']['foto_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_foto_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['foto_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['foto_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['foto_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['foto_' . $this->nmgp_refresh_row] = "on";
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

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_depto_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_depto_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_depto_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_depto_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();


   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT Id, Descripcion 
FROM Departamentos 
ORDER BY Descripcion";

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
              $aLookup[] = array(form_usuarios_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_usuarios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_depto_'][] = $rs->fields[0];
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
              if (key($aValData) == form_usuarios_pack_protect_string(NM_charset_to_utf8($this->depto_)))
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

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_nodo_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_nodo_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_nodo_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_nodo_'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_anexo_ = $this->anexo_;
   $old_value_piso_ = $this->piso_;
   $this->nm_tira_formatacao();


   $unformatted_value_anexo_ = $this->anexo_;
   $unformatted_value_piso_ = $this->piso_;

   $nm_comando = "SELECT id, Descripcion 
FROM tbl_establecimiento 
ORDER BY Descripcion";

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
              $aLookup[] = array(form_usuarios_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_usuarios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['Lookup_nodo_'][] = $rs->fields[0];
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
              if (key($aValData) == form_usuarios_pack_protect_string(NM_charset_to_utf8($this->nodo_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_nodo_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['nodo_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['nodo_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->nodo_));
                  $this->NM_ajax_info['fldList']['nodo_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_nodo_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['nodo_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['nodo_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['nodo_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['nodo_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['patente1_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['patente1_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->patente1_));
                  $this->NM_ajax_info['fldList']['patente1_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_patente1_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['patente1_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['patente1_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['patente1_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['patente1_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['patente2_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['patente2_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input($this->patente2_));
                  $this->NM_ajax_info['fldList']['patente2_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input($tmpLabel_patente2_));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['patente2_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['patente2_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['patente2_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['patente2_' . $this->nmgp_refresh_row] = "on";
                      }
                  }


                  $this->nm_tira_formatacao();

                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['return_edit'] = "new";
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
                          form_usuarios_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['db_changed'] = true;

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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['parms'] = "id_?#?$this->id_?@?"; 
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
 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['rows']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['rows']))
      {
          $this->sc_max_reg = $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['rows'];
      } 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['rows_ins']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['rows_ins']))
      {
          $this->sc_max_reg_incl = $_SESSION['scriptcase']['sc_apl_conf']['form_usuarios']['rows_ins'];
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_qtd_reg']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_qtd_reg'])
      {
          $this->sc_max_reg = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['embutida_liga_qtd_reg'];
      }
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
      $this->form_vert_form_usuarios = array();
      if ($this->nmgp_opcao != "novo") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['parms'] = ""; 
      } 
      if ($this->sc_teve_excl)
      {
          $this->nmgp_opcao = "avanca";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] -= $this->sc_max_reg;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] = 0;
      }
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter'] . ")";
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
          if ($this->app_is_initializing || $this->sc_teve_excl || $this->sc_teve_incl || (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['total']))
          {
              $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where;
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
              $rt = $this->Db->Execute($nmgp_select);
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit;
              }
              $qt_geral_reg_form_usuarios = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['total'] = $qt_geral_reg_form_usuarios;
              $rt->Close();
          }
      if ((isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['total']) || $this->sc_teve_excl || $this->sc_teve_incl)
      { 
          if (!$this->sc_teve_excl && !$this->sc_teve_incl) 
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] = 0; 
          } 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->id_))
          {
              $Reg_OK      = false;
              $Count_start = -1;
              $sc_order_by = "";
              $Sel_Chave = "Id"; 
              $nmgp_select = "SELECT " . $Sel_Chave . " from " . $this->Ini->nm_tabela . $sc_where; 
              $sc_order_by = "Ap_pat";
              $sc_order_by = str_replace("order by ", "", $sc_order_by);
              $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
              if (!empty($sc_order_by))
              {
                  $nmgp_select .= " order by $sc_order_by "; 
              }
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              while (!$rt->EOF && !$Reg_OK)
              { 
                  if ($rt->fields[0] == $this->id_)
                  { 
                      $Reg_OK = true;
                  }  
                  $Count_start++;
                  $rt->MoveNext();
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] = $Count_start;
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_usuarios = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['total'];
      } 
      if ($this->nmgp_opcao == "inicio" || $this->nmgp_opcao == "ordem") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "navpage" && ($this->nmgp_ordem - 1) <= $qt_geral_reg_form_usuarios) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] = $this->nmgp_ordem - 1; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] += $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] > $qt_geral_reg_form_usuarios)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] = $qt_geral_reg_form_usuarios - $this->sc_max_reg; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] = 0; 
              }
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] -= $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] = ($qt_geral_reg_form_usuarios + 1) - $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] = 0; 
          }
      } 
      }
      $Cmps_ord_def = array();
      $Cmps_ord_def[] = "Ap_Pat";
      $Cmps_ord_def[] = "Ap_Mat";
      $Cmps_ord_def[] = "Nombres";
      $Cmps_ord_def[] = "Depto";
      $sc_order_by  = "";
      $sc_order_by = "Ap_pat";
      $sc_order_by = str_replace("order by ", "", $sc_order_by);
      $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
      if (!empty($sc_order_by))
      {
          $sc_order_by = " order by $sc_order_by "; 
      }
      if ($this->nmgp_opcao == "ordem" && in_array($this->nmgp_ordem, $Cmps_ord_def)) 
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['ordem_cmp'] != $this->nmgp_ordem)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['ordem_cmp'] = $this->nmgp_ordem; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['ordem_ord'] = ' asc'; 
          }
          elseif ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['ordem_ord'] == ' asc')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['ordem_ord'] = ' desc'; 
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['ordem_ord'] = ' asc'; 
          }
      } 
      if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['ordem_cmp'])) 
      { 
          $sc_order_by = " order by " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['ordem_cmp'] . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['ordem_ord']; 
      } 
      $nmgp_select = "SELECT Id, clave, fecha, Ap_Pat, Ap_Mat, Nombres, Correo, Anexo, Depto, Modelo, MAC, Categoria, Observaciones, Piso, estado, modelos, categorias, nodo, foto, patente1, patente2 from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
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
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe'] == "R")
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          else 
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start']) ; 
              } 
              else  
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
                  $rs = $this->Db->Execute($nmgp_select) ; 
                  if (!$rs === false && !$rs->EOF) 
                  { 
                      $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start']) ;  
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
          if ($rs->EOF && $this->nmgp_botoes['new'] != "on")
          {
              $this->nmgp_form_empty = true;
          }
          if ($rs->EOF)
          {
              $sc_seq_vert = 0; 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['empty_filter'] = true;
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
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe'] == "R")
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
              $this->nodo_ = $rs->fields[17] ; 
              $this->nmgp_dados_select['nodo_'] = $this->nodo_;
              $this->foto_ = $rs->fields[18] ; 
              $this->nmgp_dados_select['foto_'] = $this->foto_;
              $this->patente1_ = $rs->fields[19] ; 
              $this->nmgp_dados_select['patente1_'] = $this->patente1_;
              $this->patente2_ = $rs->fields[20] ; 
              $this->nmgp_dados_select['patente2_'] = $this->patente2_;
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->id_ = (string)$this->id_; 
              $this->clave_ = (string)$this->clave_; 
              $this->anexo_ = (string)$this->anexo_; 
              $this->depto_ = (string)$this->depto_; 
              $this->piso_ = (string)$this->piso_; 
              $this->estado_ = (string)$this->estado_; 
              $this->modelos_ = (string)$this->modelos_; 
              $this->categorias_ = (string)$this->categorias_; 
              $this->nodo_ = (string)$this->nodo_; 
              if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['parms'])) 
              { 
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['parms'] = "id_?#?$this->id_?@?";
              } 
              $this->nm_proc_onload_record($sc_seq_vert);
//
//-- 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dados_select'][$sc_seq_vert] = $this->nmgp_dados_select;
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_usuarios[$sc_seq_vert]['foto_'] =  $this->foto_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['anexo_'] =  $this->anexo_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['ap_pat_'] =  $this->ap_pat_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['ap_mat_'] =  $this->ap_mat_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['nombres_'] =  $this->nombres_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['correo_'] =  $this->correo_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['depto_'] =  $this->depto_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['piso_'] =  $this->piso_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['nodo_'] =  $this->nodo_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['patente1_'] =  $this->patente1_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['patente2_'] =  $this->patente2_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['id_'] =  $this->id_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['clave_'] =  $this->clave_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['fecha_'] =  $this->fecha_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['modelo_'] =  $this->modelo_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['mac_'] =  $this->mac_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['categoria_'] =  $this->categoria_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['observaciones_'] =  $this->observaciones_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['estado_'] =  $this->estado_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['modelos_'] =  $this->modelos_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['categorias_'] =  $this->categorias_; 
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
          ksort ($this->form_vert_form_usuarios); 
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
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] < (($qt_geral_reg_form_usuarios + 1) - $this->sc_max_reg);
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opcao'] = '';
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
          elseif ($this->Embutida_form) 
          { 
              $this->sc_max_reg_incl = 0; 
          } 
          while ($sc_seq_vert <= $this->sc_max_reg_incl) 
          { 
              $this->ap_pat_ = "";  
              $this->ap_mat_ = "";  
              $this->nombres_ = "";  
              $this->correo_ = "";  
              $this->anexo_ = "";  
              $this->depto_ = "";  
              $this->piso_ = "";  
              $this->nodo_ = "";  
              $this->foto_ = "";  
              $this->patente1_ = "";  
              $this->patente2_ = "";  
              $this->nm_proc_onload_record($sc_seq_vert);
              if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['foreign_key']))
              {
                  foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['foreign_key'] as $sFKName => $sFKValue)
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
             $this->form_vert_form_usuarios[$sc_seq_vert]['foto_'] =  $this->foto_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['anexo_'] =  $this->anexo_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['ap_pat_'] =  $this->ap_pat_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['ap_mat_'] =  $this->ap_mat_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['nombres_'] =  $this->nombres_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['correo_'] =  $this->correo_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['depto_'] =  $this->depto_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['piso_'] =  $this->piso_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['nodo_'] =  $this->nodo_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['patente1_'] =  $this->patente1_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['patente2_'] =  $this->patente2_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['id_'] =  $this->id_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['clave_'] =  $this->clave_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['fecha_'] =  $this->fecha_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['modelo_'] =  $this->modelo_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['mac_'] =  $this->mac_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['categoria_'] =  $this->categoria_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['observaciones_'] =  $this->observaciones_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['estado_'] =  $this->estado_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['modelos_'] =  $this->modelos_; 
             $this->form_vert_form_usuarios[$sc_seq_vert]['categorias_'] =  $this->categorias_; 
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
       $rec_tot    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['total'] + 1;
       $rec_fim    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['reg_start'] + $this->sc_max_reg;
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_usuarios_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['retorno_edit'] . "';";
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
        $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['table_refresh'] = true;
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['csrf_token'];
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
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_usuarios_pack_ajax_response();
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
      if ($field == "nombres_") 
      {
          $this->SC_monta_condicao($comando, "Nombres", $arg_search, $data_search);
      }
      if ($field == "anexo_") 
      {
          $this->SC_monta_condicao($comando, "Anexo", $arg_search, $data_search);
      }
      if ($field == "piso_") 
      {
          $this->SC_monta_condicao($comando, "Piso", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp" || $field == "depto_") 
      {
          $data_lookup = $this->SC_lookup_depto_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "Depto", $arg_search, $data_lookup);
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_detal'] . " and (" .  $comando . ")";
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
      $qt_geral_reg_form_usuarios = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['total'] = $qt_geral_reg_form_usuarios;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_usuarios_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_usuarios_pack_ajax_response();
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
      $nm_numeric[] = "id";$nm_numeric[] = "clave";$nm_numeric[] = "anexo";$nm_numeric[] = "depto";$nm_numeric[] = "piso";$nm_numeric[] = "estado";$nm_numeric[] = "modelos";$nm_numeric[] = "categorias";$nm_numeric[] = "nodo";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['decimal_db'] == ".")
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
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['SC_sep_date1'];
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
   function SC_lookup_depto_($condicao, $campo)
   {
       $result = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT Descripcion, Id FROM Departamentos WHERE (Descripcion LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function html_dynamic_search()
   {
       $this->Dyn_search_seq = 0;
       $this->Dyn_search_str = "";
       $this->Dyn_search_dat = array();
      $this->Dyn_search_str = "";
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['cond_pesq']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['cond_pesq']))
       {
           $tmp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['cond_pesq'];
           $pos = strrpos($tmp, "##*@@");
           if ($pos !== false)
           {
               $and_or = (substr($tmp, ($pos + 5)) == "and") ? $this->Ini->Nm_lang['lang_srch_and_cond'] : $this->Ini->Nm_lang['lang_srch_orr_cond'];
               $tmp    = substr($tmp, 0, $pos);
               $this->Dyn_search_str = str_replace("##*@@", ", " . $and_or . " ", $tmp);
           }
       }
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['dyn_search']['id_dyn_search_cmd_str'] = NM_charset_to_utf8(trim($this->Dyn_search_str));
           if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_clear']))
           {
               return;
           }
       }
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label'] = array();
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['ap_pat_'] = (isset($this->New_label['ap_pat_'])) ? $this->New_label['ap_pat_'] : "Apellido Paterno";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['ap_mat_'] = (isset($this->New_label['ap_mat_'])) ? $this->New_label['ap_mat_'] : "Apellido Materno";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['nombres_'] = (isset($this->New_label['nombres_'])) ? $this->New_label['nombres_'] : "Nombres";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['depto_'] = (isset($this->New_label['depto_'])) ? $this->New_label['depto_'] : "Departamento";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['piso_'] = (isset($this->New_label['piso_'])) ? $this->New_label['piso_'] : "Piso";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['patente1_'] = (isset($this->New_label['patente1_'])) ? $this->New_label['patente1_'] : "Patente1";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['patente2_'] = (isset($this->New_label['patente2_'])) ? $this->New_label['patente2_'] : "Patente2";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['nodo_'] = (isset($this->New_label['nodo_'])) ? $this->New_label['nodo_'] : "Establecimiento";
       if ($this->NM_ajax_flag)
       { 
          ob_start();
       } 
       else 
       { 
?>
   <tr id="NM_Dynamic_Search">
<?php
       } 
?>
   <td  valign="top"> 
   <div id='id_dyn_search_cmd_string' class="scAppDivMoldura" style="display:<?php echo (empty($this->Dyn_search_str)?'none':'') ?>"> 
     <span class="css_scAppDivHeaderText">
<?php
             if (is_file($this->Ini->root . $this->Ini->path_img_global . '/' . $this->Ini->App_div_tree_img_exp))
             {
?>
                             <a href="#" onclick="$('#id_dyn_search_cmd_string').hide();$('#div_dyn_search').show();" style="text-decoration:none">
                                     <img id='id_app_div_tree_img_exp' src="<?php echo $this->Ini->path_img_global ?>/<?php echo $this->Ini->App_div_tree_img_exp ?>" border=0 align='absmiddle' style='vertical-align: middle; margin-right:4px;'>
                             </a>
<?php
             }
             echo $this->Ini->Nm_lang['lang_othr_dynamicsearch_title_outside'];
?>
     </span>
     <span id='id_dyn_search_cmd_str' class="scAppDivContentText"><?php echo trim($this->Dyn_search_str) ?></span>
   </div> 
   <div id="div_dyn_search" style="display: none" class="scAppDivMoldura"> 
     <input type="hidden" name="parm_dyn_search" value=""/> 
    <table style="padding: 0px; border-spacing: 0px; border-width: 0px; vertical-align: top; width: 100%;" valign="top" cellspacing=0 cellpadding=0>
      <tr>
        <td  class="css_scAppDivHeader scAppDivHeaderText">
<?php
             if (is_file($this->Ini->root . $this->Ini->path_img_global . '/' . $this->Ini->App_div_tree_img_col))
             {
?>
                             <a href="#" onclick="$('#div_dyn_search').hide(); if($('#id_dyn_search_cmd_str').html() != ''){ $('#id_dyn_search_cmd_string').show(); }" style="text-decoration:none">
                                     <img id='id_app_div_tree_img_col' src="<?php echo $this->Ini->path_img_global ?>/<?php echo $this->Ini->App_div_tree_img_col ?>" border=0 align='absmiddle' style='vertical-align: middle; margin-right:4px;'>
                             </a>
<?php
             }
?>
            <?php echo $this->Ini->Nm_lang['lang_othr_dynamicsearch_title'] ?>
        </td>
      </tr>
      <tr>
        <td class="scAppDivContent scAppDivContentText">
            <table id="table_dyn_search" cellspacing=2 cellpadding=4>
<?php
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search']))
       {
           foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search'] as $IX => $def)
           {
               $cmp = $def['cmp'];
               if ($cmp == "ap_pat_")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "ap_pat_";
                   $lin_obj = $this->dynamic_search_ap_pat_($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
               if ($cmp == "ap_mat_")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "ap_mat_";
                   $lin_obj = $this->dynamic_search_ap_mat_($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
               if ($cmp == "nombres_")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "nombres_";
                   $lin_obj = $this->dynamic_search_nombres_($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
               if ($cmp == "depto_")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "depto_";
                   $lin_obj = $this->dynamic_search_depto_($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
               if ($cmp == "piso_")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "piso_";
                   $lin_obj = $this->dynamic_search_piso_($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
               if ($cmp == "patente1_")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "patente1_";
                   $lin_obj = $this->dynamic_search_patente1_($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
               if ($cmp == "patente2_")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "patente2_";
                   $lin_obj = $this->dynamic_search_patente2_($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
               if ($cmp == "nodo_")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "nodo_";
                   $lin_obj = $this->dynamic_search_nodo_($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
           }
       }
?>
                </table>
<?php
?>
            </td>
        </tr>
    <tr>
        <td nowrap  class="scAppDivToolbar">
       <?php echo nmButtonOutput($this->arr_buttons, "bapply", "nm_show_dynamicsearch_fields(); return false;", "nm_show_dynamicsearch_fields(); return false;", "id_dyn_search_fields", "", "" . $this->Ini->Nm_lang['lang_othr_dynamicsearch_fields'] . "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>
      <table id='id_dynamic_search_fields' style='display:none; position: absolute; border-collapse: collapse; z-index: 1000;'> 
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('ap_pat_', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['ap_pat_'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('ap_mat_', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['ap_mat_'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('nombres_', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['nombres_'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('depto_', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['depto_'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('piso_', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['piso_'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('patente1_', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['patente1_'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('patente2_', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['patente2_'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('nodo_', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['nodo_'] ?>
                </div>
            </td>
        </tr>
      </table> 
      &nbsp;&nbsp;&nbsp;
       <?php echo nmButtonOutput($this->arr_buttons, "blimpar", "nm_clear_dyn_search(); return false;", "nm_clear_dyn_search(); return false;", "dyn_search_clear", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>
       &nbsp;&nbsp;&nbsp;
       <?php echo nmButtonOutput($this->arr_buttons, "bapply", "setTimeout(function() {nm_proc_dyn_search('id_Fdyn_search', 'dyn_search')}, 200);", "setTimeout(function() {nm_proc_dyn_search('id_Fdyn_search', 'dyn_search')}, 200);", "dyn_search", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>
        </td>
    </tr>
    </table>
   </form>
   </div>
   </td>
<?php
       if ($this->NM_ajax_flag)
       { 
           $Temp = ob_get_clean();
           $this->NM_ajax_info['dyn_search']['NM_Dynamic_Search'] = NM_charset_to_utf8(trim($Temp));
           $this->NM_ajax_info['dyn_search']['id_dyn_search_cmd_str'] = NM_charset_to_utf8(trim($this->Dyn_search_str));
           if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_clear']))
           { 
               unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_clear']);
           } 
           return;
       } 
?>
   </tr>
<?php
       $this->JS_dynamic_search();
   }
   function dynamic_search_ap_pat_($ind, $ajax, $opc="", $val=array())
   {
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_ap_pat__" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['ap_pat_'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "ii";
       }
       $lin_obj .= "       <select id='dyn_search_ap_pat__cond_" . $ind . "' name='cond_dyn_search_ap_pat__" . $ind . "' class='sc-js-input scAppDivToolbarInput' style='vertical-align: middle; display: none' alt=\"{autoTab: false, enterTab: true}\">";
       $selected = ($opc == "ii") ? " selected" : "";
       $lin_obj .= "        <option value='ii'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_stts_with'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_ap_pat__" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $ap_pat_ = $val_cmp;
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct Ap_Pat from " . $this->Ini->nm_tabela . " where Ap_Pat = '$ap_pat_'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       if (isset($nmgp_def_dados[0][$ap_pat_]))
       {
           $sAutocompValue = $nmgp_def_dados[0][$ap_pat_];
       }
       else
       {
           $sAutocompValue = $val_cmp;
           $val[0][0]      = $val_cmp;
       }
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $lin_obj .= "     <input  type=\"text\" class='sc-js-input scAppDivToolbarInput' id='dyn_search_ap_pat__val_" . $ind . "' name='val_dyn_search_ap_pat__" . $ind . "' value=\"" . $this->form_encode_input($val_cmp) . "\" size=20 alt=\"{datatype: 'text', maxLength: 20, allowedChars: '', lettersCase: 'upper', autoTab: false, enterTab: true}\" style='display: none'>";
       $lin_obj .= "     <input class='sc-js-input scAppDivToolbarInput' type='text' id='id_ac_ap_pat_" . $ind . "' name='ap_pat__autocomp" . $ind . "' size='20' value='" . $this->form_encode_input($sAutocompValue) . "' alt=\"{datatype: 'text', maxLength: 20, allowedChars: '', lettersCase: 'upper', autoTab: false, enterTab: true}\">";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       $lin_obj .= "       <img id='dyn_search_ap_pat__close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_ap_pat__" . $ind . "', " . $ind . ");\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function dynamic_search_ap_mat_($ind, $ajax, $opc="", $val=array())
   {
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_ap_mat__" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['ap_mat_'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='dyn_search_ap_mat__cond_" . $ind . "' name='cond_dyn_search_ap_mat__" . $ind . "' class='sc-js-input scAppDivToolbarInput' style='vertical-align: middle;' onChange='dyn_search_hide_input(\"ap_mat_\", $ind)' alt=\"{autoTab: false, enterTab: true}\">";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_ap_mat__" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $ap_mat_ = $val_cmp;
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct Ap_Mat from " . $this->Ini->nm_tabela . " where Ap_Mat = '$ap_mat_'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       if (isset($nmgp_def_dados[0][$ap_mat_]))
       {
           $sAutocompValue = $nmgp_def_dados[0][$ap_mat_];
       }
       else
       {
           $sAutocompValue = $val_cmp;
           $val[0][0]      = $val_cmp;
       }
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $lin_obj .= "     <input  type=\"text\" class='sc-js-input scAppDivToolbarInput' id='dyn_search_ap_mat__val_" . $ind . "' name='val_dyn_search_ap_mat__" . $ind . "' value=\"" . $this->form_encode_input($val_cmp) . "\" size=20 alt=\"{datatype: 'text', maxLength: 20, allowedChars: '', lettersCase: '', autoTab: false, enterTab: true}\" style='display: none'>";
       $lin_obj .= "     <input class='sc-js-input scAppDivToolbarInput' type='text' id='id_ac_ap_mat_" . $ind . "' name='ap_mat__autocomp" . $ind . "' size='20' value='" . $this->form_encode_input($sAutocompValue) . "' alt=\"{datatype: 'text', maxLength: 20, allowedChars: '', lettersCase: '', autoTab: false, enterTab: true}\">";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       $lin_obj .= "       <img id='dyn_search_ap_mat__close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_ap_mat__" . $ind . "', " . $ind . ");\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function dynamic_search_nombres_($ind, $ajax, $opc="", $val=array())
   {
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_nombres__" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['nombres_'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "qp";
       }
       $lin_obj .= "       <select id='dyn_search_nombres__cond_" . $ind . "' name='cond_dyn_search_nombres__" . $ind . "' class='sc-js-input scAppDivToolbarInput' style='vertical-align: middle; display: none' alt=\"{autoTab: false, enterTab: true}\">";
       $selected = ($opc == "qp") ? " selected" : "";
       $lin_obj .= "        <option value='qp'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_like'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_nombres__" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $nombres_ = $val_cmp;
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct Nombres from " . $this->Ini->nm_tabela . " where Nombres = '$nombres_'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       if (isset($nmgp_def_dados[0][$nombres_]))
       {
           $sAutocompValue = $nmgp_def_dados[0][$nombres_];
       }
       else
       {
           $sAutocompValue = $val_cmp;
           $val[0][0]      = $val_cmp;
       }
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $lin_obj .= "     <input  type=\"text\" class='sc-js-input scAppDivToolbarInput' id='dyn_search_nombres__val_" . $ind . "' name='val_dyn_search_nombres__" . $ind . "' value=\"" . $this->form_encode_input($val_cmp) . "\" size=20 alt=\"{datatype: 'text', maxLength: 20, allowedChars: '', lettersCase: 'upper', autoTab: false, enterTab: true}\" style='display: none'>";
       $lin_obj .= "     <input class='sc-js-input scAppDivToolbarInput' type='text' id='id_ac_nombres_" . $ind . "' name='nombres__autocomp" . $ind . "' size='20' value='" . $this->form_encode_input($sAutocompValue) . "' alt=\"{datatype: 'text', maxLength: 20, allowedChars: '', lettersCase: 'upper', autoTab: false, enterTab: true}\">";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       $lin_obj .= "       <img id='dyn_search_nombres__close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_nombres__" . $ind . "', " . $ind . ");\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function dynamic_search_depto_($ind, $ajax, $opc="", $val=array())
   {
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_depto__" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['depto_'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='dyn_search_depto__cond_" . $ind . "' name='cond_dyn_search_depto__" . $ind . "' class='sc-js-input scAppDivToolbarInput' style='vertical-align: middle; display: none' alt=\"{autoTab: false, enterTab: true}\">";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_depto__" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $nmgp_def_dados  = ""; 
       $nm_comando = "SELECT Id, Descripcion  FROM Departamentos  ORDER BY Descripcion"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
             $nmgp_def_dados .= trim($rs->fields[1]) . "?#?"; 
             $nmgp_def_dados .= trim($rs->fields[0]) . "?#?N?@?"; 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       $lin_obj .= "    <SELECT class='sc-js-input scAppDivToolbarInput' id=\"dyn_search_depto__val_" . $ind . "\" name=\"val_dyn_search_depto__" . $ind . "\"  size=1 alt=\"{autoTab: false, enterTab: true}\">";
       $delimitador = "##@@";
       $nm_opcoesx = str_replace("?#?@?#?", "?#?@ ?#?", $nmgp_def_dados);
       $nm_opcoes  = explode("?@?", $nm_opcoesx);
       $val = isset($val[0]) ? $val[0] : array();
       foreach ($nm_opcoes as $nm_opcao)
       {
          if (!empty($nm_opcao))
          {
             $temp_bug_list = explode("?#?", $nm_opcao);
             list($nm_opc_val, $nm_opc_cod, $nm_opc_sel) = $temp_bug_list;
             if ($nm_opc_cod == "@ ") {$nm_opc_cod = trim($nm_opc_cod); }
             if (is_array($val) && !empty($val))
             {
                $depto__sel = "";
                foreach ($val as $Dados)
                {
                    $tmp_pos = strpos($Dados, "##@@");
                    if ($tmp_pos !== false)
                    {
                        $Dados = substr($Dados, 0, $tmp_pos);
                    }
                    if ($Dados === $nm_opc_cod)
                    {
                        $depto__sel = " selected";
                        break;
                    }
                }
             }
             else
             {
                $depto__sel = ("S" == $nm_opc_sel) ? " selected" : "";
             }
             $lin_obj .= "       <OPTION value=\"" . $this->form_encode_input($nm_opc_cod . $delimitador . $nm_opc_val) . "\"" . $depto__sel . ">" . $nm_opc_val . "</OPTION>";
          }
       }
       $lin_obj .= "    </SELECT>";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       $lin_obj .= "       <img id='dyn_search_depto__close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_depto__" . $ind . "', " . $ind . ");\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function dynamic_search_piso_($ind, $ajax, $opc="", $val=array())
   {
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_piso__" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['piso_'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "qp";
       }
       $lin_obj .= "       <select id='dyn_search_piso__cond_" . $ind . "' name='cond_dyn_search_piso__" . $ind . "' class='sc-js-input scAppDivToolbarInput' style='vertical-align: middle; display: none' alt=\"{autoTab: false, enterTab: true}\">";
       $selected = ($opc == "qp") ? " selected" : "";
       $lin_obj .= "        <option value='qp'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_like'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_piso__" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $piso_ = $val_cmp;
       $nmgp_def_dados = array(); 
    if (is_numeric($piso_))
    { 
       $nm_comando = "select distinct Piso from " . $this->Ini->nm_tabela . " where Piso = $piso_"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
              nmgp_Form_Num_Val($rs->fields[0], $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
    } 
       if (isset($nmgp_def_dados[0][$piso_]))
       {
           $sAutocompValue = $nmgp_def_dados[0][$piso_];
       }
       else
       {
           $sAutocompValue = $val_cmp;
           $val[0][0]      = $val_cmp;
       }
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $lin_obj .= "     <input  type=\"text\" class='sc-js-input scAppDivToolbarInput' id='dyn_search_piso__val_" . $ind . "' name='val_dyn_search_piso__" . $ind . "' value=\"" . $this->form_encode_input($val_cmp) . "\" size=2 alt=\"{datatype: 'text', maxLength: 2, allowedChars: '0123456789" . $_SESSION['scriptcase']['reg_conf']['dec_num']  . $_SESSION['scriptcase']['reg_conf']['grup_num'] . "', lettersCase: '', enterTab: true}\" style='display: none'>";
       $lin_obj .= "     <input class='sc-js-input scAppDivToolbarInput' type='text' id='id_ac_piso_" . $ind . "' name='piso__autocomp" . $ind . "' size='2' value='" . $this->form_encode_input($sAutocompValue) . "' alt=\"{datatype: 'text', maxLength: 2, allowedChars: '0123456789" . $_SESSION['scriptcase']['reg_conf']['dec_num']  . $_SESSION['scriptcase']['reg_conf']['grup_num'] . "', lettersCase: '', enterTab: true}\">";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       $lin_obj .= "       <img id='dyn_search_piso__close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_piso__" . $ind . "', " . $ind . ");\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function dynamic_search_patente1_($ind, $ajax, $opc="", $val=array())
   {
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_patente1__" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['patente1_'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "qp";
       }
       $lin_obj .= "       <select id='dyn_search_patente1__cond_" . $ind . "' name='cond_dyn_search_patente1__" . $ind . "' class='sc-js-input scAppDivToolbarInput' style='vertical-align: middle;' onChange='dyn_search_hide_input(\"patente1_\", $ind)' alt=\"{autoTab: false, enterTab: true}\">";
       $selected = ($opc == "qp") ? " selected" : "";
       $lin_obj .= "        <option value='qp'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_like'] . "</option>";
       $selected = ($opc == "np") ? " selected" : "";
       $lin_obj .= "        <option value='np'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_not_like'] . "</option>";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $selected = ($opc == "ep") ? " selected" : "";
       $lin_obj .= "        <option value='ep'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_empty'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_patente1__" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $patente1_ = $val_cmp;
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct patente1 from " . $this->Ini->nm_tabela . " where patente1 = '$patente1_'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       if (isset($nmgp_def_dados[0][$patente1_]))
       {
           $sAutocompValue = $nmgp_def_dados[0][$patente1_];
       }
       else
       {
           $sAutocompValue = $val_cmp;
           $val[0][0]      = $val_cmp;
       }
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $lin_obj .= "     <input  type=\"text\" class='sc-js-input scAppDivToolbarInput' id='dyn_search_patente1__val_" . $ind . "' name='val_dyn_search_patente1__" . $ind . "' value=\"" . $this->form_encode_input($val_cmp) . "\" size=6 alt=\"{datatype: 'text', maxLength: 6, allowedChars: '', lettersCase: '', autoTab: false, enterTab: true}\" style='display: none'>";
       $lin_obj .= "     <input class='sc-js-input scAppDivToolbarInput' type='text' id='id_ac_patente1_" . $ind . "' name='patente1__autocomp" . $ind . "' size='6' value='" . $this->form_encode_input($sAutocompValue) . "' alt=\"{datatype: 'text', maxLength: 6, allowedChars: '', lettersCase: '', autoTab: false, enterTab: true}\">";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       $lin_obj .= "       <img id='dyn_search_patente1__close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_patente1__" . $ind . "', " . $ind . ");\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function dynamic_search_patente2_($ind, $ajax, $opc="", $val=array())
   {
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_patente2__" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['patente2_'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "qp";
       }
       $lin_obj .= "       <select id='dyn_search_patente2__cond_" . $ind . "' name='cond_dyn_search_patente2__" . $ind . "' class='sc-js-input scAppDivToolbarInput' style='vertical-align: middle;' onChange='dyn_search_hide_input(\"patente2_\", $ind)' alt=\"{autoTab: false, enterTab: true}\">";
       $selected = ($opc == "qp") ? " selected" : "";
       $lin_obj .= "        <option value='qp'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_like'] . "</option>";
       $selected = ($opc == "np") ? " selected" : "";
       $lin_obj .= "        <option value='np'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_not_like'] . "</option>";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $selected = ($opc == "ep") ? " selected" : "";
       $lin_obj .= "        <option value='ep'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_empty'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_patente2__" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $patente2_ = $val_cmp;
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct patente2 from " . $this->Ini->nm_tabela . " where patente2 = '$patente2_'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       if (isset($nmgp_def_dados[0][$patente2_]))
       {
           $sAutocompValue = $nmgp_def_dados[0][$patente2_];
       }
       else
       {
           $sAutocompValue = $val_cmp;
           $val[0][0]      = $val_cmp;
       }
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $lin_obj .= "     <input  type=\"text\" class='sc-js-input scAppDivToolbarInput' id='dyn_search_patente2__val_" . $ind . "' name='val_dyn_search_patente2__" . $ind . "' value=\"" . $this->form_encode_input($val_cmp) . "\" size=6 alt=\"{datatype: 'text', maxLength: 6, allowedChars: '', lettersCase: '', autoTab: false, enterTab: true}\" style='display: none'>";
       $lin_obj .= "     <input class='sc-js-input scAppDivToolbarInput' type='text' id='id_ac_patente2_" . $ind . "' name='patente2__autocomp" . $ind . "' size='6' value='" . $this->form_encode_input($sAutocompValue) . "' alt=\"{datatype: 'text', maxLength: 6, allowedChars: '', lettersCase: '', autoTab: false, enterTab: true}\">";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       $lin_obj .= "       <img id='dyn_search_patente2__close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_patente2__" . $ind . "', " . $ind . ");\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function dynamic_search_nodo_($ind, $ajax, $opc="", $val=array())
   {
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_nodo__" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['nodo_'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='dyn_search_nodo__cond_" . $ind . "' name='cond_dyn_search_nodo__" . $ind . "' class='sc-js-input scAppDivToolbarInput' style='vertical-align: middle; display: none' alt=\"{autoTab: false, enterTab: true}\">";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_nodo__" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $nmgp_def_dados  = ""; 
       $nm_comando = "SELECT id, Descripcion  FROM tbl_establecimiento  where id in (1,2,3,4,5,6,7,8,10,100) ORDER BY Descripcion"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
             $nmgp_def_dados .= trim($rs->fields[1]) . "?#?"; 
             $nmgp_def_dados .= trim($rs->fields[0]) . "?#?N?@?"; 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       $lin_obj .= "    <SELECT class='sc-js-input scAppDivToolbarInput' id=\"dyn_search_nodo__val_" . $ind . "\" name=\"val_dyn_search_nodo__" . $ind . "\"  size=1 alt=\"{autoTab: false, enterTab: true}\">";
       $delimitador = "##@@";
       $nm_opcoesx = str_replace("?#?@?#?", "?#?@ ?#?", $nmgp_def_dados);
       $nm_opcoes  = explode("?@?", $nm_opcoesx);
       $val = isset($val[0]) ? $val[0] : array();
       foreach ($nm_opcoes as $nm_opcao)
       {
          if (!empty($nm_opcao))
          {
             $temp_bug_list = explode("?#?", $nm_opcao);
             list($nm_opc_val, $nm_opc_cod, $nm_opc_sel) = $temp_bug_list;
             if ($nm_opc_cod == "@ ") {$nm_opc_cod = trim($nm_opc_cod); }
             if (is_array($val) && !empty($val))
             {
                $nodo__sel = "";
                foreach ($val as $Dados)
                {
                    $tmp_pos = strpos($Dados, "##@@");
                    if ($tmp_pos !== false)
                    {
                        $Dados = substr($Dados, 0, $tmp_pos);
                    }
                    if ($Dados === $nm_opc_cod)
                    {
                        $nodo__sel = " selected";
                        break;
                    }
                }
             }
             else
             {
                $nodo__sel = ("S" == $nm_opc_sel) ? " selected" : "";
             }
             $lin_obj .= "       <OPTION value=\"" . $this->form_encode_input($nm_opc_cod . $delimitador . $nm_opc_val) . "\"" . $nodo__sel . ">" . $nm_opc_val . "</OPTION>";
          }
       }
       $lin_obj .= "    </SELECT>";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       $lin_obj .= "       <img id='dyn_search_nodo__close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_nodo__" . $ind . "', " . $ind . ");\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function lookup_ajax_ap_pat_($ap_pat_)
   {
       $ap_pat_ = substr($this->Db->qstr($ap_pat_), 1, -1);
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct Ap_Pat from " . $this->Ini->nm_tabela . " where  Ap_Pat like '%" . $ap_pat_ . "%'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $cmp1 = $this->form_usuarios_pack_protect_string($cmp1);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
          return $nmgp_def_dados; 
       } 
       else  
       {  
          echo $this->Db->ErrorMsg(); 
       } 
   }
   function lookup_ajax_ap_mat_($ap_mat_)
   {
       $ap_mat_ = substr($this->Db->qstr($ap_mat_), 1, -1);
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct Ap_Mat from " . $this->Ini->nm_tabela . " where  Ap_Mat like '%" . $ap_mat_ . "%'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $cmp1 = $this->form_usuarios_pack_protect_string($cmp1);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
          return $nmgp_def_dados; 
       } 
       else  
       {  
          echo $this->Db->ErrorMsg(); 
       } 
   }
   function lookup_ajax_nombres_($nombres_)
   {
       $nombres_ = substr($this->Db->qstr($nombres_), 1, -1);
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct Nombres from " . $this->Ini->nm_tabela . " where  Nombres like '%" . $nombres_ . "%'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $cmp1 = $this->form_usuarios_pack_protect_string($cmp1);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
          return $nmgp_def_dados; 
       } 
       else  
       {  
          echo $this->Db->ErrorMsg(); 
       } 
   }
   function lookup_ajax_piso_($piso_)
   {
       $piso_ = substr($this->Db->qstr($piso_), 1, -1);
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct Piso from " . $this->Ini->nm_tabela . " where  Piso like '%" . $piso_ . "%'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
              nmgp_Form_Num_Val($rs->fields[0], $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $cmp1 = $this->form_usuarios_pack_protect_string($cmp1);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
          return $nmgp_def_dados; 
       } 
       else  
       {  
          echo $this->Db->ErrorMsg(); 
       } 
   }
   function lookup_ajax_patente1_($patente1_)
   {
       $patente1_ = substr($this->Db->qstr($patente1_), 1, -1);
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct patente1 from " . $this->Ini->nm_tabela . " where  patente1 like '%" . $patente1_ . "%'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $cmp1 = $this->form_usuarios_pack_protect_string($cmp1);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
          return $nmgp_def_dados; 
       } 
       else  
       {  
          echo $this->Db->ErrorMsg(); 
       } 
   }
   function lookup_ajax_patente2_($patente2_)
   {
       $patente2_ = substr($this->Db->qstr($patente2_), 1, -1);
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct patente2 from " . $this->Ini->nm_tabela . " where  patente2 like '%" . $patente2_ . "%'"; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $cmp1 = $this->form_usuarios_pack_protect_string($cmp1);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
          return $nmgp_def_dados; 
       } 
       else  
       {  
          echo $this->Db->ErrorMsg(); 
       } 
   }
   function form_usuarios_pack_protect_string($sString)
   {
      $sString = (string) $sString;
      if (!empty($sString))
      {
         if (function_exists('NM_is_utf8') && NM_is_utf8($sString))
         {
             return $sString;
         }
         else
         {
             return sc_htmlentities($sString);
         }
      }
      elseif ('0' === $sString || 0 === $sString)
      {
         return '0';
      }
      else
      {
         return '';
      }
   }
   function JS_dynamic_search()
   {
       global $nm_saida;
?>
   <script type="text/javascript">
     var Tot_obj_dyn_search = <?php echo $this->Dyn_search_seq ?>;
     Tab_obj_dyn_search = new Array();
     Tab_evt_dyn_search = new Array();
<?php
       foreach ($this->Dyn_search_dat as $seq => $cmp)
       {
?>
     Tab_obj_dyn_search[<?php echo $seq ?>] = '<?php echo $cmp ?>';
<?php
       }
?>
<?php
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['ajax_nav'])
   { 
       $this->Ini->Arr_result['setArr'][] = array('var' => 'Tab_obj_dyn_search', 'value' => '');
       $this->Ini->Arr_result['setArr'][] = array('var' => 'Tab_evt_dyn_search', 'value' => '');
       $this->Ini->Arr_result['setVar'][] = array('var' => 'Tot_obj_dyn_search', 'value' => $this->Dyn_search_seq);
       foreach ($this->Dyn_search_dat as $seq => $cmp)
       {
           $this->Ini->Arr_result['setVar'][] = array('var' => 'Tab_obj_dyn_search[' . $seq . ']', 'value' => $cmp);
       }
   } 
?>
     function SC_carga_evt_jquery(tp_carga)
     {
         for (i = 1; i <= Tot_obj_dyn_search; i++)
         {
             if (Tab_obj_dyn_search[i] != 'NMSC_Dyn_Null' && (tp_carga == 'all' || tp_carga == i))
             {
                 x   = 0;
                 tmp = Tab_obj_dyn_search[i];
                 cps = new Array();
                 cps[x] = tmp;
                 for (x = 0; x < cps.length ; x++)
                 {
                     cmp = cps[x];
                     if (Tab_evt_dyn_search[cmp])
                     {
                         eval ("$('#dyn_search_" + cmp + "_val_" + i + "').bind('change', function() {" + Tab_evt_dyn_search[cmp] + "})");
                     }
                 }
             }
         }
         for (i = 1; i <= Tot_obj_dyn_search; i++)
         {
             if (Tab_obj_dyn_search[i] != 'NMSC_Dyn_Null' && (tp_carga == 'all' || tp_carga == i))
             {
                 tmp = Tab_obj_dyn_search[i];
                 if (tmp == 'ap_pat_')
                 {
                      var x = i;
                      $("#id_ac_ap_pat_" + i).autocomplete({
                        source: function (request, response) {
                        $.ajax({
                          url: "form_usuarios.php",
                          dataType: "json",
                          data: {
                             q: request.term,
                             nmgp_opcao: "ajax_aut_comp_dyn_search",
                             origem: "form",
                             field: "ap_pat_",
                             max_itens: "10",
                             cod_desc: "N",
                             script_case_init: <?php echo $this->Ini->sc_page ?>
                           },
                          success: function (data) {
                            response(data);
                          }
                         });
                        },
                        select: function (event, ui) {
                          $("#dyn_search_ap_pat__val_" + x).val(ui.item.value);
                          $(this).val(ui.item.label);
                          event.preventDefault();
                        },
                        change: function (event, ui) {
                          if (null == ui.item) {
                             $("#dyn_search_ap_pat__val_" + x).val( $(this).val() );
                          }
                        }
                      });
                 }
                 if (tmp == 'ap_mat_')
                 {
                      var x = i;
                      $("#id_ac_ap_mat_" + i).autocomplete({
                        source: function (request, response) {
                        $.ajax({
                          url: "form_usuarios.php",
                          dataType: "json",
                          data: {
                             q: request.term,
                             nmgp_opcao: "ajax_aut_comp_dyn_search",
                             origem: "form",
                             field: "ap_mat_",
                             max_itens: "10",
                             cod_desc: "N",
                             script_case_init: <?php echo $this->Ini->sc_page ?>
                           },
                          success: function (data) {
                            response(data);
                          }
                         });
                        },
                        select: function (event, ui) {
                          $("#dyn_search_ap_mat__val_" + x).val(ui.item.value);
                          $(this).val(ui.item.label);
                          event.preventDefault();
                        },
                        change: function (event, ui) {
                          if (null == ui.item) {
                             $("#dyn_search_ap_mat__val_" + x).val( $(this).val() );
                          }
                        }
                      });
                 }
                 if (tmp == 'nombres_')
                 {
                      var x = i;
                      $("#id_ac_nombres_" + i).autocomplete({
                        source: function (request, response) {
                        $.ajax({
                          url: "form_usuarios.php",
                          dataType: "json",
                          data: {
                             q: request.term,
                             nmgp_opcao: "ajax_aut_comp_dyn_search",
                             origem: "form",
                             field: "nombres_",
                             max_itens: "10",
                             cod_desc: "N",
                             script_case_init: <?php echo $this->Ini->sc_page ?>
                           },
                          success: function (data) {
                            response(data);
                          }
                         });
                        },
                        select: function (event, ui) {
                          $("#dyn_search_nombres__val_" + x).val(ui.item.value);
                          $(this).val(ui.item.label);
                          event.preventDefault();
                        },
                        change: function (event, ui) {
                          if (null == ui.item) {
                             $("#dyn_search_nombres__val_" + x).val( $(this).val() );
                          }
                        }
                      });
                 }
                 if (tmp == 'piso_')
                 {
                      var x = i;
                      $("#id_ac_piso_" + i).autocomplete({
                        source: function (request, response) {
                        $.ajax({
                          url: "form_usuarios.php",
                          dataType: "json",
                          data: {
                             q: request.term,
                             nmgp_opcao: "ajax_aut_comp_dyn_search",
                             origem: "form",
                             field: "piso_",
                             max_itens: "10",
                             cod_desc: "N",
                             script_case_init: <?php echo $this->Ini->sc_page ?>
                           },
                          success: function (data) {
                            response(data);
                          }
                         });
                        },
                        select: function (event, ui) {
                          $("#dyn_search_piso__val_" + x).val(ui.item.value);
                          $(this).val(ui.item.label);
                          event.preventDefault();
                        },
                        change: function (event, ui) {
                          if (null == ui.item) {
                             $("#dyn_search_piso__val_" + x).val( $(this).val() );
                          }
                        }
                      });
                 }
                 if (tmp == 'patente1_')
                 {
                      var x = i;
                      $("#id_ac_patente1_" + i).autocomplete({
                        source: function (request, response) {
                        $.ajax({
                          url: "form_usuarios.php",
                          dataType: "json",
                          data: {
                             q: request.term,
                             nmgp_opcao: "ajax_aut_comp_dyn_search",
                             origem: "form",
                             field: "patente1_",
                             max_itens: "10",
                             cod_desc: "N",
                             script_case_init: <?php echo $this->Ini->sc_page ?>
                           },
                          success: function (data) {
                            response(data);
                          }
                         });
                        },
                        select: function (event, ui) {
                          $("#dyn_search_patente1__val_" + x).val(ui.item.value);
                          $(this).val(ui.item.label);
                          event.preventDefault();
                        },
                        change: function (event, ui) {
                          if (null == ui.item) {
                             $("#dyn_search_patente1__val_" + x).val( $(this).val() );
                          }
                        }
                      });
                 }
                 if (tmp == 'patente2_')
                 {
                      var x = i;
                      $("#id_ac_patente2_" + i).autocomplete({
                        source: function (request, response) {
                        $.ajax({
                          url: "form_usuarios.php",
                          dataType: "json",
                          data: {
                             q: request.term,
                             nmgp_opcao: "ajax_aut_comp_dyn_search",
                             origem: "form",
                             field: "patente2_",
                             max_itens: "10",
                             cod_desc: "N",
                             script_case_init: <?php echo $this->Ini->sc_page ?>
                           },
                          success: function (data) {
                            response(data);
                          }
                         });
                        },
                        select: function (event, ui) {
                          $("#dyn_search_patente2__val_" + x).val(ui.item.value);
                          $(this).val(ui.item.label);
                          event.preventDefault();
                        },
                        change: function (event, ui) {
                          if (null == ui.item) {
                             $("#dyn_search_patente2__val_" + x).val( $(this).val() );
                          }
                        }
                      });
                 }
             }
         }
     }
     function del_dyn_search(field, ind)
     {
         Tab_obj_dyn_search[ind] = 'NMSC_Dyn_Null';
         $('#' + field).remove();
     }
     function dyn_search_hide_input(field, ind)
     {
        var index = document.getElementById('dyn_search_' + field + '_cond_' + ind).selectedIndex;
        var parm  = document.getElementById('dyn_search_' + field + '_cond_' + ind).options[index].value;
        if (parm == "nu" || parm == "nn" || parm == "ep" || parm == "ne")
        {
            $('#dyn_' + field + '_' + ind).css('display','none');
        }
        else
        {
            $('#dyn_' + field + '_' + ind).css('display','');
        }
     }
     var dynamicsearch_status = 'out';
     function nm_show_dynamicsearch_fields()
     {
       var btn_id = 'id_dyn_search_fields';
       var obj_id = 'id_dynamic_search_fields';
       dynamicsearch_status = 'open';
       $('#' + btn_id).mouseout(function() {
         setTimeout(function() {
           nm_hide_dynamicsearch_fields(obj_id);
         }, 1000);
       });
       $('#' + obj_id + ' li').click(function() {
         dynamicsearch_status = 'out';
         nm_hide_dynamicsearch_fields(obj_id);
       });
       $('#' + obj_id).css({
         'left': $('#' + btn_id).left
       })
       .mouseover(function() {
         dynamicsearch_status = 'over';
       })
       .mouseleave(function() {
         dynamicsearch_status = 'out';
         setTimeout(function() {
           nm_hide_dynamicsearch_fields(obj_id);
         }, 1000);
       })
       .show('fast');
     }
   function nm_hide_dynamicsearch_fields(obj_id) {
     if ('over' != dynamicsearch_status) {
       $('#' + obj_id).hide('fast');
     }
   }
     function nm_clear_dyn_search()
     {
         Tot_obj_dyn_search = 0;
         Tab_obj_dyn_search = new Array();
         nm_proc_dyn_search('id_Fdyn_search', 'dyn_search_clear');
     }
     function nm_proc_dyn_search(formId, Tp_Proc)
     {
         var out_dyn = "";
         for (i = 1; i <= Tot_obj_dyn_search; i++)
         {
             if (Tab_obj_dyn_search[i] != 'NMSC_Dyn_Null')
             {
                 out_dyn += (out_dyn != "") ? "_FDYN_" : "";
                 out_dyn += Tab_obj_dyn_search[i];
                 obj_dyn = 'dyn_search_' + Tab_obj_dyn_search[i] + '_cond_' + i;
                 out_dyn += "_DYN_" + dyn_search_get_sel_cond(obj_dyn);
                 obj_dyn = 'dyn_search_' + Tab_obj_dyn_search[i] + '_val_';

                 if (Tab_obj_dyn_search[i] == 'ap_pat_')
                 {
                     obj_ac  = 'id_ac_' + Tab_obj_dyn_search[i] + i;
                     result  = dyn_search_get_text(obj_dyn + i, obj_ac);
                 }
                 if (Tab_obj_dyn_search[i] == 'ap_mat_')
                 {
                     obj_ac  = 'id_ac_' + Tab_obj_dyn_search[i] + i;
                     result  = dyn_search_get_text(obj_dyn + i, obj_ac);
                 }
                 if (Tab_obj_dyn_search[i] == 'nombres_')
                 {
                     obj_ac  = 'id_ac_' + Tab_obj_dyn_search[i] + i;
                     result  = dyn_search_get_text(obj_dyn + i, obj_ac);
                 }
                 if (Tab_obj_dyn_search[i] == 'depto_')
                 {
                     result  = dyn_search_get_select(obj_dyn + i, '');
                 }
                 if (Tab_obj_dyn_search[i] == 'piso_')
                 {
                     obj_ac  = 'id_ac_' + Tab_obj_dyn_search[i] + i;
                     result  = dyn_search_get_text(obj_dyn + i, obj_ac);
                 }
                 if (Tab_obj_dyn_search[i] == 'patente1_')
                 {
                     obj_ac  = 'id_ac_' + Tab_obj_dyn_search[i] + i;
                     result  = dyn_search_get_text(obj_dyn + i, obj_ac);
                 }
                 if (Tab_obj_dyn_search[i] == 'patente2_')
                 {
                     obj_ac  = 'id_ac_' + Tab_obj_dyn_search[i] + i;
                     result  = dyn_search_get_text(obj_dyn + i, obj_ac);
                 }
                 if (Tab_obj_dyn_search[i] == 'nodo_')
                 {
                     result  = dyn_search_get_select(obj_dyn + i, '');
                 }
                 out_dyn += "_DYN_" + result;
             }
         }
         if (out_dyn == "" && Tp_Proc != "dyn_search_clear")
         {
             return;
         }
         nm_move(Tp_Proc, out_dyn);
     }
     function dyn_search_get_sel_cond(obj_id)
     {
        var index = document.getElementById(obj_id).selectedIndex;
        return document.getElementById(obj_id).options[index].value;
     }
     function dyn_search_get_select(obj_id, str_type)
     {
        if(str_type == '')
        {
            var obj = document.getElementById(obj_id);
        }
        else
        {
            var obj = $('#' + obj_id).multipleSelect('getSelects');
        }
        var val = "";
        for (iSelect = 0; iSelect < obj.length; iSelect++)
        {
            if ((str_type == '' && obj[iSelect].selected) || (str_type=='RADIO' || str_type=='CHECKBOX'))
            {
                if(str_type == '' && obj[iSelect].selected)
                {
                    new_val = obj[iSelect].value;
                }
                else
                {
                    new_val = obj[iSelect];
                }
                val += (val != "") ? "_VLS_" : "";
                val += new_val;
            }
        }
        return val;
     }
     function dyn_search_get_Dselelect(obj_id)
     {
        var obj = document.getElementById(obj_id);
        var val = "";
        for (iSelect = 0; iSelect < obj.length; iSelect++)
        {
            val += (val != "") ? "_VLS_" : "";
            val += obj[iSelect].value;
        }
        return val;
     }
     function dyn_search_get_radio(obj_id)
     {
        var Nobj = document.getElementById(obj_id).name;
        var obj  = document.getElementsByName(Nobj);
        var val  = "";
        for (iRadio = 0; iRadio < obj.length; iRadio++)
        {
            if (obj[iRadio].checked)
            {
                val += (val != "") ? "_VLS_" : "";
                val += obj[iRadio].value;
            }
        }
        return val;
     }
     function dyn_search_get_checkbox(obj_id)
     {
        var Nobj = document.getElementById(obj_id).name;
        var obj  = document.getElementsByName(Nobj);
        var val  = "";
        if (!obj.length)
        {
            if (obj.checked)
            {
                val = obj.value;
            }
            return val;
        }
        else
        {
            for (iCheck = 0; iCheck < obj.length; iCheck++)
            {
                if (obj[iCheck].checked)
                {
                    val += (val != "") ? "_VLS_" : "";
                    val += obj[iCheck].value;
                }
            }
        }
        return val;
     }
     function dyn_search_get_text(obj_id, obj_ac)
     {
        var obj = document.getElementById(obj_id);
        var val = "";
        if (obj)
        {
            val = obj.value;
        }
        if (obj_ac != '' && val == '')
        {
            obj = document.getElementById(obj_ac);
            if (obj)
            {
                val = obj.value;
            }
        }
        return val;
     }
     function dyn_search_get_dt_h(obj_id, ind, TP)
     {
        var val = new Array();
        if (TP == 'DT' || TP == 'DH')
        {
            obj_part  = document.getElementById(obj_id + '_ano_val_' + ind);
            val      += "Y:";
            if (obj_part && obj_part.type.substr(0, 6) == 'select')
            {
                Tval = dyn_search_get_sel_cond(obj_id + '_ano_val_' + ind);
                val += (Tval != -1) ? Tval : '';
            }
            else
            {
                val += (obj_part) ? obj_part.value : '';
            }
            obj_part  = document.getElementById(obj_id + '_mes_val_' + ind);
            val      += "_VLS_M:";
            if (obj_part && obj_part.type.substr(0, 6) == 'select')
            {
                Tval = dyn_search_get_sel_cond(obj_id + '_mes_val_' + ind);
                val += (Tval != -1) ? Tval : '';
            }
            else
            {
                val += (obj_part) ? obj_part.value : '';
            }
            obj_part  = document.getElementById(obj_id + '_dia_val_' + ind);
            val      += "_VLS_D:";
            if (obj_part && obj_part.type.substr(0, 6) == 'select')
            {
                Tval = dyn_search_get_sel_cond(obj_id + '_dia_val_' + ind);
                val += (Tval != -1) ? Tval : '';
            }
            else
            {
                val += (obj_part) ? obj_part.value : '';
            }
        }
        if (TP == 'HH' || TP == 'DH')
        {
            val            += (val != "") ? "_VLS_" : "";
            obj_part        = document.getElementById(obj_id + '_hor_val_' + ind);
            val            += "H:";
            val            += (obj_part) ? obj_part.value : '';
            obj_part        = document.getElementById(obj_id + '_min_val_' + ind);
            val            += "_VLS_I:";
            val            += (obj_part) ? obj_part.value : '';
            obj_part        = document.getElementById(obj_id + '_seg_val_' + ind);
            val            += "_VLS_S:";
            val            += (obj_part) ? obj_part.value : '';
        }
        return val;
     }
function ajax_add_dyn_search(str_field, str_origem)
{
    var parm = str_field;
    if (parm == "")
    {
        return;
    }
    $('#table_dyn_search_criteria').show();
    scAjaxProcOn();
    Tot_obj_dyn_search++;
    Tab_obj_dyn_search[Tot_obj_dyn_search] = parm;
    $.ajax({
      type: "POST",
      url: "form_usuarios.php",
      data: "nmgp_opcao=ajax_add_dyn_search&script_case_init=" + document.F1.script_case_init.value + "&script_case_session=" + document.F1.script_case_session.value + "&parm=" + parm + "&seq=" + Tot_obj_dyn_search + "&origem=" + str_origem,
      success: function(jsonDyn_add) {
        var i, oResp;
        Tst_integrid = jsonDyn_add.trim();
        if ("{" != Tst_integrid.substr(0, 1)) {
            scAjaxProcOff();
            alert (jsonDyn_add);
            return;
        }
        eval("oResp = " + jsonDyn_add);
        if (oResp["dyn_add"]) {
          for (i = 0; i < oResp["dyn_add"].length; i++) {
               $('#table_dyn_search').append(oResp["dyn_add"][i]);
          }
        }
        if (oResp["htmOutput"]) {
           scAjaxShowDebug(oResp);
        }
        SC_carga_evt_jquery(Tot_obj_dyn_search);
        $('#dyn_search_' + parm + '_' + Tot_obj_dyn_search + ' input:text.sc-js-input').listen();
        $('#dyn_search_' + parm + '_' + Tot_obj_dyn_search + ' select.sc-js-input').listen();
        scAjaxProcOff();
      }
    });
}
   </script>
<?php
   }
   function SC_proc_dyn_search($Parms)
   {
       $ix     = 0;
       $fields = array();
       if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($Parms))
       {
           $Parms = NM_conv_charset($Parms, $_SESSION['scriptcase']['charset'], "UTF-8");
       }
       $tmp    = explode("_FDYN_", $Parms);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search'] = array();
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_refresh'] = array();
       foreach ($tmp as $cada_f)
       {
           $dats = explode("_DYN_", $cada_f);
           $fields[$ix]['field']  = $dats[0];
           $fields[$ix]['cond']   = $dats[1];
           $sep_bw                 = explode("_VLS2_", $dats[2]);
           $fields[$ix]['vls'][0] = explode("_VLS_",  $sep_bw[0]);
           $fields[$ix]['vls'][1] = isset($sep_bw[1]) ? explode("_VLS_",  $sep_bw[1]) : "";
           $val_sv = array();
           foreach ($fields[$ix]['vls'] as $i => $dados)
           {
               if (is_array($dados))
               {
                   foreach ($dados as $ind => $str)
                   {
                       $str = NM_charset_decode($str);
                       $tmp_pos = strpos($str, "##@@");
                       if ($tmp_pos === false)
                       {
                          $val_sv[$i][] = $str;
                       }
                       else
                       {
                         $val_sv[$i][] = substr($str, 0, $tmp_pos);
                       }
                   }
               }
               else
               {
                   $dados = NM_charset_decode($dados);
                   $tmp_pos = strpos($dados, "##@@");
                   if ($tmp_pos === false)
                   {
                      $val_sv[$i] = $dados;
                   }
                   else
                   {
                      $val_sv[$i] = substr($dados, 0, $tmp_pos);
                   }
               }
           }
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search'][] = array('cmp' => $dats[0], 'opc' => $dats[1], 'val' => $val_sv);
           $ix++;
       }
       $this->Dyn_Serarch_and_or = "and";
       $this->Cmd_Dyn_Search    = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['cond_dyn_search'] = "";
       foreach ($fields as $ind => $dados)
       {
           $this->Date_part          = false;
           $this->Operador_date_part = "";
           $this->Lang_date_part     = "";
           $dados['cond'] = strtoupper($dados['cond']);
           if (empty($dados['vls']) && ($dados['cond'] == "NU" || $dados['cond'] == "NN" || $dados['cond'] == "EP" || $dados['cond'] == "NE"))
           {
               $dados['vls'][0][0] = "";
           }
           if ($dados['field'] == "ap_pat_" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['ap_pat_'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $this->Val_format_1 = $dados['vls'][0];
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "Ap_Pat", 'A', 'VARCHAR', $Label_cmp);
           }
           if ($dados['field'] == "ap_mat_" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['ap_mat_'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $this->Val_format_1 = $dados['vls'][0];
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "Ap_Mat", 'A', 'VARCHAR', $Label_cmp);
           }
           if ($dados['field'] == "nombres_" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['nombres_'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $this->Val_format_1 = $dados['vls'][0];
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "Nombres", 'A', 'VARCHAR', $Label_cmp);
           }
           if ($dados['field'] == "depto_" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['depto_'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $tmp_pos = strpos($dados['vls'][0], "##@@");
               if ($tmp_pos === false)
               {
                  $this->Val_format_1 = $dados['vls'][0];
               }
               else
               {
                   $this->Val_format_1 = substr($dados['vls'][0], $tmp_pos + 4);
                   $dados['vls'][0]    = substr($dados['vls'][0], 0, $tmp_pos);
               }
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "Depto", 'N', 'INT', $Label_cmp);
           }
           if ($dados['field'] == "piso_" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['piso_'];
               $dados['vls'][0] = $dados['vls'][0][0];
               if ($dados['cond'] != "IN")
               {
                   $dados['vls'][0] = str_replace("", "", $dados['vls'][0]);
                   if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['decimal_db'] == ".")
                   {
                       $dados['vls'][0] = str_replace(",", ".", $dados['vls'][0]);
                   }
               }
               if ($dados['vls'][0] == "" || (!is_numeric($dados['vls'][0]) && $dados['cond'] != "IN"))
               {
                   $dados['vls'] = array();
               }
               $this->Val_format_1 = $dados['vls'][0];
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "Piso", 'N', 'TINYINT', $Label_cmp);
           }
           if ($dados['field'] == "patente1_" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['patente1_'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $this->Val_format_1 = $dados['vls'][0];
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "patente1", 'A', 'VARCHAR', $Label_cmp);
           }
           if ($dados['field'] == "patente2_" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['patente2_'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $this->Val_format_1 = $dados['vls'][0];
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "patente2", 'A', 'VARCHAR', $Label_cmp);
           }
           if ($dados['field'] == "nodo_" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['dyn_search_label']['nodo_'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $tmp_pos = strpos($dados['vls'][0], "##@@");
               if ($tmp_pos === false)
               {
                  $this->Val_format_1 = $dados['vls'][0];
               }
               else
               {
                   $this->Val_format_1 = substr($dados['vls'][0], $tmp_pos + 4);
                   $dados['vls'][0]    = substr($dados['vls'][0], 0, $tmp_pos);
               }
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "nodo", 'N', 'TINYINT', $Label_cmp);
           }
       }
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_pesq_filtro'] = "( " . $this->Cmd_Dyn_Search . " )";
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_detal']) && !empty($this->Cmd_Dyn_Search)) 
       {
           $this->Cmd_Dyn_Search = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_detal'] . " and (" .  $this->Cmd_Dyn_Search . ")";
       }
       if (empty($this->Cmd_Dyn_Search)) 
       {
           $this->Cmd_Dyn_Search = " 1 <> 1 "; 
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_pesq_filtro'] = "( " . $this->Cmd_Dyn_Search . " )";
       }
       $sc_where = " where " . $this->Cmd_Dyn_Search;
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_pesq'] = $sc_where;
       $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
       $rt = $this->Db->Execute($nmgp_select) ; 
       if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit ; 
       }  
       $qt_geral_reg_form_usuarios = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['total'] = $qt_geral_reg_form_usuarios;
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['where_filter'] = $this->Cmd_Dyn_Search;
       $rt->Close(); 
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['cond_pesq'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['cond_dyn_search'] . $this->Dyn_Serarch_and_or;
       if (NM_is_utf8($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['cond_pesq']) && $_SESSION['scriptcase']['charset'] != "UTF-8")
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['cond_pesq'] = sc_convert_encoding($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['cond_pesq'], $_SESSION['scriptcase']['charset'], "UTF-8");
       }
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_usuarios_pack_ajax_response();
          exit;
      }
       $tmp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['cond_pesq'];
       $pos = strrpos($tmp, "##*@@");
       if ($pos !== false)
       {
           $and_or = (substr($tmp, ($pos + 5)) == "and") ? $this->Ini->Nm_lang['lang_srch_and_cond'] : $this->Ini->Nm_lang['lang_srch_orr_cond'];
           $tmp    = substr($tmp, 0, $pos);
           $this->Dyn_search_str = str_replace("##*@@", ", " . $and_or . " ", $tmp);
       }
       $this->NM_ajax_info['dyn_search']['id_dyn_search_cmd_str'] = NM_charset_to_utf8(trim($this->Dyn_search_str));
   }
   function SC_proc_dyn_search_lookup($cond, $vls, $sql, $tp, $tsql, $lab)
   {
       $nm_aspas = ($tp == 'A') ? "'" : "";
       $nm_cond = "";
       $nm_cmd  = "";
       foreach ($vls as $i => $dados)
       {
           $dados = NM_charset_decode($dados);
           if (!empty($nm_cond))
           {
               $nm_cmd .= ",";
               $nm_cond .= " " . $this->Ini->Nm_lang['lang_srch_orr_cond'] . " ";
           }
           $tmp_pos = strpos($dados, "##@@");
           if ($tmp_pos === false)
           {
              $res_lookup = $dados;
           }
           else
           {
               $res_lookup = substr($dados, $tmp_pos + 4);
               $dados = substr($dados, 0, $tmp_pos);
           }
           if (trim($dados) != "")
           {
               $nm_cmd .= $nm_aspas . $dados . $nm_aspas;
               $nm_cond .= $res_lookup;
           }
       }
       if (!empty($nm_cmd))
       {
           if (!empty($this->Cmd_Dyn_Search))
           {
               $this->Cmd_Dyn_Search .= " " . $this->Dyn_Serarch_and_or . " ";
           }
           if ($cond == "DF" || $cond == "NP")
           {
               $this->Cmd_Dyn_Search .= "(" . $sql . " not in (" . $nm_cmd . "))";
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['cond_dyn_search'] .= $lab . " " . $this->Ini->Nm_lang['lang_srch_not_like'] . " " . $nm_cond . "##*@@";
           }
           else
           {
               $this->Cmd_Dyn_Search .= "(" . $sql . " in (" . $nm_cmd . "))";
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['cond_dyn_search'] .= $lab . " " . $this->Ini->Nm_lang['lang_srch_like'] . " " . $nm_cond . "##*@@";
           }
       }
   }
   function SC_proc_dyn_search_all($cond, $vls, $sql, $tp, $tsql, $lab)
   {
       $nm_aspas  = "'";
       $nm_aspas1 = "'";
       if ($tp == "N" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['decimal_db'] == ".")
       {
           $nm_aspas  = "";
           $nm_aspas1 = "";
       }
       if ($tp == "DT" || $tp == "DH" || $tp == "HH")
       {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['SC_sep_date']))
          {
              $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['SC_sep_date'];
              $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['SC_sep_date1'];
          }
      }
       $ini_lower = "";
       $end_lower = "";
       $nm_cond = "";
       $nm_cmd  = "";
       $dados   = $vls[0];
           if ($dados == "" && $cond != "NU" && $cond != "NN" && $cond != "EP" && $cond != "NE")
           {
               return;
           }
           if ($tp == 'N' && ($cond == "EP" || $cond == "NE"))
           {
               return;
           }
           $dados  = substr($this->Db->qstr($dados), 1, -1);
           if ($cond != "NU" && $cond != "NN" && $cond != "EP" && $cond != "NE")
           {
               if ($tsql == "TIMESTAMP")
               {
                   $tsql = "DATETIME";
               }
           }
           switch ($cond)
           {
              case "EQ":
                 $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " = " . $nm_aspas . $dados . $nm_aspas1;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_equl'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "II":
                 $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " like '" . $dados . "%'";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_strt'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "QP";
              case "NP";
                 $concat = " " . $this->Dyn_Serarch_and_or . " ";
                 if ($cond == "QP")
                 {
                     $op_all    = " like ";
                     $lang_like = $this->Ini->Nm_lang['lang_srch_like'];
                 }
                 else
                 {
                     $op_all    = " not like ";
                     $lang_like = $this->Ini->Nm_lang['lang_srch_not_like'];
                 }
                 $tmp_cond = "";
                 if (substr($tsql, 0, 4) == "DATE" && $this->Date_part)
                 {
                     if ($this->NM_data_qp['ano'] != "____")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_year'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['ano'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%Y', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(year from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "year(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['mes'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_mnth'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['mes'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['mes'] = (substr($this->NM_data_qp['mes'], 0, 1) == '0') ? substr($this->NM_data_qp['mes'], 1) : $this->NM_data_qp['mes'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%m', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(month from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "month(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['dia'] != "__")
                     {
                         $tmp_cond .= (empty($nm_cmd)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_days'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['dia'];
                         $nm_cmd  .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['dia'] = (substr($this->NM_data_qp['dia'], 0, 1) == '0') ? substr($this->NM_data_qp['dia'], 1) : $this->NM_data_qp['dia'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%d', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(day from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "day(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                     }
                 }
                 if (strpos($tsql, "TIME") !== false && $this->Date_part)
                 {
                     if ($this->NM_data_qp['hor'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_time'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['hor'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['hor'] = (substr($this->NM_data_qp['hor'], 0, 1) == '0') ? substr($this->NM_data_qp['hor'], 1) : $this->NM_data_qp['hor'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%H', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(hour from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "hour(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['min'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_mint'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['min'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['min'] = (substr($this->NM_data_qp['min'], 0, 1) == '0') ? substr($this->NM_data_qp['min'], 1) : $this->NM_data_qp['min'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%M', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(minute from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "minute(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['seg'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_scnd'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['seg'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['seg'] = (substr($this->NM_data_qp['seg'], 0, 1) == '0') ? substr($this->NM_data_qp['seg'], 1) : $this->NM_data_qp['seg'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%S', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(second from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         else
                         {
                             $nm_cmd .= "second(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                     }
                 }
                 if (!$this->Date_part)
                 {
                     $nm_cmd  .= $nm_ini_lower . $sql . $nm_fim_lower . $op_all . "'%" . $dados . "%'";
                     $nm_cond  = $lab . " " . $lang_like . " " . $this->Val_format_1 . "##*@@";
                 }
                 else
                 {
                     if (!empty($tmp_cond))
                     {
                         $nm_cond = $lab . ": " . $tmp_cond . "##*@@";
                     }
                 }
              break;
              case "DF":
                 if ($tp == "DT" || $tp == "DH" || $tp == "HH")
                 {
                     $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " not like '%" . $dados . "%'";
                 }
                 else
                 {
                     $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " <> " . $nm_aspas . $dados . $nm_aspas1;
                 }
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_diff'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "GT":
                 $nm_cmd  = $sql . " > " . $nm_aspas . $dados . $nm_aspas1;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_grtr'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "GE":
                 $nm_cmd  = $sql . " >= " . $nm_aspas . $dados . $nm_aspas1;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_grtr_equl'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "LT":
                 $nm_cmd  = $sql . " < " . $nm_aspas . $dados . $nm_aspas1;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_less'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "LE":
                 $nm_cmd  = $sql . " <= " . $nm_aspas . $dados . $nm_aspas1;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_less_equl'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "BW":
                 $this->Val_BW_2  = substr($this->Db->qstr($this->Val_BW_2), 1, -1);
                 $nm_cmd = $sql . " between " . $nm_aspas . $dados . $nm_aspas1 . " and " . $nm_aspas . $this->Val_BW_2 . $nm_aspas1;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_betw'] . " " . $this->Val_format_1 . " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " " . $this->Val_format_2 . "##*@@";
              break;
              case "IN":
                 $nm_sc_valores = explode(",", $dados);
                 $cond_str = "";
                 $nm_condX  = "";
                 $ini_mult  = "";
                 $end_mult  = "";
                 if (!empty($nm_sc_valores))
                 {
                     foreach ($nm_sc_valores as $nm_sc_valor)
                     {
                        if ($tp == "N" && substr_count($nm_sc_valor, ".") > 1)
                        {
                           $nm_sc_valor = str_replace(".", "", $nm_sc_valor);
                        }
                        if ("" != $cond_str)
                        {
                           $ini_mult  = "(";
                           $end_mult  = ")";
                           $cond_str .= ",";
                           $nm_condX  .= " " . $this->Ini->Nm_lang['lang_srch_orr_cond'] . " ";
                        }
                        $cond_str .= $nm_aspas . $nm_sc_valor . $nm_aspas1;
                        $nm_condX .= $nm_aspas . $nm_sc_valor . $nm_aspas1;
                     }
                     $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " IN (" . $cond_str . ")";
                     $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_like'] . " " . $ini_mult . $nm_condX . $end_mult . "##*@@";
                 }
            break;
              case "NU":
                 $nm_cmd  = $sql . " IS NULL ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_null'] ."##*@@";
              break;
              case "NN":
                 $nm_cmd = $sql . " IS NOT NULL ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_nnul'] . "##*@@";
              break;
              case "EP":
                 $nm_cmd  = $sql . " = '' ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_empty'] ."##*@@";
              break;
              case "NE":
                 $nm_cmd = $sql . " <> '' ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_nempty'] . "##*@@";
              break;
           }
           if (!empty($nm_cmd))
           {
               if (!empty($this->Cmd_Dyn_Search))
               {
                   $this->Cmd_Dyn_Search .= " " . $this->Dyn_Serarch_and_or . " ";
               }
               $this->Cmd_Dyn_Search .= "(" . $nm_cmd . ")";
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['cond_dyn_search'] .= $nm_cond;
           }
   }

   function nm_prep_date(&$val, $tp, $tsql, &$cond, $format_nd)
   {
       if ($tsql == "TIMESTAMP")
       {
           $tsql = "DATETIME";
       }
       $cond = strtoupper($cond);
       if ($cond == "NU" || $cond == "NN" || $cond == "EP" || $cond == "NE")
       {
           $val    = array();
           $val[0] = "";
           return;
       }
       if ($cond == "BW")
       {
           $this->NM_data_1 = array();
           $this->NM_data_1['ano'] = (isset($val[0]['ano']) && !empty($val[0]['ano'])) ? $val[0]['ano'] : "____";
           $this->NM_data_1['mes'] = (isset($val[0]['mes']) && !empty($val[0]['mes'])) ? $val[0]['mes'] : "__";
           $this->NM_data_1['dia'] = (isset($val[0]['dia']) && !empty($val[0]['dia'])) ? $val[0]['dia'] : "__";
           $this->NM_data_1['hor'] = (isset($val[0]['hor']) && !empty($val[0]['hor'])) ? $val[0]['hor'] : "__";
           $this->NM_data_1['min'] = (isset($val[0]['min']) && !empty($val[0]['min'])) ? $val[0]['min'] : "__";
           $this->NM_data_1['seg'] = (isset($val[0]['seg']) && !empty($val[0]['seg'])) ? $val[0]['seg'] : "__";
           $this->data_menor($this->NM_data_1);
           $this->NM_data_2 = array();
           $this->NM_data_2['ano'] = (isset($val[1]['ano']) && !empty($val[1]['ano'])) ? $val[1]['ano'] : "____";
           $this->NM_data_2['mes'] = (isset($val[1]['mes']) && !empty($val[1]['mes'])) ? $val[1]['mes'] : "__";
           $this->NM_data_2['dia'] = (isset($val[1]['dia']) && !empty($val[1]['dia'])) ? $val[1]['dia'] : "__";
           $this->NM_data_2['hor'] = (isset($val[1]['hor']) && !empty($val[1]['hor'])) ? $val[1]['hor'] : "__";
           $this->NM_data_2['min'] = (isset($val[1]['min']) && !empty($val[1]['min'])) ? $val[1]['min'] : "__";
           $this->NM_data_2['seg'] = (isset($val[1]['seg']) && !empty($val[1]['seg'])) ? $val[1]['seg'] : "__";
           $this->data_maior($this->NM_data_2);
           $val = array();
           if ($tsql == "TIME")
           {
               $val[0] = $this->NM_data_1['hor'] . ":" . $this->NM_data_1['min'] . ":" . $this->NM_data_1['seg'];
               $val[1] = $this->NM_data_2['hor'] . ":" . $this->NM_data_2['min'] . ":" . $this->NM_data_2['seg'];
           }
           elseif (substr($tsql, 0, 4) == "DATE")
           {
               $val[0] = $this->NM_data_1['ano'] . "-" . $this->NM_data_1['mes'] . "-" . $this->NM_data_1['dia'];
               $val[1] = $this->NM_data_2['ano'] . "-" . $this->NM_data_2['mes'] . "-" . $this->NM_data_2['dia'];
               if (strpos($tsql, "TIME") !== false)
               {
                   $val[0] .= " " . $this->NM_data_1['hor'] . ":" . $this->NM_data_1['min'] . ":" . $this->NM_data_1['seg'];
                   $val[1] .= " " . $this->NM_data_2['hor'] . ":" . $this->NM_data_2['min'] . ":" . $this->NM_data_2['seg'];
               }
           }
           return;
       }
       $this->NM_data_qp = array();
       $this->NM_data_qp['ano'] = (isset($val[0]['ano']) && !empty($val[0]['ano'])) ? $val[0]['ano'] : "____";
       $this->NM_data_qp['mes'] = (isset($val[0]['mes']) && !empty($val[0]['mes'])) ? $val[0]['mes'] : "__";
       $this->NM_data_qp['dia'] = (isset($val[0]['dia']) && !empty($val[0]['dia'])) ? $val[0]['dia'] : "__";
       $this->NM_data_qp['hor'] = (isset($val[0]['hor']) && !empty($val[0]['hor'])) ? $val[0]['hor'] : "__";
       $this->NM_data_qp['min'] = (isset($val[0]['min']) && !empty($val[0]['min'])) ? $val[0]['min'] : "__";
       $this->NM_data_qp['seg'] = (isset($val[0]['seg']) && !empty($val[0]['seg'])) ? $val[0]['seg'] : "__";
       if ($tp != "ND" && ($cond == "LE" || $cond == "LT" || $cond == "GE" || $cond == "GT"))
       {
           $count_fill = 0;
           foreach ($this->NM_data_qp as $x => $tx)
           {
               if (substr($tx, 0, 2) != "__")
               {
                   $count_fill++;
               }
           }
           if ($count_fill > 1)
           {
               if ($cond == "LE" || $cond == "GT")
               {
                   $this->data_maior($this->NM_data_qp);
               }
               else
               {
                   $this->data_menor($this->NM_data_qp);
               }
               if ($tsql == "TIME")
               {
                   $val[0] = $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
               }
               elseif (substr($tsql, 0, 4) == "DATE")
               {
                   $val[0] = $this->NM_data_qp['ano'] . "-" . $this->NM_data_qp['mes'] . "-" . $this->NM_data_qp['dia'];
                   if (strpos($tsql, "TIME") !== false)
                   {
                       $val[0] .= " " . $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
                   }
               }
               return;
           }
       }
       foreach ($this->NM_data_qp as $x => $tx)
       {
           if (substr($tx, 0, 2) == "__" && ($x == "dia" || $x == "mes" || $x == "ano"))
           {
               if (substr($tsql, 0, 4) == "DATE")
               {
                   $this->Date_part = true;
                   break;
               }
           }
           if (strpos($tsql, "TIME") !== false && ($tp == "DH" || ($tp == "DT" && $cond != "LE" && $cond != "LT" && $cond != "GE" && $cond != "GT")))
           {
               if (strpos($tsql, "TIME") !== false)
               {
                   $this->Date_part = true;
                   break;
               }
           }
       }
       if ($this->Date_part)
       {
           $this->Ini_date_part = "";
           $this->End_date_part = "";
           $this->Ini_date_char = "";
           $this->End_date_char = "";
           if ($tp != "ND")
           {
               if ($cond == "EQ")
               {
                   $this->Operador_date_part = " = ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_equl'];
               }
               elseif ($cond == "II")
               {
                   $this->Operador_date_part = " like ";
                   $this->Ini_date_part = "'";
                   $this->End_date_part = "%'";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_strt'];
               }
               elseif ($cond == "DF")
               {
                   $this->Operador_date_part = " <> ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_diff'];
               }
               elseif ($cond == "GT")
               {
                   $this->Operador_date_part = " > ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['pesq_cond_maior'];
               }
               elseif ($cond == "GE")
               {
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_grtr_equl'];
                   $this->Operador_date_part = " >= ";
               }
               elseif ($cond == "LT")
               {
                   $this->Operador_date_part = " < ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_less'];
               }
               elseif ($cond == "LE")
               {
                   $this->Operador_date_part = " <= ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_less_equl'];
               }
               elseif ($cond == "NP")
               {
                   $this->Operador_date_part = " not like ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_diff'];
                   $this->Ini_date_part = "'%";
                   $this->End_date_part = "%'";
               }
               else
               {
                   $this->Operador_date_part = " like ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_equl'];
                   $this->Ini_date_part = "'%";
                   $this->End_date_part = "%'";
               }
           }
           if ($cond == "DF")
           {
               $cond = "NP";
           }
           if ($cond != "NP")
           {
               $cond = "QP";
           }
       }
       $val = array();
       if ($tp != "ND" && ($cond == "QP" || $cond == "NP"))
       {
           $val[0] = "";
           if (substr($tsql, 0, 4) == "DATE")
           {
               $val[0] .= $this->NM_data_qp['ano'] . "-" . $this->NM_data_qp['mes'] . "-" . $this->NM_data_qp['dia'];
               if (strpos($tsql, "TIME") !== false)
               {
                   $val[0] .= " ";
               }
           }
           if (strpos($tsql, "TIME") !== false)
           {
               $val[0] .= $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
           }
           return;
       }
       if ($cond == "II" || $cond == "DF" || $cond == "EQ" || $cond == "LT" || $cond == "GE")
       {
           $this->data_menor($this->NM_data_qp);
       }
       else
       {
           $this->data_maior($this->NM_data_qp);
       }
       if ($tsql == "TIME")
       {
           $val[0] = $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
           return;
       }
       $format_sql = "";
       if (substr($tsql, 0, 4) == "DATE")
       {
           $format_sql .= $this->NM_data_qp['ano'] . "-" . $this->NM_data_qp['mes'] . "-" . $this->NM_data_qp['dia'];
           if (strpos($tsql, "TIME") !== false)
           {
               $format_sql .= " ";
           }
       }
       if (strpos($tsql, "TIME") !== false)
       {
           $format_sql .=  $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
       }
       if ($tp != "ND")
       {
           $val[0] = $format_sql;
           return;
       }
       if ($tp == "ND")
       {
           $format_nd = str_replace("yyyy", $this->NM_data_qp['ano'], $format_nd);
           $format_nd = str_replace("mm",   $this->NM_data_qp['mes'], $format_nd);
           $format_nd = str_replace("dd",   $this->NM_data_qp['dia'], $format_nd);
           $format_nd = str_replace("hh",   $this->NM_data_qp['hor'], $format_nd);
           $format_nd = str_replace("ii",   $this->NM_data_qp['min'], $format_nd);
           $format_nd = str_replace("ss",   $this->NM_data_qp['seg'], $format_nd);
           $val[0] = $format_nd;
           return;
       }
   }
   function data_menor(&$data_arr)
   {
       $data_arr["ano"] = ("____" == $data_arr["ano"]) ? "0001" : $data_arr["ano"];
       $data_arr["mes"] = ("__" == $data_arr["mes"])   ? "01" : $data_arr["mes"];
       $data_arr["dia"] = ("__" == $data_arr["dia"])   ? "01" : $data_arr["dia"];
       $data_arr["hor"] = ("__" == $data_arr["hor"])   ? "00" : $data_arr["hor"];
       $data_arr["min"] = ("__" == $data_arr["min"])   ? "00" : $data_arr["min"];
       $data_arr["seg"] = ("__" == $data_arr["seg"])   ? "00" : $data_arr["seg"];
   }

   function data_maior(&$data_arr)
   {
       $data_arr["ano"] = ("____" == $data_arr["ano"]) ? "9999" : $data_arr["ano"];
       $data_arr["mes"] = ("__" == $data_arr["mes"])   ? "12" : $data_arr["mes"];
       $data_arr["hor"] = ("__" == $data_arr["hor"])   ? "23" : $data_arr["hor"];
       $data_arr["min"] = ("__" == $data_arr["min"])   ? "59" : $data_arr["min"];
       $data_arr["seg"] = ("__" == $data_arr["seg"])   ? "59" : $data_arr["seg"];
       if ("__" == $data_arr["dia"])
       {
           $data_arr["dia"] = "31";
           if ($data_arr["mes"] == "04" || $data_arr["mes"] == "06" || $data_arr["mes"] == "09" || $data_arr["mes"] == "11")
           {
               $data_arr["dia"] = 30;
           }
           elseif ($data_arr["mes"] == "02")
           { 
                if  ($data_arr["ano"] % 4 == 0)
                {
                     $data_arr["dia"] = 29;
                }
                else 
                {
                     $data_arr["dia"] = 28;
                }
           }
       }
   }
   function dyn_convert_date($val)
   {
       $val_ok = array();
       foreach ($val as $Part_date)
       {
           if (substr($Part_date, 0, 1) == "Y")
           {
               $val_ok['ano'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "M")
           {
               $val_ok['mes'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "D")
           {
               $val_ok['dia'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "H")
           {
               $val_ok['hor'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "I")
           {
               $val_ok['min'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "S")
           {
               $val_ok['seg'] = substr($Part_date, 2);
           }
       }
       return $val_ok;
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
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_outra_jan'])
   {
       $nmgp_saida_form = "form_usuarios_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_usuarios_fim.php";
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
       form_usuarios_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['masterValue']);
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
function nmgp_redireciona_form($nm_apl_dest, $nm_apl_retorno, $nm_apl_parms, $nm_target="", $opc="", $alt_modal=430, $larg_modal=630)
{
   if (isset($this->NM_is_redirected) && $this->NM_is_redirected)
   {
       return;
   }
   if (is_array($nm_apl_parms))
   {
       $tmp_parms = "";
       foreach ($nm_apl_parms as $par => $val)
       {
           $par = trim($par);
           $val = trim($val);
           $tmp_parms .= str_replace(".", "_", $par) . "?#?";
           if (substr($val, 0, 1) == "$")
           {
               $tmp_parms .= $$val;
           }
           elseif (substr($val, 0, 1) == "{")
           {
               $val        = substr($val, 1, -1);
               $tmp_parms .= $this->$val;
           }
           elseif (substr($val, 0, 1) == "[")
           {
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios'][substr($val, 1, -1)];
           }
           else
           {
               $tmp_parms .= $val;
           }
           $tmp_parms .= "?@?";
       }
       $nm_apl_parms = $tmp_parms;
   }
   if (empty($opc))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_usuarios']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           form_usuarios_pack_ajax_response();
           exit;
       }
       echo "<SCRIPT language=\"javascript\">";
       if (strtolower($nm_target) == "_blank")
       {
           echo "window.open ('" . $nm_apl_dest . "');";
           echo "</SCRIPT>";
           return;
       }
       else
       {
           echo "window.location='" . $nm_apl_dest . "';";
           echo "</SCRIPT>";
           $this->NM_close_db();
           exit;
       }
   }
   $dir = explode("/", $nm_apl_dest);
   if (count($dir) == 1)
   {
       $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
       $nm_apl_dest = $this->Ini->path_link . SC_dir_app_name($nm_apl_dest) . "/" . $nm_apl_dest . ".php";
   }
   if ($this->NM_ajax_flag)
   {
       $nm_apl_parms = str_replace("?#?", "*scin", NM_charset_to_utf8($nm_apl_parms));
       $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
       $this->NM_ajax_info['redir']['metodo']     = 'post';
       $this->NM_ajax_info['redir']['action']     = $nm_apl_dest;
       $this->NM_ajax_info['redir']['nmgp_parms'] = $nm_apl_parms;
       $this->NM_ajax_info['redir']['target']     = $nm_target_form;
       $this->NM_ajax_info['redir']['h_modal']    = $alt_modal;
       $this->NM_ajax_info['redir']['w_modal']    = $larg_modal;
       if ($nm_target_form == "_blank")
       {
           $this->NM_ajax_info['redir']['nmgp_outra_jan'] = 'true';
       }
       else
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida']      = $nm_apl_retorno;
           $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
           $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       }
       form_usuarios_pack_ajax_response();
       exit;
   }
   if ($nm_target == "modal")
   {
       if (!empty($nm_apl_parms))
       {
           $nm_apl_parms = str_replace("?#?", "*scin", $nm_apl_parms);
           $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
           $nm_apl_parms = "nmgp_parms=" . $nm_apl_parms . "&";
       }
       $par_modal = "?script_case_init=" . $this->Ini->sc_page . "&script_case_session=" . session_id() . "&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&";
       $this->redir_modal = "$(function() { tb_show('', '" . $nm_apl_dest . $par_modal . $nm_apl_parms . "TB_iframe=true&modal=true&height=" . $alt_modal . "&width=" . $larg_modal . "', '') })";
       $this->NM_is_redirected = true;
       return;
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
<form name="Fredir" method="post" 
                  target="_self"> 
  <input type="hidden" name="nmgp_parms" value="<?php echo $this->form_encode_input($nm_apl_parms); ?>"/>
<?php
   if ($nm_target_form == "_blank")
   {
?>
  <input type="hidden" name="nmgp_outra_jan" value="true"/> 
<?php
   }
   else
   {
?>
  <input type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($nm_apl_retorno) ?>">
  <input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"/> 
  <input type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
<?php
   }
?>
</form> 
   <SCRIPT type="text/javascript">
<?php
   if ($nm_target_form == "modal")
   {
?>
       $(document).ready(function(){
           tb_show('', '<?php echo $nm_apl_dest ?>?script_case_init=<?php echo $this->Ini->sc_page; ?>&script_case_session=<?php echo session_id() ?> &nmgp_url_saida=modal&nmgp_parms=<?php echo $this->form_encode_input($nm_apl_parms); ?>&nmgp_outra_jan=true&TB_iframe=true&height=<?php echo $alt_modal; ?>&width=<?php echo $larg_modal; ?>&modal=true', '');
       });
<?php
   }
   else
   {
?>
       document.Fredir.target = "<?php echo $nm_target_form ?>"; 
       document.Fredir.action = "<?php echo $nm_apl_dest ?>";
       document.Fredir.submit();
<?php
   }
?>
   </SCRIPT>
   </BODY>
   </HTML>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
       $this->NM_close_db();
       exit;
   }
}
}
?>
