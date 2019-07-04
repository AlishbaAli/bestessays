<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        $this->view('component/admin/header', $vars, $return); // header
        $this->view($template_name, $vars, $return); // view
        $this->view('component/admin/footer', $vars, $return); // footer
    }
    public function front_template($template_name, $vars = array(), $return = FALSE)
    {
        $this->view('component/front2/header', $vars, $return); // header
        $this->view($template_name, $vars, $return); // view
        $this->view('component/front2/footer', $vars, $return); // footer
    }

    public function front_template_services($template_name, $vars = array(), $return = FALSE)
    {
        $this->view('component/front_services/header', $vars, $return); // header
        $this->view($template_name, $vars, $return); // view
        $this->view('component/front_services/footer', $vars, $return); // footer
    }
}