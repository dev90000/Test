<?php

/**
 * Description of Acp
 *
 * @author boppanas2
 */
class Acp extends MY_Controller
{

  public function index() {
    $this->data['content'] = "Acp_view";
    $current_link = array('Annual Changes to Pub File', $this->config->item('base_url') . $this->config->item('index_page') . '/Acp');
    $this->breadcrumbs[] = $current_link;
    $this->data['inputdatafor'] = STANDARD_DATASET;
    $this->acp_headers = $this->get_selected_model_out_years(0, FALSE, MODEL_TYPE_NORM);
    $this->load->view('outline', $this->data);
  }

  public function get_data() {
    $dataset = isset($_POST['dataset']) ? intval($_POST['dataset']) : STANDARD_DATASET;
    switch ($dataset)
    {
      case SBIR_DATASET:
        $acpitems = $this->Input_data_model->get_all_rows($this->get_selected_model(MODEL_TYPE_SBIR), SBIR_ACP_SCREEN_ID);
        break;
      case STTR_DATASET:
        $acpitems = $this->Input_data_model->get_all_rows($this->get_selected_model(MODEL_TYPE_STTR), STTR_ACP_SCREEN_ID);
        break;
      case AIDS_DATASET:
        $acpitems = $this->Input_data_model->get_all_rows($this->get_selected_model(MODEL_TYPE_AIDS), AIDS_ACP_SCREEN_ID);
        break;
      default :
        $acpitems = $this->Input_data_model->get_all_rows($this->get_selected_model(MODEL_TYPE_NORM), ACP_SCREEN_ID);
    }
    echo json_encode($acpitems);
  }

  public function save_row() {
    $result = $this->save_Input_data_model_row();
    echo json_encode($result);
  }
}

//End of class Acp
