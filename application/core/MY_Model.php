<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of MY_Controller
 *
 * @author drkdra
 */
class MY_Model extends CI_Model {
	protected $table = array();
	protected $tableName = '';


	private $columnType = array('integer','string','double');

	public function __construct() {
		parent::__construct();
	}

	public function create($data,$multi=false){
		$result = false;
		if ($multi){
			foreach ($data as &$d){
				$d = $this->checkData($d);
			}

			$result = $this->db->insert_batch($this->tableName,$data);
		}else{
            $data = $this->checkData($data);
            $result = $this->db->insert($this->tableName,$data);
		}
		if ($result){
			return $this->db->insert_id();
		}
		return $result;
	}

	public function read($where=array(),$order=array(),$getFirst=false,$limit=0,$limit2=0,$returnResult=true){
		$this->db->from($this->tableName);

		$this->checkWhere($where);

		foreach ($order as $field => $val){
			if (!isset($this->table[$field])){
				$this->error();
			}

			if ($val){
				$this->db->order_by($this->tableName.'.'.$field,'asc');
			}else{
				$this->db->order_by($this->tableName.'.'.$field,'desc');
			}
		}

		if ($limit){
			if ($limit2){
				$this->db->limit($limit,$limit2);
			}else{
				$this->db->limit($limit);
			}
		}

        if ($returnResult){
            if ($getFirst){
                return $this->db->get()->first_row();
            }else{
                return $this->db->get()->result();
            }
        }else{
            return $this->db->get();
        }
	}

	public function readCount($where=array()){
		$this->db->from($this->tableName);

		$this->checkWhere($where);

		return $this->db->count_all_results();
	}

	public function update($data=array(),$where=array()){
		$this->db->db_debug = true; 
		$this->checkWhere($where);
		
		$data = $this->checkData($data);
		$result = $this->db->update($this->tableName,$data);

		return $result;
	}

	public function delete($where = array()){
		$this->checkWhere($where);

		$this->db->delete($this->tableName);

		return true;
	}
	
	function uploadFile($name,$dir='./assets/uploads/'){
        if (!file_exists($dir) || !is_dir($dir)) mkdir($dir,0777,true);

        $config = array();
        $config['upload_path'] = $dir;
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '204800';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);

        $return = array('ok'=>false);
        if (!$this->upload->do_upload($name)){
            $return = array('ok'=>false,'msg'=>$this->upload->display_errors());
        }else{
            $return = array('ok' => true, 'msg' => 'Ok', 'data' => $this->upload->data());
        }

