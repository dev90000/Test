<?php

/**
 * Description of Additional_priority_table
 *
 * @author wandjitchamnds
 */
class Additional_priorities_table extends MY_Controller
{

  public function index() {
    $this->pageHeader = ADDITIONAL_PRIORITIES_HEADER;
    $this->tableHeader = ADDITIONAL_PRIORITIES_TITLE;
    $this->addHeaderInfo('Priorities_view', 'Additional_priorities_table/GetTree', array(ADDITIONAL_PRIORITIES_TITLE, $this->config->item('base_url') . $this->config->item('index_page') . '/Additional_priorities_table'), TRUE, 0, MODEL_TYPE_NORM);
    $this->load->view('outline', $this->data);
  }

  public function get_data() {
    $tree = $this->GetUITree(APT_SCREEN_ID, MODEL_TYPE_NORM);
    echo json_encode($tree);
  }
}

//These changes are for RAHUL branch.