<?php 

class Main extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$userInfo = $this->session->userdata(USER_INFO_KEY);
		if (isset($userInfo))
		{
			switch ($userInfo->{ROLE_ID_KEY})
			{
				case ADMIN_PRIVILEGE:
					redirect('admin/data');
					break;

				case PANITIA_PRIVILEGE:
					redirect('panitia/data');
					break;
			}
		}
	}

	public function index()
	{
		if ($this->POST('login'))
		{
			$username 	= $this->POST('username');
			$password	= $this->POST('password');
			
			$this->load->model('M_Users');
			$user = M_Users::where('username', $username)
						->where('password', md5($password))
						->first();
			if (isset($user))
			{
				$this->session->set_userdata(USER_INFO_KEY, (object)$user->toArray());
			}
			else
			{
				$this->flashmsg('Wrong email or password', 'danger');
			}

			redirect('login');
		}

		$this->load->view('login');
	}

}