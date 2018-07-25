<!-- < ?php 
namespace Mageplaza\Configuration\Controller\Adminhtml\Create;

class Index extends \Magento\Backend\App\Action{
protected function _isAllowed()
{
    return $this->_authorization->isAllowed('Mageplaza_CustomMenu::menu');
}
} -->