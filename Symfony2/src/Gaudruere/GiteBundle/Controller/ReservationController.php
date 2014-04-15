<?php
namespace Gaudruere\GiteBundle\Controller;

use Symfony\Component\ClassLoader\UniversalClassLoader;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Gaudruere\GiteBundle\Entity\Reservation;
use Gaudruere\GiteBundle\Form\ReservationType; 

use DateTime;
use DateInterval;


class ReservationController extends GaudruereController
{
  	/**
  	* Méthode qui se charge d'ajouter une réservation.
  	* 
  	* @Route("/reservation/ajouterReservation")
  	*/
  	public function ajouterReservationAction()
  	{
  		$request = $this->get('request');

  		$form = array(
  			'nbAdultes' => $request->get('nbAdultes'),
  		  	'nbEnfants' => $request->get('nbEnfants'),
  		  	'nbBebes' => $request->get('nbBebes'),
  		  	'dateDebutFr' => $request->get('datePickerDateDebut'),
  		  	'dateFinFr' => $request->get('datePickerDateFin'),
  		  	'titre' => $request->get('selectTitre'),
  		  	'nom' => strtoupper($request->get('nom')),
  		  	'prenom' => $request->get('prenom'),
  		  	'rue1' => $request->get('rue1'),
  		  	'rue2' => $request->get('rue2'),
  		  	'rue3' => $request->get('rue3'),
  		  	'codePostal' => $request->get('codePostal'),
  		  	'ville' => strtoupper($request->get('ville')),
  		  	'pays' => 'FRANCE',
  		  	'tel' => $request->get('tel'),
  		  	'email' => $request->get('email'),
  		  	'commentaire' => $request->get('commentaire'),
  		  	/* Données complétées après la validation... */
  		  	'dateDebut' => '',
  			'dateFin' => '',
  			'isEmailAvailable' => false
  		);
  		
  		
  		if ($this->validateAjoutDemandeReservation($form))
  		{
  			// données du formulaire valides...
  			$form['dateDebut'] = DateTime::createFromFormat('d/m/Y', $form['dateDebutFr']);
  			$form['dateFin'] = DateTime::createFromFormat('d/m/Y', $form['dateFinFr']);
  			$form['isEmailAvailable'] = (!is_null($form['email']) && trim($form['email']) != '');

  			// création de l'objet réservation.
  			$resa = new Reservation();
  			$resa->setReservationValidee(false);
  			$resa->setDateDebut($form['dateDebut']);
  			$resa->setDateFin($form['dateFin']);
  			$resa->setNbAdultes($form['nbAdultes']);
  			$resa->setNbEnfants($form['nbEnfants']);
  			$resa->setNbBebes($form['nbBebes']);
  			$resa->setTitre($form['titre']);
  			$resa->setNom($form['nom']);
  			$resa->setPrenom($form['prenom']);
  			$resa->setRue1($form['rue1']);
  			$resa->setRue2($form['rue2']);
  			$resa->setRue3($form['rue3']);
  			$resa->setCodePostal($form['codePostal']);
  			$resa->setVille($form['ville']);
			  $resa->setPays($form['pays']);  			
  			$resa->setTel($form['tel']);
  			$resa->setEmail($form['email']);
  			$resa->setCommentaire($form['commentaire']);
  			
  			// enregistrement dans la BDD...
  			$em = $this->getDoctrine()->getEntityManager();
  			$em->persist($resa);
  			$em->flush();
		
     		// Envoi un mail
        $this->envoiMail($resa, $em);   
  			
  			
  			if ($form['isEmailAvailable'])
  			{
  				// OK, recontact par mail
  				
  				// On redirige vers la page de réception du mail.
  				return $this->render('GaudruereGiteBundle:Reservation:confirmationResaMail.html.twig', $this->myRender(array("titreMenu" => "reservation")));
  			}
  			else
  			{
  				// OK, recontact par tél
  				return $this->render('GaudruereGiteBundle:Reservation:confirmationResaTel.html.twig', $this->myRender(array("titreMenu" => "reservation")));
  			}
  		}
  		else
  		{
  			// données du formulaire non valides...
  			// KO, message d'erreur
  			return $this->render('GaudruereGiteBundle:Reservation:erreurConfirmationResa.html.twig', $this->myRender(array("titreMenu" => "reservation")));
  		}
  	}



