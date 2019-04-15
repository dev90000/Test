<?php

/**
 * Description of Additional_priority_table
 *
 * @author wandjitchamnds
 */

require_once ('FypsSubModelController.php');

class AIDS_Additional_priorities_table extends FypsSubModelController
{

    public function index() {
        $this->pageHeader = AIDS_ADDITIONAL_PRIORITIES_HEADER;
        $this->tableHeader = AIDS_ADDITIONAL_PRIORITIES_TITLE;
        $this->addHeaderInfo('Priorities_view', 'AIDS_Additional_priorities_table/GetTree', array(AIDS_ADDITIONAL_PRIORITIES_TITLE, $this->config->item('base_url') . $this->config->item('index_page') . '/AIDS_Additional_priorities_table'), TRUE, 0,MODEL_TYPE_AIDS);
        $this->load->view('outline', $this->data);
    }

    public function get_data() {
        $tree = $this->GetUITree(AIDS_APT_SCREEN_ID,MODEL_TYPE_AIDS);
        echo json_encode($tree);
    }
}
