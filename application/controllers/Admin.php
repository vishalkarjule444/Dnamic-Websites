<?php
class Admin extends CI_Controller
{

	protected function navbar()
	{
		$this->load->view("admin/navbar");
	}

	protected function footer()
	{
		$this->load->view("admin/footer");
	}

	public function index()
	{
		$this->navbar();
		$this->load->view("admin/index");
		$this->footer();
	}
	public function company_info()
	{
		$this->navbar();
		$data["info"] = $this->My_model->select("company_info");
		$this->load->view("admin/company_info",$data);
		$this->footer();
	}
	public function save_company_info()
	{

		$this->My_model->update("company_info",["company_id"=>1],$_POST);
		redirect(base_url()."admin/company_info");
	}
	public function slider()
	{
		$this->navbar();
		$data['slides'] = $this->My_model->select("slider");
		$this->load->view("admin/slider",$data);
		$this->footer();
	}
	public function save_slider()
	{
		
		$file_name = time().$_FILES['slider_image']['name'];
		move_uploaded_file($_FILES['slider_image']['tmp_name'], "uploads/".$file_name);
		
		$_POST['slider_image'] = $file_name;
		$this->My_model->insert("slider",$_POST);
		redirect(base_url()."admin/slider");
	}
	public function edit_slide($slider_id)
	{
		$cond = ["slider_id"=>$slider_id];
		$data['info'] = $this->My_model->select_where("slider",$cond);
		$this->navbar();
		$this->load->view("admin/edit_slide",$data);
		$this->footer();
	}
	public function update_slider()
	{
		if ($_FILES['slider_image']['name']!='')
		 {
		
			$file_name = time().$_FILES['slider_image']['name'];
			move_uploaded_file($_FILES['slider_image']['tmp_name'], "uploads/".$file_name);
			$_POST['slider_image'] = $file_name;
		}
		$cond = ['slider_id'=>$_POST['slider_id']];
		$this->My_model->update("slider",$cond,$_POST);
		redirect(base_url()."admin/slider");

	}
	public function delete_slide($slider_id)
	{
		$cond = ["slider_id"=>$slider_id];
		$this->My_model->delete("slider",$cond);
		redirect(base_url()."admin/slider");
		
	}
	public function features()
	{
		$this->navbar();
		$data['feat'] = $this->My_model->select("feature");
		$this->load->view("admin/feature",$data);
		$this->footer();
	}
	public function save_feature()
	{
		$file_name = time().$_FILES['feature_image']['name'];
		move_uploaded_file($_FILES['feature_image']['tmp_name'], "uploads/".$file_name);
		
		$_POST['feature_image'] = $file_name;

		 $this->My_model->insert("feature",$_POST);
		redirect(base_url()."admin/features");

	}
	public function edit_feature($feature_id)
	{
		
		$cond = ["feature_id"=>$feature_id];
		$data['info1'] = $this->My_model->select_where("feature",$cond);
		$this->navbar();
		$this->load->view("admin/edit_feature",$data);
		$this->footer();
	}
	public function update_feature()
	{
		// print_r($_POST);
		// 
		if ($_FILES['feature_image']['name']!='')
		 {
		
			$file_name = time().$_FILES['feature_image']['name'];
			move_uploaded_file($_FILES['feature_image']['tmp_name'], "uploads/".$file_name);
			$_POST['feature_image'] = $file_name;
		}
		$cond1 = ["feature_id"=>$_POST['feature_id']];
		$this->My_model->update("feature",$cond1,$_POST);
		redirect(base_url()."admin/features");

	}
	public function delete_feature($feature_id)
	{
		// print_r($_POST);
		$cond = ["feature_id"=>$feature_id];
		$this->My_model->delete("feature",$cond);
		redirect(base_url()."admin/features");
	}
	public function services()
	{
		$this->navbar();
		$data['serv'] = $this->My_model->select("services");
		$this->load->view("admin/services",$data);
		$this->footer();
	}
	public function save_services()
	{
		// print_r($_POST);
		$this->My_model->insert("services",$_POST);
		// $this->My_model->update("company_info",["company_id"=>1],$_POST);
		redirect(base_url()."admin/services");


	}
	public function edit_services($services_id)
	{
		$cond = ["services_id"=>$services_id];
		$data['info'] = $this->My_model->select_where("services",$cond);
		$this->navbar();
		$this->load->view("admin/edit_services",$data);
		$this->footer();
	}
	public function update_services()
	{
		$cond = ["services_id"=>$_POST['services_id']];
		$this->My_model->update("services",$cond,$_POST);
		redirect(base_url()."admin/services");
	}
	public function delete_services($services_id)
	{
		// print_r($_POST);
		$cond = ["services_id"=>$services_id];
		$this->My_model->delete("services",$cond);
		redirect(base_url()."admin/services");
	}
	public function feedback()
	{
		$this->navbar();
		$data["feed"] = $this->My_model->select("feedback");
		$data["feed2"] = $this->My_model->select("feedback2");
		$this->load->view("admin/feedback",$data);
		$this->footer();
	}
	// public function feedback2()
	// {
	// 	$this->navbar();
	// 	$data["feed2"] = $this->My_model->select("feedback2");
	// 	$this->load->view("admin/feedback2",$data);
	// 	$this->footer();
	// }
	public function update_feedback()
	{
		// print_r($_FILES);
		// print_r($_POST);

		// $file_name = time().$_FILES['feedback_image']['name'];
		// move_uploaded_file($_FILES['feedback_image']['tmp_name'], "uploads/".$file_name);
		// $_POST['feedback_image'] = $file_name;

		//  $this->My_model->insert("feedback",$_POST);
		// redirect(base_url()."admin/feedback");

		if ($_FILES['feedback_image']['name']!='')
		 {
		
			$file_name = time().$_FILES['feedback_image']['name'];
			move_uploaded_file($_FILES['feedback_image']['tmp_name'], "uploads/".$file_name);
			$_POST['feedback_image'] = $file_name;
		}
		// $cond = ["feedback_id"=>$_POST['feedback_id']];
		$this->My_model->update("feedback",["feedback_id"=>1],$_POST);
		redirect(base_url()."admin/feedback");

	}
	public function update_feedback2()
	{
		// print_r($_FILES);
		// print_r($_POST);
		// $file_name = time().$_FILES['feedback2_image']['name'];
		// move_uploaded_file($_FILES['feedback2_image']['tmp_name'], "uploads/".$file_name);
		// $_POST['feedback2_image'] = $file_name;

		//  $this->My_model->insert("feedback2",$_POST);
		// redirect(base_url()."admin/feedback2");
		if ($_FILES['feedback2_image']['name']!='')
		 {
		
			$file_name = time().$_FILES['feedback2_image']['name'];
			move_uploaded_file($_FILES['feedback2_image']['tmp_name'], "uploads/".$file_name);
			$_POST['feedback2_image'] = $file_name;
		}
		// $cond = ["feedback_id"=>$_POST['feedback_id']];
		$this->My_model->update("feedback2",["feedback2_id"=>1],$_POST);
		redirect(base_url()."admin/feedback");


	}
	public function logo()
	{
		$this->navbar();
		$data['log'] = $this->My_model->select("logo");
		$this->load->view("admin/logo",$data);
		$this->footer();		
	}
	public function update_logo()
	{
		// print_r($_FILES);
		if ($_FILES['logo_image']['name']!='')
		 {
		
			$file_name = time().$_FILES['logo_image']['name'];
			move_uploaded_file($_FILES['logo_image']['tmp_name'], "uploads/".$file_name);
			$_POST['logo_image'] = $file_name;
		}
		 // $this->My_model->insert("logo",$_POST);
		$this->My_model->update("logo",["logo_id"=>1],$_POST);
		redirect(base_url()."admin/logo");

	}
	public function counter()
	{
		$this->navbar();
		$data['count'] = $this->My_model->select("counter");
		$this->load->view("admin/counter",$data);
		$this->footer();		
	}
	public function save_counter()
	{
		// print_r($_POST);
		$this->My_model->insert("counter",$_POST);
		redirect(base_url()."admin/counter");

	}
	public function edit_count($counter_id)
	{
		$cond = ["counter_id"=>$counter_id];
		$data['info'] = $this->My_model->select_where("counter",$cond);
		$this->navbar();
		$this->load->view("admin/edit_count",$data);
		$this->footer();
	}
	public function update_count()
	{
		$cond = ['counter_id'=>$_POST['counter_id']];
		$this->My_model->update("counter",$cond,$_POST);
		redirect(base_url()."admin/counter");

	}
	public function project()
	{
		$this->navbar();
		$data['proj'] = $this->My_model->select("project");
		$this->load->view("admin/project",$data);
		$this->footer();
	}
	public function save_project()
	{
		// print_r($_POST);
		// print_r($_FILES);

		$file_name = time().$_FILES['project_image']['name'];
		move_uploaded_file($_FILES['project_image']['tmp_name'], "uploads/".$file_name);
		
		$_POST['project_image'] = $file_name;
		$this->My_model->insert("project",$_POST);
		redirect(base_url()."admin/project");
	}
	public function edit_project($project_id)
	{
		$cond = ["project_id"=>$project_id];
		$data['info'] = $this->My_model->select_where("project",$cond);
		$this->navbar();
		$this->load->view("admin/edit_project",$data);
		$this->footer();

	}
	public function update_project()
	{
		if ($_FILES['project_image']['name']!='')
		 {
		
			$file_name = time().$_FILES['project_image']['name'];
			move_uploaded_file($_FILES['project_image']['tmp_name'], "uploads/".$file_name);
			$_POST['project_image'] = $file_name;
		}
		$cond = ['project_id'=>$_POST['project_id']];
		$this->My_model->update("project",$cond,$_POST);
		redirect(base_url()."admin/project");
}
	public function team()
	{
		$this->navbar();
		$data['tea'] = $this->My_model->select("team");
		$this->load->view("admin/team",$data);
		$this->footer();
	}
	public function save_team()
	{
		// print_r($_POST);
		// print_r($_FILES);
		$file_name = time().$_FILES['person_image']['name'];
		move_uploaded_file($_FILES['person_image']['tmp_name'], "uploads/".$file_name);
		
		$_POST['person_image'] = $file_name;
		$this->My_model->insert("team",$_POST);
		redirect(base_url()."admin/team");
	}
	public function edit_team($person_id)
	{
		$cond = ["person_id"=>$person_id];
		$data['info'] = $this->My_model->select_where("team",$cond);
		$this->navbar();
		$this->load->view("admin/edit_team",$data);
		$this->footer();
	}
	public function update_team()
	{
		if ($_FILES['person_image']['name']!='')
		 {
		
			$file_name = time().$_FILES['person_image']['name'];
			move_uploaded_file($_FILES['person_image']['tmp_name'], "uploads/".$file_name);
			$_POST['person_image'] = $file_name;
		}
		$cond = ['person_id'=>$_POST['person_id']];
		$this->My_model->update("team",$cond,$_POST);
		redirect(base_url()."admin/team");
	}

	public function news()
	{
		$this->navbar();
		$data['new'] = $this->My_model->select("news");
		$this->load->view("admin/news",$data);
		$this->footer();
	}
	public function save_news()
	{
		// print_r($_POST);
		// print_r($_FILES);
		$file_name = time().$_FILES['news_image']['name'];
		move_uploaded_file($_FILES['news_image']['tmp_name'], "uploads/".$file_name);
		
		$_POST['news_image'] = $file_name;
		$this->My_model->insert("news",$_POST);
		redirect(base_url()."admin/news");
	}
	public function edit_news($news_id)
	{
		$cond = ["news_id"=>$news_id];
		$data['info'] = $this->My_model->select_where("news",$cond);
		$this->navbar();
		$this->load->view("admin/edit_news",$data);
		$this->footer();
	}
	public function update_news()
	{
		if ($_FILES['news_image']['name']!='')
		 {
		
			$file_name = time().$_FILES['news_image']['name'];
			move_uploaded_file($_FILES['news_image']['tmp_name'], "uploads/".$file_name);
			$_POST['news_image'] = $file_name;
		}
		$cond = ['news_id'=>$_POST['news_id']];
		$this->My_model->update("news",$cond,$_POST);
		redirect(base_url()."admin/news");
	}
	public function about()
	{
		$this->navbar();
		$data["abou"] = $this->My_model->select("about");
		$this->load->view("admin/about",$data);
		$this->footer();
	}
	public function save_about()
	{
		$file_name1 = time().$_FILES['image1']['name'];
		move_uploaded_file($_FILES['image1']['tmp_name'], "uploads/".$file_name1);

		$file_name2 = time().$_FILES['image2']['name'];
		move_uploaded_file($_FILES['image2']['tmp_name'], "uploads/".$file_name2);
		
		$file_name3 = time().$_FILES['image3']['name'];
		move_uploaded_file($_FILES['image3']['tmp_name'], "uploads/".$file_name3);

		$_POST['image1'] = $file_name1;
		$_POST['image2'] = $file_name2;
		$_POST['image3'] = $file_name3;
		$this->My_model->insert("about",$_POST);
		redirect(base_url()."admin/about");
	}
	public function edit_about($about_id)
	{
		$cond = ["about_id"=>$about_id];
		$data['info'] = $this->My_model->select_where("about",$cond);
		$this->navbar();
		$this->load->view("admin/edit_about",$data);
		$this->footer();
	}
	public function update_about()
	{


		if ($_FILES['image1']['name']!='')
		 {
		
			$file_name1 = time().$_FILES['image1']['name'];
			move_uploaded_file($_FILES['image1']['tmp_name'], "uploads/".$file_name1);
			$_POST['image1'] = $file_name1;
		}


		if ($_FILES['image2']['name']!='')
		 {
		
			$file_name2 = time().$_FILES['image2']['name'];
			move_uploaded_file($_FILES['image2']['tmp_name'], "uploads/".$file_name2);
			$_POST['image2'] = $file_name2;
		}


		if ($_FILES['image3']['name']!='')
		 {
		
			$file_name3 = time().$_FILES['image3']['name'];
			move_uploaded_file($_FILES['image3']['tmp_name'], "uploads/".$file_name3);
			$_POST['image3'] = $file_name3;
		}
		$cond = ['about_id'=>$_POST['about_id']];
		$this->My_model->update("about",$cond,$_POST);
		redirect(base_url()."admin/about");

	}

}
?>
<!-- 
CREATE TABLE about(about_id INT PRIMARY KEY AUTO_INCREMENT,
		about_title VARCHAR(100),
		about_subtitle VARCHAR(100),
		about_content VARCHAR(100),
		about_project_solution INT,
		image1 TEXT,
		image2 TEXT,
		image3 TEXT,
) -->

<!-- 
CREATE TABLE company_info(company_id INT PRIMARY_KEY AUTO_INCREMENT,
	company_name VARCHAR(200),
	company_mobile VARCHAR(15),
	company_email VARCHAR(200),
	company_address TEXT,
	instagram_link TEXT,
	facebook_link TEXT,
	twitter_link TEXT,
	linkedin_link TEXT,
	whatsapp_mobile VARCHARfeature_id)
) -->