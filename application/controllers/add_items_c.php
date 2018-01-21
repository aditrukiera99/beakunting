<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_items_c extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data_tax_item = $this->db->query("SELECT * FROM ak_produk WHERE TIPE = 'Sales Tax Item' ORDER BY ID ASC LIMIT 10")->result();
		$data_item = $this->db->query("SELECT * FROM ak_produk ORDER BY ID ASC LIMIT 10")->result();
		$data_accn = $this->db->query("SELECT * FROM ak_kode_akuntansi ORDER BY ID DESC")->result();
		$data_um = $this->db->query("SELECT * FROM ak_satuan ORDER BY ID DESC")->result();
		$data_tax = $this->db->query("SELECT * FROM ak_sales_tax ORDER BY ID DESC")->result();
		$data_vendor = $this->db->query("SELECT * FROM ak_supplier ORDER BY ID DESC")->result();

		$msg = "";

		if($this->input->post('type_utama') == 'Service'){
			$msg = 1;
			$type  = $this->input->post('type_utama');
			$nama  = $this->input->post('nama_utama');
			$anak_dari  = $this->input->post('anak_dari_utama');


			$um_1  = $this->input->post('um_1');
			$deskripsi_1  = $this->input->post('deskripsi_1');
			$rate_1  = $this->input->post('rate_1');
			$tax_1  = $this->input->post('tax_1');
			$akun_1  = $this->input->post('akun_1');

			$this->db->query("
				INSERT INTO ak_produk
				(NAMA_PRODUK,DESKRIPSI,SATUAN,TIPE,KODE_AKUN,HARGA_SATUAN,TAX)
				VALUES 
				('$nama','$deskripsi_1','$um_1','$type','$akun_1','$rate_1','$tax_1')
			");

		} else if($this->input->post('type_utama') == 'Inventory Part'){
			$msg = 1;
			$type  = $this->input->post('type_utama');
			$nama  = $this->input->post('nama_utama');
			$anak_dari  = $this->input->post('anak_dari_utama');


			$manuf_2  = $this->input->post('manuf_2');
			$um_2  = $this->input->post('um_2');
			$deskripsi_pur_2  = $this->input->post('deskripsi_pur_2');
			$cost_pur_2  = $this->input->post('cost_pur_2');
			$akun_pur_2  = $this->input->post('akun_pur_2');
			$vendor_pur_2  = $this->input->post('vendor_pur_2');
			$price_sales_2  = $this->input->post('price_sales_2');
			$tax_sales_2  = $this->input->post('tax_sales_2');
			$akun_sales_2  = $this->input->post('akun_sales_2');
			$akun_inven_2  = $this->input->post('akun_inven_2');
			$min_inv_2  = $this->input->post('min_inv_2');
			$max_inv_2  = $this->input->post('max_inv_2');
			$onhand_2  = $this->input->post('onhand_2');
			$total_value_2  = $this->input->post('total_value_2');
			$asof_2  = $this->input->post('asof_2');

			$this->db->query("
				INSERT INTO ak_produk
				(NAMA_PRODUK,DESKRIPSI,SATUAN,TIPE,KODE_AKUN,HARGA_SATUAN)
				VALUES 
				('$nama','$deskripsi_pur_2','$um_2','$type','$akun_inven_2','$cost_pur_2')
			");

			$kode_terakhir = $this->db->insert_id();

			$this->db->query("
				INSERT INTO ak_produk_inventory_part
				(NAMA_PRODUK,KODE_PRODUK,MANUFACTUR_NUMBER,PURCHASE_COST,PURCHASE_AKUN,PURCHASE_VENDOR,SALES_PRICE,SALES_TAX,SALES_AKUN,INVEN_AKUN,INVEN_MIN,INVEN_MAX,INVEN_ONHAND,INVEN_TOTAL,INVEN_ASOF)
				VALUES 
				('$nama','$kode_terakhir','$manuf_2','$cost_pur_2','$akun_pur_2','$vendor_pur_2','$price_sales_2','$tax_sales_2','$akun_sales_2','$akun_inven_2','$min_inv_2','$max_inv_2','$onhand_2','$total_value_2','$asof_2')
			");

		} else if($this->input->post('type_utama') == 'Inventory Assembly'){
			$msg = 1;
			$type  = $this->input->post('type_utama');
			$nama  = $this->input->post('nama_utama');
			$anak_dari  = $this->input->post('anak_dari_utama');


			$um_3  = $this->input->post('um_3');
			$cost_type_3  = $this->input->post('cost_3');
			$cogs_akun_3  = $this->input->post('cogs_akun_3');
			$deskripsi_3  = $this->input->post('deskripsi_3');
			$sales_price_3  = $this->input->post('sales_price_3');
			$tax_3  = $this->input->post('tax_3');
			$income_akun_3  = $this->input->post('income_akun_3');
			$akun_inven_3  = $this->input->post('akun_inven_3');
			$min_inv_3  = $this->input->post('min_inv_3');
			$max_inv_3  = $this->input->post('max_inv_3');
			$onhand_3  = $this->input->post('onhand_3');
			$total_value_3  = $this->input->post('total_value_3');
			$asof_3  = $this->input->post('asof_3');
			$id_produk_2  = $this->input->post('id_produk_2');
			$qty_2  = $this->input->post('qty_2');
			$total_2  = $this->input->post('total_2');



			$this->db->query("
				INSERT INTO ak_produk
				(NAMA_PRODUK,DESKRIPSI,SATUAN,TIPE,KODE_AKUN,HARGA_SATUAN)
				VALUES 
				('$nama','$deskripsi_3','$um_3','$type','$income_akun_3','$cost_type_3')
			");

			$kode_terakhir = $this->db->insert_id();

			$this->db->query("
				INSERT INTO ak_produk_inventory_assembly
				(KODE_PRODUK,COST,COGS_AKUN,DESKRIPSI,SALES_PRICE,TAX_CODE,INCOME_AKUN,INVEN_AKUN,INVEN_MIN,INVEN_MAX,INVEN_ONHAND,INVEN_TOTAL,INVEN_ASOF)
				VALUES 
				('$kode_terakhir','$cost_type_3','$cogs_akun_3','$deskripsi_3','$sales_price_3','$tax_3','$income_akun_3','$akun_inven_3','$min_inv_3','$max_inv_3','$onhand_3','$total_value_3','$asof_3')
			");

			$kode_terakhir_2 = $this->db->insert_id();
			$total_fin = str_replace(',', '', $total_2);

			foreach ($id_produk_2 as $key => $value) {
				$this->db->query("
					INSERT INTO ak_produk_detail_inventory_assembly
					(KODE_INVEN,KODE_PRODUK,KUANTITAS,TOTAL)
					VALUES 
					('$kode_terakhir_2','$id_produk_2[$key]','$qty_2[$key]','$total_fin[$key]')
				");
			}

		} else if($this->input->post('type_utama') == 'Non Inventory Part'){
			$msg = 1;
			$type  = $this->input->post('type_utama');
			$nama  = $this->input->post('nama_utama');
			$anak_dari  = $this->input->post('anak_dari_utama');


			$manuf_4 = $this->input->post('manuf_4');
			$um_4  = $this->input->post('um_4');
			$deskripsi_4  = $this->input->post('deskripsi_4');
			$rate_4  = $this->input->post('rate_4');
			$tax_4  = $this->input->post('tax_4');
			$akun_4  = $this->input->post('akun_4');

			$this->db->query("
				INSERT INTO ak_produk
				(NAMA_PRODUK,DESKRIPSI,SATUAN,TIPE,KODE_AKUN,HARGA_SATUAN,TAX,MANUFACTUR_NUMBER)
				VALUES 
				('$nama','$deskripsi_4','$um_4','$type','$akun_4','$rate_4','$tax_4','$manuf_4')
			");


		} else if($this->input->post('type_utama') == 'Other Charge'){
			$msg = 1;
			$type  = $this->input->post('type_utama');
			$nama  = $this->input->post('nama_utama');
			$anak_dari  = $this->input->post('anak_dari_utama');


			$deskripsi_5  = $this->input->post('deskripsi_5');
			$rate_5  = $this->input->post('rate_5');
			$tax_5  = $this->input->post('tax_5');
			$akun_5  = $this->input->post('akun_5');

			$this->db->query("
				INSERT INTO ak_produk
				(NAMA_PRODUK,DESKRIPSI,TIPE,KODE_AKUN,HARGA_SATUAN,TAX)
				VALUES 
				('$nama','$deskripsi_5','$type','$akun_5','$rate_5','$tax_5')
			");

		} else if($this->input->post('type_utama') == 'Subtotal'){
			$msg = 1;
			$type  = $this->input->post('type_utama');
			$nama  = $this->input->post('nama_utama');
			$anak_dari  = $this->input->post('anak_dari_utama');


			$deskripsi_6  = $this->input->post('deskripsi_6');
			

			$this->db->query("
				INSERT INTO ak_produk
				(NAMA_PRODUK,DESKRIPSI,TIPE)
				VALUES 
				('$nama','$deskripsi_6','$type')
			");

		} else if($this->input->post('type_utama') == 'Group'){
			$msg = 1;
			$type  = $this->input->post('type_utama');
			$nama  = $this->input->post('nama_utama');
			$anak_dari  = $this->input->post('anak_dari_utama');


			$deskripsi_7  = $this->input->post('deskripsi_7');
			$id_produk_7  = $this->input->post('id_produk_7');
			$qty_7  = $this->input->post('qty_7');
			

			$this->db->query("
				INSERT INTO ak_produk
				(NAMA_PRODUK,DESKRIPSI,TIPE)
				VALUES 
				('$nama','$deskripsi_7','$type')
			");

			$kode_terakhir_2 = $this->db->insert_id();

			foreach ($id_produk_7 as $key => $value) {
				$this->db->query("
					INSERT INTO ak_produk_detail_group
					(KODE_GROUP,KODE_PRODUK,KUANTITAS)
					VALUES 
					('$kode_terakhir_2','$id_produk_7[$key]','$qty_7[$key]')
				");
			}

		} else if($this->input->post('type_utama') == 'Discount'){
			$msg = 1;
			$type  = $this->input->post('type_utama');
			$nama  = $this->input->post('nama_utama');
			$anak_dari  = $this->input->post('anak_dari_utama');


			$deskripsi_8  = $this->input->post('deskripsi_8');
			$rate_8  = $this->input->post('rate_8');
			$tax_8  = $this->input->post('tax_8');
			$akun_8  = $this->input->post('akun_8');

			$this->db->query("
				INSERT INTO ak_produk
				(NAMA_PRODUK,DESKRIPSI,TIPE,KODE_AKUN,HARGA_SATUAN,TAX)
				VALUES 
				('$nama','$deskripsi_8','$type','$akun_8','$rate_8','$tax_8')
			");

		} else if($this->input->post('type_utama') == 'Payment'){
			$msg = 1;
			$type  = $this->input->post('type_utama');
			$nama  = $this->input->post('nama_utama');
			$anak_dari  = $this->input->post('anak_dari_utama');


			$deskripsi_9  = $this->input->post('deskripsi_9');
			$payment_method_9  = $this->input->post('payment_method_9');
			$akun_9  = $this->input->post('akun_9');

			$this->db->query("
				INSERT INTO ak_produk
				(NAMA_PRODUK,DESKRIPSI,TIPE,KODE_AKUN)
				VALUES 
				('$nama','$deskripsi_9','$type','$akun_9')
			");

		} else if($this->input->post('type_utama') == 'Sales Tax Item'){
			$msg = 1;
			$type  = $this->input->post('type_utama');
			$nama  = $this->input->post('nama_utama');
			$anak_dari  = $this->input->post('anak_dari_utama');


			$deskripsi_10  = $this->input->post('deskripsi_10');
			$rate_10  = $this->input->post('rate_10');
			$vendor_10  = $this->input->post('vendor_10');

			$this->db->query("
				INSERT INTO ak_produk
				(NAMA_PRODUK,DESKRIPSI,TIPE,HARGA_SATUAN,VENDOR)
				VALUES 
				('$nama','$deskripsi_10','$type','$rate_10','$vendor_10')
			");

		} else if($this->input->post('type_utama') == 'Sales Tax Group'){
			$msg = 1;
			$type  = $this->input->post('type_utama');
			$nama  = $this->input->post('nama_utama');
			$anak_dari  = $this->input->post('anak_dari_utama');


			$deskripsi_11  = $this->input->post('deskripsi_11');
			$id_produk_11  = $this->input->post('id_produk_11');

			$this->db->query("
				INSERT INTO ak_produk
				(NAMA_PRODUK,DESKRIPSI,TIPE)
				VALUES 
				('$nama','$deskripsi_11','$type')
			");

			$kode_terakhir_2 = $this->db->insert_id();

			foreach ($id_produk_11 as $key => $value) {
				$this->db->query("
					INSERT INTO ak_produk_detail_tax_group
					(KODE_GROUP,KODE_PRODUK)
					VALUES 
					('$kode_terakhir_2','$id_produk_11[$key]')
				");
			}

		}

		$data = array(
			'page' => 'add_items_v', 
			'view' => 'item',
			'data_item' => $data_item,
			'data_accn' => $data_accn,
			'data_um' => $data_um,
			'data_tax' => $data_tax,
			'data_tax_item' => $data_tax_item,
			'data_vendor' => $data_vendor,
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */