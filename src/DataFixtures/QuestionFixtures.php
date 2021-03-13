<?php

namespace App\DataFixtures;

use App\Entity\Question;
use App\Repository\CategoryRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class QuestionFixtures extends Fixture implements DependentFixtureInterface
{
    private $categoryRepository;


    public function  __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function load(ObjectManager $manager)
    {
        // CATEGORY SPORTS
        $question1 = new Question();
        $question1->setCategory($this->categoryRepository->find(1));
        $question1->setContent('Combien de joueurs de football français ont remporté le ballon d\'Or?');
        $manager->persist($question1);

        $question2 = new Question();
        $question2->setCategory($this->categoryRepository->find(1));
        $question2->setContent('Quel joueur NBA détient le record de nombre total de points marqués?');
        $manager->persist($question2);

        $question3 = new Question();
        $question3->setCategory($this->categoryRepository->find(1));
        $question3->setContent('Quel club est le plus titré de l\'histoire de la NBA?');
        $manager->persist($question3);

        $question4 = new Question();
        $question4->setCategory($this->categoryRepository->find(1));
        $question4->setContent('Combien de coupe du monde de football le Brésil a t il remporté?');
        $manager->persist($question4);

        $question5 = new Question();
        $question5->setCategory($this->categoryRepository->find(1));
        $question5->setContent('Quel club de football français détient le plus gros palmarès?');
        $manager->persist($question5);

        $question6 = new Question();
        $question6->setCategory($this->categoryRepository->find(1));
        $question6->setContent('Quel est le meilleur buteur en activité de ligue 1 (FR)?');
        $manager->persist($question6);

        $question7 = new Question();
        $question7->setCategory($this->categoryRepository->find(1));
        $question7->setContent('Quel joueur français de l\'histoire de la NBA a déjà remporté le titre de MVP?');
        $manager->persist($question7);

        $question8 = new Question();
        $question8->setCategory($this->categoryRepository->find(1));
        $question8->setContent('En quelle année la France a remporté l\'EURO en football ?');
        $manager->persist($question8);

        $question9 = new Question();
        $question9->setCategory($this->categoryRepository->find(1));
        $question9->setContent('Quel athlète détient le record du monde de vitesse?');
        $manager->persist($question9);

        $question10 = new Question();
        $question10->setCategory($this->categoryRepository->find(1));
        $question10->setContent('Quel joueur de football a donné son nom à un film et se la joue un peu?');
        $manager->persist($question10);

        // CATEGORY DEV
        $question11 = new Question();
        $question11->setCategory($this->categoryRepository->find(2));
        $question11->setContent('Que signifie le sigle PHP?');
        $manager->persist($question11);

        $question12 = new Question();
        $question12->setCategory($this->categoryRepository->find(2));
        $question12->setContent('Quel nom porte le framework Front-End créé par Facebook?');
        $manager->persist($question12);

        $question13 = new Question();
        $question13->setCategory($this->categoryRepository->find(2));
        $question13->setContent('Un objet est une instance de classe?');
        $manager->persist($question13);

        $question14 = new Question();
        $question14->setCategory($this->categoryRepository->find(2));
        $question14->setContent('Quel nom porte l\'ORM du framework Symfony?');
        $manager->persist($question14);

        $question15 = new Question();
        $question15->setCategory($this->categoryRepository->find(2));
        $question15->setContent('Java est un langage orienté objet?');
        $manager->persist($question15);

        $question16 = new Question();
        $question16->setCategory($this->categoryRepository->find(2));
        $question16->setContent('Ryan Gosling est le créateur du langage Java?');
        $manager->persist($question16);

        $question17 = new Question();
        $question17->setCategory($this->categoryRepository->find(2));
        $question17->setContent('Les langages Java et Javascript ont été créés par la même personne?');
        $manager->persist($question17);

        $question18 = new Question();
        $question18->setCategory($this->categoryRepository->find(2));
        $question18->setContent('En programmation TRUE équivaut à 1?');
        $manager->persist($question18);

        $question19 = new Question();
        $question19->setCategory($this->categoryRepository->find(2));
        $question19->setContent('Quel est le rôle essentiel d\'un serveur?');
        $manager->persist($question19);

        $question20 = new Question();
        $question20->setCategory($this->categoryRepository->find(2));
        $question20->setContent('Quel framework PHP a été créé en France?');
        $manager->persist($question20);

        // CATEGORY GENERAL CULTURE
        $question21 = new Question();
        $question21->setCategory($this->categoryRepository->find(3));
        $question21->setContent('En quelle année a débuté la guerre de session aux USA?');
        $manager->persist($question21);

        $question22 = new Question();
        $question22->setCategory($this->categoryRepository->find(3));
        $question22->setContent('Quel président français est mort entouré de joie ^^?');
        $manager->persist($question22);

        $question23 = new Question();
        $question23->setCategory($this->categoryRepository->find(3));
        $question23->setContent('Quelle est la date de la bataille d\'Austerlitz?');
        $manager->persist($question23);

        $question24 = new Question();
        $question24->setCategory($this->categoryRepository->find(3));
        $question24->setContent('Quel est le nom du lanceur d\'alerte qui a dénoncé les abus de la NSA dans les années 2000?');
        $manager->persist($question24);

        $question25 = new Question();
        $question25->setCategory($this->categoryRepository->find(3));
        $question25->setContent('Quel était la nationalité du \'Ché Guévara\'?');
        $manager->persist($question25);

        $question26 = new Question();
        $question26->setCategory($this->categoryRepository->find(3));
        $question26->setContent('Quelle est la date de la chute du mur de Berlin?');
        $manager->persist($question26);

        $question27 = new Question();
        $question27->setCategory($this->categoryRepository->find(3));
        $question27->setContent('A quel date le Général de Gaulle a lancé son appel depuis Londres?');
        $manager->persist($question27);

        $question28 = new Question();
        $question28->setCategory($this->categoryRepository->find(3));
        $question28->setContent('Quel était la nationalité de Marie Curie?');
        $manager->persist($question28);

        $question29 = new Question();
        $question29->setCategory($this->categoryRepository->find(3));
        $question29->setContent('Que signifie \'spiritus sancti\' en latin?');
        $manager->persist($question29);

        $question30 = new Question();
        $question30->setCategory($this->categoryRepository->find(3));
        $question30->setContent('Dans quel pays les pâtes ont elles été inventées?');
        $manager->persist($question30);

        // CATEGORY MOVIES
        $question31 = new Question();
        $question31->setCategory($this->categoryRepository->find(4));
        $question31->setContent('En quelle année est sorti le film \'La guerre des étoiles\'?');
        $manager->persist($question31);

        $question32 = new Question();
        $question32->setCategory($this->categoryRepository->find(4));
        $question32->setContent('Quel actrice afro-américaine a remporté un oscar pour la récompense du titre de la meilleure interprète féminine?');
        $manager->persist($question32);

        $question33 = new Question();
        $question33->setCategory($this->categoryRepository->find(4));
        $question33->setContent('Quel est le plat préféré de Joey Tribiani?');
        $manager->persist($question33);

        $question34 = new Question();
        $question34->setCategory($this->categoryRepository->find(4));
        $question34->setContent('En quelle année a été réalisé le premier film de la sage \'Jumanji\'?');
        $manager->persist($question34);

        $question35 = new Question();
        $question35->setCategory($this->categoryRepository->find(4));
        $question35->setContent('Quel film raconte l\'histoire de deux magiciens qui s\'affrontent jadis à Londre?');
        $manager->persist($question35);

        $question36 = new Question();
        $question36->setCategory($this->categoryRepository->find(4));
        $question36->setContent('Bradley Cooper a vécu en France étant plus jeune?');
        $manager->persist($question36);

        $question37 = new Question();
        $question37->setCategory($this->categoryRepository->find(4));
        $question37->setContent('Qui a réalisé le film \'Les Affranchis\'?');
        $manager->persist($question37);

        $question38 = new Question();
        $question38->setCategory($this->categoryRepository->find(4));
        $question38->setContent('Quel acteur accompagne Robert Downey Jr dans le film \'Date Limite\'?');
        $manager->persist($question38);

        $question39 = new Question();
        $question39->setCategory($this->categoryRepository->find(4));
        $question39->setContent('Ross, Rachel, Monica, Phoebe, Chandler et ...?');
        $manager->persist($question39);

        $question40 = new Question();
        $question40->setCategory($this->categoryRepository->find(4));
        $question40->setContent('Qui a réalisé le film \'Interstellar\'?');
        $manager->persist($question40);

        $manager->flush();
    }

    public function getDependencies() : array
    {
        return [
            CategoryFixtures::class
        ];
    }
}
