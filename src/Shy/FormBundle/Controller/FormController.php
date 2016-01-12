<?php
namespace Shy\FormBundle\Controller;

use Shy\FormBundle\Form\AppForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class FormController extends Controller {

    public function indexAction() {
        $response = new Response();

        $em = $this->getDoctrine()->getManager();

        $columns = array(
            'SSILFormComponents.labelName as label',
            'SSILFormComponents.type',
            'SSILFormComponents.value',
            'SSILFormComponents.attributes',
            'SSILFormComponents.row',
            'SSILFormComponents.rowColumn',
        );

        $dql = "SELECT ".implode(',',$columns)."
                FROM Shy\FormBundle\Entity\SSILForms SSILForms
                JOIN SSILForms.form_components SSILFormComponents
                WHERE SSILForms.formName = :name";
        $query = $em->createQuery($dql);
        $query->setParameter('name', 'My_Form');
        $components = $query->getResult();

        $form = $this->createForm(new AppForm($components));

        return $this->render('ShyFormBundle:FormBuilder:index.html.twig', array(
            'form' => $form->createView()
        ));
    }
}