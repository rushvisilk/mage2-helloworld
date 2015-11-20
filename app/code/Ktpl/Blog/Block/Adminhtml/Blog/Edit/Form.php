<?php
 
namespace Ktpl\Blog\Block\Adminhtml\Blog\Edit;
 
use Magento\Backend\Block\Widget\Form\Generic;
 
class Form extends Generic
{
    /**
     * Class constructor
     *
     * @return void
     */
    protected function _prepareForm()
    {
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create(
            [
                'data' => [
                    'id'    => 'edit_form',
                    'action' => $this->getData('action'),
                    'method' => 'post',
                    'enctype' => 'multipart/form-data'
                ]
            ]
        );
        $form->setUseContainer(true);
        $this->setForm($form);
 
        return parent::_prepareForm();
    }
}