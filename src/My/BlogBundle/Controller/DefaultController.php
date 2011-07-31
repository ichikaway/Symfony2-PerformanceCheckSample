<?php

namespace My\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
/*
    public function indexAction($name)
    {
        return $this->render('MyBlogBundle:Default:index.html.twig', array('name' => $name));
    }
*/

	public function indexAction()
	{
		$em = $this->get('doctrine')->getEntityManager();
		$posts = $em->getRepository('MyBlogBundle:Post')->findAll();
		return $this->render('MyBlogBundle:Default:index.html.twig', array('posts' => $posts));
	}

	public function viewAction($id)
	{
		$em = $this->get('doctrine')->getEntityManager();
		$post = $em->find('MyBlogBundle:Post', $id);
		return $this->render('MyBlogBundle:Default:view.html.twig', array('post' => $post));
	}

	public function cacheViewAction($id)
	{
		$em = $this->get('doctrine')->getEntityManager();
		$post = $em->find('MyBlogBundle:Post', $id);
		$response = $this->render('MyBlogBundle:Default:view.html.twig', array('post' => $post));

        $response->setPrivate();
        $response->setSharedMaxAge(30);

        return $response;
	}

}
