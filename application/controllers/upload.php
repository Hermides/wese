<?php

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $this->load->view('upload_form');
    }

    function form() {
        $this->load->view('upload_form');
    }

    function do_upload() {
        /* $config['upload_path'] = "./camp/";
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_size'] = '2048';
          $config['max_width'] = '960';
          $config['max_height'] = '600';
          $this->load->library('upload', $config);

          if (!$this->upload->do_upload()) {
          $error = array('error' => $this->upload->display_errors());
          $this->load->view('upload_form', $error);
          echo @$msj_error;
          } else {
          echo "bien"; *//*
          $user = $this->user->nombre.$this->user->correo;
          $camp = $_POST['campn'];
          $date = date('d-m-Y');
          $filadoor = $file_img['file_name'];
          $filarenon = date('H-i-s-YddYmM') . "camp";
          rename("./camp/$filadoor", "./camp/$filarenon");

          $sql = array(
          'nombre_camp' => "$camp",
          'img' => "/camp/$user/$fileuser",
          'user_id' => "$user",
          'fecha_upload' => "$date",
          'descripcion' => ""
          );
          $this->db->insert('img_camp', $sql);

          redirect('in/newcampaign?listo');
          } */
        /*
          $config['upload_path'] = './camp/';
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_size'] = '10240';
          $config['max_width'] = '5000';
          $config['max_height'] = '4000';

          $this->load->library('upload', $config);

          if (!$this->upload->do_upload()) {
          $error = array('error' => $this->upload->display_errors());

          $this->load->view('upload_form', $error);
          } else {
          $file_img = $this->upload->data();
          $data['img'] = "./camp/" . $file_img['file_name'];
          $this->load->view('upload_success', $data);
          /*
          date_default_timezone_set('America/Santo_Domingo');
          if (@$_POST['verf'] != '') {
          $rtom = $_POST['verf'];
          $ssl = $this->db->like('key_img', $rtom , 'both');
          $ssl = $this->db->get('solicitudes');

          foreach ($ssl->result() as $const_rows);

          $user = $_POST['user'];
          $date = date('d-m-Y');
          $filadoor = $file_img['file_name'];
          $filarenon = md5(date('H:i:s') . "solicitud");
          rename("./camp/$filadoor", "./camp/$filarenon");

          $sql = array(
          'css' => $_POST['css'],
          'img' => "/camp/" . $filarenon,
          'user_id' => "$user",
          'fecha_upload' => "$date"
          );
          $this->db->insert('img_solicitud', $sql);
          redirect('upload?add_plus=none&verf='.$_POST['verf'].'&us='.$_POST['user'].'&css='.$_POST['css'].'');
          } else {
          $user = $_POST['1'];
          $camp = $_POST['2'];
          $date = date('d-m-Y');
          $descrip = $_POST['3'];
          $filadoor = $file_img['file_name'];
          $filarenon = md5(date('H:i:s') . "camp");
          rename("./camp/$filadoor", "./camp/$filarenon");

          $sql = array(
          'nombre_camp' => "$camp",
          'img' => "/camp/" . $filarenon,
          'user_id' => "$user",
          'fecha_upload' => "$date",
          'descripcion' => "$descrip"
          );
          $this->db->insert('img_camp', $sql);

          redirect('in/newcampaign?listo');
          }
         */
        
          $config['upload_path'] = './camp/';
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_size'] = '10240';
          $config['max_width'] = '5000';
          $config['max_height'] = '4000';

          $this->load->library('upload', $config);

          if (!$this->upload->do_upload()) {
          $error = array('error' => $this->upload->display_errors());
          $this->load->view('upload_form', $error);
          } else {
          date_default_timezone_set('America/Santo_Domingo');
          $user = $_POST['campuser'];
          $file_img = $this->upload->data();
          $filadoor = $file_img['file_name'];
          $filarenon = date('H-i-s-d-m-Y') . "campaning";
          $camp = $_POST['nomcamp'];
          $date=date('d-m-Y--H:i:s');
          $descrip = $_POST['descp'];
          rename("./camp/$filadoor", "./camp/$filarenon.");
          $sql = array(
          'nombre_camp' => "$camp",
          'img' => "/camp/" . $filarenon,
          'user_id' => "$user",
          'fecha_upload' => "$date",
          'descripcion' => "$descrip"
          );
          $this->db->insert('img_camp', $sql);

          redirect("upload/form?camp=$user&nom=$camp"); 
          }
// A list of permitted file extensions
        /* $this->load->library('ftp');

          $config['hostname'] = 'ftp.example.com';
          $config['username'] = 'your-username';
          $config['password'] = 'your-password';
          $config['debug']	= TRUE;

          $this->ftp->connect($config);

          $this->ftp->upload('/local/path/to/myfile.html', '/public_html/myfile.html', 'ascii', 0775);

          $this->ftp->close(); 

        $config['upload_path'] = './camp/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10240';
        $config['max_width'] = '5000';
        $config['max_height'] = '4000';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            echo "Todas subieron.";
        }*/
    }

    function user() {
        $config['upload_path'] = './perfiles/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '100';
        $config['max_height'] = '100';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            redirect('in/perfil?errorupload');
        } else {
            date_default_timezone_set('America/Santo_Domingo');
            $user = $_POST['user'];
            $file_img = $this->upload->data();
            $filadoor = $file_img['file_name'];
            $filarenon = md5(date('H:i:s') . "perfilimage");
            rename("./perfiles/$filadoor", "./perfiles/$filarenon");
            $img = "/perfiles/" . $filarenon;
            $this->db->query("UPDATE `users` SET `img` = '$img' WHERE `users`.`id` = $user;");

            redirect('in/perfil');
        }
    }

}

?>