    public function envoiMail($r, $em)
    {
     		// URL du site (utilisé pour générer des urls corrects 
        $p = $em->getRepository('GaudruereGiteBundle:Parametres')->findUniqueParametre();
               	
        $message = \Swift_Message::newInstance()
              ->setSubject('Gite La Gaudruere - Réservation')
              ->setFrom($r->getEmail())
              ->setTo($p->getEmail())
              ->setCharset('utf-8')
              ->setBody("Demande de réservation du " . $r->getDateDebut()->format("d/m/Y") . " au " . $r->getDateFin()->format("d/m/Y"). "\n" .
                        $r->getCommentaire() . "\n" .
                        $r->getTitre() . " ". $r->getPrenom() . " " . $r->getNom(). "\n" .
                        $r->getRue1() . "\n" .
                        $r->getRue2() . "\n" .
                        $r->getRue3() . "\n" . 
                        $r->getCodePostal(). " " . $r->getVille(),'text/plain');
               
        $this->get('mailer')->send($message);    
    }




	
  	/**
  	 * Méthode qui se charge de valider les données de la demande de réservation.
  	 * 
  	 * @param array $form tableau associatif contenant les données du formulaire.
  	 * @return boolean true si les données sont valides, false dans le cas contraire.
  	 */
  	private function validateAjoutDemandeReservation($form)
  	{
  		return true;
  	}
  	
  	
  	
  	/**
  	 * Méthode appelée via ajax pour mettre à jour la liste des calendriers côtés clients.
  	 * 
  	 * @Route("/reservation/majCalendriers/{dateDebut}/{dateFin}")
  	 * @Template("GaudruereGiteBundle:Reservation:calendrier.html.twig")
  	 */
  	public function majCalendriersAction($dateDebut, $dateFin)
  	{
  		header("Cache-Control: no-cache");
  		
      $strDateDebut = NULL;
  		$strDateFin = NULL;
  		
  		if (isset($dateDebut) && $dateDebut != '' && $dateDebut != 'null')
  		{
  			$strDateDebut = str_replace("-", "/", $dateDebut);
  		}
  		
  		if (isset($dateFin) && $dateFin != '' && $dateFin != 'null')
  		{
  			$strDateFin = str_replace("-", "/", $dateFin);
  		}
      
     	return $this->getCalendrierCourant($strDateDebut, $strDateFin);
  	}
  	
  	
  	
    /**
     * @Route("/reservation")
     * @Template()
     */
    public function indexAction()
    {
    	$request = $this->get('request'); // On récupère l'objet request via le service container

    	$monTab = array("titreMenu" => "reservation");
    	$monCalendrier = $this->getCalendrierCourant(NULL, NULL);
    	
    	return $this->myRender(array_merge($monTab, $monCalendrier));
    }

