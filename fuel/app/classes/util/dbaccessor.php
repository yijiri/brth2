<?php

use \DB;

/**
 * DBアクセッサ
 */
class util_dbaccessor
{
	/**
	 * @var PDO
	 */
	public $v_pdo;


	/**
	 * @var バインド変数をストックしておく配列
	 */
	public $a_bindvalue = array();


	/**
	 * トランザクションを開始する
	 */
	public function begin_transaction()
	{
		try {
			Log::debug('トランザクション開始');
			$this->v_pdo->beginTransaction();
			return true;

		} catch (\Exception $e) {
			Log::error($e->getMessage());
			return false;
		}
	}


	/**
	 * ロールバックする
	 */
	public function rollback_transaction()
	{
		try {

			Log::debug('ロールバック');
			if ($this->v_pdo != null)
			{
				$this->v_pdo->rollBack();
			}
			return true;

		} catch (\Exception $e) {
			Log::error($e->getMessage());
			return false;
		}
	}


	/**
	 * DBとのコネクションを作成する
	 * @return 接続できたか(true:接続できた)
	 */
	public function create_connection()
	{
		try{
			Log::debug('コネクション作成');

			// Configに設定した値を取得
			Config::load('db','db');
			$s_connection = Config::get('db.production');
			$s_dsn = $s_connection['connection']['dsn'];
			$s_user = $s_connection['connection']['username'];
			$s_pwd = $s_connection['connection']['password'];

			$this->v_pdo = new PDO($s_dsn, $s_user, $s_pwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			return true;

		} catch (\Exception $e) {
			Log::error($e->getMessage());
			return false;
		}
	}


	/**
	 * DBとのコネクションを破棄する
	 */
	public function despose_connection()
	{
		try{
			Log::debug('コネクション破棄');
			$this->v_pdo = null;
			return true;

		} catch (\Exception $e) {
			Log::error($e->getMessage());
			return false;
		}
	}


	/**
	 * コミットする
	 */
	public function commit_transaction()
	{
		try {
			Log::debug('コミット');

			if ($this->v_pdo != null)
			{
				$this->v_pdo->commit();
			}
			return true;

		} catch (\Exception $e) {
			Log::error($e->getMessage());
			return false;
		}
	}


	/**
	 * バインド変数をセット。
	 * 配列にストック。
	 * @param unknown $v_pdostatement
	 * @param unknown $s_bind_name
	 * @param unknown $s_bind_value
	 * @return boolean
	 */
	public function set_bind_value($v_pdostatement, $s_bind_name, $s_bind_value)
	{
		try {

			$v_pdostatement->bindValue($s_bind_name, $s_bind_value);

			$v_dto_bindvalue = new dto_bindvalue();
			$v_dto_bindvalue->s_bind_name = $s_bind_name;
			$v_dto_bindvalue->s_bind_value = $s_bind_value;

			array_push($this->a_bindvalue, $v_dto_bindvalue);

			return true;

		} catch (\Exception $e) {
			Log::error($e->getMessage());
			return false;
		}
	}


	/**
	 * バインド変数をセット(set_bind_valueとはバインド変数の設定の仕方が異なる)。
	 * 配列にストック。
	 * @param unknown $v_pdostatement
	 * @param unknown $s_bind_name
	 * @param unknown $s_bind_value
	 * @param unknown $i_type
	 * @param unknown $i_byte
	 * @return boolean
	 */
	public function set_bind_value2($v_pdostatement, $s_bind_name, $s_bind_value, $i_type, $i_byte)
	{
		try {

			$v_pdostatement->bindParam($s_bind_name, $s_bind_value, $i_type, $i_byte);

			$v_dto_bindvalue = new dto_bindvalue();
			$v_dto_bindvalue->s_bind_name = $s_bind_name;
			$v_dto_bindvalue->s_bind_value = $s_bind_value;

			array_push($this->a_bindvalue, $v_dto_bindvalue);

			return true;

		} catch (\Exception $e) {
			Log::error($e->getMessage());
			return false;
		}
	}


	/**
	 * SQLを実行する
	 * @param unknown $v_pdostatement	プリペアドステートメント
	 * @return 処理件数
	 */
	public function execute_sql($v_pdostatement)
	{
		try {
			Log::debug('SQL実行');
			Log::info('SQL:::' .$v_pdostatement->queryString);

			// バインド変数をログ出力
			for ($i=0; $i<count($this->a_bindvalue); $i++)
			{
				$v_dto_bindvalue = $this->a_bindvalue[$i];
				Log::info('バインド値(' .$v_dto_bindvalue->s_bind_name .')::'. $v_dto_bindvalue->s_bind_value);
			}

			$v_pdostatement->execute();

			return $v_pdostatement->rowCount();

		} catch (\Exception $e) {
			Log::error($e->getMessage());
			return -1;
		}
	}


	/**
	 * DBから取得した値をsjisからutf-8にエンコードする
	 * @param unknown $a_dataset		データセット
	 * @param unknown $s_col_name		カラム名
	 * @return エンコードされた文字列
	 */
	public static function get_encode_data($a_dataset, $s_col_name)
	{
		if ($a_dataset[$s_col_name] == ''){return;}
//		return mb_convert_encoding($a_dataset[$s_col_name], 'utf-8', 'sjis');
		return mb_convert_encoding($a_dataset[$s_col_name], 'utf-8', 'utf-8');
	}


	/**
	 * DBから取得した値をsjisからutf-8にエンコードする
	 * @param unknown $s_val			値
	 * @return エンコードされた文字列
	 */
	public static function get_encode_data_fromval($s_val)
	{
		if ($s_val == ''){return;}
//		return mb_convert_encoding($s_val, 'utf-8', 'sjis');
		return mb_convert_encoding($s_val, 'utf-8', 'utf-8');
	}


	/**
	 * 画面で入力された値をutf-8からsjisにデコードする
	 * @param unknown $s_val			値
	 * @return エンコードされた文字列
	 */
	public static function get_decode_data($s_val)
	{
		if ($s_val == ''){return;}
//		return mb_convert_encoding($s_val, 'sjis', 'utf-8');
		return mb_convert_encoding($s_val, 'utf-8', 'utf-8');
	}
}