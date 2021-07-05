<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Golf extends CI_Controller
{
    static $helper   = array('user_helper');
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_model', 'CommonModel');
        $this->load->library('cart');
        $this->load->helper(self::$helper);
        $this->system_config = $this->CommonModel->get_single_data_by_single_column('nso_sysconfig', 'id', 1);
    }

    public function participant()
    {
        $query = $this->db->where('type','Golf')->get('nso_new_group');

        $data['count'] = $query->num_rows();
        $data['group'] = $query->result();

        $dquery = $this->db->where('confEvent','Golf')->get('nso_forms');

        $data['countper'] = $dquery->num_rows();

        $where = array(
            'nso_forms.form_id !=' => 'nso_new_group.member_1',
            // 'nso_new_group.member_2 !=' => 'nso_forms.form_id',
            // 'nso_new_group.member_3 !=' => 'nso_forms.form_id',
            // 'nso_new_group.member_4 !=' => 'nso_forms.form_id',
        );

        //$nsoquery = $this->db->select('*')->from('nso_forms')->join('nso_new_group', 'nso_forms.confEvent = nso_new_group.type')->where('nso_forms.confEvent','Golf')->where($where)->order_by('nso_forms.confEvent','RANDOM')->get();

        $nsoquery =  $this->db->query("SELECT * FROM `nso_forms` WHERE NOT EXISTS( SELECT * FROM `nso_new_group` WHERE `nso_forms`.`form_id` = `nso_new_group`.`member_1` OR `nso_forms`.`form_id` = `nso_new_group`.`member_2` OR `nso_forms`.`form_id` = `nso_new_group`.`member_3` OR `nso_forms`.`form_id` = `nso_new_group`.`member_4`) AND `nso_forms`.`confEvent`='Golf'");
        $data['nso'] = $nsoquery->result();
      //print $this->db->last_query();

        $data['title'] = "Home";
        $data['mainContent'] = $this->load->view('frontend/index.php', $data, true);
        $this->load->view('frontend/golf_participant',$data);
    }

    public function update(){
        $group_id = $this->input->post('group_id');
        
        for($i=1; $i<=4; $i++){
            $member = $this->input->post('member_'.$i);
            if (!empty($member)){
                $data['member_'.$i] = $member;
            }
        }

        $this->db->where('group_id',$group_id)->update('nso_new_group',$data);
        redirect(base_url('golf_participant'));
    }
}