    /**
     * Retourne un tableau avec les informations permettants d'afficher la liste des calendriers
     * dans la page de réservation.
     * 
     * @param $strFrDateDebut date de début sélectionnée dans le formulaire au format français : jj/mm/aaaa.
     * @param $strFrDateFin date de fin sélectionnée dans le formulaire au format français : jj/mm/aaaa.
     */           
    public function getCalendrierCourant($strFrDateDebut = NULL, $strFrDateFin = NULL)
    {
    
  		// URL du site (utilisé pour générer des urls corrects
     	$em = $this->getDoctrine()->getEntityManager();
    	$parametres = $em->getRepository('GaudruereGiteBundle:Parametres')->findUniqueParametre();
 
    
      // Ajout de log 
      $logger = $this->get('logger');       
      $logger->info("*** Fonction getCalendrierCourant");  
      $logger->info("*** Date de début et de fin : " . $strFrDateDebut . " et " .$strFrDateFin);

      $nombreDeMoisAAfficher = $parametres->getNbMoisCalendrier();
    	$res = array();
    	
    	// Note : besoin de mettre en cache ou on va en BD à chaque page ?
    	$em = $this->getDoctrine()->getEntityManager();

    	$dateDebut = (is_null($strFrDateDebut) || $strFrDateDebut == '') ? NULL : DateTime::createFromFormat('d/m/Y', $strFrDateDebut);
    	$dateFin = (is_null($strFrDateFin) || $strFrDateFin == '') ? NULL : DateTime::createFromFormat('d/m/Y', $strFrDateFin);

          	
    	$moisDateJour = date('n'); // numero du mois de 1 à 12
    	$anneeDateJour = date("Y");
    	$calendriers = array();    	
    	
    	// Calcule la période à afficher dans la liste des calendriers
    	$tabPeriodeAffichage = $this->getPeriodeAffichage($dateDebut, $dateFin, $nombreDeMoisAAfficher, $moisDateJour, $anneeDateJour);
    	$dateDebutPeriodeAffichage = $tabPeriodeAffichage[0];
    	$dateFinPeriodeAffichage = $tabPeriodeAffichage[1];
    	// echo "<br><b>Periode&nbsp;d'affichage&nbsp;du&nbsp;" . $dateDebutPeriodeAffichage->format("d/m/Y") . "&nbsp;au&nbsp;" . $dateFinPeriodeAffichage->format("d/m/Y") . " inclus !";
    	
    	// 08/04/2012 : FP : A REMETTRE ASAP...
    	// echo "<br>Pour mysql, dateDebut: " . $dateDebutPeriodeAffichage->format("Y-m-d") . "&nbsp;&nbsp;&nbsp;&nbsp;dateFin: " . $dateFinPeriodeAffichage->format("Y-m-d");
    	$reservations = $em->getRepository('GaudruereGiteBundle:Reservation')->findAllReservationValidee($dateDebutPeriodeAffichage->format("Y-m-d"), $dateFinPeriodeAffichage->format("Y-m-d"));
    	foreach($reservations as $cal)
    	{
    	     $logger->info("*** Reservation de " . $cal->getNom(). " du ". $cal->getDateDebut()->format('Y-m-d H:i:s'). " au ". $cal->getDateFin()->format('Y-m-d H:i:s'));
    	}
    	
    	// on récupère les informations sur le premier mois à afficher.
    	$numeroMoisCourant = $dateDebutPeriodeAffichage->format("n");
		  $anneeCourante = $dateDebutPeriodeAffichage->format("Y");
    	
		  // Y'a-t-il des conflits avec les dates ?
		  $conflitDates = 0;
		
  		for ($indice = 1; $indice <= $nombreDeMoisAAfficher; $indice++)
  		{
  			// recherche du titre du calendrier : nom du mois en français suivi de l'année courante
  			$titre = $this->getNomMois($numeroMoisCourant, $anneeCourante);
  			$jours = array();
  			
  			// jour de la semaine du 1er du mois au format numérique : 0 (pour dimanche) à 6 (pour samedi)
  			$jourSemaine1erDuMois = date("w", mktime(0, 0, 0, $numeroMoisCourant, 1, $anneeCourante));
  			
  			// calcul du nombre de jours vides sur la première semaine
  			$nbJourVide = $jourSemaine1erDuMois - 1;
  			if ($nbJourVide == -1)
  			{
  				$nbJourVide = 6;
  			}
  			
  			// compteur du nombre de cases déterminées dans le mois courant.
  			$nbCases = 0;
  			
  			// gestion des cases vides de la première semaine.
  			for ($i = 1; $i <= $nbJourVide; $i++)
  			{
  				// Si le jour vide est un week-end, on lui donne un look&feel week-end...
  				if ($nbJourVide == 6 && $i == 6)
  				{
  					$jour = array("chiffre" => '&nbsp;', "complementHtml" => 'tabIndex="-1" unselectable="on"', "css" => 'calendrierJourWeekEnd');
  				}   
  				else
  				{
  					$jour = array("chiffre" => '&nbsp;', "complementHtml" => 'tabIndex="-1" unselectable="on"', "css" => '');
  				}
  				array_push($jours, $jour);
  				$nbCases++;
  			}
  			
  			// calcul du nombre de jours dans le mois/année courante.
  			$nbJoursDansMoisCourant = date("t", mktime(0, 0, 0, $numeroMoisCourant, 1, $anneeCourante));
  			
  			// on parcours tous les jours du mois.
  			for ($i = 1; $i <= $nbJoursDansMoisCourant; $i++)
  			{
  				$jourSemaineCourant = date("w", mktime(0, 0, 0, $numeroMoisCourant, $i, $anneeCourante));
  				 
  				$css = "";
  				if ($jourSemaineCourant == 0 || $jourSemaineCourant == 6)
  				{
  				// jour du week-end
  				$css = 'calendrierJourWeekEnd';
  				}
  				$css .= " calendrierJourNonReserve";
  				
  				// --------------------------------------------------------------------------------------------  			
  				// Si le jour est sur une reservation validée, il faut positionner les styles suivants :
  				// ($i représente le jour courant)
  				//
  				//  * $css .= ' calendrierJourReserveSoir';
  				//  * $css .= ' calendrierJourReserveJournee';
  				//  * $css .= ' calendrierJourReserveMatin';
  				//
  				//
  				// Si une demande de réservation a été effectuée ce jour-là, il faut positionner 
  				// les styles suivants :
  				//
  				//  * $css .= ' calendrierJourDemandeReservationSoir';
  				//  * $css .= ' calendrierJourDemandeReservationJournee';
  				//  * $css .= ' calendrierJourDemandeReservationMatin';
  				//
  				//
  				// En cas d'une réservation validée suivant une demande de réservation OU vice-versa,
  				// on pourra avoir besoin des styles suivants :
  				//  
  				//  * $css .= ' calendrierJourDemandeReservationMatinEtReservationSoir';
  				//  * $css .= ' calendrierJourReservationMatinEtDemandeReservationSoir';
  				// 
  				//
  				// En cas de conflits sur les dates et non pas en cas de chevauchement, l'affichage
  				// des réservations validées est prioritaire.
  				// --------------------------------------------------------------------------------------------
  				$dateJourCourant = DateTime::createFromFormat('n-j-Y', $numeroMoisCourant . '-' . $i . '-' . $anneeCourante);
  
  				$res = $this->doCalculateCssStyle($dateJourCourant, $reservations, $dateDebut, $dateFin);
  				if (!is_null($res[0]) && $res[0] != '')
  				{
  					$css .= ' ' . $res[0];
  				}
  				
  				if ($res[1] == '1')
  				{
  					$conflitDates = 1;
  				}
  				
  				$jour = array("chiffre" => $i, "complementHtml" => '', "css" => $css);
  				array_push($jours, $jour);
  				$nbCases++;
  			}
  			
  			for ($i = ($nbCases + 1); $i <= 39; $i++)
  			{
  				if ($i == 34 || $i == 35)
  				{
  					$jour = array("chiffre" => '&nbsp;', "complementHtml" => 'tabIndex="-1" unselectable="on"', "css" => 'calendrierJourWeekEnd');
  				}
  				else
  				{
  					$jour = array("chiffre" => '&nbsp;', "complementHtml" => 'tabIndex="-1" unselectable="on"', "css" => '');
  				}
  				array_push($jours, $jour);
  			}
  
  			// on ajoute le calendrier à la liste
  			array_push($calendriers, array("titre" => $titre, "jours" => $jours));
  			
  			// gestion du mois et de l'année courante
  			$numeroMoisCourant++;
  			if ($numeroMoisCourant > 12) {
  				$numeroMoisCourant = 1;
  				$anneeCourante++;
  			}
  		}
    	
    	return array("calendriers" => $calendriers, "conflitDates" => $conflitDates);
    }   
    