        return $return;
    }
	
	// vietth re-write function
	public function createThumb($image, $upload_path='assets/uploads/images/thumb/products/') {
		if ($image != '') {
			$data = pathinfo($image);
			if (!file_exists($upload_path) || !is_dir($upload_path)) mkdir($upload_path,0777,true);
			$this->load->library('image_lib');
			$config2 = array();
			$config2['image_library'] = 'gd2';
			$config2['source_image'] = $_SERVER['DOCUMENT_ROOT'].'/'.$image;
			$config2['new_image'] = $_SERVER['DOCUMENT_ROOT'].'/'.$upload_path;
			$config2['create_thumb'] = TRUE;
			$config2['maintain_ratio'] = TRUE;
			$config2['width'] = 400;
			$config2['height'] = 400;
			$this->image_lib->clear();
			$this->image_lib->initialize($config2);
			if(!$this->image_lib->resize()){
				print $this->image_lib->display_errors();
			}else{
				// preg_match('/(?<extension>\.\w+)$/im', $image, $matches);
				// $extension = $matches['extension'];
				// $thumbnail = preg_replace('/(\.\w+)$/im', '', $image) . '_thumb' . $extension;
				// return $thumbnail;
				//print_r($_FILES);
				
				$thumb = $upload_path.$data['filename'].'_thumb.'.$data['extension'];
				return $thumb;
			}
		} else {
			return $thumb = 'assets/img/sample_thumb.png';
		}
	}
	
	function pagination($base_url='admin/products/',$suffix='',$total=10,$per_page=10,$uri_segment=3) {
		$this->load->library('pagination');
        $config['base_url'] = base_url($base_url);
        $config['suffix'] = $suffix;
		// print_r($base_url);die();
        $config['total_rows'] = $total;
        $config['uri_segment'] = $uri_segment;
        $config['per_page'] = $per_page;
        $config['num_links'] = 5;
        $config['use_page_numbers'] = TRUE;
		$config['first_url'] = base_url().$base_url.$suffix;
		 $config["num_tag_open"] = "<li class='pagination__item '>";
        $config["num_tag_close"] = "</li>";
        $config["cur_tag_open"] = "<li class='pagination__item active'>";
        $config["cur_tag_close"] = "</li>";
        $config["first_link"] = "First";
        $config["first_tag_open"] = "<li class='pagination__item'>";
        $config["first_tag_close"] = "</li>";
        $config["last_link"] = "Last";
        $config["last_tag_open"] = "<li class='pagination__item'>";
        $config["last_tag_close"] = "</li>";
        $config["next_link"] = "&#8594;";
        $config["next_tag_open"] = "<li class='pagination__step'>";
        $config["next_tag_close"] = "</li>";
        $config["prev_link"] = "&#8592;";
        $config["prev_tag_open"] = "<li class='pagination__step'>";
        $config["prev_tag_close"] = "</li>";
		$config['attributes'] = array('class' => 'js-pagination');
        $this->pagination->initialize($config);
        $page_number = $this->uri->segment($uri_segment);
        if (empty($page_number)) $page_number = 1;
        $start = ($page_number - 1) * $config['per_page'];
        return array($this->pagination->create_links(),$start);
	}
	// end vietth

	protected function checkTableDefine(){
		if (!$this->tableName){
			$this->error();
		}

		if (!is_array($this->table)){
			$this->error();
		}

		foreach ($this->table as $field => $detail){
			if (!$field){
				$this->error();
			}

			if (!is_array($detail)){
				$this->error();
			}

			if (!isset($detail['isIndex']) || !isset($detail['nullable']) ||!isset($detail['type'])){
				$this->error();
			}

			if (!in_array($detail['type'],$this->columnType)){
				$this->error();
			}
		}

		return true;
	}

	private function checkData($data){
		foreach ($data as $field => &$val){
			if (!isset($this->table[$field])){
				$this->error('Trường không tồn tại : '.$field);
			}

			if (!$this->checkType($val, $this->table[$field]['type'])){
				$this->error('Sai kiểu: '.$field);
			}

			if (!$this->table[$field]['nullable'] && (is_null($val))){
				$this->error("Trường không được trống: $field");
			}

			if ($this->table[$field]['type'] != 'string'){
			}else{
			}
		}
		return $data;
	}

	private function checkWhere($where=array()){
		if (!is_array($where)){
			return false;
		}
		foreach ($where as $field => $val){
            $this->checkField($field,$val);
		}
	}

    private function checkField($field,$val){
        $field = trim($field);
        $operator = $this->hasOperator($field);
        if ($operator){
            $field = trim(str_replace($operator,'',$field));
        }else{
            $operator = '';
        }
        if (!isset($this->table[$field])){
            $this->error("Trường không tồn tại $field");
        }

        if (!$this->checkType($val, $this->table[$field]['type'])){
            $this->error("Sai kiểu $field (".$this->table[$field]['type'].") $val");
        }

        if ($this->table[$field]['type'] != 'string'){
        }else{
        }
        $like = 0;
        if (is_array($val)){
            $inVals = array();
            $notInVals = array();
            foreach ($val as $v){
                if (strstr($v,'%')){
                    $this->checkField($field,$v);
                }elseif ($v[0] == '!'){
                    $notInVals[] = substr($v,1);
                }else{
                    $inVals[] = $v;
                }
            }
            if ($inVals) $this->db->where_in($this->tableName.'.'.$field,$inVals);
            if ($notInVals) $this->db->where_not_in($this->tableName.'.'.$field,$notInVals);
        }else if (strstr($val, '%')) {
            if ($val[0] == '!'){
                $not = true;
                $val = substr($val,1);
            }else{
                $not = false;
            }
            $like = 'none';
            if (($val[0] == '%') && ($val[strlen($val) - 1] == '%')) {
                $like = 'both';
                $val = substr($val, 1, strlen($val) - 2);
            } else if ($val[0] == '%') {
                $like = 'before';
                $val = substr($val, 1, strlen($val) - 1);
            } else if ($val[strlen($val) - 1] == '%') {
                $like = 'after';
                $val = substr($val, 0, strlen($val) - 1);
            }
            if ($not) $this->db->not_like($this->tableName . '.' . $field, $val, $like);
            else $this->db->like($this->tableName . '.' . $field, $val, $like);
        }else{
            $this->db->where($field.' '.$operator, $val);
        }
    }

    private function hasOperator($str){
        $str = trim($str);
        $matches = array();
        if (preg_match("/(\s|<>|<=|>=|!=|<|>|!|=|is null|is not null)/i", $str, $matches)){
            return $matches[0];
        }
        return false;
    }

	private function checkType($val,$type){
		if (!in_array($type,$this->columnType)){
			return false;
		}
		if (is_array($val)){
			//$flag = true;
			foreach ($val as $v){
				if(!$this->checkType($v,$type)) return false;
			}
			return true;
		}
		if ($type == 'integer'){
			return is_int((int)$val);
		}else if ($type == 'double'){
			return is_double($val);
		}else if ($type == 'string'){
			return is_string($val);
		}else{
			return false;
		}

		return true;
	}
	
	public function setup_navmenu() {
		// Set up mega menu
        $config["nav_tag_open"]				= '<ul class="nav nav-pills nav-mega revo-mega">';     
		$config["parentl1_tag_open"]		= '<li class="dropdown menu-vendors level1">';
		$config["parentl1_anchor"]			= '<a  class="item-link dropdown-toggle" data-toogle="dropdown" href="%s">%s<span class="caret"></span></a>';
		$config["parent_tag_open"]			= '<li class="dropdown-submenu">'; 
		$config["parent_anchor"]				= '<a href="%s" data-toggle="dropdown" class="nav-link">%s</a>'; 
		$config["children_tag_open"]			= '<ul class="dropdown-menu">';
		$config["item_active_class"] 			= 'active';
		$config["item_tag_open"]     			= '<li class="menu-home revo-mega-menu">';

		return $this->multi_menu->initialize($config);
	}
	
	public function setup_footer_menu() {
		// Set up mega menu
        $config["nav_tag_open"]				= '<ul class="footer_menu">';     
		$config["parentl1_tag_open"]		= '<li class="nav-item">';
		$config["parentl1_anchor"]			= '<a  class="nav-link dropdown-toggle" href="%s">%s<span class="caret"></span></a>';
		$config["parent_tag_open"]			= '<li class="dropdown-submenu">'; 
		$config["parent_anchor"]				= '<a href="%s" data-toggle="dropdown" class="nav-link">%s</a>'; 
		$config["children_tag_open"]			= '<ul class="dropdown-menu">';
		$config["item_active_class"] 			= 'active';
		$config["item_tag_open"]     			= '<li class="nav-item">';

		return $this->multi_menu->initialize($config);
	}
	
	public function setup_mobilemenu() {
		// Set up mega menu
        $config["nav_tag_open"]				= '<ul class="menu revo-menures" id="menu-primary-menu-3">';     
		$config["parentl1_tag_open"]		= '<li class="res-dropdown has-img has-child">';
		$config["parentl1_anchor"]			= '<a tabindex="0" class="item-link" href="%s">%s</a><span class="show-dropdown fa"></span>';
		$config["parent_tag_open"]			= '<li class="menu-accessories">'; 
		$config["parent_anchor"]				= '<a href="%s" data-toggle="dropdown" class="nav-link">%s</a>'; 
		$config["children_tag_open"]			= '<ul class="dropdown-resmenu" style="display:none">';
		$config["item_active_class"] 			= 'active';
		$config["item_tag_open"]     			= '<li class="res-dropdown has-img">';

		return $this->multi_menu->initialize($config);
	}

	private function error($msg=''){
		if ($msg == ''){
			show_error('Định nghĩa bảng không đúng ('.get_class($this).')', 500);
		}else{
			show_error($msg.' ('.get_class($this).')', 500);
		}
	}
}

?>
