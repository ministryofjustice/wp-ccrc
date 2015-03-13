<?php

// Array hold all meta-boxes - slug param is custom to control which page it appears on
$meta_boxes = array(
	array(
		'id' => 'homepage_meta_box',
		'title' => 'Homepage Options',
		'slug' => 'home',
		'pages' => array( 'page' ),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
			array(
				'id' => 'welcome-title',
				'label' => 'Welcome title',
				'type' => 'text',
				'desc' => 'Main title on homepage, underneath banner'
			),
			array(
				'id' => 'welcome-text',
				'label' => 'Welcome text',
				'type' => 'textarea-simple',
				'desc' => 'Intro text on homepage, underneath main title'
			),
			array(
				'id' => 'banner-tab',
				'label' => 'Banner',
				'type' => 'tab'
			),
			array(
				'id' => 'banner_heading',
				'label' => 'Banner heading',
				'type' => 'text',
				'desc' => 'Main heading in banner area'
			),
			array(
				'id' => 'banner-sub-heading',
				'label' => 'Banner sub-heading',
				'type' => 'text',
				'desc' => 'Sub-heading in banner area'
			),
			array(
				'id' => 'banner-link',
				'label' => 'Banner link',
				'type' => 'text',
				'desc' => 'The destination for the link in the banner'
			),
			array(
				'id' => 'quick-links-tab',
				'label' => 'Quick links',
				'type' => 'tab'
			),
			array(
				'id' => 'quick-link-1',
				'label' => 'Quick link 1 text',
				'type' => 'text',
				'desc' => 'Text to display for the first quick link'
			),
			array(
				'id' => 'quick-link-1-page',
				'label' => 'Quick link 1 destination',
				'type' => 'page-select',
				'desc' => 'Please select the destination page for the first link'
			),
			array(
				'id' => 'quick-link-2',
				'label' => 'Quick link 2 text',
				'type' => 'text',
				'desc' => 'Text to display for the second quick link'
			),
			array(
				'id' => 'quick-link-2-page',
				'label' => 'Quick link 2 destination',
				'type' => 'page-select',
				'desc' => 'Please select the destination page for the second link'
			),
			array(
				'id' => 'quick-link-3',
				'label' => 'Quick link 3 text',
				'type' => 'text',
				'desc' => 'Text to display for the third quick link'
			),
			array(
				'id' => 'quick-link-3-page',
				'label' => 'Quick link 3 destination',
				'type' => 'page-select',
				'desc' => 'Please select the destination page for the third link'
			),
			array(
				'id' => 'quick-link-4',
				'label' => 'Quick link 4 text',
				'type' => 'text',
				'desc' => 'Text to display for the fourth quick link'
			),
			array(
				'id' => 'quick-link-4-page',
				'label' => 'Quick link 4 destination',
				'type' => 'page-select',
				'desc' => 'Please select the destination page for the fourth link'
			),
			array(
				'id' => 'sidebar-text-tab',
				'label' => 'Sidebar text',
				'type' => 'tab'
			),
			array(
				'id' => 'sidebar-text-title',
				'label' => 'Sidebar text title',
				'type' => 'text',
				'desc' => 'Sidebar title'
			),
			array(
				'id' => 'sidebar-text-p1',
				'label' => 'Sidebar text first para',
				'type' => 'textarea-simple',
				'desc' => 'First paragraph of sidebar body text'
			),
			array(
				'id' => 'sidebar-text-p2',
				'label' => 'Sidebar text second para',
				'type' => 'textarea-simple',
				'desc' => 'Second paragraph of sidebar body text'
			),
			array(
				'id' => 'sidebar-link',
				'label' => 'Sidebar link',
				'type' => 'page-select',
				'desc' => 'Link under sidebar text'
			),
			array(
				'id' => 'related-links',
				'label' => 'Related links',
				'type' => 'tab'
			),
			array(
				'id' => 'related-1',
				'label' => 'Related link 1 text',
				'type' => 'text',
				'desc' => 'Text to display for the first quick link'
			),
			array(
				'id' => 'related-link-1',
				'label' => 'Related link 1 URL',
				'type' => 'text',
				'desc' => 'The destination for the first related link'
			),
			array(
				'id' => 'related-2',
				'label' => 'Related link 2 text',
				'type' => 'text',
				'desc' => 'Text to display for the second quick link'
			),
			array(
				'id' => 'related-link-2',
				'label' => 'Related link 2 URL',
				'type' => 'text',
				'desc' => 'The destination for the second related link'
			),
			array(
				'id' => 'related-3',
				'label' => 'Related link 3 text',
				'type' => 'text',
				'desc' => 'Text to display for the third quick link'
			),
			array(
				'id' => 'related-link-3',
				'label' => 'Related link 3 URL',
				'type' => 'text',
				'desc' => 'The destination for the third related link'
			),
			array(
				'id' => 'related-4',
				'label' => 'Related link 4 text',
				'type' => 'text',
				'desc' => 'Text to display for the fourth quick link'
			),
			array(
				'id' => 'related-link-4',
				'label' => 'Related link 4 URL',
				'type' => 'text',
				'desc' => 'The destination for the fourth related link'
			)
		)
	), 
	array(
		'id' => 'making-application-metaboxes',
		'title' => 'Making an Application Options',
		'slug' => 'making-application',
		'pages' => array( 'page' ),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
			array(
				'id' => 'first-option-title',
				'label' => 'First option title',
				'type' => 'text',
				'desc' => 'The title for the first option on the page'
			),
			array(
				'id' => 'first-option-text',
				'label' => 'First option text',
				'type' => 'text',
				'desc' => 'The text for the first option on the page'
			),
			array(
				'id' => 'first-option-link',
				'label' => 'First option link',
				'type' => 'page-select',
				'desc' => 'The link for the first option on the page'
			),
			array(
				'id' => 'second-option-title',
				'label' => 'Second option title',
				'type' => 'text',
				'desc' => 'The title for the second option on the page'
			),
			array(
				'id' => 'second-option-text',
				'label' => 'Second option text',
				'type' => 'text',
				'desc' => 'The text for the second option on the page'
			),
			array(
				'id' => 'second-option-link',
				'label' => 'Second option link',
				'type' => 'page-select',
				'desc' => 'The link for the first second on the page'
			),
			array(
				'id' => 'third-option-title',
				'label' => 'Third option title',
				'type' => 'text',
				'desc' => 'The title for the third option on the page'
			),
			array(
				'id' => 'third-option-text',
				'label' => 'Third option text',
				'type' => 'text',
				'desc' => 'The text for the third option on the page'
			),
			array(
				'id' => 'third-option-link',
				'label' => 'Third option link',
				'type' => 'page-select',
				'desc' => 'The link for the third option on the page'
			),
			array(
				'id' => 'fourth-option-title',
				'label' => 'Fourth option title',
				'type' => 'text',
				'desc' => 'The title for the fourth option on the page'
			),
			array(
				'id' => 'fourth-option-text',
				'label' => 'Fourth option text',
				'type' => 'text',
				'desc' => 'The text for the fourth option on the page'
			),
			array(
				'id' => 'fourth-option-link',
				'label' => 'Fourth option link',
				'type' => 'page-select',
				'desc' => 'The link for the fourth option on the page'
			),

		)
	), 
	array(
		'id' => 'related-items-how-it-works',
		'title' => 'Related items',
		'slug' => 'how-it-works',
		'pages' => array( 'page' ),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
			array(
				'id' => 'related-info-tab',
				'label' => 'Related pages',
				'type' => 'tab'
			),
			array(
				'id' => 'related-info-text-1',
				'label' => 'First link text',
				'type' => 'text',
				'desc' => 'Text for the first related info link'
			),
			array(
				'id' => 'related-info-link-1',
				'label' => 'First link page',
				'type' => 'page-select',
				'desc' => 'Page for the first related info link'
			),
			array(
				'id' => 'related-info-text-2',
				'label' => 'Second link text',
				'type' => 'text',
				'desc' => 'Text for the second related info link'
			),
			array(
				'id' => 'related-info-link-2',
				'label' => 'Second link page',
				'type' => 'page-select',
				'desc' => 'Page for the second related info link'
			),
			array(
				'id' => 'related-pub-tab',
				'label' => 'Related publications',
				'type' => 'tab'
			),
			array(
				'id' => 'related-pub-text-1',
				'label' => 'First related publication text',
				'type' => 'text',
				'desc' => 'Text for the first related info link'
			),
			array(
				'id' => 'related-pub-doc-1',
				'label' => 'First related publication file',
				'type' => 'upload',
				'desc' => 'Document for the first related info link'
			),
			array(
				'id' => 'related-pub-text-2',
				'label' => 'Second related publication text',
				'type' => 'text',
				'desc' => 'Text for the second related info link'
			),
			array(
				'id' => 'related-pub-doc-2',
				'label' => 'Second related publication file',
				'type' => 'upload',
				'desc' => 'Document for the second related info link'
			),
			array(
				'id' => 'related-links-tab',
				'label' => 'Related internet links',
				'type' => 'tab'
			),
			array(
				'id' => 'related-web-text-1',
				'label' => 'First related link text',
				'type' => 'text',
				'desc' => 'Text for the first related internet link'
			),
			array(
				'id' => 'related-web-link-1',
				'label' => 'text related link URL',
				'type' => 'upload',
				'desc' => 'URL for the first related internet link'
			),
			array(
				'id' => 'related-web-text-2',
				'label' => 'Second related link text',
				'type' => 'text',
				'desc' => 'Text for the second related internet link'
			),
			array(
				'id' => 'related-web-link-2',
				'label' => 'Second related link URL',
				'type' => 'text',
				'desc' => 'URL for the second related internet link'
			),
		)
	), 
	array(
		'id' => 'related-items-can-i-apply',
		'title' => 'Related items',
		'slug' => 'can-i-apply',
		'pages' => array( 'page' ),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
			array(
				'id' => 'related-info-tab',
				'label' => 'Related pages',
				'type' => 'tab'
			),
			array(
				'id' => 'related-info-text-1',
				'label' => 'First link text',
				'type' => 'text',
				'desc' => 'Text for the first related info link'
			),
			array(
				'id' => 'related-info-link-1',
				'label' => 'First link page',
				'type' => 'page-select',
				'desc' => 'Page for the first related info link'
			),
			array(
				'id' => 'related-info-text-2',
				'label' => 'Second link text',
				'type' => 'text',
				'desc' => 'Text for the second related info link'
			),
			array(
				'id' => 'related-info-link-2',
				'label' => 'Second link page',
				'type' => 'page-select',
				'desc' => 'Page for the second related info link'
			),
			array(
				'id' => 'related-pub-tab',
				'label' => 'Related publications',
				'type' => 'tab'
			),
			array(
				'id' => 'related-pub-text-1',
				'label' => 'First related publication text',
				'type' => 'text',
				'desc' => 'Text for the first related info link'
			),
			array(
				'id' => 'related-pub-doc-1',
				'label' => 'First related publication file',
				'type' => 'upload',
				'desc' => 'Document for the first related info link'
			),
			array(
				'id' => 'related-pub-text-2',
				'label' => 'Second related publication text',
				'type' => 'text',
				'desc' => 'Text for the second related info link'
			),
			array(
				'id' => 'related-pub-doc-2',
				'label' => 'Second related publication file',
				'type' => 'upload',
				'desc' => 'Document for the second related info link'
			),
			array(
				'id' => 'related-links-tab',
				'label' => 'Related internet links',
				'type' => 'tab'
			),
			array(
				'id' => 'related-web-text-1',
				'label' => 'First related link text',
				'type' => 'text',
				'desc' => 'Text for the first related internet link'
			),
			array(
				'id' => 'related-web-link-1',
				'label' => 'text related link URL',
				'type' => 'upload',
				'desc' => 'URL for the first related internet link'
			),
			array(
				'id' => 'related-web-text-2',
				'label' => 'Second related link text',
				'type' => 'text',
				'desc' => 'Text for the second related internet link'
			),
			array(
				'id' => 'related-web-link-2',
				'label' => 'Second related link URL',
				'type' => 'text',
				'desc' => 'URL for the second related internet link'
			),
		)
	),
	array(
		'id' => 'related-items-how-to-apply',
		'title' => 'Form and related items',
		'slug' => 'how-to-apply',
		'pages' => array( 'page' ),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
			array(
				'id' => 'application-form',
				'label' => 'Application form',
				'type' => 'upload',
				'desc' => 'Upload current version of the application form here'
			),
			array(
				'id' => 'related-info-tab',
				'label' => 'Related pages',
				'type' => 'tab'
			),
			array(
				'id' => 'related-info-text-1',
				'label' => 'First link text',
				'type' => 'text',
				'desc' => 'Text for the first related info link'
			),
			array(
				'id' => 'related-info-link-1',
				'label' => 'First link page',
				'type' => 'page-select',
				'desc' => 'Page for the first related info link'
			),
			array(
				'id' => 'related-info-text-2',
				'label' => 'Second link text',
				'type' => 'text',
				'desc' => 'Text for the second related info link'
			),
			array(
				'id' => 'related-info-link-2',
				'label' => 'Second link page',
				'type' => 'page-select',
				'desc' => 'Page for the second related info link'
			),
			array(
				'id' => 'related-pub-tab',
				'label' => 'Related publications',
				'type' => 'tab'
			),
			array(
				'id' => 'related-pub-text-1',
				'label' => 'First related publication text',
				'type' => 'text',
				'desc' => 'Text for the first related info link'
			),
			array(
				'id' => 'related-pub-doc-1',
				'label' => 'First related publication file',
				'type' => 'upload',
				'desc' => 'Document for the first related info link'
			),
			array(
				'id' => 'related-pub-text-2',
				'label' => 'Second related publication text',
				'type' => 'text',
				'desc' => 'Text for the second related info link'
			),
			array(
				'id' => 'related-pub-doc-2',
				'label' => 'Second related publication file',
				'type' => 'upload',
				'desc' => 'Document for the second related info link'
			),
			array(
				'id' => 'related-links-tab',
				'label' => 'Related internet links',
				'type' => 'tab'
			),
			array(
				'id' => 'related-web-text-1',
				'label' => 'First related link text',
				'type' => 'text',
				'desc' => 'Text for the first related internet link'
			),
			array(
				'id' => 'related-web-link-1',
				'label' => 'text related link URL',
				'type' => 'upload',
				'desc' => 'URL for the first related internet link'
			),
			array(
				'id' => 'related-web-text-2',
				'label' => 'Second related link text',
				'type' => 'text',
				'desc' => 'Text for the second related internet link'
			),
			array(
				'id' => 'related-web-link-2',
				'label' => 'Second related link URL',
				'type' => 'text',
				'desc' => 'URL for the second related internet link'
			),
		)
	), 
	array(
		'id' => 'related-items-after-i-apply',
		'title' => 'Related items',
		'slug' => 'after-i-apply',
		'pages' => array( 'page' ),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
			array(
				'id' => 'related-info-tab',
				'label' => 'Related pages',
				'type' => 'tab'
			),
			array(
				'id' => 'related-info-text-1',
				'label' => 'First link text',
				'type' => 'text',
				'desc' => 'Text for the first related info link'
			),
			array(
				'id' => 'related-info-link-1',
				'label' => 'First link page',
				'type' => 'page-select',
				'desc' => 'Page for the first related info link'
			),
			array(
				'id' => 'related-info-text-2',
				'label' => 'Second link text',
				'type' => 'text',
				'desc' => 'Text for the second related info link'
			),
			array(
				'id' => 'related-info-link-2',
				'label' => 'Second link page',
				'type' => 'page-select',
				'desc' => 'Page for the second related info link'
			),
			array(
				'id' => 'related-pub-tab',
				'label' => 'Related publications',
				'type' => 'tab'
			),
			array(
				'id' => 'related-pub-text-1',
				'label' => 'First related publication text',
				'type' => 'text',
				'desc' => 'Text for the first related info link'
			),
			array(
				'id' => 'related-pub-doc-1',
				'label' => 'First related publication file',
				'type' => 'upload',
				'desc' => 'Document for the first related info link'
			),
			array(
				'id' => 'related-pub-text-2',
				'label' => 'Second related publication text',
				'type' => 'text',
				'desc' => 'Text for the second related info link'
			),
			array(
				'id' => 'related-pub-doc-2',
				'label' => 'Second related publication file',
				'type' => 'upload',
				'desc' => 'Document for the second related info link'
			),
			array(
				'id' => 'related-links-tab',
				'label' => 'Related internet links',
				'type' => 'tab'
			),
			array(
				'id' => 'related-web-text-1',
				'label' => 'First related link text',
				'type' => 'text',
				'desc' => 'Text for the first related internet link'
			),
			array(
				'id' => 'related-web-link-1',
				'label' => 'text related link URL',
				'type' => 'upload',
				'desc' => 'URL for the first related internet link'
			),
			array(
				'id' => 'related-web-text-2',
				'label' => 'Second related link text',
				'type' => 'text',
				'desc' => 'Text for the second related internet link'
			),
			array(
				'id' => 'related-web-link-2',
				'label' => 'Second related link URL',
				'type' => 'text',
				'desc' => 'URL for the second related internet link'
			),
		)
	),  