    /**
     * Méthode qui se charge de calculer le style css à ajouter éventuellement à la celulle
     * ainsi qu'un statut pour indiquer s'il va avoir conflits de dates ou pas.
     * 
     * @param unknown_type $currentDate date en cours d'analyse.
     * @param unknown_type $reservations liste des réservations validées à afficher.
     * @param unknown_type $dateDebut date de début de réservation sélectionnée par l'utilisateur.
     * @param unknown_type $dateFin date de fin de réservation sélectionnée par l'utilisateur.
     * @return multitype:NULL string tableau contenant pour le premier indice le style css à ajouter à la celulle et
     *                               en deuxième position la valeur '0' si pas de conflits de dates, '1' si conflits.
     */
    private function doCalculateCssStyle($currentDate, $reservations, $dateDebut, $dateFin)
    {
    
      // Ajout de log 
      $logger = $this->get('logger');
      
      $logger->info("*** Fonction doCalculateCssStyle");


      $res = array(NULL, '0');
    	$periodeDemandee = (!is_null($dateDebut) && !is_null($dateFin)); 
    	$jourDemande = ($periodeDemandee) ? NULL : (!is_null($dateDebut) ? $dateDebut : $dateFin); 
		$jourDemandePlusUnJour = NULL;
    	
    	// calcul du jour courant - 1j
    	$currentDateMoinsUnJour = new DateTime($currentDate->format("Y-m-d"));
    	
 	
    	
    	$currentDateMoinsUnJour->sub(new DateInterval('P1D'));
    	
    	// calcul du jour demande + 1j
    	if (!is_null($jourDemande))
    	{
    		$jourDemandePlusUnJour = new DateTime($jourDemande->format("Y-m-d"));
    		$jourDemandePlusUnJour->add(new DateInterval('P1D'));
    	}
    	
    	if ($this->isSameDateReservation($currentDate, $reservations, TRUE))
    	{
    		// la currentDate correspond à une date de début d'une réservation validée.
    		
    		if ($this->isSameDate($jourDemande, $currentDateMoinsUnJour) || ($periodeDemandee && $this->isSameDate($dateFin, $currentDate)) )
    		{
    			$res[0] = 'calendrierJourDemandeReservationMatinEtReservationSoir';
    		}
    		else if ($periodeDemandee && $this->isDateBetween($currentDate, $dateDebut, $dateFin))
    		{
    			$res[0] = 'calendrierJourDemandeReservationMatinEtReservationSoir';
    			$res[1] = '1';
    		}
    		else
    		{
    			$res[0] = 'calendrierJourReserveSoir';
    		}
    	}
    	else if ($this->isSameDateReservation($currentDate, $reservations, FALSE))
    	{
    		// la currentDate correspond à une date de fin d'une réservation validée.
    		
    		if ($this->isSameDate($jourDemande, $currentDate) || ($periodeDemandee && $this->isSameDate($dateDebut, $currentDate)))
    		{
    			$res[0] = 'calendrierJourReservationMatinEtDemandeReservationSoir';
    		}
    		else if ($periodeDemandee && $this->isDateInferieureOuEgale($dateDebut, $currentDateMoinsUnJour) && $this->isDateSuperieureOuEgale($dateFin, $currentDate))
    		{
    			$res[0] = 'calendrierJourReservationMatinEtDemandeReservationSoir';
    			$res[1] = '1';
    		}
    		else
    		{
    			$res[0] = 'calendrierJourReserveMatin';
    		}
    	}
    	else if ($this->isCalendrierReservePourDate($currentDate, $reservations))
    	{
    		if ($this->isSameDate($jourDemande, $currentDate) || ($periodeDemandee && $this->isDateBetween($currentDate, $dateDebut, $dateFin)))
    		{
    			$res[1] = '1';
    		}
    		$res[0] = 'calendrierJourReserveJournee';
    	}
    	else if ($this->isSameDate($jourDemande, $currentDate) || ($periodeDemandee && $this->isSameDate($dateDebut, $currentDate)))
    	{
    		$res[0] = 'calendrierJourDemandeReservationSoir';
    	}
    	else if ($this->isSameDate($jourDemandePlusUnJour, $currentDate) || ($periodeDemandee && $this->isSameDate($dateFin, $currentDate)))
    	{
    		$res[0] = 'calendrierJourDemandeReservationMatin';
    	}
    	else if ($periodeDemandee && $this->isDateBetween($currentDate, $dateDebut, $dateFin))
    	{
    		$res[0] = 'calendrierJourDemandeReservationJournee';
    	}

    	return $res;
    }
    
