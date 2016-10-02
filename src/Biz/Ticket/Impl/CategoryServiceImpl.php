<?php 
namespace Hermes\Biz\Ticket\Impl;

use Hermes\Biz\Ticket\CategoryService;
use Hermes\Common\ArrayToolkit;
use Codeages\Biz\Framework\Service\KernelAwareBaseService;

class CategoryServiceImpl extends KernelAwareBaseService implements CategoryService
{
    private $biz;

    public function __construct($biz)
    {
        $this->biz = $biz;
    }

    public function createCategory($category)
    {
        if (!ArrayToolkit::requireds($category, array('priority', 'name', 'delayedTime'), true)) {
            throw new \Exception('缺少必要字段,创建工单类型失败!');
        }

        if($category['delayedTime'] < 600)
        {
            throw new \Exception('滞留时间不能少于10分钟,请更换!');
        }

        $existCategory = $this->getCategoryByName($category['name']);
        if (!empty($existCategory)) {
            throw new \Exception('工单类型名称已存在,请更换!');
        }

        return $this->getCategoryDao()->create($category);
    }

    public function updateCategory($id, $fields)
    {
        $existCategory = $this->getCategory($id);
        if (empty($existCategory)) {
            throw new \Exception('工单类型不存在!');
        }
        $existCategory = $this->getCategoryByName($fields['name']);
        if (!empty($existCategory) && $existCategory['id'] != $id) {
            throw new \Exception('工单类型名称已存在,请更换!');
        }
        return $this->getCategoryDao()->update($id, $fields);
    }

    public function deleteCategory($id)
    {
        $existCategory = $this->getCategory($id);
        if (empty($existCategory)) {
            throw new \Exception('工单类型不存在!');
        }
        $faqs = $this->getFaqService()->findFaqByCategory($id);
        $tickets = $this->getTicketService()->findTicketsByCategory($id);
        
        if (!empty($faqs)) {
            throw new \Exception('存在相关联的FAQ,删除失败!');
        }
        if (!empty($tickets)) {
            throw new \Exception('存在相关联的工单,删除失败!');
        }
        return $this->getCategoryDao()->delete($id);
    }

    public function getCategory($id)
    {
        return $this->getCategoryDao()->get($id);
    }

    public function searchCategorys($conditions, $orderBy, $start, $limit)
    {
        return $this->getCategoryDao()->search($conditions, $orderBy, $start, $limit);
    }

    public function findCategorys($orderBy = array('id', 'ASC'))
    {
        return $this->getCategoryDao()->search(
            array(),
            $orderBy,
            0,
            PHP_INT_MAX
        );
    }

    public function searchCategoryCount($conditions)
    {
        return $this->getCategoryDao()->count($conditions);
    }

    public function getCategoryByName($name)
    {
        return $this->getCategoryDao()->getCategoryByFields(array('name' => $name));
    }

    private function getCategoryDao()
    {
        return $this->biz['category_dao'];
    }

    private function getFaqService()
    {
        return $this->biz['faq_service'];
    }

    private function getTicketService()
    {
        return $this->biz['ticket_service'];
    }
}