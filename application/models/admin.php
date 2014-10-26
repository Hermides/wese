<?php

class admin extends CI_Model {

    var $row = "";

    function nuevac() {
        if($this->input->post('nombre')){
            
        }else{
            redirect('in');
        }
        date_default_timezone_set('America/Santo_Domingo');
        /* values con post o get */
        $nom = $_REQUEST['nombre'];
        $pr1 = $_REQUEST['parte1_1fechaI'] . "-" . $_REQUEST['parte1_2fechaI'] . "-" . $_REQUEST['parte1_3fechaI'];
        $pr2 = $_REQUEST['parte2_1fechaf'] . "-" . $_REQUEST['parte2_2fechaf'] . "-" . $_REQUEST['parte2_3fechaf'];
        $zn = $_REQUEST['zona'];
        $hoy = date('d-m-Y');

        $tp = $_REQUEST['tipo'];
        $ctg = $_REQUEST['categoria'];
        $hoy = date('d-m-Y');
        $user_id = $this->user->id;
        $desp = @$_POST['descrip'];
        /* creanos la nueva campana */
        $dat = array(
            'nombre' => @$nom,
            'inicia' => @$pr1,
            'termina' => @$pr2,
            'creado' => @$hoy,
            'estado' => 'false',
            'tipo' => @$tp,
            'categoria' => @$ctg,
            'zona_id' => @$zn,
            'user_id' => @$user_id
        );
        if (!empty($_REQUEST)) {
            $this->db->insert('camp', $dat);
            redirect("upload/do_upload?camp=$user_id&nom=$nom");
        }

#redirect('in', 'refresh');
    }

    function lista01() {
        $user = $this->user->id;
        $sql = $this->db->query("SELECT * FROM `camp` where `user_id` like '%$user%'");
        if ($sql->num_rows() != "") {
            if ($sql->num_rows() > 0) {

                foreach ($sql->result() as $fila):
                    $data[] = $fila;
                endforeach;
            }
            return $data;
        }
    }

    function reg_client() {

        if (!empty($_POST['empresa']) and ! empty($_POST['email']) and ! empty($_POST['area']) and ! empty($_POST['codigo']) and ! empty($_POST['idphone']) and ! empty($_POST['categoria']) and ! empty($_POST['password'])) {
            $email = $_POST['email'];
            $keys = date('H:i:s') . "users" . $_POST['empresa'];
            $token = md5($keys);
            $client = array(
                'id_cliente' => NULL,
                'Empresa' => $_POST['empresa'],
                'Email' => $email,
                'Web' => $_POST['web'],
                'Tel' => $_POST['area'] . '-' . $_POST['codigo'] . "-" . $_POST['idphone'],
                'Categoria_id' => $_POST['categoria'],
                'direccion' => "NULL",
                'passwd' => md5($_POST['password']),
                'creado' => date('d-m-Y'),
                'token' => $token,
                'img' => '/perfiles/nuevo_usuario.png'
            );
            $this->db->insert('clientes', $client);

            $config['charset'] = 'utf-8';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $this->email->from('soporte@wese.snapsoft.com.do', 'WESE AD SOPORTE DE CUENTAS');
            $this->email->to("$email");
            #$this->email->cc('another@another-example.com');
            #$this->email->bcc('them@their-example.com');
            $data['tokens'] = $_POST['empresa'];
            $mensaje = $this->load->view('template/validador_email', $data, TRUE);
            $this->email->subject('Bienvenido! a wesead validador');
            $this->email->message($mensaje);

            $this->email->send();
            redirect('site?success');
        } else {
            redirect('site?erroreg');
        }
    }

