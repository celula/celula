<?php

class Application_Form_Participantes extends Zend_Form
{
	private $userId;
	private $userName;
	private $cellId;
	
    public function init()
    {
    	
    	$textDecorator = new Application_Model_TextDecorator();
    	
    	$name = new Zend_Form_Element_Text('name');
    	$name	->setLabel('Nome:')
		    	->setRequired(true)
		    	->addFilter('StripTags')
		    	->addFilter('StringTrim')
		    	->addValidator('NotEmpty')
		    	->setDecorators(array($textDecorator));
    	 
    	$nickname = new Zend_Form_Element_Text('nickname');
    	$nickname	->setLabel('Apelido:')
			    	->setRequired(false)
			    	->addFilter('StripTags')
			    	->addFilter('StringTrim')
			    	->addValidator('NotEmpty')
			    	->setDecorators(array($textDecorator));
    	 
    	$gender = new Zend_Form_Element_Radio('gender');
    	$gender		->setLabel('Sexo:')
			    	->setRequired(true)
			    	->addMultiOptions(array(
		    			'1' => 'Masculino',
		    			'2' => 'Feminino'))
    				->setAttrib('class', 'radio')
    				->setAttrib('label_class', 'radio');
    	 
    	$birthday = new Zend_Form_Element_Text('birthday');
    	$birthday 	->setLabel('Data de Nascimento')
			    	->setRequired(false)
			    	->setValidators( array(
			    			array('date', false, array('dd/mm/yyyy'))
			    	))
			    	->setDecorators(array($textDecorator));
    	 
    	$baptized = new Zend_Form_Element_Radio('baptized');
    	$baptized	->setLabel('Batizado:')
			    	->setRequired(true)
			    	->addMultiOptions(array(
			    			'1' => 'Na IBC',
			    			'2' => 'Em outra igreja',
			    			'3'	=> 'Não'))
    				->setAttrib('class', 'radio')
    				->setAttrib('label_class', 'radio');
    	 
    	$position = new Zend_Form_Element_Radio('position');
    	$position	->setLabel('Função:')
			    	->setRequired(true)
			    	->addMultiOptions(array(
			    			'1' => 'Líder',
			    			'2' => 'Participante',
			    			'3'	=> 'Visitante',
			    			'4'	=> 'Anfitrião',
			    			'5'	=> 'Líder em Treinamento'))
    				->setAttrib('class', 'radio')
    				->setAttrib('label_class', 'radio');
    	
    	$submit = new Zend_Form_Element_Submit('submit');
    	$submit	->setLabel('Salvar')
    			->setAttrib('id', 'submitbutton');
    	
    	$idUser = new Zend_Form_Element_Hidden("user_id");
    	
    	$this->addElements(array($name, $nickname, $gender, $birthday, $baptized, $position, $idUser, $submit));
    }
    
    public function setUserId($userId){ $this->userId = $userId; }
    public function getUserId(){ return $this->userId; }
    public function setUserName($userName){ $this->userName = $userName; }
    public function getUserName(){ return $this->userName; }
    public function setCellId($cellId){ $this->cellId = $cellId; }
    public function getCellId(){ return $this->cellId; }

    public function initForm($participant=0)
    {
    	if($participant)
    		$this->setName('participant'.$participant);
    	
    	$idCell = new Zend_Form_Element_Hidden("cell_id");
    	 
    	if($this->cellId)
    		$idCell	->setValue($this->cellId);
    	
    	$this->addElement($idCell);
    }
    
    public function returnForm()
    {
    	return $this;
    }

}
