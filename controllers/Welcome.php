<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
			parent::__construct();
			$this->load->model('magenda');
	}

	public function index()
	{
		$this->load->view('cuerpo/header');
		$this->load->view('index');
		$this->load->view('cuerpo/footer');
	}
	
	public function login()
	{
		$this->load->view('cuerpo/headerL');
		$this->load->view('desencadenante');		
		$this->load->view('bienvenidaL');
		$this->load->view('cuerpo/footerL');
	}
	public function porta()
	{
		$this->load->view('cuerpo/header');
		$this->load->view('moduloPreguntas');
		$this->load->view('cuerpo/footer');
	}
	
	public function moduloCargarFiEx(){
		$this->load->view('cuerpo/header');
		$this->load->view('practicalQuestion');
		$this->load->view('cuerpo/footer');
	}







/*
	public function portada(){
		$this->load->view('cuerpo/header');
		$this->load->view('portada');
		$this->load->view('cuerpo/footer');
	}

	public function persona(){
		$this->load->view('cuerpo/header');
		$this->load->view('persona');
		$this->load->view('cuerpo/footer');
	}

	public function nuevo(){
		$this->load->view('cuerpo/header');
		$this->load->view('nuevo');
		$this->load->view('cuerpo/footer');
	}

	public function modificar(){
		$this->load->view('cuerpo/header');
		$this->load->view('modificar');
		$this->load->view('cuerpo/footer');
	}

	public function agregar(){
		switch ($_POST['guardar']) {
			case "Guardar":
				$nombre=$this->input->post('nom');
				$app=$this->input->post('app');
				$apm=$this->input->post('apm');
				$rfc=$this->input->post('rfc');
				$tel=$this->input->post('tel');
				$email=$this->input->post('email');
				$dom=$this->input->post('dom');
				$datos=array(
					'nombre' => $nombre,
					'app' => $app,
					'apm' => $apm,
					'rfc' => $rfc,
					'tel' => $tel,
					'email' => $email,
					'dom' => $dom
				);
				echo "<script>alert('Se guardo el registro con exito...')</script>";
				$this->magenda->insertar($datos);
				$this->load->view('cuerpo/header');
				$this->load->view('persona');
				$this->load->view('cuerpo/footer');
				break;

			default:
				$this->load->view('cuerpo/header');
				$this->load->view('persona');
				$this->load->view('cuerpo/footer');
				break;
		}
	}
*/

	public function accion(){

/*
		switch ($_POST['opcion']) {
		case "Editar":
				$id_p=$this->input->post('id_p');		
				$this->magenda->getid($id_p);
				$nombre=$this->input->post('nom');
				$app=$this->input->post('app');
				$apm=$this->input->post('apm');
				$rfc=$this->input->post('rfc');
				$tel=$this->input->post('tel');
				$email=$this->input->post('email');
				$dom=$this->input->post('dom');
				$datos=array(
					'nombre' => $nombre,
					'app' => $app,
					'apm' => $apm,
					'rfc' => $rfc,
					'tel' => $tel,
					'email' => $email,
					'dom' => $dom
				);				
				$target_path = "archivos/f_jpg/";
				$target_path = $target_path.basename($_FILES['uploadedfile']['name']); 
				if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
					echo "<script>alert('Archivo subido')</script>";
				} else{
					echo "<script>alert('Ha ocurrido un error, trate de nuevo!')</script>";
				}
				echo ('index.php/welcome/moduloCargarFiEx');
*/				
				$this->load->view('cuerpo/header');
				$this->load->view('uploader');
				$this->load->view('cuerpo/footer');
		}
				
/*
				$a = $this->input->post('id_p');
				
				echo "<script>alert('Investigar como editar un registro...')</script>";
				
				echo $modificar;
				$resultado = mysql_query($modificar) or die('la consulta fall&oacute;: ' .mysql_error(). " " .$modificar);
				break;
				case "Update":
				$id_p=$this->input->post('id_p');		
				$nombre=$this->input->post('nom');
				$app=$this->input->post('app');
				$apm=$this->input->post('apm');
				$rfc=$this->input->post('rfc');
				$tel=$this->input->post('tel');
				$email=$this->input->post('email');
				$dom=$this->input->post('dom');
				$datos=array(
					'nombre' => $nombre,
					'app' => $app,
					'apm' => $apm,
					'rfc' => $rfc,
					'tel' => $tel,
					'email' => $email,
					'dom' => $dom
				);				
				break;
				case "Eliminar":
				$id = $this->input->post('id_p');
				$this->magenda->eliminar($id);
				echo "<script>alert('Dato eliminado correctamente')</script>";
				$this->load->view('cuerpo/header');
				$this->load->view('persona');
				$this->load->view('cuerpo/footer');
				break;
				
				default:
				echo "<script>alert('No debe alir este error!!!')</script>";
				break;
			}
		}
*/
}
?>