    /**
     * Méthode qui détermine si la currentDate correspond à la date de début
     * ou de fin d'une réservation validée.
     * 
     * @param DateTime $currentDate date à analyser.
     * @param GaudruereGiteBundle:Reservation $reservations liste des réservations validées.
     * @param boolean isDebutReservation true si on recherche une réservation dont la date de début est égal à la date transmis
     * en paramètre, false si l'on recherche sur la date de fin de la réservation.
     */
    private function isSameDateReservation($currentDate, $reservations, $isDebutReservation)
    {
    	$strCurrentDate = $currentDate->format("d/m/Y");
    	foreach($reservations as $cal)
    	{
    		$strDateReservation = ($isDebutReservation)? $cal->getDateDebut()->format("d/m/Y") : $cal->getDateFin()->format("d/m/Y");
    		
    		if ($strCurrentDate == $strDateReservation)
    		{
    			return TRUE;
    		}
    	}
    	
    	return FALSE;
    }
    
    /**
     * Méthode qui compare la date du jour de deux dates.
     * 
     * @param DateTime $date1 première date à comparer.
     * @param DateTime $date2 deuxième date à comparer.
     * @return boolean true si les deux dates sont identiques, false dans le cas contraire.
     */
    private function isSameDate($date1, $date2)
    {
    	if (is_null($date1) && is_null($date2))
    	{
    		return TRUE;
    	}
    	
    	$strDate1 = is_null($date1) ? '' : $date1->format("d/m/Y");
    	$strDate2 = is_null($date2) ? '' : $date2->format("d/m/Y");
    	
    	return $strDate1 == $strDate2;
    }
    
    
    /**
    * Méthode qui détermine si la currentDate est comprise entre la date de debut et de fin.
    * Attention, si seulement la date de debut et de fin est présente, on considère
    * comme vrai si le current égale la date valorisée.
    *
    * @param DateTime $currentDate date courante
    * @param DateTime $dateDebut date de début du séjour
    * @param DateTime $dateFin date de fin du séjour
    */
    private function isDateBetween($currentDate, $dateDebut, $dateFin)
    {
    	if (is_null($dateDebut) && is_null($dateFin))
    	{
    		return FALSE;
    	}
    	 
    	if (is_null($dateDebut) || is_null($dateFin))
    	{
    		$strCurrentDate = $currentDate->format("d/m/Y");
    		$strDateValorisee = '';
    
    		if (is_null($dateFin))
    		{
    			$strDateValorisee = $dateDebut->format("d/m/Y");
    		}
    		else
    		{
    			$strDateValorisee = $dateFin->format("d/m/Y");
    		}
    
    		return $strCurrentDate == $strDateValorisee;
    	}
    	 
    	$dateDebut->setTime(0, 0, 0);
    	$dateFin->setTime(23, 59, 59);
    	 
    	$tsCurrentDate = $currentDate->getTimestamp();
    	$tsDateDebut = $dateDebut->getTimestamp();
    	$tsDateFin = $dateFin->getTimestamp();
    	 
    	return ($tsCurrentDate >= $tsDateDebut && $tsCurrentDate <= $tsDateFin);
    }
    
