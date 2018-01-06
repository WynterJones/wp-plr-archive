<?php

if( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

class fbcrx_table_btn extends WP_List_Table {
        
function __construct(){
    global $status, $page;

        parent::__construct( array(
            'singular'  => __( 'btn', 'mylisttable' ),     //singular name of the listed records
            'plural'    => __( 'btns', 'mylisttable' ),   //plural name of the listed records
            'ajax'      => false        //does this table support ajax?
    ) );
        
    }
  
  function no_items() {
    _e( 'No buttons were found...' );
  }  

  function column_default( $item, $column_name ) {
    switch( $column_name ) { 
        case 'btnname':
        case 'totalviews':
        case 'totalleads':
        case 'date':
            return $item[ $column_name ];
        default:
            return print_r( $item, true ) ; //Show the whole array for troubleshooting purposes
    }
  }

function get_sortable_columns() {
  $sortable_columns = array(
    'btnname'  => array('name',false),
    'totalviews' => array('email',false),
    'totalleads'   => array('location',false),
    'date'   => array('fburl',false)
  );
  return $sortable_columns;
}

function get_columns(){
        $columns = array(
            'btnname' => __( 'Button Name', 'mylisttable' ),
            'totalviews'    => __( 'Total Views', 'mylisttable' ),
            'totalleads'      => __( 'Total Leads', 'mylisttable' ),
            'date'      => __( 'Created', 'mylisttable' )
        );
         return $columns;
    }

function usort_reorder( $a, $b ) {
  // If no sort, default to title
  $orderby = ( ! empty( $_GET['orderby'] ) ) ? $_GET['orderby'] : 'fullname';
  // If no order, default to asc
  $order = ( ! empty($_GET['order'] ) ) ? $_GET['order'] : 'asc';
  // Determine sort order
  $result = strcmp( $a[$orderby], $b[$orderby] );
  // Send final sort direction to usort
  return ( $order === 'asc' ) ? $result : -$result;
}    

function column_btnname($item){
  $actions = array(
            'edit'      => sprintf('<a href="?page=%s&tab=display_campaigns&action_btn=%s&btn=%s">Edit</a>',$_REQUEST['page'],'edit',$item['ID']),
            'delete'    => sprintf('<a href="?page=%s&tab=display_campaigns&action_btn=%s&btn=%s">Delete</a>',$_REQUEST['page'],'delete',$item['ID']),
        );

  return sprintf('%1$s %2$s', $item['btnname'], $this->row_actions($actions) );
}

    
function prepare_items() {

  global $wpdb; 
  $table_db_name = $wpdb->prefix . "fbcxrxBTNs";
  $results = $wpdb->get_results("SELECT * FROM $table_db_name", ARRAY_A);

  $columns  = $this->get_columns();
  $hidden   = array();
  $sortable = $this->get_sortable_columns();
  $this->_column_headers = array( $columns, $hidden, $sortable );
  usort( $results , array( &$this, 'usort_reorder' ) );
  
  $per_page = 15;
  $current_page = $this->get_pagenum();
  $total_items = count( $results );

  // only ncessary because we have sample data
  $this->found_data = array_slice( $results ,( ( $current_page-1 )* $per_page ), $per_page );

  $this->set_pagination_args( array(
    'total_items' => $total_items,                  //WE have to calculate the total number of items
    'per_page'    => $per_page                     //WE have to determine how many items to show on a page
  ) );
  $this->items = $this->found_data;
}

} //class


?>