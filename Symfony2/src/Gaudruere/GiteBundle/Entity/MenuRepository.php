<?php

namespace Gaudruere\GiteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * MenuRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MenuRepository extends EntityRepository
{
	public function findAll()
	{
		return $this->findBy(array(),array('ordre'=>'asc'));
	}

  /**
   *   Site : Menu qui se trovue dans le bandeau  
   *   Utilisé pour retrouver tous les menus principaux par le GaudruereControler
   */     
	public function findRootMenus()
	{
		$qb = $this->_em->createQueryBuilder();
		$qb->select('m')
		->from('GaudruereGiteBundle:Menu', 'm')
		->where('m.menuParent is NULL')
		->orderBy('m.ordre');

		return $qb->getQuery()->getResult();
	}


	public function findSubMenus()
	{
		$qb = $this->_em->createQueryBuilder();
		$qb->select('m')
		->from('GaudruereGiteBundle:Menu', 'm')
		->where('m.menuParent is not NULL')
		->orderBy('m.ordre');

		return $qb->getQuery()->getResult();
	}
	
  /**
   *   Page Administration : liste des menus
   *   Utilisé pour retrouver tous les sous-menus d'un parent par le MenuControler
   */  	
	public function findSameParentMenu($idParent)
	{
		$qb = $this->_em->createQueryBuilder();
		$qb->select('m')
		->from('GaudruereGiteBundle:Menu', 'm')
		->where('m.menuParent = :id')
		->setParameter('id', $idParent)
		->orderBy('m.ordre');
			
		return $qb->getQuery()->getResult();
	}


  /**
   *   Administration article : On ne peut affecter un article qu'a un menu de type article  
   *   Utilisé par ArticleType pour charger les menus de type article
   */     
	public function findMenusArticle($id)
	{
		$qb = $this->createQueryBuilder('m');
		$qb->where('m.type = :id') 
			  ->setParameter('id', $id)
		    ->orderBy('m.ordre');			
		return $qb;
	}

  /**
   *   Administration menu : Le menu parent d'un menu ne peut être que du type articles et donc avoir un menu parent nul  
   *   Utilisé par MenuType pour retrouver les menus parents de types 'articles'
   */     
	public function getQueryRootMenus()
	{
		$qb = $this->createQueryBuilder('m');
		$qb->where('m.menuParent is NULL AND m.type = :type') 
			  ->setParameter('type', 'articles')
		->orderBy('m.ordre');
		return $qb;
	}


}