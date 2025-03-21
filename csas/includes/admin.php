<?php 

function include_view_file(){
    include CSAS_PLUGIN_PATH."view/viewPlugin.php";
};
function add_admin_menu(){
    add_menu_page( 
    __("custome code","csas"),
    __("custome code","csas"),
    "manage_options",
    "csas", 
    "include_view_file",
    CSAS_PLUGIN_URL."assets/icon_menu.png",
    71
    );
};

add_action( "admin_menu", "add_admin_menu" );

if(get_option( "csas-style")){
    add_action( "wp_head", function(){
        echo  "<style>".get_option( "csas-style")."</style>";
    } );
};

if(get_option( "csas-script")){
    add_action( "wp_footer", function(){
        echo  "<script>".get_option( "csas-script")."</script>";
    } );
};