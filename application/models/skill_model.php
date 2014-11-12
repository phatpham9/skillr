<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author	Phat Pham
 */
class skill_model extends CI_Model
{
	private $table_name	= 'skill';

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Get all skills
	 *
	 * @return	array
	 */
	function get_all_skills($num = '', $offset = '', $column = 'start_date', $order = 'desc')
	{
		if (!empty($num)){
			$offset = empty($offset) ? 0 : $offset;
			$this->db->limit($num, $offset);
		}
		
		//$this->db->where('is_done', 0);
		//$this->db->or_where('date_done > ', date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . ' - 7 days')));
		$this->db->order_by($column, $order);
		$query = $this->db->get($this->table_name);

		return $query->num_rows() > 0 ? $query->result_array() : NULL;
	}

	function get_recent_done($num = '', $offset = '', $column = 'date_done', $order = 'desc') {
		if (!empty($num)){
			$offset = empty($offset) ? 0 : $offset;
			$this->db->limit($num, $offset);
		}

		$this->db->where('is_done', 1);
		$this->db->order_by($column, $order);
		$query = $this->db->get($this->table_name);

		return $query->num_rows() > 0 ? $query->result_array() : NULL;
	}

	/**
	 * Get skill list
	 *
	 * @return	array
	 */
	function get_skills_list($num = '', $offset = '', $column = 'start_date', $order = 'desc')
	{
		if (!empty($num)){
			$offset = empty($offset) ? 0 : $offset;
			$this->db->limit($num, $offset);
		}

		$this->db->where('user_id', $this->session->userdata['user_id']);
		$this->db->order_by($column, $order);
		$query = $this->db->get($this->table_name);

		return $query->num_rows() > 0 ? $query->result_array() : NULL;
	}

	/**
	 * Get skill
	 *
	 * @param   int
	 * @return	array
	 */
	function get_skill($skill_id)
	{
		$this->db->where('id', $skill_id);
		$this->db->where('user_id', $this->session->userdata['user_id']);
		$query = $this->db->get($this->table_name);
		
		return $query->num_rows() == 1 ? $query->row_array() : NULL;
	}

	/**
	 * check exist skill
	 *
	 * @param   int
	 * @return	bool
	 */
	function exist_check($skill_id)
	{
		$this->db->where('id', $skill_id);
		$this->db->where('user_id', $this->session->userdata['user_id']);
		$query = $this->db->get($this->table_name);

		return $query->num_rows() == 1 ? TRUE : FALSE;
	}

	/**
	 * Create skill
	 *
	 * @param	array
	 * @return	array
	 */
	function create_skill($skill)
	{
		$skill['user_id'] = $this->session->userdata['user_id'];

		if ($this->db->insert($this->table_name, $skill)) {
			$skill['id'] = $this->db->insert_id();
			return $skill;
		} else {
			return NULL;
		}
	}

	/**
	 * Update skill
	 *
	 * @param	array
	 * @return	bool
	 */
	function update_skill($skill)
	{
		$this->db->where('id', $skill['id']);
		$this->db->where('user_id', $this->session->userdata['user_id']);
		return $this->db->update($this->table_name, $skill);
	}

	/**
	 * done skill
	 *
	 * @param	array
	 * @return	bool
	 */
	function done_skill($skill_id)
	{
		$skill['is_done'] = 1;
		$skill['date_done'] = date('Y-m-d H:i:s');

		$this->db->where('id', $skill_id);
		$this->db->where('user_id', $this->session->userdata['user_id']);
		return $this->db->update($this->table_name, $skill);
	}

	/**
	 * undone skill
	 *
	 * @param	array
	 * @return	bool
	 */
	function undone_skill($skill_id)
	{
		$skill['is_done'] = 0;
		$skill['date_done'] = NULL;

		$this->db->where('id', $skill_id);
		$this->db->where('user_id', $this->session->userdata['user_id']);
		return $this->db->update($this->table_name, $skill);
	}

	/**
	 * Delete skill
	 *
	 * @param	int
	 * @return	bool
	 */
	function delete_skill($skill_id)
	{
		$this->db->where('id', $skill_id);
		$this->db->where('user_id', $this->session->userdata['user_id']);
		$this->db->delete($this->table_name);

		return $this->db->affected_rows() == 1 ? TRUE : FALSE;
	}

	function get_prev_position($start_date, $column = 'start_date', $order = 'asc')
	{
		$this->db->where('start_date >', $start_date);
		$this->db->where('user_id', $this->session->userdata['user_id']);
		$this->db->order_by($column, $order);
		$query = $this->db->get($this->table_name);

		if ($query->num_rows() > 0) {
			return $query->row()->id;
		} else {
			return FALSE;
		}
	}
}

/* End of file skill_model.php */
/* Location: ./application/models/skill_model.php */