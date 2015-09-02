<?php

/**
 * メール
 */
class util_mail
{

	/**
	 * メールを送信する
	 * (config/email.phpの「smtp」の設定をしないとメール送信できません)
	 * @param dto_mail $v_dto_mail	送信情報
	 * @return エラーのときはエラーメッセージ、正常に送信できたときは空文字を返す
	 */
	public static function send_mail(dto_mail $v_dto_mail)
	{

		\Package::load('email');

		$email = \Email::forge('default');

		$email->from($v_dto_mail->s_address_from);
		$email->to($v_dto_mail->s_address_to);
		$email->subject($v_dto_mail->s_title);
		$email->body($v_dto_mail->s_body);

		try
		{
			$email->send();
		}
		catch(\EmailValidationFailedException $e)
		{
			return ERROR_MAIL_VALIDATE;
			// バリデーションが失敗したとき
		}
		catch(\EmailSendingFailedException $e)
		{
			return ERROR_MAIL_SEND;
			// ドライバがメールを送信できなかったとき
		}

		return '';
	}

}