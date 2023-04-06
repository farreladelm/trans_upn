<?php

class View_admin
{
    var $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    public function load($body_view = null, $data = [])
    {
        $data['curr_page'] = $data['curr_page'] ? $data['curr_page'] : '';
        $body = $this->ci->load->view($body_view, $data, true);

        $data['body'] = $body;
        $template_view = 'admin/_template/layout';

        $this->ci->load->view($template_view, $data);
    }
}
