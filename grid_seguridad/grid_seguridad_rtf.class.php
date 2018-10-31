<?php

class grid_seguridad_rtf
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $Texto_tag;
   var $Arquivo;
   var $Tit_doc;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();

   //---- 
   function grid_seguridad_rtf()
   {
      $this->nm_data   = new nm_data("es");
      $this->Texto_tag = "";
   }

   //---- 
   function monta_rtf()
   {
      $this->inicializa_vars();
      $this->gera_texto_tag();
      $this->grava_arquivo_rtf();
      $this->monta_html();
   }

   //----- 
   function inicializa_vars()
   {
      global $nm_lang;
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz . "grid_seguridad.php"; 
      $this->Arquivo    = "sc_rtf";
      $this->Arquivo   .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arquivo   .= "_grid_seguridad";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "grid_seguridad.rtf";
   }

   //----- 
   function gera_texto_tag()
   {
     global $nm_lang;
      global
             $nm_nada, $nm_lang;

      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->sc_proc_grid = false; 
      $nm_raiz_img  = ""; 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_seguridad']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_seguridad']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_seguridad']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->anexo = $Busca_temp['anexo']; 
          $tmp_pos = strpos($this->anexo, "##@@");
          if ($tmp_pos !== false)
          {
              $this->anexo = substr($this->anexo, 0, $tmp_pos);
          }
          $this->nombres = $Busca_temp['nombres']; 
          $tmp_pos = strpos($this->nombres, "##@@");
          if ($tmp_pos !== false)
          {
              $this->nombres = substr($this->nombres, 0, $tmp_pos);
          }
          $this->ap_pat = $Busca_temp['ap_pat']; 
          $tmp_pos = strpos($this->ap_pat, "##@@");
          if ($tmp_pos !== false)
          {
              $this->ap_pat = substr($this->ap_pat, 0, $tmp_pos);
          }
          $this->ap_mat = $Busca_temp['ap_mat']; 
          $tmp_pos = strpos($this->ap_mat, "##@@");
          if ($tmp_pos !== false)
          {
              $this->ap_mat = substr($this->ap_mat, 0, $tmp_pos);
          }
          $this->depto = $Busca_temp['depto']; 
          $tmp_pos = strpos($this->depto, "##@@");
          if ($tmp_pos !== false)
          {
              $this->depto = substr($this->depto, 0, $tmp_pos);
          }
          $this->nodo = $Busca_temp['nodo']; 
          $tmp_pos = strpos($this->nodo, "##@@");
          if ($tmp_pos !== false)
          {
              $this->nodo = substr($this->nodo, 0, $tmp_pos);
          }
          $this->patente1 = $Busca_temp['patente1']; 
          $tmp_pos = strpos($this->patente1, "##@@");
          if ($tmp_pos !== false)
          {
              $this->patente1 = substr($this->patente1, 0, $tmp_pos);
          }
          $this->patente2 = $Busca_temp['patente2']; 
          $tmp_pos = strpos($this->patente2, "##@@");
          if ($tmp_pos !== false)
          {
              $this->patente2 = substr($this->patente2, 0, $tmp_pos);
          }
      } 
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['rtf_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['rtf_name']);
      }
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT Anexo, Ap_Pat, Ap_Mat, Nombres, Correo, Depto, Piso, nodo, patente1, patente2, Id from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT Anexo, Ap_Pat, Ap_Mat, Nombres, Correo, Depto, Piso, nodo, patente1, patente2, Id from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
      $rs = $this->Db->Execute($nmgp_select);
      if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }

      $this->Texto_tag .= "<table>\r\n";
      $this->Texto_tag .= "<tr>\r\n";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['fotos'])) ? $this->New_label['fotos'] : ""; 
          if ($Cada_col == "fotos" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['anexo'])) ? $this->New_label['anexo'] : "Anexo"; 
          if ($Cada_col == "anexo" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['ap_pat'])) ? $this->New_label['ap_pat'] : "Apellido Paterno"; 
          if ($Cada_col == "ap_pat" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['ap_mat'])) ? $this->New_label['ap_mat'] : "Apellido Materno"; 
          if ($Cada_col == "ap_mat" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['nombres'])) ? $this->New_label['nombres'] : "Nombres"; 
          if ($Cada_col == "nombres" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['correo'])) ? $this->New_label['correo'] : "Correo"; 
          if ($Cada_col == "correo" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['depto'])) ? $this->New_label['depto'] : "Departamentoto"; 
          if ($Cada_col == "depto" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['piso'])) ? $this->New_label['piso'] : "Piso"; 
          if ($Cada_col == "piso" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['nodo'])) ? $this->New_label['nodo'] : "Establecimiento"; 
          if ($Cada_col == "nodo" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['patente1'])) ? $this->New_label['patente1'] : "Patente 1"; 
          if ($Cada_col == "patente1" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['patente2'])) ? $this->New_label['patente2'] : "Patente 2"; 
          if ($Cada_col == "patente2" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['actualiza'])) ? $this->New_label['actualiza'] : ""; 
          if ($Cada_col == "actualiza" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
      } 
      $this->Texto_tag .= "</tr>\r\n";
      while (!$rs->EOF)
      {
         $this->Texto_tag .= "<tr>\r\n";
         $this->anexo = $rs->fields[0] ;  
         $this->anexo = (string)$this->anexo;
         $this->ap_pat = $rs->fields[1] ;  
         $this->ap_mat = $rs->fields[2] ;  
         $this->nombres = $rs->fields[3] ;  
         $this->correo = $rs->fields[4] ;  
         $this->depto = $rs->fields[5] ;  
         $this->depto = (string)$this->depto;
         $this->piso = $rs->fields[6] ;  
         $this->piso = (string)$this->piso;
         $this->nodo = $rs->fields[7] ;  
         $this->nodo = (string)$this->nodo;
         $this->patente1 = $rs->fields[8] ;  
         $this->patente2 = $rs->fields[9] ;  
         $this->id = $rs->fields[10] ;  
         $this->id = (string)$this->id;
         //----- lookup - depto
         $this->look_depto = $this->depto; 
         $this->Lookup->lookup_depto($this->look_depto, $this->depto) ; 
         $this->look_depto = ($this->look_depto == "&nbsp;") ? "" : $this->look_depto; 
         //----- lookup - nodo
         $this->look_nodo = $this->nodo; 
         $this->Lookup->lookup_nodo($this->look_nodo, $this->nodo) ; 
         $this->look_nodo = ($this->look_nodo == "&nbsp;") ? "" : $this->look_nodo; 
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['field_order'] as $Cada_col)
         { 
            if (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off")
            { 
                $NM_func_exp = "NM_export_" . $Cada_col;
                $this->$NM_func_exp();
            } 
         } 
         $this->Texto_tag .= "</tr>\r\n";
         $rs->MoveNext();
      }
      $this->Texto_tag .= "</table>\r\n";

      $rs->Close();
   }
   //----- fotos
   function NM_export_fotos()
   {
         if (!NM_is_utf8($this->fotos))
         {
             $this->fotos = sc_convert_encoding($this->fotos, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->fotos = str_replace('<', '&lt;', $this->fotos);
         $this->fotos = str_replace('>', '&gt;', $this->fotos);
         $this->Texto_tag .= "<td>" . $this->fotos . "</td>\r\n";
   }
   //----- anexo
   function NM_export_anexo()
   {
         nmgp_Form_Num_Val($this->anexo, "", "", "0", "S", "2", "", "N:4", "-") ; 
         if (!NM_is_utf8($this->anexo))
         {
             $this->anexo = sc_convert_encoding($this->anexo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->anexo = str_replace('<', '&lt;', $this->anexo);
         $this->anexo = str_replace('>', '&gt;', $this->anexo);
         $this->Texto_tag .= "<td>" . $this->anexo . "</td>\r\n";
   }
   //----- ap_pat
   function NM_export_ap_pat()
   {
         $this->ap_pat = html_entity_decode($this->ap_pat, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->ap_pat = strip_tags($this->ap_pat);
         if (!NM_is_utf8($this->ap_pat))
         {
             $this->ap_pat = sc_convert_encoding($this->ap_pat, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->ap_pat = str_replace('<', '&lt;', $this->ap_pat);
         $this->ap_pat = str_replace('>', '&gt;', $this->ap_pat);
         $this->Texto_tag .= "<td>" . $this->ap_pat . "</td>\r\n";
   }
   //----- ap_mat
   function NM_export_ap_mat()
   {
         $this->ap_mat = html_entity_decode($this->ap_mat, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->ap_mat = strip_tags($this->ap_mat);
         if (!NM_is_utf8($this->ap_mat))
         {
             $this->ap_mat = sc_convert_encoding($this->ap_mat, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->ap_mat = str_replace('<', '&lt;', $this->ap_mat);
         $this->ap_mat = str_replace('>', '&gt;', $this->ap_mat);
         $this->Texto_tag .= "<td>" . $this->ap_mat . "</td>\r\n";
   }
   //----- nombres
   function NM_export_nombres()
   {
         $this->nombres = html_entity_decode($this->nombres, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->nombres = strip_tags($this->nombres);
         if (!NM_is_utf8($this->nombres))
         {
             $this->nombres = sc_convert_encoding($this->nombres, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->nombres = str_replace('<', '&lt;', $this->nombres);
         $this->nombres = str_replace('>', '&gt;', $this->nombres);
         $this->Texto_tag .= "<td>" . $this->nombres . "</td>\r\n";
   }
   //----- correo
   function NM_export_correo()
   {
         $this->correo = html_entity_decode($this->correo, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->correo = strip_tags($this->correo);
         if (!NM_is_utf8($this->correo))
         {
             $this->correo = sc_convert_encoding($this->correo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->correo = str_replace('<', '&lt;', $this->correo);
         $this->correo = str_replace('>', '&gt;', $this->correo);
         $this->Texto_tag .= "<td>" . $this->correo . "</td>\r\n";
   }
   //----- depto
   function NM_export_depto()
   {
         nmgp_Form_Num_Val($this->look_depto, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->look_depto))
         {
             $this->look_depto = sc_convert_encoding($this->look_depto, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->look_depto = str_replace('<', '&lt;', $this->look_depto);
         $this->look_depto = str_replace('>', '&gt;', $this->look_depto);
         $this->Texto_tag .= "<td>" . $this->look_depto . "</td>\r\n";
   }
   //----- piso
   function NM_export_piso()
   {
         nmgp_Form_Num_Val($this->piso, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->piso))
         {
             $this->piso = sc_convert_encoding($this->piso, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->piso = str_replace('<', '&lt;', $this->piso);
         $this->piso = str_replace('>', '&gt;', $this->piso);
         $this->Texto_tag .= "<td>" . $this->piso . "</td>\r\n";
   }
   //----- nodo
   function NM_export_nodo()
   {
         nmgp_Form_Num_Val($this->look_nodo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->look_nodo))
         {
             $this->look_nodo = sc_convert_encoding($this->look_nodo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->look_nodo = str_replace('<', '&lt;', $this->look_nodo);
         $this->look_nodo = str_replace('>', '&gt;', $this->look_nodo);
         $this->Texto_tag .= "<td>" . $this->look_nodo . "</td>\r\n";
   }
   //----- patente1
   function NM_export_patente1()
   {
         if ($this->patente1 !== "&nbsp;") 
         { 
             $this->patente1 = sc_strtoupper($this->patente1); 
         } 
         $this->patente1 = html_entity_decode($this->patente1, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->patente1 = strip_tags($this->patente1);
         if (!NM_is_utf8($this->patente1))
         {
             $this->patente1 = sc_convert_encoding($this->patente1, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->patente1 = str_replace('<', '&lt;', $this->patente1);
         $this->patente1 = str_replace('>', '&gt;', $this->patente1);
         $this->Texto_tag .= "<td>" . $this->patente1 . "</td>\r\n";
   }
   //----- patente2
   function NM_export_patente2()
   {
         if ($this->patente2 !== "&nbsp;") 
         { 
             $this->patente2 = sc_strtoupper($this->patente2); 
         } 
         $this->patente2 = html_entity_decode($this->patente2, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->patente2 = strip_tags($this->patente2);
         if (!NM_is_utf8($this->patente2))
         {
             $this->patente2 = sc_convert_encoding($this->patente2, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->patente2 = str_replace('<', '&lt;', $this->patente2);
         $this->patente2 = str_replace('>', '&gt;', $this->patente2);
         $this->Texto_tag .= "<td>" . $this->patente2 . "</td>\r\n";
   }
   //----- actualiza
   function NM_export_actualiza()
   {
         if (!NM_is_utf8($this->actualiza))
         {
             $this->actualiza = sc_convert_encoding($this->actualiza, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->actualiza = str_replace('<', '&lt;', $this->actualiza);
         $this->actualiza = str_replace('>', '&gt;', $this->actualiza);
         $this->Texto_tag .= "<td>" . $this->actualiza . "</td>\r\n";
   }

   //----- 
   function grava_arquivo_rtf()
   {
      global $nm_lang, $doc_wrap;
      $rtf_f = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo, "w");
      require_once($this->Ini->path_third      . "/rtf_new/document_generator/cl_xml2driver.php"); 
      $text_ok  =  "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\r\n"; 
      $text_ok .=  "<DOC config_file=\"" . $this->Ini->path_third . "/rtf_new/doc_config.inc\" >\r\n"; 
      $text_ok .=  $this->Texto_tag; 
      $text_ok .=  "</DOC>\r\n"; 
      $xml = new nDOCGEN($text_ok,"RTF"); 
      fwrite($rtf_f, $xml->get_result_file());
      fclose($rtf_f);
   }

   function nm_conv_data_db($dt_in, $form_in, $form_out)
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
       nm_conv_form_data($dt_out, $form_in, $form_out);
       return $dt_out;
   }
   //---- 
   function monta_html()
   {
      global $nm_url_saida, $nm_lang;
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_seguridad'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE> :: RTF</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
}
?>
  <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
  <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
  <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
  <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
  <META http-equiv="Pragma" content="no-cache"/>
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">RTF</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . "/" . $this->Arquivo ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_seguridad_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_seguridad"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="grid_seguridad.php"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="volta_grid"> 
</FORM> 
</BODY>
</HTML>
<?php
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
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
              if ($cont2 >= $tam_campo)
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
}

?>
