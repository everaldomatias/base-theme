<?php

/**
 * Kirki Framework.
 */

Kirki::add_config( 'kirki_custom_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/**
 * Sessões
 * ==============================================================================
 */
Kirki::add_section( 'contatos', array(
    'title'          => __( 'Informações de Contatos' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );
Kirki::add_section( 'social', array(
    'title'          => __( 'Redes Sociais' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


/**
 * Campos (separados por Sessões)
 * ==============================================================================
 */

/* Contatos */
Kirki::add_field( 'kirki_custom_config', array(
	'type'			=> 'text',
	'settings'		=> 'telefone',
	'label'			=> __( 'Telefone', 'odin' ),
	'section'		=> 'contatos',
	'description'	=> esc_attr__( 'Adicione o número de contato principal', 'odin' ),
	'priority'		=> 10,
) );
Kirki::add_field( 'kirki_custom_config', array(
	'type'			=> 'text',
	'settings'		=> 'whatsapp',
	'label'			=> __( 'Whatsapp', 'odin' ),
	'section'		=> 'contatos',
	'description'	=> esc_attr__( 'Adicione o número de whatsapp para atendimento', 'odin' ),
	'priority'		=> 10,
) );
Kirki::add_field( 'kirki_custom_config', array(
	'type'			=> 'text',
	'settings'		=> 'email',
	'label'			=> __( 'E-mail', 'odin' ),
	'section'		=> 'contatos',
	'description'	=> esc_attr__( 'Adicione o e-mail principal de atendimento', 'odin' ),
	'priority'		=> 10,
) );
Kirki::add_field( 'kirki_custom_config', array(
	'type'			=> 'text',
	'settings'		=> 'endereco',
	'label'       => __( 'Endereço', 'odin' ),
	'section'		=> 'contatos',
	'description'	=> esc_attr__( 'Adicione o endereço físico da empresa. Utilize um endereço que seja legível para o Google Maps, assim o mapa de localização será apresentado automaticamente', 'odin' ),
	'priority'		=> 10,
) );
Kirki::add_field( 'kirki_custom_config', array(
	'type'        => 'checkbox',
	'settings'    => 'show_maps',
	'label'    => __( 'Exibir o mapa na página Contato?', 'odin' ),
	'section'     => 'contatos',
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( 'kirki_custom_config', array(
	'type'        => 'text',
	'settings'    => 'key_google_maps',
	'label'    => __( 'API Key do Google Maps', 'odin' ),
	'section'     => 'contatos',
	'description'	=> 'Caso não tenha uma API Key, poderá utilizar essa: AIzaSyCRo8ahHJbr1wU_umHtaW--wEE-AgB1ONU <br> Veja mais na documentação do <a href="https://developers.google.com/maps/documentation/embed/guide">Google</a>',
	'default'     => 'AIzaSyCRo8ahHJbr1wU_umHtaW--wEE-AgB1ONU',
	'priority'    => 10,
) );

/* Social */
Kirki::add_field( 'kirki_custom_config', array(
	'type'			=> 'text',
	'settings'		=> 'instagram',
	'label'       => __( 'Instagram', 'odin' ),
	'section'		=> 'social',
	'description'	=> esc_attr__( 'Adicione apenas o nome de usuário do instagram (sem o @)', 'odin' ),
	'priority'		=> 10,
) );
Kirki::add_field( 'kirki_custom_config', array(
	'type'			=> 'text',
	'settings'		=> 'facebook',
	'label'       => __( 'Facebook', 'odin' ),
	'section'		=> 'social',
	'description'	=> esc_attr__( 'Adicione apenas o nome de usuário do facebook, tudo que vem depois de facebook.com/', 'odin' ),
	'priority'		=> 10,
) );