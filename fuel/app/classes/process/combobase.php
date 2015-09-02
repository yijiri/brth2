<?php

/**
 * 区分：xxx
 * 概要：コンボボックス用の値をを取得
  */
class process_combobase extends process_listbase {


	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_combobase($b_db_flg = true) {
		// 親のコンストラクタをコール
		parent::process_listbase($b_db_flg);
	}


	/**
	 * SQLを作成
	 * @see process_listbase::make_sql()
	 */
	protected function make_sql(req_base $v_req_base)
	{
		// 継承先にオーバーライドしてもらう
	}


	/**
	 * バインド変数をセット
	 * @see process_listbase::set_bind_value()
	 */
	protected function set_bind_value($s_sql, req_base $v_req_base, util_dbaccessor $v_util_dbaccessor)
	{
		$v_pdostatement = $v_util_dbaccessor->v_pdo->prepare($s_sql);
		return $v_pdostatement;
	}


	/**
	 * セッションをセット
	 * @see process_listbase::set_session()
	 */
	protected function set_session(res_base $v_res_base)
	{
		// 継承先にオーバーライドしてもらう
	}


	/**
	 * レスポンスを作成
	 * @see process_listbase::make_response()
	 */
	protected function make_response(PDOStatement $v_pdostatement, req_base $v_req_base)
	{
		// 取得したデータを配列につめる
		$a_dto_common_comborow = $this->_set_result($v_pdostatement);
		$v_res_common_combo = new res_common_combo();
		$v_res_common_combo->a_dto_common_comborow = $a_dto_common_comborow;
		return $v_res_common_combo;
	}


	/**
	 * レスポンスの一覧をセット
	 * @param PDOStatement $v_pdostatement	PDOステートメント
	 * @return レスポンスの一覧:
	 */
	private function _set_result(PDOStatement $v_pdostatement)
	{
		$a_dto_common_comborow = array();
		while($result = $v_pdostatement->fetch(PDO::FETCH_ASSOC)){
			$v_dto_common_comborow = new dto_common_comborow();

			$v_dto_common_comborow->s_id = util_dbaccessor::get_encode_data($result, 'ID');
			$v_dto_common_comborow->s_str = util_dbaccessor::get_encode_data($result, 'STR');
			array_push ($a_dto_common_comborow, $v_dto_common_comborow);
		}
		return $a_dto_common_comborow;
	}


	/**
	 * 表示するViewの名前を返す
	 * @see process_base::get_view_name()
	 */
	protected function get_view_name(req_base $v_req_base, res_base $v_res_base = null)
	{
		// 使用なし
	}


	/**
	 * 実行してよい権限を返す
	 * @see process_base::get_auth()
	 */
	protected function get_auth()
	{
		return '1111';
	}
}