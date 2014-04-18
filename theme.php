<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_Vela extends Theme {

    public $name = 'Vela';
    public $author = 'Vela Media';
    public $author_website = 'http://www.velamedia.biz';
    public $website = 'http://www.velamedia.biz';
    public $description = 'Responsive Vela Media template based on bootstrap';
    public $version = '1.2.1';
    public $options = array(
        'show_breadcrumbs' => array(
            'title'         => 'Show Breadcrumbs',
            'description'   => 'Would you like to display breadcrumbs?',
            'default'       => 'yes',
            'type'          => 'radio',
            'options'       => 'yes=Yes|no=No',
            'is_required'   => TRUE
        ),
        
        'layout' => array(
            'title'         => 'Layout',
            'description'   => 'Which type of layout shall we use?',
            'default'       => 'sidebar-right',
            'type'          => 'select',
            'options'       => 'sidebar-right=Two Column - Sidebar at right |full-width=Full Width|sidebar-left=Two Columns - Sidebar left',
            'is_required'   => TRUE
        ),
        'style'    => array(
            'title'         => 'Style',
            'description'   => 'Sorena comes with boxed and full width styles, which one do you like? default is full width',
            'default'       => 'full',
            'type'          => 'select',
            'options'       => 'full=Full style|boxed=Boxed style',
            'is_required'   => TRUE
        ),
        'color'=>array(
            'title'         => 'color',
            'title'         => 'Color of the theme',
            'description'   => 'Please choose one of the predefined colors. to use your own color consult to documentation',
            'default'       => 'default',
            'type'          => 'select',
            'options'       => 'default=Orange|blue=Blue|cyan=Cyan|green=Green|pink=Pink|red=Red',
            'is_required'   => TRUE
        )
    );
    

}

