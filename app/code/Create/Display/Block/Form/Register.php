<?php

namespace Create\Display\Block\Form;

use Magento\Customer\Model\AccountManagement;


class Register extends \Magento\Directory\Block\Data
{
   
    protected $_customerSession;

   
    protected $_moduleManager;

    protected $_customerUrl;

  
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Directory\Helper\Data $directoryHelper,
        \Magento\Framework\Json\EncoderInterface $jsonEncoder,
        \Magento\Framework\App\Cache\Type\Config $configCacheType,
        \Magento\Directory\Model\ResourceModel\Region\CollectionFactory $regionCollectionFactory,
        \Magento\Directory\Model\ResourceModel\Country\CollectionFactory $countryCollectionFactory,
        \Magento\Framework\Module\Manager $moduleManager,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Customer\Model\Url $customerUrl,
        array $data = []
    ) {
        $this->_customerUrl = $customerUrl;
        $this->_moduleManager = $moduleManager;
        $this->_customerSession = $customerSession;
        parent::__construct(
            $context,
            $directoryHelper,
            $jsonEncoder,
            $configCacheType,
            $regionCollectionFactory,
            $countryCollectionFactory,
            $data
        );
        $this->_isScopePrivate = false;
    }

    /**
     * Get config
     *
     * @param string $path
     * @return string|null
     */
    public function getConfig($path)
    {
        return $this->_scopeConfig->getValue($path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return $this
     */
    protected function _prepareLayout()
    { 
        $this->pageConfig->getTitle()->set(__('Create New Customer Account .'));
        echo"Block Overide";
        return parent::_prepareLayout();
    }

    /**
     * Retrieve form posting url
     *
     * @return string
     */
    public function getPostActionUrl()
    {
        return $this->_customerUrl->getRegisterPostUrl();
    }

    /**
     * Retrieve back url
     *
     * @return string
     */
    public function getBackUrl()
    {
        $url = $this->getData('back_url');
        if ($url === null) {
            $url = $this->_customerUrl->getLoginUrl();
        }
        return $url;
    }

    /**
     * Retrieve form data
     *
     * @return mixed
     */
    public function getFormData()
    {  
        $data = $this->getData('form_data');
        if ($data === null) {
            $formData = $this->_customerSession->getCustomerFormData(true);
            $data = new \Magento\Framework\DataObject();
            if ($formData) {
                $data->addData($formData);
                $data->setCustomerData(1);
            }
            if (isset($data['region_id'])) {
                $data['region_id'] = (int)$data['region_id'];
            }
            $this->setData('form_data', $data);
        }
        return $data;
    }

    /**
     * Retrieve customer country identifier
     *
     * @return int
     */
    public function getCountryId()
    {
        $countryId = $this->getFormData()->getCountryId();
        if ($countryId) {
            return $countryId;
        }
        return parent::getCountryId();
    }

    /**
     * Retrieve customer region identifier
     *
     * @return mixed
     */
    public function getRegion()
    {
        if (null !== ($region = $this->getFormData()->getRegion())) {
            return $region;
        } elseif (null !== ($region = $this->getFormData()->getRegionId())) {
            return $region;
        }
        return null;
    }

    /**
     * Newsletter module availability
     *
     * @return bool
     */
    public function isNewsletterEnabled()
    {
        return $this->_moduleManager->isOutputEnabled('Magento_Newsletter');
    }

    /**
     * Restore entity data from session
     * Entity and form code must be defined for the form
     *
     * @param \Magento\Customer\Model\Metadata\Form $form
     * @param string|null $scope
     * @return $this
     */
    public function restoreSessionData(\Magento\Customer\Model\Metadata\Form $form, $scope = null)
    {
        if ($this->getFormData()->getCustomerData()) {
            $request = $form->prepareRequest($this->getFormData()->getData());
            $data = $form->extractData($request, $scope, false);
            $form->restoreData($data);
        }

        return $this;
    }

    /**
     * Get minimum password length
     *
     * @return string
     * @since 100.1.0
     */
    public function getMinimumPasswordLength()
    {
        return $this->_scopeConfig->getValue(AccountManagement::XML_PATH_MINIMUM_PASSWORD_LENGTH);
    }

    /**
     * Get number of password required character classes
     *
     * @return string
     * @since 100.1.0
     */
    public function getRequiredCharacterClassesNumber()
    {
        return $this->_scopeConfig->getValue(AccountManagement::XML_PATH_REQUIRED_CHARACTER_CLASSES_NUMBER);
    }
}

?>











<!-- < ?php

namespace Create\Display\Block;

class Data extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
       }
    public function getFormAction()
    {
            // companymodule is given in routes.xml
            // controller_name is folder name inside controller folder
            // action is php file name inside above controller_name folder
       
//    echo"$_POST('firstname')";
// echo"ggg";

        //  return '/contact/index/post';
        // $this->_redirect('contact');

        // here controller_name is index, action is booking
    }
} -->