<?php

/**
 * 詳細系ベースプロセス
 */
class process_detailbase extends process_base {


	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_detailbase($b_db_flg = true){
		// 親のコンストラクタをコール
		parent::process_base($b_db_flg);
	}


	/**
	* プロセスを実行（画面に表示するレコードを取得してセッションにつめる）
	* @see process_base::process()
	*/
	protected function process(util_dbaccessor $v_util_dbaccessor, req_base $v_req_base)
	{
		// パラメータチェック
		$a_msg = $this->check_val($v_req_base);
		if (count($a_msg) != 0)
		{
			// ここでのエラーは致命的なエラーとしてエラー画面にとばす
			$v_dto_error = new dto_error();
			$v_dto_error->s_error_msg = ERROR_SELECT;
			Session::delete(SESSION_COMMON);
			Session::set(SESSION_ERROR, $v_dto_error);
			return VIEW_ERROR;
		}

		// SQL作成
		$s_sql = $this->make_sql($v_req_base);

		// バインド変数の値をセット
		$v_pdostatement = $this->set_bind_value($s_sql, $v_req_base, $v_util_dbaccessor);

		// SQLの実行
		$i_ret = $v_util_dbaccessor->execute_sql($v_pdostatement);
		if ($i_ret == -1)
		{
			return '';
		}

		// 検索結果をレスポンスに格納
		$v_res_base = $this->make_response($v_pdostatement, $v_req_base);

		// セッションに格納
		$this->set_session($v_res_base);

		return $this->get_view_name($v_req_base);
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
	 * @param unknown $s_sql	SQL
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
	 * @param PDOStatement $v_pdostatement	PDOステートメント
	 * @param req_base $v_req_base			リクエスト
	 */
	protected function make_response(PDOStatement $v_pdostatement, req_base $v_req_base)
	{
	}


	/**
	 * 入力チェックを行う
	 * @param req_base $v_req_base
	 */
	protected function check_val(req_base $v_req_base)
	{
	}


	/**
	 * レスポンスにセットする(入力チェックがあった場合)
	 * @param req_base 	$v_req_base		リクエスト
	 * @param unknown 	$s_msg			エラーメッセージ
	 */
	protected function set_error_msg(req_base $v_req_base, $a_msg)
	{
	}
}