array(
		'id' => 'case-details',
		'title' => 'Case details',
		'pages' => array( 'case' ),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
			array(
				'id' => 'case-name',
				'label' => 'Case name',
				'type' => 'text',
				'desc' => 'The name of the case'
			),
			array(
				'id' => 'case-reference',
				'label' => 'Case reference',
				'type' => 'text',
				'desc' => 'The refernce number of the case'
			),
			array(
				'id' => 'case-court-date',
				'label' => 'Court date',
				'type' => 'date-picker',
				'desc' => 'Date case referred to court'
			),
			array(
				'id' => 'case-appeal-date',
				'label' => 'Appeal date',
				'type' => 'date-picker',
				'desc' => 'Date of appeal outcome'
			),
			array(
				'id' => 'case-appeal-outcome',
				'label' => 'Appeal outcome',
				'type' => 'select',
				'desc' => 'The appeal outcome',
				'choices'     => array( 
          array(
            'value'       => '',
            'label'       => __( '-- Choose One --', 'roots' ),
            'src'         => ''
          ),
          array(
            'value'       => 'Quashed',
            'label'       => __( 'Quashed', 'roots' ),
            'src'         => ''
          ),
          array(
            'value'       => 'Upheld',
            'label'       => __( 'Upheld', 'roots' ),
            'src'         => ''
          ),
          array(
            'value'       => 'Abandoned',
            'label'       => __( 'Abandoned', 'roots' ),
            'src'         => ''
          )
        )
			),
			// array(
			// 	'id' => 'case-judgement',
			// 	'label' => 'Case judgement',
			// 	'type' => 'select',
			// 	'desc' => 'The judgement',
			// 					'choices'     => array( 
   //        array(
   //          'value'       => '',
   //          'label'       => __( '-- Choose One --', 'roots' ),
   //          'src'         => ''
   //        ),
   //        array(
   //          'value'       => 'Available',
   //          'label'       => __( 'Available', 'roots' ),
   //          'src'         => ''
   //        ),
   //        array(
   //          'value'       => 'Not Available',
   //          'label'       => __( 'Not Available', 'roots' ),
   //          'src'         => ''
   //        )
   //      )
			// )
		)
	) 
);
