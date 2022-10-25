<?php
namespace app\models;
use Yii;
use yii\base\Model;
class Contact extends \yii\db\ActiveRecord{
    /**
     * @inheritdoc
     */
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;

    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom(['your email' => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }

    public static function tableName()
    {
        return 'test';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','email','phone'], 'required'], //Checking that all the fields are required
            ['email', 'email'], // Validating that email is a valid email
            [['name'],'string', 'max' => 50], //Verifying that name is not greater than its max length
            [['email'], 'string', 'max' => 50], //Verifying that email is not greater than its max length
            [['phone'], 'string', 'max' => 50],//Verifying that message is not greater than its max length

        ];
    }
}