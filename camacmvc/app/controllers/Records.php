<?php
  class Records extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->recordModel = $this->model('Record');
      $this->userModel = $this->model('User');
      }

    public function index(){

      // Get baptism records
      $baptism = $this->recordModel->getRecords();

      $data = [
        'title' => "St Stephen's Church, Bodfari, North Wales",
        'baptism' => $baptism
      ];

      $this->view('records/index', $data);
    }

    public function sortbapt(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      } else {
        $surname = [
          'surname' => '',
          'firstname' => ''
        ];
      }
      // ADD single quotes around the sanitized Names.
      $surname = "'".trim($_POST['surname'])."'" ;
      $firstname = "'".trim($_POST['firstname'])."'" ;

      // ADD $surname to the MODEL request.
      if(!empty(trim($_POST['surname']))) {
        $baptism = $this->recordModel->sortRecords($surname, $firstname);
      } else {
        // Get ALL records
        $baptism = $this->recordModel->getRecords();
      }

      $data = [
        'baptism' => $baptism,
        'surname' => $surname,
        'firstname' => $firstname,
        'title' => "St Stephen's Church, Bodfari, North Wales",
        'subtitle' => 'Parish Records'
      ];

      $this->view('records/sortbapt', $data);
    }

    public function show($b_id){
      $baptism = $this->recordModel->getRecordById($b_id);

      $data = [
        'title' => "St Stephen's Church, Bodfari, North Wales",
        'subtitle' => 'Parish Records',
        'baptism' => $baptism
      ];

      $this->view('records/show', $data);
    }

    public function employee(){
      $employee = $this->recordModel->getEmployeeRecords();

      $data = [
        'title' => "St Stephen's Church, Bodfari, North Wales",
        'subtitle' => 'Parish Records',
        'employee' => $employee
      ];

      $this->view('records/employee', $data);
    }


    public function marriages(){

      $data = [
        'title' => 'Bodfari Times / Records / Marriages',
        'sub-title' => 'A Local Geneaology Resource',
        'description' => 'Do you know the dates of your grandparents marriage? Do you know who live in your house 100 years ago? The answers to these and many more questions can be found in this simple to use local geneaology database. Here you can search for your ancestoral heritage.<br><br>Our very own local geneaology repositary of family Baptisms, Deaths and Marriages as well Census reports which contain the residents living in your house, maybe? All of this and more as some property information for Bodfari and surrounding area has been added in the notes to the records. If it happened in Bodfari then this should be your first port of call to find documented information.<br><br>We are indebted to Rev G Lloyd Hughes who has spent many years collating our parish ledgers and many other local sources of information containing data, some back to the 16th century into a simple useable interactive website database for our local community. Click "Sources" above to find out where his inspiration and information came from.<br><br>Please register and log in to take advantage of this wonderful local asset and there is also a BLOG facility for you to post questions or contribute additional sources of local information.'
      ];

      $this->view('records/marriages', $data);
    }

    public function funerals(){

      $data = [
        'title' => 'Bodfari Times / Records / Funerals',
        'sub-title' => 'A Local Geneaology Resource',
        'description' => 'Do you know the dates of your grandparents marriage? Do you know who live in your house 100 years ago? The answers to these and many more questions can be found in this simple to use local geneaology database. Here you can search for your ancestoral heritage.<br><br>Our very own local geneaology repositary of family Baptisms, Deaths and Marriages as well Census reports which contain the residents living in your house, maybe? All of this and more as some property information for Bodfari and surrounding area has been added in the notes to the records. If it happened in Bodfari then this should be your first port of call to find documented information.<br><br>We are indebted to Rev G Lloyd Hughes who has spent many years collating our parish ledgers and many other local sources of information containing data, some back to the 16th century into a simple useable interactive website database for our local community. Click "Sources" above to find out where his inspiration and information came from.<br><br>Please register and log in to take advantage of this wonderful local asset and there is also a BLOG facility for you to post questions or contribute additional sources of local information.'
      ];

      $this->view('records/funerals', $data);
    }

    public function census(){

      $data = [
        'title' => 'Bodfari Times / Records / Census',
        'sub-title' => 'A Local Geneaology Resource',
        'description' => 'Do you know the dates of your grandparents marriage? Do you know who live in your house 100 years ago? The answers to these and many more questions can be found in this simple to use local geneaology database. Here you can search for your ancestoral heritage.<br><br>Our very own local geneaology repositary of family Baptisms, Deaths and Marriages as well Census reports which contain the residents living in your house, maybe? All of this and more as some property information for Bodfari and surrounding area has been added in the notes to the records. If it happened in Bodfari then this should be your first port of call to find documented information.<br><br>We are indebted to Rev G Lloyd Hughes who has spent many years collating our parish ledgers and many other local sources of information containing data, some back to the 16th century into a simple useable interactive website database for our local community. Click "Sources" above to find out where his inspiration and information came from.<br><br>Please register and log in to take advantage of this wonderful local asset and there is also a BLOG facility for you to post questions or contribute additional sources of local information.'
      ];

      $this->view('records/census', $data);
    }
}
