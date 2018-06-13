<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use \DateTime;

class IndexController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     * @Route("/home",name="ul_homepage")
     */
    public function indexAction()
    {

        $demandeRepository = $this->getDoctrine()
            ->getRepository('AppBundle:Demande');

        $impressionRepository = $this->getDoctrine()
            ->getRepository('AppBundle:Impression');

        $annee = (new DateTime)->format("Y");

        $nbDemandesYear = $demandeRepository->findNbDemandesByYear($annee);

        $nbImpressionsYear = $impressionRepository->findNbImpressionsByYear($annee);

        $nbResteAImprimer = $demandeRepository->findNbDemandeByEtat("En cours");

        $nbOriginauxYear = $demandeRepository->findDemandesByType("Original");

        $nbDuplicataYear = $demandeRepository->findDemandesByType("Duplicata");

        return $this->render('AppBundle:Default:index.html.twig', array('nbDemandesYear' => $nbDemandesYear,
            'nbImpressionsYear' => $nbImpressionsYear, 'nbResteAImprimer' => $nbResteAImprimer, 'nbOriginauxYear' => $nbOriginauxYear, 'nbDuplicataYear' => $nbDuplicataYear));

    }
}
