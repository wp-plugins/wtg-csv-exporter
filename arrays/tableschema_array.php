<?php
/** 
 * Database tables information for past and new versions.
 * 
 * This file is not fully in use yet. The intention is to migrate it to the
 * installation class and rather than an array I will simply store every version
 * of each tables query. Each query can be broken down to compare against existing 
 * tables. I find this array approach too hard to maintain over many plugins.
 * 
 * @todo move this to installation class but also reduce the array to actual queries per version
 * 
 * @package WTG CSV Exporter
 * @author Ryan Bayne   
 * @since 0.0.1
 * @version 8.1.2
 */

// load in WordPress only
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );
 
 
/*   Column Array Example Returned From "mysql_query( "SHOW COLUMNS FROM..."
        
          array(6) {
            [0]=>
            string(5) "row_id"
            [1]=>
            string(7) "int(11)"
            [2]=>
            string(2) "NO"
            [3]=>
            string(3) "PRI"
            [4]=>
            NULL
            [5]=>
            string(14) "auto_increment"
          }
                  
    +------------+----------+------+-----+---------+----------------+
    | Field      | Type     | Null | Key | Default | Extra          |
    +------------+----------+------+-----+---------+----------------+
    | Id         | int(11)  | NO   | PRI | NULL    | auto_increment |
    | Name       | char(35) | NO   |     |         |                |
    | Country    | char(3)  | NO   | UNI |         |                |
    | District   | char(20) | YES  | MUL |         |                |
    | Population | int(11)  | NO   |     | 0       |                |
    +------------+----------+------+-----+---------+----------------+            
*/
   
