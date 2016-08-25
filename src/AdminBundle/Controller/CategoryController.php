<?php 

namespace Hermes\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Hermes\WebBundle\Controller\BaseController;
use Hermes\Common\Paginator;

class CategoryController extends BaseController
{
    public function createAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $category = $request->request->all();
            $category = $this->getCategoryService()->createCategory($category);
            return $this->render('AdminBundle:Category:add-tr-category.html.twig', array(
                'category' => $category
            ));
         }
        return $this->render('AdminBundle:Category:add-category.html.twig');
    }

    public function updateAction(Request $request, $id)
    {
        if ($request->getMethod() == 'POST') {
            $category = $request->request->all();
            $category = $this->getCategoryService()->updateCategory($id,$category);
            return $this->render('AdminBundle:Category:update-tr-category.html.twig',array(
                'category' => $category
            ));   
        } 
        $category = $this->getCategoryService()->getCategory($id);
        return $this->render('AdminBundle:Category:update-category.html.twig',array('category' => $category
        ));
    }

    public function deleteAction(Request $request, $id)
    {
        $result = $this->getCategoryService()->deleteCategory($id);
        if (empty($result)) {
            return new JsonResponse(array('success' => false));
        }
        return new JsonResponse(array('success' => true));
    }

    public function listAction(Request $request)
    {
        $conditions = $request->query->all();
        $count = $this->getCategoryService()->searchCategoryCount($conditions);
        $paginator = new Paginator(
            $request,
            $count,
            5
        );
        $categorys = $this->getCategoryService()->searchCategorys(
            $conditions, 
            array('id', 'DESC'), 
            $paginator->getOffsetCount(), 
            $paginator->getPerPageCount()
        );
        $otherCategorys = $this->getCategoryService()->findCategorys();
        return $this->render('AdminBundle:Category:category-list.html.twig',array(
            'categorys' => $categorys,
            'otherCategorys' => $otherCategorys,
            'paginator' => $paginator
        ));
    }

    public function createFieldsCheckAction(Request $request)
    {
        $name = $request->query->get('name');
        if ($name) {
            $category = $this->getCategoryService()->getCategoryByName($name);
            
            if ($category) {
                return new JsonResponse(false);
            }
        }
        $delayedTime = $request->query->get('delayedTime');
        if ($delayedTime) {
            if ($delayedTime < 600) {
                return new JsonResponse(false);
            }
        }
        return new JsonResponse(true);
    }

    public function updateFieldsCheckAction(Request $request)
    {
        $name = $request->query->get('name');
        if ($name) {
            $category = $this->getCategoryService()->getCategoryByName($name);
            $id = $request->query->get('id');
            if ($id == $category['id']) {
                return new JsonResponse(true);
            }
            if ($category) {
                return new JsonResponse(false);
            }
        }
        $delayedTime = $request->query->get('delayedTime');
        if ($delayedTime) {
            if ($delayedTime < 600) {
                return new JsonResponse(false);
            }
        }
        return new JsonResponse(true);
    }

    public function getCategoryService()
    {
        return $this->biz['category_service'];
    }
}
