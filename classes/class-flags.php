<?php
/** 
* Flag system (much like a TODO list with much advanced functionality planned )
* 
* This system will be integrated with all WTG plugins so that all plugins use the same custom post type. This
* is a pending development that WebTechGlobal requires for its own websites.
* 
* See posttypes\flags.php for meta values
* 
* @package WTG CSV Exporter
* @author Ryan Bayne   
* @since 0.0.1
*/

// load in Wordpress only
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );

/**
* WebTechGlobal Flag System class
* 
* @author Ryan R. Bayne
* @package WTG CSV Exporter
* @since 0.0.1
* @version 1.0
*/
class WTGCSVEXPORTER_Flags {
    public function newflag() {
        global $wtgcsvexporter_settings;
        
        // stop if user has not activted the flag system
        if( !isset( $wtgcsvexporter_settings['posttypes']['wtgflags']['status'] ) || $wtgcsvexporter_settings['posttypes']['wtgflags']['status'] !== 'enabled' ) {
            return;    
        }
        
        // flag/post title is required
        if(!isset( $this->title) ){
            return false;
        }
        
        // content/dump is required
        if(!isset( $this->content) ){
            return false;
        }
        
        // build post object
        $post = array();
        $post['post_title'] = $this->title;
        $post['post_content'] = $this->content;
        $post['post_status'] = 'draft';
        $post['post_type'] = 'webtechglobalflags';
        $post['post_author'] = 1;
        $post['ping_status'] = 'closed';
        $post['comment_status'] = 'closed';

        $post_id = wp_insert_post( $post );
        if(!$post_id ){return false;}
 
            
        /*  add arguments for these meta
        
            // phpline
            add_meta_box(
                'flags-meta-phpline',            
                esc_html__( 'PHP Line' ),       
                'wtgcsvexporter_meta_box_flags_phpline',        
                'webtechglobalflags',                  
                'side',                 
                'default'                  
            );
             
            // phpfunction 
            add_meta_box(
                'flags-meta-phpfunction',            
                esc_html__( 'PHP Function' ),       
                'wtgcsvexporter_meta_box_flags_phpfunction',        
                'webtechglobalflags',                  
                'side',                 
                'default'                  
            );       
             
            // priority 
            add_meta_box(
                'flags-meta-priority',            
                esc_html__( 'Priority' ),       
                'wtgcsvexporter_meta_box_flags_priority',        
                'webtechglobalflags',                  
                'side',                 
                'default'                  
            ); 

            // type 
            add_meta_box(
                'flags-meta-type',            
                esc_html__( 'Type' ),       
                'wtgcsvexporter_meta_box_flags_type',        
                'webtechglobalflags',                  
                'side',                 
                'default'                  
            );    

            // fileurl 
            add_meta_box(
                'flags-meta-fileurl',            
                esc_html__( 'File URL' ),       
                'wtgcsvexporter_meta_box_flags_fileurl',        
                'webtechglobalflags',                  
                'side',                 
                'default'                  
            ); 

            // dataid 
            add_meta_box(
                'flags-meta-dataid',            
                esc_html__( 'Data ID' ),       
                'wtgcsvexporter_meta_box_flags_dataid',        
                'webtechglobalflags',                  
                'side',                 
                'default'                  
            ); 

            // userid 
            add_meta_box(
                'flags-meta-userid',            
                esc_html__( 'User ID' ),       
                'wtgcsvexporter_meta_box_flags_userid',        
                'webtechglobalflags',                  
                'side',                 
                'default'                  
            ); 

            // errortext 
            add_meta_box(
                'flags-meta-errortext',            
                esc_html__( 'Error Text' ),       
                'wtgcsvexporter_meta_box_flags_errortext',        
                'webtechglobalflags',                  
                'normal',                 
                'default'                  
            ); 

            // projectid 
            add_meta_box(
                'flags-meta-projectid',            
                esc_html__( 'Project ID' ),       
                'wtgcsvexporter_meta_box_flags_projectid',        
                'webtechglobalflags',                  
                'side',                 
                'default'                  
            ); 

            // reason 
            add_meta_box(
                'flags-meta-reason',            
                esc_html__( 'Reason' ),       
                'wtgcsvexporter_meta_box_flags_reason',        
                'webtechglobalflags',                  
                'normal',                 
                'default'                  
            ); 

            // action 
            add_meta_box(
                'flags-meta-action',            
                esc_html__( 'Action' ),       
                'wtgcsvexporter_meta_box_flags_action',        
                'webtechglobalflags',                  
                'normal',                 
                'default'                  
            ); 

            // instructions 
            add_meta_box(
                'flags-meta-instructions',            
                esc_html__( 'Instructions' ),       
                'wtgcsvexporter_meta_box_flags_instructions',        
                'webtechglobalflags',                  
                'normal',                 
                'default'                  
            ); 

            // creator 
            add_meta_box(
                'flags-meta-creator',            
                esc_html__( 'Creator' ),       
                'wtgcsvexporter_meta_box_flags_creator',        
                'webtechglobalflags',                  
                'side',                 
                'default'                  
            ); 

            // version 
            add_meta_box(
                'flags-meta-version',            
                esc_html__( 'Version' ),       
                'wtgcsvexporter_meta_box_flags_version',        
                'webtechglobalflags',                  
                'side',                 
                'default'                  
            ); 
            */
    }
}// end class WTGCSVEXPORTER_Flags
?>