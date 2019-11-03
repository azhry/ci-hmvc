<?php

class MY_Controller extends CI_Controller
{
	public $title = 'SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN MEKANIK PADA PT TUNAS AUTO GRAHA PALEMBANG DENGAN METODE MULTI-ATTRIBUTE UTILITY THEORY (MAUT)';
	
	public function __construct()
	{
		parent::__construct();
		ini_set('xdebug.var_display_max_depth', '10');
		ini_set('xdebug.var_display_max_children', '256');
		ini_set('xdebug.var_display_max_data', '10240');
		date_default_timezone_set("Asia/Jakarta");
	}

	protected function template($data, $module = '', $exclude = [])
	{
		$data['global_title'] 	= $this->title;
		$data['module']			= $module;
		$data['exclude']		= $exclude;
		if ( strlen( $module ) > 0 ) return $this->load->view( $module . '/includes/layout', $data );
		return $this->load->view( 'includes/layout', $data );
	}

	protected function POST($name)
	{
		return $this->input->post($name);
	}

	protected function GET($name, $clean = false)
	{
		return $this->input->get($name, $clean);
	}

	protected function METHOD()
	{
		return $this->input->method();
	}

	protected function flashmsg($msg, $type = 'success',$name='msg')
	{
		return $this->session->set_flashdata($name, '<div class="alert alert-'.$type.' alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$msg.'</div>');
	}

	protected function upload($id, $directory, $tag_name = 'userfile', $max_size = 0)
	{
		if ( isset( $_FILES[$tag_name] ) && !empty( $_FILES[$tag_name]['name'] ) )
		{
			$upload_path = realpath(FCPATH . $directory . '/');
			@unlink($upload_path . '/' . $id . '.jpg');
			$config = [
				'file_name' 		=> $id . '.jpg',
				'allowed_types'		=> 'jpg|png|bmp|jpeg',
				'upload_path'		=> $upload_path,
				'max_size'			=> $max_size
			];
			$this->load->library('upload');
			$this->upload->initialize($config);
			return $this->upload->do_upload($tag_name);
		}
		return FALSE;
	}

	protected function upload_file($id, $directory, $tag_name = 'userfile', $max_size = 0)
	{
		if ( isset( $_FILES[$tag_name] ) && !empty( $_FILES[$tag_name]['name'] ) )
		{
			$upload_path = realpath(FCPATH . $directory . '/');
			@unlink($upload_path . '/' . $id);
			$config = [
				'file_name' 		=> $id,
				'allowed_types'		=> '*',
				'upload_path'		=> $upload_path,
				'max_size'			=> $max_size
			];
			$this->load->library('upload');
			$this->upload->initialize($config);
			return $this->upload->do_upload($tag_name);
		}
		return FALSE;
	}	

	protected function dump($var, $exit = 0)
	{
		echo '<pre>';
		var_dump($var);
		echo '</pre>';

		if ($exit != 0)
		{
			exit;
		}
	}

	protected function go_back( $index ) 
	{
		echo '<script type="text/javascript">window.history.go(' . $index . ');</script>'; 
	}

	protected function check_allowance( $condition, $message = [ 'Required parameter is missing', 'danger' ], $redirect_index = -1 )
	{
		if ( $condition ) 
		{
			$this->flashmsg( $message[0], $message[1] );
			$this->go_back( $redirect_index );
			exit;

		}
	}

	protected function __generate_random_id() 
	{
		return mt_rand();
	}

	protected function remove_directory($path) 
	{
		$files = array_diff(scandir($path), ['.', '..']);
		foreach ($files as $file) 
		{
			if (is_dir($path . '/' . $file))
			{
				$this->remove_directory($path . '/' . $file);	
			}
			else
			{
				if (file_exists($path . '/' . $file))
				{
					unlink($path . '/' . $file);
				}
			}
		}
		rmdir($path);
		return;
	}

	protected function _generate_random_string($length = 5)
	{
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$string = '';
		for ($i = 0; $i < $length; $i++)
		{
			$string .= $characters[mt_rand(0, strlen($characters) - 1)];
		}
		return $string;
	}

	protected function _is_json($string, $return_data = false) 
	{
		$data = json_decode($string);
		return (json_last_error() == JSON_ERROR_NONE) ? ($return_data ? $data : TRUE) : FALSE;
	}

	protected function _check_privilege($codes)
	{
		$userInfo = $this->session->userdata(USER_INFO_KEY);
		if (!isset($userInfo) or !in_array($userInfo->{ROLE_ID_KEY}, $codes))
		{
			redirect('umum/main');
		}
	}
}
