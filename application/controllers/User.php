<?php
class User extends CI_Controller
{

	protected function navbar()
	{
 		$data['log'] = $this->My_model->select("logo");		
		$this->load->view("user/navbar",$data);
	}

	protected function footer()
	{
		$data["info"] = $this->My_model->select("company_info");
		$this->load->view("user/footer",$data);
	}
	public function about()
	{
		$this->navbar();
		
		 $data['feed'] = $this->My_model->select("feedback");
    $data['feed2'] = $this->My_model->select("feedback2");
 	$data['slides'] = $this->My_model->select("slider");
 	$data['feat'] = $this->My_model->select("feature");
 	$data['serv'] = $this->My_model->select("services");
 	$data['count'] = $this->My_model->select("counter");
 	$data['proj'] = $this->My_model->select("project");
 	$data['tea'] = $this->My_model->select("team");
 	$data['new'] = $this->My_model->select("news");
 	$data['abou'] = $this->My_model->select("about");

    // Load the view once with all necessary data
   $this->load->view("user/about",$data);

    // Load the footer part of the page
    $this->footer();
	}

	// public function index()
	// {
	// 	$this->navbar();
	// 	$data['slides'] = $this->My_model->select("slider");
	// 	$this->load->view("user/index",$data);
	// 	$this->footer();
	// }

	// public function index()
	// {
	// 	$this->navbar();
	// 	$data['feat'] = $this->My_model->select("feature");
	// 	$this->load->view("user/index",$data);
	// 	$this->footer();
	// }

	// public function index()
	// {
	// 	$this->navbar();
	// 	$data['serv'] = $this->My_model->select("services");
	// 	$this->load->view("user/index",$data);
	// 	$this->footer();
	// }
  
  	// public function index()
	// {
	// 	$this->navbar();
	// 	$data['feed'] = $this->My_model->select("feedback");
	// 	$this->load->view("user/index",$data);
	// 	$data['feed2'] = $this->My_model->select("feedback2");
	// 	$this->load->view("user/index",$data);
	// 	$this->footer();
	// }

public function index()
{
    // Load the navbar part of the page
    $this->navbar();

    // Retrieve data from both feedback and feedback2 at once
    $data['feed'] = $this->My_model->select("feedback");
    $data['feed2'] = $this->My_model->select("feedback2");
 	$data['slides'] = $this->My_model->select("slider");
 	$data['feat'] = $this->My_model->select("feature");
 	$data['serv'] = $this->My_model->select("services");
 	$data['count'] = $this->My_model->select("counter");
 	$data['proj'] = $this->My_model->select("project");
 	$data['tea'] = $this->My_model->select("team");
 	$data['new'] = $this->My_model->select("news");
 	$data['abou'] = $this->My_model->select("about");

    // Load the view once with all necessary data
    $this->load->view("user/index", $data);

    // Load the footer part of the page
    $this->footer();
}
	public function services()
	{
		$this->navbar();
		
		 $data['feed'] = $this->My_model->select("feedback");
    $data['feed2'] = $this->My_model->select("feedback2");
 	$data['slides'] = $this->My_model->select("slider");
 	$data['feat'] = $this->My_model->select("feature");
 	$data['serv'] = $this->My_model->select("services");
 	$data['count'] = $this->My_model->select("counter");
 	$data['proj'] = $this->My_model->select("project");
 	$data['tea'] = $this->My_model->select("team");
 	$data['new'] = $this->My_model->select("news");
 	$data['abou'] = $this->My_model->select("about");

    // Load the view once with all necessary data
   $this->load->view("user/services",$data);

    // Load the footer part of the page
    $this->footer();
    
	}

	public function project()
	{
		$this->navbar();
		
		 $data['feed'] = $this->My_model->select("feedback");
    $data['feed2'] = $this->My_model->select("feedback2");
 	$data['slides'] = $this->My_model->select("slider");
 	$data['feat'] = $this->My_model->select("feature");
 	$data['serv'] = $this->My_model->select("services");
 	$data['count'] = $this->My_model->select("counter");
 	$data['proj'] = $this->My_model->select("project");
 	$data['tea'] = $this->My_model->select("team");
 	$data['new'] = $this->My_model->select("news");
 	$data['abou'] = $this->My_model->select("about");

    // Load the view once with all necessary data
   $this->load->view("user/project",$data);

    // Load the footer part of the page
    $this->footer();
    
	}

	public function blog()
	{
		$this->navbar();
		
		 $data['feed'] = $this->My_model->select("feedback");
    $data['feed2'] = $this->My_model->select("feedback2");
 	$data['slides'] = $this->My_model->select("slider");
 	$data['feat'] = $this->My_model->select("feature");
 	$data['serv'] = $this->My_model->select("services");
 	$data['count'] = $this->My_model->select("counter");
 	$data['proj'] = $this->My_model->select("project");
 	$data['tea'] = $this->My_model->select("team");
 	$data['new'] = $this->My_model->select("news");
 	$data['abou'] = $this->My_model->select("about");

    // Load the view once with all necessary data
   $this->load->view("user/blog",$data);

    // Load the footer part of the page
    $this->footer();
    
	}

	public function contact()
	{
		$this->navbar();
		
		 $data['feed'] = $this->My_model->select("feedback");
    $data['feed2'] = $this->My_model->select("feedback2");
 	$data['slides'] = $this->My_model->select("slider");
 	$data['feat'] = $this->My_model->select("feature");
 	$data['serv'] = $this->My_model->select("services");
 	$data['count'] = $this->My_model->select("counter");
 	$data['proj'] = $this->My_model->select("project");
 	$data['tea'] = $this->My_model->select("team");
 	$data['new'] = $this->My_model->select("news");
 	$data['abou'] = $this->My_model->select("about");

    // Load the view once with all necessary data
   $this->load->view("user/contact",$data);

    // Load the footer part of the page
    $this->footer();
    
	}

	public function home()
	{
		$this->navbar();
		
		 $data['feed'] = $this->My_model->select("feedback");
    $data['feed2'] = $this->My_model->select("feedback2");
 	$data['slides'] = $this->My_model->select("slider");
 	$data['feat'] = $this->My_model->select("feature");
 	$data['serv'] = $this->My_model->select("services");
 	$data['count'] = $this->My_model->select("counter");
 	$data['proj'] = $this->My_model->select("project");
 	$data['tea'] = $this->My_model->select("team");
 	$data['new'] = $this->My_model->select("news");
 	$data['abou'] = $this->My_model->select("about");

    // Load the view once with all necessary data
   $this->load->view("user/home",$data);

    // Load the footer part of the page
    $this->footer();
    
	}

	// public function index()
	// {
	// 	$this->navbar();
	// 	$data['feed2'] = $this->My_model->select("feedback2");
	// 	$this->load->view("user/index",$data);
	// 	$this->footer();
	// }

}
?>