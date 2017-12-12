<?php


namespace AppBundle\Controller;


use AppBundle\Entity\Contact;
use AppBundle\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ContactController extends Controller  {

    /**
     * @Route("/contact/form", name="contact.form", defaults={"id" = null})
     * @Route("/contact/form/update/{id}", name="contact.update")
     */
    public function formAction(Request $request, $id){
        // doctrine
        $doctrine = $this->getDoctrine();

        //instances nécessaires au formulaire
        //if(id !== null) () else ($entity = new Contact())
        $entity = $id ? $doctrine->getRepository(contact::class)->find($id) :  new Contact();

        $type = ContactType::class;

        //création du formulaire
        $form = $this -> createForm($type,$entity);

        //récupération de la saisie
        $form->handleRequest($request);

        //formulaire valide
        if ($form->isSubmitted() && $form->isValid()){
            //récupération d'un objet
            $data = $form->getData();
            //exit(dump($data));

            /* Insertion de la table
             * 2 Branches:
             *      getManager() : UPDATE / DELETE / INSERT
             *          persist : file d'attentes des reqqutes SQL
             *          flush : execution des requetes
             *      getRepository() : SELECT; accès à la classe Repository
             */
            $manager = $doctrine->getManager();

            $manager-> persist($data);
            $manager->flush();

            // message de confirmation
            $message =  $id ? "Le contact a été modifié !" : "Le contact a été ajouté !";

            //addFlash (clé inséreé en session, vlaeur de la clé)
            $this->addFlash('notice',$message);

            //redirection
            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/form.html.twig', [
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/contact", name="contact")
     */
    public function indexAction(){
        /*
         * getRepository(entité ciblée):SELECT
         *
         * 4 méthodes de sélection
         *      find(id) : récupérer un enregistrement par le PK
         *      findAll() : récupérer tous les enregistrements
         *      finBy() : récupérer plusieurs enregistrements par une liste de cristères
         * (par la valeur d'une colonne de la table)
         *
         *      finByOne() : récupérer un enregistrement par une liste de cristères
         * */
        $doctrine = $this->getDoctrine();
        $repository = $doctrine->getRepository(Contact::class);
        $results = $repository->findAll();
       // exit(dump($results));

        return $this->render('contact/index.html.twig', [
            'results'=>$results
        ]);
    }

    //Route sans Vue
    /**
     * @Route("/contact/delete/{id}", name="contact.delete")
     */
    public function deleteAction($id){
        /*
         * Sélection puis une suppression (remove va remplacer persist)
         * */
        // Création de doctrine
        $doctrine = $this->getDoctrine();
        $contact = $doctrine->getRepository(Contact::class)->find($id);
        $manager = $doctrine->getManager();

        //Remove le contact de la variable $contact
        $manager->remove($contact);
        $manager->flush();

        // message /redirection
        $this->addFlash('notice',"Le contact {$contact->getFirstname()} 
         {$contact->getLastname()} a été supprimé !");
        return $this->redirectToRoute('contact');
    }

}