<?php


/*-----------------------------------------------------------------------------------*/
/* カスタム投稿タイプの追加
/*-----------------------------------------------------------------------------------*/


add_action( 'init', 'register_cpt_member' );

function register_cpt_member() {

    $labels = array( 
        'name' => _x( 'メンバー', 'member' ),
        'singular_name' => _x( 'member', 'member' ),
        'add_new' => _x( '新規追加', 'member' ),
        'add_new_item' => _x( '新しいメンバーを追加', 'member' ),
        'edit_item' => _x( 'メンバーを編集', 'member' ),
        'new_item' => _x( '新しいメンバー', 'member' ),
        'view_item' => _x( 'メンバープロフィールを見る', 'member' ),
        'search_items' => _x( 'メンバーを検索', 'member' ),
        'not_found' => _x( 'メンバーが見つかりません', 'member' ),
        'not_found_in_trash' => _x( 'ゴミ箱の中にメンバーは見つかりません', 'member' ),
        'parent_item_colon' => _x( '親メンバー：', 'member' ),
        'menu_name' => _x( 'メンバー', 'member' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Frog Houseのメンバー紹介ページの投稿です。',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
        'taxonomies' => array( 'category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'member', $args );

    $args_tx = array(
        'label' => '住居',
        'public' => true,
        'show_ui' => true,
        'hierarchical' => true
    );
    
    register_taxonomy('house_category','member',$args_tx);

}


/*-----------------------------------------------------------------------------------*/
/* アイキャッチ画象のサイズ設定
/*-----------------------------------------------------------------------------------*/

add_theme_support( 'post-thumbnails', array( 'member' ) );
set_post_thumbnail_size();

/*-----------------------------------------------------------------------------------*/
/* メンバーアイコンの設定
/*-----------------------------------------------------------------------------------*/

function add_menu_icons_styles(){
     echo '<style>
          #adminmenu #menu-posts-member div.wp-menu-image:before {
               content: "\f307";
          }
     </style>';
}
add_action( 'admin_head', 'add_menu_icons_styles' );
