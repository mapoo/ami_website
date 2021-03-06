<?php
class Ami_model extends CI_Model {
	const DB_NEWBIE = "newbie";
	const DB_MEMBERS = "members";

	public function __construct()
	{
		$this->load->database();
	}


	public function updateById( $id, $bag )
	{
		$this->db->where('id',$id);
		return $this->db->update(self::DB_MEMBERS,$bag);
	}

	public function add_member( $row )//from newbie to member
	{
		$data = array(
			'email'=>$row->email,
			'name'=>$row->name,
			'password'=>$row->cellphone,
			'cellphone'=>$row->cellphone
		);	
		return $this->db->insert(self::DB_MEMBERS,$data);
	}

	public function delete_newbie($id)
	{
		return $this->db->delete(self::DB_NEWBIE,array('id'=>$id));
	}
	
	public function add_newbie()
	{
		$data = array(
			'email'=> $_POST['email'],
			'name'=> $_POST['name'],
			'cellphone'=> $_POST['cellphone']
		);
		return $this->db->insert(self::DB_NEWBIE,$data);
	}

	public function getAllInfo( )
	{
		$query = $this->db->get(self::DB_NEWBIE);
		if ($query->num_rows() == 0)
			return FALSE;
		else
			return $query;
	}
	
	public function check_email($new_email)
	{
		$query = $this->db->get_where(self::DB_NEWBIE,array('email'=>$new_email));
		if ($query->num_rows() ==  0)
		{
			return TRUE;
		}
		else
			return FALSE;
	}

	public function authenticate() 
	{
		$account = $this->input->post('account');
		$password= $this->input->post('password');
		$this->db->select('password');
		$query = $this->db->get_where(self::DB_MEMBERS,array('email'=>$account));
		if ($query->num_rows() == 0 )
			return FALSE;
		else
		{
			$row = $query->row();
			if (!strcmp($password,$row->password))
				return TRUE;
			else
				return FALSE;
		}
	}
	
	public function getInfoByEmailSelect( $data )
	{
		#var_dump($data);
		$email = $data[0];
		$num = count($data[1]);
		if ( $num != 0 )
		{
			$select = $data[1][0];
			for ($i = 1; $i < $num; $i++)
				$select = $select.",".$data[1][$i];
			$this->db->select( $select );
			$query=$this->db->get_where(self::DB_MEMBERS,array('email'=>$email));
			return $query;

		}
	}
	
	public function getInfoByIdSelect( $data )
	{
		$id= $data[0];
		$num = count($data[1]);
		if ( $num != 0 )
		{
			$select = $data[1][0];
			for ($i = 1; $i < $num; $i++)
				$select = $select.",".$data[1][$i];
			$this->db->select( $select );
			$query=$this->db->get_where(self::DB_MEMBERS,array('id'=>$id));
			return $query;

		}
	}
	 public function getIdNameByDepartment( $department ) 
	 {
		$temp = array("id","name");
		$this->db->select( $temp );
		$query = $this->db->get_where(self::DB_MEMBERS,array('department' => $department));
		return $query;
	 }


	 public function sendMessage($receiver, $message)
	 {
	 	
	 }
}

?>