global $wpdb;   
$c2p_tables_array =  array();
##################################################################################
#                                 wtglog                                         #
##################################################################################        
$c2p_tables_array['tables']['wtglog']['name'] = $wpdb->prefix . 'wtglog';
$c2p_tables_array['tables']['wtglog']['required'] = false;// required for all installations or not (boolean)
$c2p_tables_array['tables']['wtglog']['pluginversion'] = '0.0.1';
$c2p_tables_array['tables']['wtglog']['usercreated'] = false;// if the table is created as a result of user actions rather than core installation put true
$c2p_tables_array['tables']['wtglog']['version'] = '0.0.1';// used to force updates based on version alone rather than individual differences
$c2p_tables_array['tables']['wtglog']['primarykey'] = 'row_id';
$c2p_tables_array['tables']['wtglog']['uniquekey'] = 'row_id';
// wtglog - row_id
$c2p_tables_array['tables']['wtglog']['columns']['row_id']['type'] = 'bigint(20)';
$c2p_tables_array['tables']['wtglog']['columns']['row_id']['null'] = 'NOT NULL';
$c2p_tables_array['tables']['wtglog']['columns']['row_id']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['row_id']['default'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['row_id']['extra'] = 'AUTO_INCREMENT';
// wtglog - outcome
$c2p_tables_array['tables']['wtglog']['columns']['outcome']['type'] = 'tinyint(1)';
$c2p_tables_array['tables']['wtglog']['columns']['outcome']['null'] = 'NOT NULL';
$c2p_tables_array['tables']['wtglog']['columns']['outcome']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['outcome']['default'] = '1';
$c2p_tables_array['tables']['wtglog']['columns']['outcome']['extra'] = '';
// wtglog - timestamp
$c2p_tables_array['tables']['wtglog']['columns']['timestamp']['type'] = 'timestamp';
$c2p_tables_array['tables']['wtglog']['columns']['timestamp']['null'] = 'NOT NULL';
$c2p_tables_array['tables']['wtglog']['columns']['timestamp']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['timestamp']['default'] = 'CURRENT_TIMESTAMP';
$c2p_tables_array['tables']['wtglog']['columns']['timestamp']['extra'] = '';
// wtglog - line
$c2p_tables_array['tables']['wtglog']['columns']['line']['type'] = 'int(11)';
$c2p_tables_array['tables']['wtglog']['columns']['line']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['line']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['line']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['line']['extra'] = '';
// wtglog - file
$c2p_tables_array['tables']['wtglog']['columns']['file']['type'] = 'varchar(250)';
$c2p_tables_array['tables']['wtglog']['columns']['file']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['file']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['file']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['file']['extra'] = '';
// wtglog - function
$c2p_tables_array['tables']['wtglog']['columns']['function']['type'] = 'varchar(250)';
$c2p_tables_array['tables']['wtglog']['columns']['function']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['function']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['function']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['function']['extra'] = '';
// wtglog - sqlresult
$c2p_tables_array['tables']['wtglog']['columns']['sqlresult']['type'] = 'blob';
$c2p_tables_array['tables']['wtglog']['columns']['sqlresult']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['sqlresult']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['sqlresult']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['sqlresult']['extra'] = '';
// wtglog - sqlquery
$c2p_tables_array['tables']['wtglog']['columns']['sqlquery']['type'] = 'varchar(45)';
$c2p_tables_array['tables']['wtglog']['columns']['sqlquery']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['sqlquery']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['sqlquery']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['sqlquery']['extra'] = '';
// wtglog - sqlerror
$c2p_tables_array['tables']['wtglog']['columns']['sqlerror']['type'] = 'mediumtext';
$c2p_tables_array['tables']['wtglog']['columns']['sqlerror']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['sqlerror']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['sqlerror']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['sqlerror']['extra'] = '';
// wtglog - wordpresserror
$c2p_tables_array['tables']['wtglog']['columns']['wordpresserror']['type'] = 'mediumtext';
$c2p_tables_array['tables']['wtglog']['columns']['wordpresserror']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['wordpresserror']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['wordpresserror']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['wordpresserror']['extra'] = '';
// wtglog - screenshoturl
$c2p_tables_array['tables']['wtglog']['columns']['screenshoturl']['type'] = 'varchar(500)';
$c2p_tables_array['tables']['wtglog']['columns']['screenshoturl']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['screenshoturl']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['screenshoturl']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['screenshoturl']['extra'] = '';
// wtglog - userscomment
$c2p_tables_array['tables']['wtglog']['columns']['userscomment']['type'] = 'mediumtext';
$c2p_tables_array['tables']['wtglog']['columns']['userscomment']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['userscomment']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['userscomment']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['userscomment']['extra'] = '';
// wtglog - page
$c2p_tables_array['tables']['wtglog']['columns']['page']['type'] = 'varchar(45)';
$c2p_tables_array['tables']['wtglog']['columns']['page']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['page']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['page']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['page']['extra'] = '';
// wtglog - version
$c2p_tables_array['tables']['wtglog']['columns']['version']['type'] = 'varchar(45)';
$c2p_tables_array['tables']['wtglog']['columns']['version']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['version']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['version']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['version']['extra'] = '';
// wtglog - panelid
$c2p_tables_array['tables']['wtglog']['columns']['panelid']['type'] = 'varchar(45)';
$c2p_tables_array['tables']['wtglog']['columns']['panelid']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['panelid']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['panelid']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['panelid']['extra'] = '';
// wtglog - panelname
$c2p_tables_array['tables']['wtglog']['columns']['panelname']['type'] = 'varchar(45)';
$c2p_tables_array['tables']['wtglog']['columns']['panelname']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['panelname']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['panelname']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['panelname']['extra'] = '';
// wtglog - tabscreenid
$c2p_tables_array['tables']['wtglog']['columns']['tabscreenid']['type'] = 'varchar(45)';
$c2p_tables_array['tables']['wtglog']['columns']['tabscreenid']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['tabscreenid']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['tabscreenid']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['tabscreenid']['extra'] = '';
// wtglog - tabscreenname
$c2p_tables_array['tables']['wtglog']['columns']['tabscreenname']['type'] = 'varchar(45)';
$c2p_tables_array['tables']['wtglog']['columns']['tabscreenname']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['tabscreenname']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['tabscreenname']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['tabscreenname']['extra'] = '';
// wtglog - dump
$c2p_tables_array['tables']['wtglog']['columns']['dump']['type'] = 'longblob';
$c2p_tables_array['tables']['wtglog']['columns']['dump']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['dump']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['dump']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['dump']['extra'] = '';
// wtglog - ipaddress
$c2p_tables_array['tables']['wtglog']['columns']['ipaddress']['type'] = 'varchar(45)';
$c2p_tables_array['tables']['wtglog']['columns']['ipaddress']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['ipaddress']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['ipaddress']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['ipaddress']['extra'] = '';
// wtglog - userid
$c2p_tables_array['tables']['wtglog']['columns']['userid']['type'] = 'int(11)';
$c2p_tables_array['tables']['wtglog']['columns']['userid']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['userid']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['userid']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['userid']['extra'] = '';
// wtglog - comment
$c2p_tables_array['tables']['wtglog']['columns']['comment']['type'] = 'mediumtext';
$c2p_tables_array['tables']['wtglog']['columns']['comment']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['comment']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['comment']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['comment']['extra'] = '';
// wtglog - type
$c2p_tables_array['tables']['wtglog']['columns']['type']['type'] = 'varchar(45)';
$c2p_tables_array['tables']['wtglog']['columns']['type']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['type']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['type']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['type']['extra'] = '';
// wtglog - category
$c2p_tables_array['tables']['wtglog']['columns']['category']['type'] = 'varchar(45)';
$c2p_tables_array['tables']['wtglog']['columns']['category']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['category']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['category']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['category']['extra'] = '';
// wtglog - action
$c2p_tables_array['tables']['wtglog']['columns']['action']['type'] = 'varchar(45)';
$c2p_tables_array['tables']['wtglog']['columns']['action']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['action']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['action']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['action']['extra'] = '';
// wtglog - priority
$c2p_tables_array['tables']['wtglog']['columns']['priority']['type'] = 'varchar(45)';
$c2p_tables_array['tables']['wtglog']['columns']['priority']['null'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['priority']['key'] = '';
$c2p_tables_array['tables']['wtglog']['columns']['priority']['default'] = 'NULL';
$c2p_tables_array['tables']['wtglog']['columns']['priority']['extra'] = '';              
?>