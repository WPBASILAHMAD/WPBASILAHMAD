<?php
/**
 * Elementor Flip Card Widget Class
 *
 * @package           WpbaFlipCards
 * @author            Basil Ahmad
 * @copyright         2021 N-media
 * @license           GPL-2.0-or-later
 */

class WPBA_Flip_Card extends \Elementor\Widget_Base {

	
	public function get_name() {
		return 'wp-flip-card';
	}

	
	public function get_title() {
		return esc_html__( 'Flip Box', 'wp-new-flip-card' );
	}

	
	public function get_icon() {
		return 'eicon-flip-box';
	}

	
	public function get_custom_help_url() {
		return 'https://basil.nmediahosting.com/';
	}

	
	public function get_categories() {
		return [ 'general' ];
	}

	
	protected function register_controls() {

		$this->start_controls_section(
			'front_content_section',
			[
				'label' => esc_html__( 'Front', 'wp-new-flip-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'front_title',
			[
				'label' => esc_html__( 'Title', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'wp-new-flip-box' ),
				'placeholder' => esc_html__( 'Type your title here', 'wp-new-flip-box' ),
			]
		);

        $this->add_control(
			'front_description',
			[
				'label' => esc_html__( 'Description', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'A short sentence describing this callout is.', 'wp-new-flip-box' ),
				'placeholder' => esc_html__( 'Type your description here', 'wp-new-flip-box' ),
			]
		);

        $this->add_control(
			'icon',
			[
				'label' => esc_html__( 'Icon', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
			]
		);


		$this->end_controls_section();


        $this->start_controls_section(
			'back_content_section',
			[
				'label' => esc_html__( 'Back', 'wp-new-flip-box' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'back_title',
			[
				'label' => esc_html__( 'Title', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'wp-new-flip-box' ),
				'placeholder' => esc_html__( 'Type your title here', 'wp-new-flip-box' ),
			]
		);

        $this->add_control(
			'back_description',
			[
				'label' => esc_html__( 'Description', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'A short sentence describing this callout is.', 'wp-new-flip-box' ),
				'placeholder' => esc_html__( 'Type your description here', 'wp-new-flip-box' ),
			]
		);
      
        

        $this->add_control(
			'button_options',
			[
				'label' => esc_html__( 'Button', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
      
      
        $this->add_control(
			'button_title',
			[
				'label' => esc_html__( 'Title', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'LEARN MORE', 'wp-new-flip-box' ),
				'placeholder' => esc_html__( 'Type your title here', 'wp-new-flip-box' ),
			]
		);

        
        $this->add_control(
			'website_link',
			[
				'label' => esc_html__( 'Link', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'wp-new-flip-box' ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => '',
					'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);


		$this->end_controls_section();
 
    
     
        //style..........
        $this->start_controls_section(
            'style_section',
            [
                'label' => esc_html__( 'Front', 'wp-new-flip-box' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
         
		
       
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .front_title',
			]
		);
		

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Title Color', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .front_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'text_shadow',
				'label' => esc_html__( 'Text Shadow', 'wp-new-flip-box' ),
				'selector' => '{{WRAPPER}} .front_title',
			]
		);
		
        //Description

		$this->add_control(
			'description_style_options',
			[
				'label' => esc_html__( 'Description', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
          
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'front_description_typography',
				'selector' => '{{WRAPPER}} .front_description',
			]
		);

		$this->add_control(
			'description_color',
			[
				'label' => esc_html__( 'Color', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .front_description' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'front_description_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'wp-new-flip-box' ),
				'selector' => '{{WRAPPER}} .front_description',
			]
		);

		$this->end_controls_section();



		//back-side-styling....

		$this->start_controls_section(
            'back_style_section',
            [
                'label' => esc_html__( 'Back', 'wp-new-flip-box' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
         
		
       
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'back_content_typography',
				'selector' => '{{WRAPPER}} .back_title',
			]
		);
		

		$this->add_control(
			'back_title_color',
			[
				'label' => esc_html__( 'Title Color', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .back_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'back_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'wp-new-flip-box' ),
				'selector' => '{{WRAPPER}} .back_title',
			]
		);
		

		
        //Description
      
		$this->add_control(
			'back_description_style_options',
			[
				'label' => esc_html__( 'Description', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
          
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'back_description_typography',
				'selector' => '{{WRAPPER}} .back_description',
			]
		);

		$this->add_control(
			'back_description_color',
			[
				'label' => esc_html__( 'Color', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .back_description' => 'color: {{VALUE}}',
				],
			]
		);


		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'back_description_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'wp-new-flip-box' ),
				'selector' => '{{WRAPPER}} .back_description',
			]
		);
        

		//Description
      
		$this->add_control(
			'button_style_options',
			[
				'label' => esc_html__( 'Button', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
          
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'btn-style_typography',
				'selector' => '{{WRAPPER}} .btn-style',
			]
		);

		$this->add_control(
			'button_color',
			[
				'label' => esc_html__( 'Color', 'wp-new-flip-box' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .btn-style' => 'color: {{VALUE}}',
				],
			]
		);


		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'button_text_shadow',
				'label' => esc_html__( 'Text Shadow', 'wp-new-flip-box' ),
				'selector' => '{{WRAPPER}} .btn-style',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'wp-new-flip-box' ),
				'selector' => '{{WRAPPER}} .btn-style',
			]
		);


		$this->end_controls_section();
  
       
	}

	

	
	protected function render() {    
		$settings = $this->get_settings_for_display();
        if ( ! empty( $settings['website_link']['url'] ) ) {
			$this->add_link_attributes( 'website_link', $settings['website_link'] );
		}
?>

<div class="box-container">
	<div class="box-item" id="flipBox">
    <div class="flip-box">
      <div class="flip-box-front text-center" style="background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg');">
        <div class="inner color-white">
         
		<div class="container font-bg">
		<h3 class="flip-box-header front_title"><?php echo $settings['front_title'] ?></h3>
		</div>
          
         
          <p class="front_description"><?php echo $settings['front_description'] ?></p>
           
          <div class="my-icon-wrapper">
			<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
		</div>

        </div>
      </div>
      <div class="flip-box-back text-center" style="background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg');">
        <div class="inner color-white">
          <h3 class="flip-box-header back_title"><?php echo $settings['back_title'] ?></h3>
          <p class="back_description"><?php echo $settings['back_description'] ?></p><br>
          <a class="flip-box-button btn-style"><?php echo $settings['button_title'] ?></a>
        </div>
      </div>
    </div>
	</div>
</div>

        <?php
	}

}