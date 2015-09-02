<?php

/**
 * 概要：executeを実行するベースプロセス
 */
class process_execbase extends process_base {


	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_execbase($b_db_flg = true) {
		// 親のコンストラクタをコール
		parent::process_base($b_db_flg);
	}


	/**
	* insert処理を実行
	* 継承先でオーバーライドされる
	* @param util_db	$v_util_db	DBアクセッサ
	* @param req_base	$v_req		画面リクエスト
	* @return 遷移先の画面
	*/
	protected function process(util_dbaccessor $v_util_dbaccessor, req_base $v_req_base)
	{
		// SQL作成
		$s_sql = $this->make_sql($v_req_base);

		// バインド変数の値をセット
		$v_pdostatement = $this->set_bind_value($s_sql, $v_req_base, $v_util_dbaccessor);

		// SQLの実行
		$i_ret = $v_util_dbaccessor->execute_sql($v_pdostatement);

		// 実行結果をレスポンスに格納
		$v_res_base = $this->make_response($v_pdostatement, $v_req_base, $i_ret);

		// セッションに格納
		$this->set_session($v_res_base);

		return $this->get_view_name($v_req_base, $v_res_base);
	}


	/**
	 * SQLを作成
	 * 継承先でオーバーライドされる
	 * @param req_base $v_req_base	リクエスト
	 */
	protected function make_sql(req_base $v_req_base)
	{
	}


	/**
	 * バインド変数をセット
	 * 継承先でオーバーライドされる
	 * @param string 			$s_sql					SQL
	 * @param req_base			$v_req_base				リクエスト
	 * @param util_dbaccessor	$v_util_dbaccessor		DBアクセッサ
	 */
 	protected function set_bind_value($s_sql, req_base $v_req_base, util_dbaccessor $v_util_dbaccessor)
	{
	}


	/**
	 * セッションをセット
	 * 継承先でオーバーライドされる
	 * @param res_base $v_res_base	レスポンス
	 */
	protected function set_session(res_base $v_res_base)
	{
	}


	/**
	 * レスポンスを作成
	 * 継承先でオーバーライドされる
	 * @param PDOStatement		$v_pdostatement		PDOステートメント
	 * @param req_base			$v_req_base			リクエスト
	 * @param boolean 			$i_ret				処理されたレコードの数
	 */
	protected function make_response(PDOStatement $v_pdostatement, req_base $v_req_base, $i_ret)
	{
	}
}