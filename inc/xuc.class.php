<?php

if (!defined('GLPI_ROOT')) {
   die("Sorry. You can't access this file directly");
}

class PluginXivoXuc {
   static function getLoginForm() {
      $out = "<form id='xuc_login_form'>
         <h2>".__("Connect to XIVO", 'xivo')."</h2>

         <label for='xuc_username'>".__("XIVO username", 'xivo')."</label>
         <input type='text' id='xuc_username'>

         <label for='xuc_password'>".__("XIVO password", 'xivo')."</label>
         <input type='password' id='xuc_password'>

         <label for='xuc_phoneNumber'>".__("XIVO phone number", 'xivo')."</label>
         <input type='text' id='xuc_phoneNumber' size='6'>

         <input type='submit' class='submit' id='xuc_sign_in' value='".__("Connect")."'>
      </form>";

      return $out;
   }

   static function getLoggedForm() {
      $out = "<form id='xuc_logged_form'>
         <h2>".
            __("XIVO connected", 'xivo')."&nbsp;
            <i id='xuc_sign_out' class='fa fa-power-off pointer'></i>
         </h2>

         <div id='xuc_user_info'>
            <i id='xuc_user_picture' class='fa fa-user-circle-o'></i>
            <div class='floating_text'>
               <div id='xuc_fullname'></div>
               <div id='xuc_statuses'>
                  <div>
                     <label for='xuc_user_status'>".__("User", 'xivo')."</label>
                     <select id='xuc_user_status'></select>
                  </div>
                  <div>
                     <label for='xuc_phone_status'>".__("Phone", 'xivo')."</label>
                     <input type='text' id='xuc_phone_status' readonly>
                  </div>
               </div>
            </div>
         </div>
      </form>

      <div class='separ'></div>

      <div id='xuc_call_informations'>
         <h2 id='xuc_call_titles'>
            <div id='xuc_ringing_title'>".__("Incoming call", 'xivo')."</div>
            <div id='xuc_oncall_title'>".__("On call", 'xivo')."</div>
         </h2>
         <div id='xuc_caller_num'></div>
         <div id='xuc_caller_name'></div>
         <i class='fa fa-phone-square fa-flip-horizontal' id='xuc_answer'></i>
         <i class='fa fa-phone-square fa-rotate-90' id='xuc_hangup'></i>
      </div>";

      return $out;
   }
}