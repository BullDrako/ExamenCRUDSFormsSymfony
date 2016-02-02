<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 2/02/16
 * Time: 17:07
 */

namespace AppBundle\Controller;

use AppBundle\Entity\AAAA;
use AppBundle\Form\AAAAType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AAAAController extends Controller
{
    /**
     * @Route(
     *          path="/index",
     *          name="app_aaaa_index"
     * )
     *  @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $m =  $this->getDoctrine()->getManager();

        $a1 = new AAAA();
        $a1->setAaaa1('bbbb');
        $a1->setAaaa2('cccc');
        $a1->setAaaa3('dddd');
        $a1->setAaaa4('eeee');

        $m->persist($a1);




        $m->flush();

        $repository = $m->getRepository('AppBundle:AAAA');

        $as = $repository->findAll();

        return $this->render(':aaaa:index.html.twig',
            [
                'as' => $as
            ]
        );

    }

    /**
     * @Route(
     *          path="/insertar",
     *          name="app_aaaa_insertar"
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function insertarAction()
    {
        $a = new AAAA();

        $form = $this->createForm(AAAAType::class, $a);

        return $this->render(':aaaa:formulario.html.twig',
            [
                'form'      => $form->createView(),
                'action'    => $this->generateUrl('app_aaaa_doInsertar')
            ]

        );
    }

    /**
     * @Route(
     *          path="/doInsertar",
     *          name="app_aaaa_doInsertar"
     * )
     */

    public function doInsertarAction(Request $request)
    {
        $a = new AAAA();

        $form = $this->createForm(AAAAType::class, $a);

        $form->handleRequest($request);

        if($form->isValid()){
            $m = $this->getDoctrine()->getManager();
            $m->persist($a);
            $m->flush();


            $this->addFlash('messages', 'insertado');

            return $this->redirectToRoute('app_aaaa_index');

        }

        $this->addFlash('messages','Revisa los datos');

        return $this->render(':aaaa:formulario.html.twig',
            [
                'form'      => $form->createView(),
                'action'    => $this->generateUrl('app_aaaa_doInsertar')
            ]
        );

    }

    /**
     * @Route(
     *          path="/actualizar/{id}",
     *          name="app_aaaa_actualizar"
     * )
     */
    public function actualizarAction($id)
    {
        $m = $this->getDoctrine()->getManager();
        $repository = $m->getRepository('AppBundle:AAAA');
        $a = $repository->find($id);
        $form = $this->createForm(AAAAType::class, $a);
        return $this->render(':aaaa:formulario.html.twig',
            [
                'form'      => $form->createView(),
                'action'    => $this->generateUrl('app_aaaa_doActualizar', ['id' => $id])
            ]
        );
    }


    /**
     * @Route(
     *          path="/doActualizar/{id}",
     *          name="app_aaaa_doActualizar"
     * )
     *
     */

    public function doActualizarAction($id,Request $request )
    {
        $m          = $this->getDoctrine()->getManager();
        $repository = $m->getRepository('AppBundle:AAAA');
        $a       = $repository->find($id);
        $form       = $this->createForm(AAAAType::class, $a);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $m->flush();
            $this->addFlash('messages', 'actualizado');
            return $this->redirectToRoute('app_aaaa_index');
        }
        $this->addFlash('messages', 'revisa los datos');
        return $this->render(':aaaa:formulario.html.twig',
            [
                'form'      => $form->createView(),
                'action'    => $this->generateUrl('app_aaaa_doActualizar', ['id' => $id]),
            ]
        );

    }

    /**
     * @Route(
     *          path="/eliminar/{id}",
     *          name="app_aaaa_eliminar"
     * )
     *
     *@ParamConverter(name="a", class="AppBundle:AAAA")
     *
     */

    public function eliminarAction(AAAA $a)
    {
        $m = $this->getDoctrine()->getManager();
        $m->remove($a);
        $m->flush();
        $this->addFlash('messages', 'eliminado');
        return $this->redirectToRoute('app_aaaa_index');
    }


}