    /**
     * Recherche si la premiere date fournit en paramètre est <= à la deuxième date.
     * 
     * @param DateTime $date1 1ere date à comparer.
     * @param DateTime $date2 2ème date à comparer.
     * @return boolean true $d1 <= $d2
     */
    private function isDateInferieureOuEgale($date1, $date2)
    {
    	if (is_null($date1) || is_null($date2))
    	{
    		return FALSE;
    	}
    	
    	$d1 = new DateTime($date1->format("Y-m-d"));
    	$d2 = new DateTime($date2->format("Y-m-d"));
    	
    	return $d1->getTimestamp() <= $d2->getTimestamp();
    }
    
    /**
    * Recherche si la premiere date fournit en paramètre est >= à la deuxième date.
    *
    * @param DateTime $date1 1ere date à comparer.
    * @param DateTime $date2 2ème date à comparer.
    * @return boolean true $d1 >= $d2
    */
    private function isDateSuperieureOuEgale($date1, $date2)
    {
    	if (is_null($date1) || is_null($date2))
    	{
    		return FALSE;
    	}
    	 
    	$d1 = new DateTime($date1->format("Y-m-d"));
    	$d2 = new DateTime($date2->format("Y-m-d"));
    	 
    	return $d1->getTimestamp() >= $d2->getTimestamp();
    }
    
    
    /**
     * Méthode qui détermine si la date courante fait partie d'une date réservée et validée.
     * 
     * @param DateTime $currentDate date courante à analyser.
     * @param GaudruereGiteBundle:Reservation $reservations liste des réservations validées pour la période à afficher.
     */
    private function isCalendrierReservePourDate($currentDate, $reservations)
    {
    	foreach($reservations as $cal)
    	{
    		if ($this->isDateBetween($currentDate, $cal->getDateDebut(), $cal->getDateFin()))
    		{
    			return TRUE;
    		}
    	}
    	
    	return FALSE;
    }
    
    
    
    
    
    
    /**
     * Retourne le nom du mois en clair du numéro de mois passé en paramètre
     * suivi de l'année passée en paramètre
     * 
     **/               
    protected function getNomMois($numeroMois, $anneeCourante)
    {
    		switch ($numeroMois)
    		{
    			case 1:
    					$titre = "Janvier " . $anneeCourante; 
    					break;
    			case 2:
    					$titre = "Février " . $anneeCourante;
    					break;
    			case 3:
    					$titre = "Mars " . $anneeCourante;
    					break;
    			case 4:
    					$titre = "Avril " . $anneeCourante;
    					break;
    			case 5:
    					$titre = "Mai " . $anneeCourante;
    					break;
    			case 6:
    					$titre = "Juin " . $anneeCourante;
    					break;
    			case 7:
    					$titre = "Juillet " . $anneeCourante;
    					break;
    			case 8:
    					$titre = "Août " . $anneeCourante;
    					break;
    			case 9:
    					$titre = "Septembre " . $anneeCourante;
    					break;
    			case 10:
    					$titre = "Octobre " . $anneeCourante;
    					break;
    			case 11:
    					$titre = "Novembre " . $anneeCourante;
    					break;
    			case 12:
    					$titre = "Décembre " . $anneeCourante;
    					break;
    			default:
    					$titre = "POUET " . $anneeCourante;
    					break;
    		}
    		return $titre;
    } 
    
