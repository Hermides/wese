<?php

class Cron_job extends Private_Controller {

    public function active() {

        @$data['datos'] = $this->cron->active();
        @$this->load->view('cron_job', $data);
    }
    
    
    public function desactive(){
        @$data['datos'] = $this->cron->active();
        @$this->load->view('desactive', $data);
    }

}
