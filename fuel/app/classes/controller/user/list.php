<?php


class Controller_User_List extends Controller_Listbase
{
	public function action_index()
	{
		$v_process_common_combocompany = new process_common_combocompany();
		$v_process_common_combocompany->execute_process(new req_base());

		$this->set_view(VIEW_UESR_LIST);
	}

}
