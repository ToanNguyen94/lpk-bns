<?php

namespace Titanweb\lpk;

class Fields
{

	public function __construct()
	{
		add_filter('rwmb_meta_boxes', [$this, 'register']);
	}
	public function register($meta_boxes)
	{
		$meta_boxes[] = $this->banner();

		return $meta_boxes;
	}

	public function banner()
	{
		return [
			'title'      => __('Setting Page', 'lpk'),
			'post_types' => ['page'],
			// 'tab_style'  => 'left',
			'include'    => [
				'relation' => 'OR',
				'template' => ['page-templates/home-page.php'],
			],
			'tabs'	=> [
				'banner'	=> [
					'label'	=> 'Banner'
				],
				'section1'	=> [
					'label'	=> '代表者'
				],
				'section2'	=> [
					'label'	=> '会社'
				],
				'section3'	=> [
					'label'	=> 'LPK BNS の'
				],
				'section4'	=> [
					'label'	=> '技能実習生'
				],
				'footer'	=> [
					'label'	=> 'Footer'
				],
			],
			'fields'     => [
				//Banner
				[
					'name' => esc_html__('Link see more', 'lpk'),
					'id'   => 'banner-see',
					'type' => 'text',
					'tab'  => 'banner',
				],
				[
					'name' => esc_html__('Link video', 'lpk'),
					'id'   => 'banner-video',
					'type' => 'text',
					'tab'  => 'banner',
				],
				[
					'id'            => 'banner-group',
					'name'          => esc_html__('', 'lpk'),
					'type'          => 'group',
					'clone'         => true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'save_state'    => true,
					'group_title'   => 'Banner {#}',
					'tab'           => 'banner',
					'fields'        => [
						[
							'name'              => esc_html__('Background Image', 'lpk'),
							'id'                => 'banner-background',
							'type'              => 'single_image',
							'label_description' => __('1920*640', 'lpk'),
						],
						[
							'name'              => esc_html__('Content', 'lpk'),
							'id'                => 'banner-content',
							'type'    => 'wysiwyg',
							'options' => [
								'textarea_rows' => 3,
								'media_buttons' => false,
							],
						],
						[
							'name'              => esc_html__('Image', 'lpk'),
							'id'                => 'banner-image',
							'type'              => 'single_image',
							// 'label_description' => __('1920*640', 'lpk'),
						],
					],
				],

				// 代表者ご挨拶
				[
					'name'              => esc_html__('Image', 'lpk'),
					'id'                => 'section1-image',
					'type'              => 'single_image',
					// 'label_description' => __('1920*640', 'lpk'),
					'tab'           => 'section1',
				],
				[
					'name' => esc_html__('Title', 'lpk'),
					'id'   => 'section1-title',
					'type' => 'text',
					'tab'  => 'section1',
				],
				[
					'name'              => esc_html__('Content', 'lpk'),
					'id'                => 'section1-content',
					'type'    => 'wysiwyg',
					'options' => [
						'textarea_rows' => 3,
						'media_buttons' => false,
					],
					'tab'           => 'section1',
				],

				//会社概要
				[
					'name' => esc_html__('Title', 'lpk'),
					'id'   => 'section2-title',
					'type' => 'text',
					'tab'  => 'section2',
				],
				[
					'name'              => esc_html__('Content', 'lpk'),
					'id'                => 'section2-content',
					'type'    => 'wysiwyg',
					'options' => [
						'textarea_rows' => 3,
						'media_buttons' => false,
					],
					'tab'           => 'section2',
				],
				[
					'name'          => esc_html__('', 'lpk'),
					'id'            => 'section2-group',
					'type'          => 'group',
					'clone'         => true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'save_state'    => true,
					// 'group_title'   => '#{#}',
					'tab'           => 'section2',
					'fields'        => [
						[
							'name'              => esc_html__('Icon', 'lpk'),
							'id'                => 'section2-icon',
							'type'              => 'single_image',
							// 'label_description' => __('1920*640', 'lpk'),
						],
						[
							'name'              => esc_html__('Description', 'lpk'),
							'id'                => 'section2-desc',
							'type'    => 'wysiwyg',
							'options' => [
								'textarea_rows' => 3,
								'media_buttons' => false,
							],
						],
					],
				],
				//LPK BNS の
				//Tab Name
				[
					'id'            => 'tab-names',
					'name'          => esc_html__('Tab name', 'lpk'),
					'type'          => 'group',
					'clone'         => true,
					'max_clone' 	=> 4,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'save_state'    => true,
					'group_title'   => 'Tab {#}',
					'tab'           => 'section3',
					'fields'        => [
						[
							'name'              => esc_html__('Name', 'lpk'),
							'id'                => 'tab-title',
						],
					],
				],
				//Tab1
				[
					'name'              => esc_html__('Tab1', 'lpk'),
					'id'                => 'tab1-image',
					'type'              => 'single_image',
					// 'label_description' => __('1920*640', 'lpk'),
					'tab'           => 'section3',
				],
				//Tab2
				[
					'id'            => 'tab2-group',
					'name'          => esc_html__('Tab 2', 'lpk'),
					'type'          => 'group',
					'clone'         => true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'save_state'    => true,
					'group_title'   => '{tab2-group-title}',
					'tab'           => 'section3',
					'fields'        => [
						[
							'name'              => esc_html__('Image', 'lpk'),
							'id'                => 'tab2-group-image',
							'type'              => 'single_image',
							// 'label_description' => __('1920*640', 'lpk'),
						],
						[
							'name'              => esc_html__('Name', 'lpk'),
							'id'                => 'tab2-group-title',
						],
					],
				],
				//Tab3
				[
					'id'            => 'tab3-group1',
					'name'          => esc_html__('Tab 3', 'lpk'),
					'type'          => 'group',
					'clone'         => true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'save_state'    => true,
					'group_title'   => 'Content {#}',
					'tab'           => 'section3',
					'fields'        => [
						[
							'name'              => esc_html__('Name', 'lpk'),
							'id'                => 'tab3-group1-content',
							'type'    => 'wysiwyg',
							'options' => [
								'textarea_rows' => 3,
								'media_buttons' => false,
							],
						],
					],
				],
				[
					'id'            => 'tab3-group',
					'name'          => esc_html__('', 'lpk'),
					'type'          => 'group',
					'clone'         => true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'save_state'    => true,
					'group_title'   => '{tab3-group-title}',
					'tab'           => 'section3',
					'fields'        => [
						[
							'name'              => esc_html__('Image', 'lpk'),
							'id'                => 'tab3-group-image',
							'type'              => 'single_image',
							'label_description' => __('380*253', 'lpk'),
						],
						[
							'name'              => esc_html__('Name', 'lpk'),
							'id'                => 'tab3-group-title',
						],
					],
				],
				//Tab4
				[
					'name'              => esc_html__('Tab 4', 'lpk'),
					'id'                => 'tab4-image',
					'type'              => 'single_image',
					// 'label_description' => __('1920*640', 'lpk'),
					'tab'           => 'section3',
				],

				// 技能実習生選択試験
				[
					'name' => esc_html__('試 験', 'lpk'),
					'id'   => 'section4-title1',
					'type' => 'text',
					'tab'  => 'section4',
				],
				[
					'id'            => 'section4-group',
					'name'          => esc_html__('', 'lpk'),
					'type'          => 'group',
					'clone'         => true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'save_state'    => true,
					'group_title'   => '{section4-group-title}',
					'tab'           => 'section4',
					'fields'        => [
						[
							'name'              => esc_html__('Image', 'lpk'),
							'id'                => 'section4-group-image',
							'type'              => 'single_image',
							// 'label_description' => __('1920*640', 'lpk'),
						],
						[
							'name'              => esc_html__('Name', 'lpk'),
							'id'                => 'section4-group-title',
						],
					],
				],
				// 技能実習生向け教育
				[
					'name' => esc_html__('教 育', 'lpk'),
					'id'   => 'section4-title2',
					'type' => 'text',
					'tab'  => 'section4',
				],
				[
					'id'            => 'section4-group2',
					'name'          => esc_html__('Content', 'lpk'),
					'type'          => 'group',
					'clone'         => true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'save_state'    => true,
					'group_title'   => 'Content {#}',
					'tab'           => 'section4',
					'fields'        => [
						[
							'name'              => esc_html__('', 'lpk'),
							'id'                => 'section4-group2-content',
							'type'    => 'wysiwyg',
							'options' => [
								'textarea_rows' => 3,
								'media_buttons' => false,
							],
						],
					],
				],
				[
					'name'              => esc_html__('Gallery', 'lpk'),
					'id'                => 'section4-image',
					'type'              => 'image_advanced',
					// 'label_description' => __('1920*640', 'lpk'),
					'tab'           => 'section4',
				],

				// Footer
				[
					'name' => esc_html__('Title', 'lpk'),
					'id'   => 'footer-title',
					'type' => 'text',
					'tab'  => 'footer',
				],
				[
					'name' => esc_html__('Location', 'lpk'),
					'id'   => 'footer-location',
					'type' => 'text',
					'tab'  => 'footer',
				],
				[
					'name' => esc_html__('phone', 'lpk'),
					'id'   => 'footer-phone',
					'type' => 'text',
					'tab'  => 'footer',
				],
				[
					'name' => esc_html__('mail', 'lpk'),
					'id'   => 'footer-mail',
					'type' => 'text',
					'tab'  => 'footer',
				],
				[
					'name' => esc_html__('Web', 'lpk'),
					'id'   => 'footer-web',
					'type' => 'text',
					'tab'  => 'footer',
				],
			],
		];
	}
}
