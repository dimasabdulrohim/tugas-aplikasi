<?php 
/**
 * 
 */
class modeldata extends CI_Model
{
	
	public function tabeldataasset()
	{
		return $this->db->get('tbl_asset')->result();
	}
	public function tabeldatauser()
	{
		return $this->db->get('tbl_user')->result();
	}
	public function tabeldatainvestor()
	{
		return $this->db->get('tbl_investor')->result();
	}
	public function simpanuser($nama,$username,$password)
	{
		$isidata = array(
			'nama' => $nama , 
			'username' => $username,
			'password' => $password,
		);
		$this->db->insert('tbl_user',$isidata);
	}
    public function simpaninvestor($nama,$alamat,$keterangan)
    {
    	$isidata = array(
         'nama' => $nama,
         'alamat' => $alamat,
         'keterangan' => $keterangan,
    	);
    	$this->db->insert('tbl_investor',$isidata);
    }
    public function simpanasset($nama_barang,$jumlah,$kondisi,$keterangan)
    {
    	$isidata = array(
         'nama_barang' => $nama_barang,
         'jumlah' => $jumlah,
         'kondisi' => $kondisi,
         'keterangan' => $keterangan,
    	);
    	$this->db->insert('tbl_asset',$isidata);
    }
    public function getIdDataUser($id_user)
	{
		$this->db->where('id_user', $id_user);
		return $this->db->get('tbl_user')->result();
	}
	public function updateuser($id_user , $nama, $username, $password)
	{
		$editData = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
		);
		$this->db->set($editData);
		$this->db->where('id_user', $id_user);
		$this->db->update('tbl_user');
	}
	 public function getIdDatainvestor($id_investor)
	{
		$this->db->where('id_investor', $id_investor);
		return $this->db->get('tbl_investor')->result();
	}
	public function updateinvestor($id_investor, $nama, $alamat, $keterangan)
	{
		$editData = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'keterangan' => $keterangan,
		);
		$this->db->set($editData);
		$this->db->where('id_investor', $id_investor);
		$this->db->update('tbl_investor');
	}
	 public function getIdDataasset($id_asset)
	{
		$this->db->where('id_asset', $id_asset);
		return $this->db->get('tbl_asset')->result();
	}
	public function updateasset($id_asset, $nama_barang, $jumlah,$kondisi, $keterangan)
	{
		$editData = array(
			'nama_barang' => $nama_barang,
			'jumlah' => $jumlah,
			'kondisi' => $kondisi,
			'keterangan' => $keterangan,
		);
		$this->db->set($editData);
		$this->db->where('id_asset', $id_asset);
		$this->db->update('tbl_asset');
	}
	public function getIdUser($id)
		{
			$this->db->where('id_user', $id);
			return $this->db->get('tbl_user');
		}
		public function hapusDataUser()
		{
			$hapusData = $this->input->post('id_user');//true
			$this->db->where('id_user', $hapusData);
			$this->db->delete('tbl_user');
		}
		public function getIdinvestor($id)
		{
			$this->db->where('id_investor', $id);
			return $this->db->get('tbl_investor');
		}
		public function hapusDatainvestor()
		{
			$hapusData = $this->input->post('id_investor');//true
			$this->db->where('id_investor', $hapusData);
			$this->db->delete('tbl_investor');
		}
		public function getIdasset($id)
		{
			$this->db->where('id_asset', $id);
			return $this->db->get('tbl_asset');
		}
		public function hapusDataasset()
		{
			$hapusData = $this->input->post('id_asset');//true
			$this->db->where('id_asset', $hapusData);
			$this->db->delete('tbl_asset');
		}

}
 ?>