    /**
     * Retourne la date de début et de fin sous forme d'objet DateTime à afficher dans la liste
     * des calendriers en fonction des dates demandées, de la date du jour si aucune date n'a été saisie
     * et enfin du nombre de calendriers à afficher.
     * 
     * @param string $strFrDateDebut objet DateTime contenant la date du début du séjour 
     * @param string $strFrDateFin objet DateTime contenant la date de fin du séjour
     * @param integer $nombreDeMoisAAfficher nombre de mois à afficher
     * @param integer $moisCourant numéro du mois de la date du jour (de 1 à 12).
     * @param integer $anneeCourante année de la date du jour.
     */
    protected function getPeriodeAffichage($strFrDateDebut, $strFrDateFin, $nombreDeMoisAAfficher, $moisCourant, $anneeCourante)
    {
    	$dateDebut = '';
    	$dateFin = '';
    	
    	if (is_null($strFrDateDebut))
    	{
    		if (is_null($strFrDateFin))
    		{
				// aucune date n'a été sélectionnée...
				// --
				// on affiche les calendriers du 01/(moisCourant-1) jusqu'au nombre de mois
				// à afficher...
    			// --
    			$moisCourantPrecedent = ($moisCourant - 1) > 0 ? ($moisCourant - 1) : 12;
    			$anneeCourantePrecedente = ($moisCourantPrecedent < 12) ? $anneeCourante : ($anneeCourante - 1); 
    			$dateDebut = (($moisCourantPrecedent < 10) ? '0' . $moisCourantPrecedent : $moisCourantPrecedent) . '-01-' . $anneeCourantePrecedente;
    			$dateFin = $this->getDateFinPeriode($moisCourantPrecedent, $anneeCourantePrecedente, $nombreDeMoisAAfficher);
    		}
    		else
    		{
    			// seulement la date de fin a été sélectionnée
    			// --
    			// on affiche la période : mois/année sélectionné moins 1 mois jusqu'au nombre de mois
				// à afficher...
				// --
    			$mc = $strFrDateFin->format('n');
    			$ac = $strFrDateFin->format('Y');
    			
    			$moisCourantPrecedent = ($mc - 1) > 0 ? ($mc - 1) : 12;
    			$anneeCourantePrecedente = ($mc < 12) ? $ac : ($ac - 1);
    			$dateDebut = (($moisCourantPrecedent < 10) ? '0' . $moisCourantPrecedent : $moisCourantPrecedent) . '-01-' . $anneeCourantePrecedente;
    			$dateFin = $this->getDateFinPeriode($moisCourantPrecedent, $anneeCourantePrecedente, $nombreDeMoisAAfficher);
    		}
    	}
    	else
    	{
    		// on dispose d'une date de début.
    		// Que l'on dispose ou pas d'une date de fin, on effectue le même traitement : la période d'affichage
    		// s'étend du 01/mois précédent la date de début au dernier jour du nombre de mois à afficher 
    		// à partir du mois précédent.
    		$mc = $strFrDateDebut->format('n');
    		$ac = $strFrDateDebut->format('Y');
    		
    		$moisCourantPrecedent = ($mc - 1) > 0 ? ($mc - 1) : 12;
    		$anneeCourantePrecedente = ($mc < 12) ? $ac : ($ac - 1);
    		$dateDebut = (($moisCourantPrecedent < 10) ? '0' . $moisCourantPrecedent : $moisCourantPrecedent) . '-01-' . $anneeCourantePrecedente;
    		$dateFin = $this->getDateFinPeriode($moisCourantPrecedent, $anneeCourantePrecedente, $nombreDeMoisAAfficher);
    	}
    	
    	$dS = DateTime::createFromFormat('m-d-Y', $dateDebut);
    	$dF = DateTime::createFromFormat('m-d-Y', $dateFin);
    	
    	return array($dS, $dF);
    }
    
