<?php

// Register Cases
function cbes_cases()
{
	$labels = array(
		'name'                  => _x('Cases', 'Cases', 'text_domain'),
		'singular_name'         => _x('Case', 'Case', 'text_domain'),
		'menu_name'             => __('Cases', 'text_domain'),
		'name_admin_bar'        => __('Cases', 'text_domain'),
		'archives'              => __('Item Archives', 'text_domain'),
		'attributes'            => __('Item Attributes', 'text_domain'),
		'parent_item_colon'     => __('Parent Item:', 'text_domain'),
		'all_items'             => __('Todos os Cases', 'text_domain'),
		'add_new_item'          => __('Adicionar novo Case', 'text_domain'),
		'add_new'               => __('Adicionar novo', 'text_domain'),
		'new_item'              => __('Adicionar novo Case', 'text_domain'),
		'edit_item'             => __('Editar Case', 'text_domain'),
		'update_item'           => __('Ataulizar Case', 'text_domain'),
		'view_item'             => __('Ver Case', 'text_domain'),
		'view_items'            => __('Ver Cases', 'text_domain'),
		'search_items'          => __('Procurar por Case', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'featured_image'        => __('Imagem de destaque', 'text_domain'),
		'set_featured_image'    => __('Colocar imagem de destaque', 'text_domain'),
		'remove_featured_image' => __('Remover imagem de destaque', 'text_domain'),
		'use_featured_image'    => __('Usar a imagem de destaque', 'text_domain'),
		'insert_into_item'      => __('Insert into item', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
		'items_list'            => __('Lista de Cases', 'text_domain'),
		'items_list_navigation' => __('Items list navigation', 'text_domain'),
		'filter_items_list'     => __('Filtrar lista de Cases', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Case', 'text_domain'),
		'description'           => __('Cases', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail', 'cbes-fields'),
		'taxonomies'            => array('Categoria', 'tipo'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest' => true,
	);
	register_post_type('cases', $args);
}
add_action('init', 'cbes_cases', 0);


// Register Categoria
function cbes_categoria()
{

	$labels = array(
		'name'                       => _x('Categorias', 'Categoria', 'text_domain'),
		'singular_name'              => _x('Categoria', 'Categoria', 'text_domain'),
		'menu_name'                  => __('Categoria', 'text_domain'),
		'all_items'                  => __('Todas as Categorias', 'text_domain'),
		'parent_item'                => __('Categoria parente', 'text_domain'),
		'parent_item_colon'          => __('Categoria parente:', 'text_domain'),
		'new_item_name'              => __('Nova Categoria', 'text_domain'),
		'add_new_item'               => __('Adicionar nova Categoria', 'text_domain'),
		'edit_item'                  => __('Editar Categoria', 'text_domain'),
		'update_item'                => __('Atualizar Categoria', 'text_domain'),
		'view_item'                  => __('Ver Categoria', 'text_domain'),
		'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
		'add_or_remove_items'        => __('Adicionar ou remover Categorias', 'text_domain'),
		'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
		'popular_items'              => __('Categorias populares', 'text_domain'),
		'search_items'               => __('Procurar Categoria', 'text_domain'),
		'not_found'                  => __('Sem buscas', 'text_domain'),
		'no_terms'                   => __('Sem itens', 'text_domain'),
		'items_list'                 => __('Lista de Categorias', 'text_domain'),
		'items_list_navigation'      => __('Items list navigation', 'text_domain'),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest' => true,
	);
	register_taxonomy('categoria', array('cases'), $args);
}
add_action('init', 'cbes_categoria', 0);
