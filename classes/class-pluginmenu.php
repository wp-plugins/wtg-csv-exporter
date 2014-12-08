<?php
/**
* Beta testing only (check if in use yet) - phasing array files into classes of their own then calling into the main class
*/
class WTGCSVEXPORTER_TabMenu {
    public function menu_array() {
        $menu_array = array();
        
        ######################################################
        #                                                    #
        #                        MAIN                        #
        #                                                    #
        ######################################################
        // can only have one view in main right now until WP allows pages to be hidden from showing in
        // plugin menus. This may provide benefit of bringing user to the latest news and social activity
        // main page
        $menu_array['main']['tabgroup'] = 'main';        
        $menu_array['main']['longname'] = 'wtgcsvexporter';// home page slug set in main file
        $menu_array['main']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php               
        $menu_array['main']['adminmenutitle'] = 'WTG CSV Exporter Dashboard';// plugin admin menu
        $menu_array['main']['pluginmenu'] = __( 'WTG CSV Exporter Dashboard' ,'wtgcsvexporter' );// for tabbed menu
        $menu_array['main']['shortname'] = "main";// name of page (slug) and unique
        $menu_array['main']['viewtitle'] = 'Dashboard';// title at the top of the admin page
        $menu_array['main']['tabgroupparent'] = 'parent';// either "parent" or the name of the parent - used for building tab menu         
        $menu_array['main']['showtabmenu'] = false;// boolean - true indicates multiple pages in section, false will hide tab menu and show one page 
        
        ######################################################
        #                                                    #
        #                   PLUGIN UPDATE                    #
        #                                                    #
        ######################################################
        // requests user to initiate plugin update
        $menu_array['pluginupdate']['tabgroup'] = 'installation'; 
        $menu_array['pluginupdate']['longname'] = 'wtgcsvexporter_pluginupdate';// home page slug set in main file
        $menu_array['pluginupdate']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php               
        $menu_array['pluginupdate']['adminmenutitle'] = __( 'WTG CSV Exporter Update Ready', 'wtgcsvexporter' );// plugin admin menu
        $menu_array['pluginupdate']['pluginmenu'] = __( 'Update Information' ,'wtgcsvexporter' );// for tabbed menu
        $menu_array['pluginupdate']['shortname'] = "pluginupdate";// name of page (slug) and unique
        $menu_array['pluginupdate']['viewtitle'] = __( 'WTG CSV Exporter Update Ready', 'wtgcsvexporter' );// title at the top of the admin page
        $menu_array['pluginupdate']['tabgroupparent'] = 'parent';// either "parent" or the name of the parent - used for building tab menu 
        $menu_array['pluginupdate']['showtabmenu'] = false;
        
        ######################################################
        #                                                    #
        #                 DEFAULT PROFILES                   #
        #       Basic - good starting points for custom.     #
        ###################################################### 
           
        // allposts
        $menu_array['allposts']['tabgroup'] = 'defaultprofiles';
        $menu_array['allposts']['longname'] = 'wtgcsvexporter_allposts'; 
        $menu_array['allposts']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                      
        $menu_array['allposts']['adminmenutitle'] = __( 'Default Profiles', 'wtgcsvexporter' );
        $menu_array['allposts']['pluginmenu'] = __( 'All Post Types', 'wtgcsvexporter' );
        $menu_array['allposts']['shortname'] = "allposts";
        $menu_array['allposts']['viewtitle'] = __( 'All Post Types', 'wtgcsvexporter' ); 
        $menu_array['allposts']['tabgroupparent'] = 'parent'; 
        $menu_array['allposts']['showtabmenu'] = true; 

        // posts
        $menu_array['posts']['tabgroup'] = 'defaultprofiles';
        $menu_array['posts']['longname'] = 'wtgcsvexporter_posts';
        $menu_array['posts']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                              
        $menu_array['posts']['adminmenutitle'] = __( 'Posts', 'wtgcsvexporter' );
        $menu_array['posts']['pluginmenu'] = __( 'Posts', 'wtgcsvexporter' );
        $menu_array['posts']['shortname'] = "posts";
        $menu_array['posts']['viewtitle'] = __( 'Posts', 'wtgcsvexporter' ); 
        $menu_array['posts']['tabgroupparent'] = 'allposts'; 
        $menu_array['posts']['showtabmenu'] = true;   
                
        // pages
        $menu_array['pages']['tabgroup'] = 'defaultprofiles';
        $menu_array['pages']['longname'] = 'wtgcsvexporter_pages';
        $menu_array['pages']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                              
        $menu_array['pages']['adminmenutitle'] = __( 'Pages', 'wtgcsvexporter' );
        $menu_array['pages']['pluginmenu'] = __( 'Pages', 'wtgcsvexporter' );
        $menu_array['pages']['shortname'] = "pages";
        $menu_array['pages']['viewtitle'] = __( 'Pages', 'wtgcsvexporter' ); 
        $menu_array['pages']['tabgroupparent'] = 'allposts'; 
        $menu_array['pages']['showtabmenu'] = true; 
        
        /*  
        // comments
        $menu_array['comments']['tabgroup'] = 'defaultprofiles';
        $menu_array['comments']['longname'] = 'wtgcsvexporter_comments';
        $menu_array['comments']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                               
        $menu_array['comments']['adminmenutitle'] = __( 'Comments', 'wtgcsvexporter' );
        $menu_array['comments']['pluginmenu'] = __( 'Comments', 'wtgcsvexporter' );
        $menu_array['comments']['shortname'] = "wordpressfeatures";
        $menu_array['comments']['viewtitle'] = __( 'Comments', 'wtgcsvexporter' ); 
        $menu_array['comments']['tabgroupparent'] = 'allposts'; 
        $menu_array['comments']['showtabmenu'] = true; 
        */
        
        // links 
        //$menu_array['links']['tabgroup'] = 'defaultprofiles';
        //$menu_array['links']['longname'] = 'wtgcsvexporter_links'; 
        //$menu_array['links']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                      
        //$menu_array['links']['adminmenutitle'] = __( 'Links', 'wtgcsvexporter' );
        //$menu_array['links']['pluginmenu'] = __( 'Links', 'wtgcsvexporter' );
        //$menu_array['links']['shortname'] = "tablelist";
        //$menu_array['links']['viewtitle'] = __( 'Links', 'wtgcsvexporter' ); 
        //$menu_array['links']['tabgroupparent'] = 'allposts'; 
        //$menu_array['links']['showtabmenu'] = true; 
        
        // options
        //$menu_array['options']['tabgroup'] = 'defaultprofiles';
        //$menu_array['options']['longname'] = 'wtgcsvexporter_options';
        //$menu_array['options']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                              
        //$menu_array['options']['adminmenutitle'] = __( 'Options', 'wtgcsvexporter' );
        //$menu_array['options']['pluginmenu'] = __( 'Options', 'wtgcsvexporter' );
        //$menu_array['options']['shortname'] = "options";
        //$menu_array['options']['viewtitle'] = __( 'Options', 'wtgcsvexporter' ); 
        //$menu_array['options']['tabgroupparent'] = 'allposts'; 
        //$menu_array['options']['showtabmenu'] = true; 
               
        // users
        //$menu_array['users']['tabgroup'] = 'defaultprofiles';
        //$menu_array['users']['longname'] = 'wtgcsvexporter_users';
        //$menu_array['users']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                              
        //$menu_array['users']['adminmenutitle'] = __( 'Users', 'wtgcsvexporter' );
        //$menu_array['users']['pluginmenu'] = __( 'Users', 'wtgcsvexporter' );
        //$menu_array['users']['shortname'] = "users";
        //$menu_array['users']['viewtitle'] = __( 'Users', 'wtgcsvexporter' ); 
        //$menu_array['users']['tabgroupparent'] = 'allposts'; 
        //$menu_array['users']['showtabmenu'] = true; 
                       
        // recent posts (wp_get_recent_posts)
        //$menu_array['recentposts']['tabgroup'] = 'defaultprofiles';
        //$menu_array['recentposts']['longname'] = 'wtgcsvexporter_recentposts';
        //$menu_array['recentposts']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                              
        //$menu_array['recentposts']['adminmenutitle'] = __( 'Recent Posts', 'wtgcsvexporter' );
        //$menu_array['recentposts']['pluginmenu'] = __( 'Recent Posts', 'wtgcsvexporter' );
        //$menu_array['recentposts']['shortname'] = "recentposts";
        //$menu_array['recentposts']['viewtitle'] = __( 'Recent Posts', 'wtgcsvexporter' ); 
        //$menu_array['recentposts']['tabgroupparent'] = 'allposts'; 
        //$menu_array['recentposts']['showtabmenu'] = true; 

        ######################################################
        #                                                    #
        #                 EXTENDED PROFILES                  #
        #       Basic - good starting points for custom.     #
        ###################################################### 
        /*   
        // allposts + single meta values
        $menu_array['allposts']['tabgroup'] = 'defaultprofiles';
        $menu_array['allposts']['longname'] = 'wtgcsvexporter_allposts'; 
        $menu_array['allposts']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                      
        $menu_array['allposts']['adminmenutitle'] = __( 'Default Profiles', 'wtgcsvexporter' );
        $menu_array['allposts']['pluginmenu'] = __( 'All Post Types', 'wtgcsvexporter' );
        $menu_array['allposts']['shortname'] = "allposts";
        $menu_array['allposts']['viewtitle'] = __( 'All Post Types', 'wtgcsvexporter' ); 
        $menu_array['allposts']['tabgroupparent'] = 'parent'; 
        $menu_array['allposts']['showtabmenu'] = true; 
   
        // allposts + comment count
        $menu_array['allposts']['tabgroup'] = 'defaultprofiles';
        $menu_array['allposts']['longname'] = 'wtgcsvexporter_allposts'; 
        $menu_array['allposts']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                      
        $menu_array['allposts']['adminmenutitle'] = __( 'Default Profiles', 'wtgcsvexporter' );
        $menu_array['allposts']['pluginmenu'] = __( 'All Post Types', 'wtgcsvexporter' );
        $menu_array['allposts']['shortname'] = "allposts";
        $menu_array['allposts']['viewtitle'] = __( 'All Post Types', 'wtgcsvexporter' ); 
        $menu_array['allposts']['tabgroupparent'] = 'parent'; 
        $menu_array['allposts']['showtabmenu'] = true;

        // allposts + author
        $menu_array['allposts']['tabgroup'] = 'defaultprofiles';
        $menu_array['allposts']['longname'] = 'wtgcsvexporter_allposts'; 
        $menu_array['allposts']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                      
        $menu_array['allposts']['adminmenutitle'] = __( 'Default Profiles', 'wtgcsvexporter' );
        $menu_array['allposts']['pluginmenu'] = __( 'All Post Types', 'wtgcsvexporter' );
        $menu_array['allposts']['shortname'] = "allposts";
        $menu_array['allposts']['viewtitle'] = __( 'All Post Types', 'wtgcsvexporter' ); 
        $menu_array['allposts']['tabgroupparent'] = 'parent'; 
        $menu_array['allposts']['showtabmenu'] = true;
                   
        // comments + post ID + post title
        $menu_array['comments']['tabgroup'] = 'defaultprofiles';
        $menu_array['comments']['longname'] = 'wtgcsvexporter_comments';
        $menu_array['comments']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                               
        $menu_array['comments']['adminmenutitle'] = __( 'Comments', 'wtgcsvexporter' );
        $menu_array['comments']['pluginmenu'] = __( 'Comments', 'wtgcsvexporter' );
        $menu_array['comments']['shortname'] = "wordpressfeatures";
        $menu_array['comments']['viewtitle'] = __( 'Comments', 'wtgcsvexporter' ); 
        $menu_array['comments']['tabgroupparent'] = 'allposts'; 
        $menu_array['comments']['showtabmenu'] = true; 
          
        // posts + authors
        $menu_array['posts']['tabgroup'] = 'defaultprofiles';
        $menu_array['posts']['longname'] = 'wtgcsvexporter_posts';
        $menu_array['posts']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                              
        $menu_array['posts']['adminmenutitle'] = __( 'Posts', 'wtgcsvexporter' );
        $menu_array['posts']['pluginmenu'] = __( 'Posts', 'wtgcsvexporter' );
        $menu_array['posts']['shortname'] = "posts";
        $menu_array['posts']['viewtitle'] = __( 'Posts', 'wtgcsvexporter' ); 
        $menu_array['posts']['tabgroupparent'] = 'allposts'; 
        $menu_array['posts']['showtabmenu'] = true;   
                
        // pages + authors
        $menu_array['pages']['tabgroup'] = 'defaultprofiles';
        $menu_array['pages']['longname'] = 'wtgcsvexporter_pages';
        $menu_array['pages']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                              
        $menu_array['pages']['adminmenutitle'] = __( 'Pages', 'wtgcsvexporter' );
        $menu_array['pages']['pluginmenu'] = __( 'Pages', 'wtgcsvexporter' );
        $menu_array['pages']['shortname'] = "pages";
        $menu_array['pages']['viewtitle'] = __( 'Pages', 'wtgcsvexporter' ); 
        $menu_array['pages']['tabgroupparent'] = 'allposts'; 
        $menu_array['pages']['showtabmenu'] = true; 
               
        // users + post count + comment count
        $menu_array['users']['tabgroup'] = 'defaultprofiles';
        $menu_array['users']['longname'] = 'wtgcsvexporter_users';
        $menu_array['users']['menu'] = 'wtgcsvexporter';// wtgcsvexporter, index.php, edit.php, upload.php, link-manager.php, edit.php?post_type=page, edit-comments.php, edit.php?post_type=your_post_type, themes.php, plugins.php, users.php, tools.php, options-general.php                              
        $menu_array['users']['adminmenutitle'] = __( 'Users', 'wtgcsvexporter' );
        $menu_array['users']['pluginmenu'] = __( 'Users', 'wtgcsvexporter' );
        $menu_array['users']['shortname'] = "users";
        $menu_array['users']['viewtitle'] = __( 'Users', 'wtgcsvexporter' ); 
        $menu_array['users']['tabgroupparent'] = 'allposts'; 
        $menu_array['users']['showtabmenu'] = true; 
        */
              
        return $menu_array;
    }
} 
?>