    /**
     * Retourne la date de fin de la période au format mm-jj-aaaa à partir
     * du numéro du mois de la date de début de la période, de son année et du nombre de mois
     * à afficher.
     * 
     * @param integer $moisDateDebut numéro du mois de la date de début de la période (de 1 à 12).
     * @param integer $anneeDateDebut année de début de la période.
     * @param integer $nombreDeMoisAAfficher nombre de mois à afficher dans la période.
     */
    protected function getDateFinPeriode($moisDateDebut, $anneeDateDebut, $nombreDeMoisAAfficher)
    {
    	// Calcul de la date de fin à afficher
    	$moisCourantFin = $moisDateDebut + ($nombreDeMoisAAfficher - 1);
    	$anneeCouranteFin = $anneeDateDebut;
    	 
    	if ($moisCourantFin > 12)
    	{
    		$anneeCouranteFin++;
    		$moisCourantFin = $moisCourantFin - 12;
    	}
    	
    	// calcul du dernier jour du mois
    	$dernierJour = intval(date("t", mktime(0, 0, 0, $moisCourantFin, 1, $anneeCouranteFin)));
    	return (($moisCourantFin < 10) ? '0' . $moisCourantFin : $moisCourantFin) . '-' . $dernierJour . '-' . $anneeCouranteFin;
    }
    
    
    // ----------------------------------------------------------------------------------
    // ----------------------------------------------------------------------------------
    // ----------------------------------------------------------------------------------
    // ----------------------------------------------------------------------------------
    // ----------------------------------------------------------------------------------
    // ----------------------------------------------------------------------------------
    
    
     /**
     * Lists all Reservation entities.
     *
     * @Route("/adminReservation", name="adminReservation")
     * @Template()
     */
    public function listeAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('GaudruereGiteBundle:Reservation')->findAll();

        return $this->myRender(array("titreMenu" => "",'entities' => $entities));
    }

    /**
     * Finds and displays a Reservation entity.
     *
     * @Route("/adminReservation/{id}/show", name="adminReservation_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Reservation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver cette réservation !');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->myRender(array("titreMenu" => "", "entity" => $entity, "delete_form" => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new Reservation entity.
     *
     * @Route("/adminReservation/new", name="adminReservation_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Reservation();
        $form   = $this->createForm(new ReservationType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Reservation entity.
     *
     * @Route("/adminReservation/create", name="adminReservation_create")
     * @Method("post")
     * @Template("GaudruereGiteBundle:Reservation:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Reservation();
        $request = $this->getRequest();
        $form    = $this->createForm(new ReservationType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminReservation_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Reservation entity.
     *
     * @Route("/adminReservation/{id}/edit", name="adminReservation_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Reservation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver cette réservation !');
        }

        $editForm = $this->createForm(new ReservationType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->myRender(array("titreMenu" => "", "entity" => $entity, 'edit_form'   => $editForm->createView(), "delete_form" => $deleteForm->createView(),));
     }

    /**
     * Edits an existing Reservation entity.
     *
     * @Route("/adminReservation/{id}/update", name="adminReservation_update")
     * @Method("post")
     * @Template("GaudruereGiteBundle:Reservation:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('GaudruereGiteBundle:Reservation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver cette réservation !');
        }

        $editForm   = $this->createForm(new ReservationType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminReservation_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Reservation entity.
     *
     * @Route("/adminReservation/{id}/delete", name="adminReservation_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('GaudruereGiteBundle:Reservation')->find($id);

            if (!$entity) {
            throw $this->createNotFoundException('Impossible de retrouver cette réservation !');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminReservation'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
