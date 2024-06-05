<?php

    /*
    Plugin Name: [Sinapsis] Instructor
    Plugin URI: https://sinapsis.com
    Description: Plugin para contenido de página instructor e instructores
    Version: 1.0
    Author: Diego Baeza
    Author URI: https://sisnapsis.com
    License: GPL2
    */

    require(dirname(__FILE__) .'../../../../wp-load.php');


    add_action( 'wp_enqueue_scripts', 'ajax_enqueue_scripts_instructor' );

    function ajax_enqueue_scripts_instructor() {

        if(basename(get_permalink()) == "instructor"){

            wp_enqueue_script(
            'js-instructor-sinapsis',
            plugins_url( '/public/js/instructor.js', __FILE__ ), 
            array('jquery'),
            rand(0, 99),
            true
            );

        }

        wp_enqueue_style( 
        'css-instructor-sinapsis',
        plugins_url( '/public/css/instructor.css', __FILE__ ),
        array(),
        rand(0, 99)
        );

        wp_enqueue_style( 
        'css-instructores-sinapsis',
        plugins_url( '/public/css/instructores.css', __FILE__ ),
        array(),
        rand(0, 99)
        );

    }


    function shortcode_instructores($atts){

        $smarty = new Smarty;

        $smarty->setTemplateDir(dirname(__FILE__) . '/public/partials/');
        $smarty->setCompileDir(dirname(__FILE__) .'/public/compile/');

        $instructores = RfCoreCurl::curl('/api/instructor/' , 'GET' , null, null);

        $smarty->assign('instructores', $instructores);

        return $smarty->fetch('instructores.tpl');

    }

    add_shortcode("shortcodeinstructores" , "shortcode_instructores");



    function shortcode_instructor_by_id($atts){

        $id_instructor = $_GET["id"];
        $smarty = new Smarty;

        $smarty->setTemplateDir(dirname(__FILE__) . '/public/partials/');
        $smarty->setCompileDir(dirname(__FILE__) .'/public/compile/');

        $instructor = RfCoreCurl::curl('/api/instructor/'.$id_instructor , 'GET' , null, null);

        $cursos = RfCoreCurl::curl('/api/course/get_course_by_id_instructor/'.$id_instructor , 'GET' , null , null);

        $smarty->assign('instructor', $instructor);
        $smarty->assign('cursos', $cursos);

        return $smarty->fetch('instructor.tpl');

    }

    add_shortcode("shortcodeinstructorbyid" , "shortcode_instructor_by_id");



?>