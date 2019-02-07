<?php
  class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
      // if(!isLoggedIn()){
      //   redirect('records');
      // }

      $data = [
        'title' => 'Bodfari Records',
        'sub-title' => 'A Local Geneaology Resource,<br>to assist the study and tracing of lines of descent.',
        'description' => "Situated in the beautiful Vale of Clwyd, North Wales, Bodfari Records are proud to present a local geneaology resource / website containing parish records from St Stephen's Church, Bodfari, along with the local area's associated national census reports.<br><br>If you've been researching genealogy for any length of time, you've probably heard the advice that you need to evaluate evidence carefully, but what does that really mean? Are we looking at real validated  evidence? ... is it hearsay? ...my mum told me??<br><br>On this website we have sections on Baptisms, Funerals, Marriages and several copies of the early Census reports. All of our information has been transcribed directly from our local Parsh records and or other validated sources.<br><br>",
        'footer' => 'We have incorporated a "Blog / Post" facility.',
        'last' => 'There is also a section where you can post questions or share local geneaology information with each other, some might call it a Blog. Just be aware  this is a local resource, run by enthusiastic volunteers who give their time freely to maintain and run this website. Why not register on the navigation bar above, login and tell us if you value this resource, we are interested in your thoughts, good or bad as long as it is constructive.',
      ];

      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'Bodfari Records - who are we? ',
      ];

      $this->view('pages/about', $data);
    }

    public function search(){
      $data = [
        'title' => 'Search Facility',
        'sub-title' => 'to be advised',
        'description' => 'to be advised',
        'subhead' => 'St Stephens Parish Church Ledgers: 1571 - 2009',
        'subpara' => 'to be advised',
        'footer' => 'We have incorporated a "Blog / Post" facility.',
        'last' => 'Why not register, login and tell us if you value this resource, we are interested in your thoughts, good and bad.',
      ];

      $this->view('pages/search', $data);
    }

    public function sources(){
      $data = [
        'title' => "St Stephen's Church, Bodfari, North Wales<br>",
        'sub-title' => "to be advised",
        'description' => "Given the massive growth of interest in family history research in recent years, a very large number of sources have appeared which supplement those which were there all along and which can be utilized by the researcher. In addition, these sources have become easier to access, though one needs to pay a modest fee for the use of some of them. Many of them also are directed towards family history, but when researching properties they are just as useful, properties often being of interest due to the people associated with them. First find the people, and then we learn something of the property history.<br><br>",
        'footer' => 'Post if you value this resource, we are interested in your thoughts, good and bad.',
      ];

      $this->view('pages/sources', $data);
    }
  }
