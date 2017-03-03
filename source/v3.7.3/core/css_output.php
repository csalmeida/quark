<?php
require_once "functions.php";
// Builds theme.
// Variables used: $base $navigation $highlight $search
if (isset($base)) {
  $css = ".headerDesktop-container{background-color:$base}.$search-form-fieldset{background:$search}[class*=\"searchForm-action-button-\"]{color:$navigation}.searchForm-action-button-advanced:hover,.searchForm-action-button-toggle:hover{background:$highlight}.customRadio-input:checked+.customRadio-mask{box-shadow:inset 0 0 0 3px #fff,inset 0 0 0 10px $highlight;border-color:$highlight}.pm_button.primary,.pm_button.primary:active{color:$navigation;background-color:$base;border-color:$base}.pm_button.primary:hover,.pm_button.primary:focus{background-color:$search;border-color:$search}.navigation>li.active,.navigation>li:hover{box-shadow:0 5px 0 0 $highlight inset}.navigation-link{color:$navigation}.navigation-title:hover{color:$highlight}.pm_dropdown .navigationUser-logout{background-color:$base !important;border-color:$base !important;color:$navigation !important}.pm_dropdown .navigationUser-logout:hover{background-color:$search !important;border-color:$search !important;color:$navigation !important}.sidebar-btn-compose,.sidebar-btn-compose:active{color:$navigation !important;background:$highlight !important;border:none !important}.sidebar-btn-compose:hover{color:$navigation !important;background:$highlight !important;border:none !important;box-shadow:inset 0 400px 400px rgba(0,0,0,0.1)}.headerDesktop-logo{background-color:$base}body section.sidebar{background:$base}body section.sidebar a.compose{background:$highlight;color:$navigation}body section.sidebar a.compose:hover{background:$navigation;border-color:$navigation;color:$base}body section.sidebar ul.menu li a{color:$navigation}body section.sidebar ul.menu li a:hover{color:$highlight}body section.sidebar ul.menu li.active a,body section.sidebar ul.menu li.active a{color:$navigation}body section.sidebar ul.menu li.active a i.fa,body section.sidebar ul.menu li.active a i.fa:hover{color:$highlight !important;opacity:1}body section.sidebar ul.menu li a .fa-repeat{color:$navigation;opacity:1}body section.sidebar ul.menu li a i.fa{color:$navigation;opacity:0.5}body section.sidebar ul.menu li a i.fa:hover,body section.sidebar ul.menu li a:hover i.fa{color:$navigation;opacity:1}body section.sidebar ul.menu li a em{color:$navigation;opacity:0.5}body section.sidebar div.labels ul li a{color:$navigation;opacity:0.5}body section.sidebar div.labels ul li a:hover{color:$navigation;opacity:1}body section.sidebar div.footer div.link a,body section.sidebar a.version{color:$navigation;opacity:0.5}body section.sidebar div.footer div.link a:hover,body section.sidebar a.version:hover{color:$highlight;opacity:1}body section.sidebar div.footer div.storage strong{color:$navigation;opacity:0.5}body section.sidebar div.footer .bar em{background:$highlight;height:3px}body section.sidebar div.footer .bar{background:$navigation;height:3px}.pm_buttons,.pm_buttons a{color:$base}.conversation.marked::before{background:$highlight;width:5px}#pm_composer .composer header{background:$base;color:$navigation}p a{color:$highlight}#pm_composer .composer footer .pm_button{background:$navigation;color:$base}#pm_composer .composer footer .pm_button:hover{background:$navigation;color:$base}#pm_composer .composer footer .pm_button.primary{background:$base;color:$navigation}#pm_composer .composer footer .pm_button.primary:hover{background:$highlight;color:$navigation}#pm_settings .pm_tabs{background:#e6eaf0}#pm_settings .pm_tabs li a.pm_button{color:$base;border-color:#e6eaf0}#pm_settings .pm_tabs li a.pm_button:hover{color:$highlight}#pm_settings .pm_tabs li.active a.pm_button{color:$highlight}.pm_button.link{color:$highlight}.pm_toggle.off .off,.pm_toggle.on .on{background:$base;color:$navigation}.alert.alert-info{background:#e6eaf0;color:#000}html.protonmail .text-purple{color:$highlight}#pm_settings .bar em{background:$highlight;height:4px}#pm_settings .bar{background:$base;opacity:0.5;height:4px}#plans .plans .plan h3{background:$base;color:$navigation}#plans .plans .plan.plus-plan h3 span,#plans .plans .plan.visionary-plan h3 span,#plans .plans .plan.visionary-plan header{color:$navigation}#plans .plans .plan footer .cycle strong{color:$highlight}#plans .plans .plan footer .cycle .discount{border-color:transparent $highlight transparent transparent}#plans .plans .plan footer .cycle .discount span{color:$navigation}.pm_modal .modal-dialog{border-color:$base}.pm_modal .modal-dialog .close{color:$navigation;background:$base}.pm_badge{color:$navigation}.pm_badge.primary{background:$base;color:$navigation}.pm_badge.success{background:$highlight;color:$navigation}.pm_table table th a,.pm_table table th .fa{color:$highlight}body .cg-notify-message.notification-success{background-color:$highlight;color:$navigation}";
} else {
  # Redirects if user tried to visit this page.
  redirect_to($home_path);
}
?>