    function registro() {
        if (!empty($_POST)) {
            /* variables */
            $nom = $_POST['nombre'];
            $apel = $_POST['apellido'];
            $nick = $_POST['nick'];
            $email = $_POST['correo'];
            $pass = md5($_POST['password']);
            $nac = $_POST['fecha_nac'];
            $m = $_POST['movil'];
            $pais = $_POST['pais'];
            $hoy = date('d-m-Y');
            $ip = $_SERVER['REMOTE_ADDR'];
            /* fin code */

            $very = $this->db->like('correo', $email, 'both');
            $very = $this->db->get('users');

            foreach ($very->result() as $correo) {
                
            }
            if (empty($correo)) {

                $datos = array(
                    'id' => '',
                    'nombre' => "$nom",
                    'apellido' => "$apel",
                    'correo' => "$email",
                    'nick' => "$nick",
                    'img' => '/perfiles/nuevo_usuario.png',
                    'fecha_nac' => "$nac",
                    'password' => "$pass",
                    'pais' => "$pais",
                    'ciudad' => '0',
                    'fecha' => "$hoy",
                    'actividad' => $ip
                );

                if (strlen($pass) < 4) {
                    $error_clave = "La clave debe tener al menos 6 caracteres";
                    redirect("in/login?err=$error_clave");
                } else {
                    $this->db->insert('users', $datos);
                    redirect('in/login?welcome');
                }
            } else {
                redirect('in/login?error201');
            }
        }
    }

    function verify_camp() {
        $camp = $_REQUEST['nombre'];
        $sql = $this->db->like("nombre", "$camp", "both");
        $sql = $this->db->get('camp');
        if ($sql->num_rows() != "") {
            if ($sql->num_rows() > 0) {

                foreach ($sql->result() as $fila):
                    $data[] = $fila;
                endforeach;
            }
            return $data;
        }else {
            $data[] = "";
        }
    }

    function new_solicitud() {
        $ini = $_POST['dia'] . "-" . $_POST['mes'] . "-" . $_POST['year'];
        $fin = $_POST['die'] . "-" . $_POST['mis'] . "-" . $_POST['yeara'];
        if (isset($_POST['restricion-no'])) {
            $restrictt = "Ninguna";
        } else {
            $restrictt = $_POST['restrincion'];
        }
        $data = array(
            "nombre" => $_POST['nombre'],
            "categoria" => $_POST['categoria'],
            "descripcion" => $_POST['descripcion'],
            "costo" => $_POST['costo'],
            "inicia" => $ini,
            "finaliza" => $fin,
            "hora" => $_POST['hora'],
            "minuto" => $_POST['minuto'],
            "horario" => $_POST['horario'],
            "restrincion" => $restrictt,
            "key_img" => md5($_POST['nombre']),
            "user_id" => $this->user->id_cliente
        );
        /* enviar imagen */
        $representate = "<span class='alert alert-warning'>Un representante se comunicara con usted dentro de las 24 Hrs.</span>";
        $exito = "<p class='alert alert-success'>Solicitud enviada exitosamente!</p>";
        $img_upload_msj = "<p class='alert alert-info'>Desea agregar una imagen <a href='http://wese.snapsoft.com.do/upload?verf=" . md5("Okok" . $_POST['nombre'] . $_POST['categoria']) . "&us=" . $this->user->id_cliente . "&css=" . md5($_POST['nombre']) . "'>click aqui</a></p>";

        if (isset($_POST['img-no'])) {
            $data_er['auth_solicitud'] = $exito . $representate . $img_upload_msj;
        } else {
            $data_er['auth_solicitud'] = $exito . $representate;
        }
        /* fin env img */
        $this->db->insert('solicitudes', $data);
        $this->load->view('clientes/solicitud', $data_er);
    }

    function camp_app() {
        $sql = $this->db->order_by("id", "desc");
        $sql = $this->db->get('camp');
        if ($sql->num_rows() != "") {
            if ($sql->num_rows() > 0) {

                foreach ($sql->result() as $fila):
                    $data[] = $fila;
                endforeach;
            }
            return $data;
        }else {
            $data[] = "";
        }
    }

    function mcupon() {
        $sql = $this->db->where('user_id', $this->user->id);
        $sql = $this->db->get('cupon');
        if ($sql->num_rows() != "") {
            if ($sql->num_rows() > 0) {

                foreach ($sql->result() as $fila):
                    $data[] = $fila;
                endforeach;
            }
            return $data;
        }else {
            $data[] = "";
        }
    }
    
    function solic($d){
        $sql = $this->db->where('id_sold', $d);
        $sql = $this->db->get('solicitudes');
        if ($sql->num_rows() != "") {
            if ($sql->num_rows() > 0) {

                foreach ($sql->result() as $fila):
                    $data[] = $fila;
                endforeach;
            }
            return $data;
        }else {
            $data[] = "";
        }
    }

}
