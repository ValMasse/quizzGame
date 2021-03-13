<?php

namespace App\DataFixtures;

use App\Entity\Answer;
use App\Repository\QuestionRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AnswerFixtures extends Fixture implements DependentFixtureInterface
{
    private $questionRepository;

    public function __construct(QuestionRepository $questionRepository)
    {
        $this->questionRepository = $questionRepository;
    }

    public function load(ObjectManager $manager)
    {
        // Concern the Question 1
        $answer1 = new Answer();
        $answer1->setQuestion($this->questionRepository->find(1));
        $answer1->setContent('3');
        $answer1->setIsCorrect(false);
        $manager->persist($answer1);

        $answer2 = new Answer();
        $answer2->setQuestion($this->questionRepository->find(1));
        $answer2->setContent('4');
        $answer2->setIsCorrect(true);
        $manager->persist($answer2);

        $answer3 = new Answer();
        $answer3->setQuestion($this->questionRepository->find(1));
        $answer3->setContent('5');
        $answer3->setIsCorrect(false);
        $manager->persist($answer3);

        // Concern the Question 2
        $answer4 = new Answer();
        $answer4->setQuestion($this->questionRepository->find(2));
        $answer4->setContent('Michael Jordan');
        $answer4->setIsCorrect(false);
        $manager->persist($answer4);

        $answer5 = new Answer();
        $answer5->setQuestion($this->questionRepository->find(2));
        $answer5->setContent('Kareem Abdul Jabbar');
        $answer5->setIsCorrect(true);
        $manager->persist($answer5);

        $answer6 = new Answer();
        $answer6->setQuestion($this->questionRepository->find(2));
        $answer6->setContent('Kobe Bryant');
        $answer6->setIsCorrect(false);
        $manager->persist($answer6);

        // Concern the Question 3
        $answer7 = new Answer();
        $answer7->setQuestion($this->questionRepository->find(3));
        $answer7->setContent('Boston Celtics');
        $answer7->setIsCorrect(true);
        $manager->persist($answer7);

        $answer8 = new Answer();
        $answer8->setQuestion($this->questionRepository->find(3));
        $answer8->setContent('Los Angeles Lakers');
        $answer8->setIsCorrect(false);
        $manager->persist($answer8);

        $answer9 = new Answer();
        $answer9->setQuestion($this->questionRepository->find(3));
        $answer9->setContent('Philadelphia Sixers');
        $answer9->setIsCorrect(false);
        $manager->persist($answer9);

        // Concern the Question 4
        $answer10 = new Answer();
        $answer10->setQuestion($this->questionRepository->find(4));
        $answer10->setContent('3');
        $answer10->setIsCorrect(false);
        $manager->persist($answer10);

        $answer11 = new Answer();
        $answer11->setQuestion($this->questionRepository->find(4));
        $answer11->setContent('4');
        $answer11->setIsCorrect(false);
        $manager->persist($answer11);

        $answer12 = new Answer();
        $answer12->setQuestion($this->questionRepository->find(4));
        $answer12->setContent('5');
        $answer12->setIsCorrect(true);
        $manager->persist($answer12);

        // Concern the Question 5
        $answer13 = new Answer();
        $answer13->setQuestion($this->questionRepository->find(5));
        $answer13->setContent('OL');
        $answer13->setIsCorrect(false);
        $manager->persist($answer13);

        $answer14 = new Answer();
        $answer14->setQuestion($this->questionRepository->find(5));
        $answer14->setContent('OM');
        $answer14->setIsCorrect(false);
        $manager->persist($answer14);

        $answer15 = new Answer();
        $answer15->setQuestion($this->questionRepository->find(5));
        $answer15->setContent('PSG');
        $answer15->setIsCorrect(true);
        $manager->persist($answer15);

        // Concern the Question 6
        $answer16 = new Answer();
        $answer16->setQuestion($this->questionRepository->find(6));
        $answer16->setContent('Jimmy Briand');
        $answer16->setIsCorrect(true);
        $manager->persist($answer16);

        $answer17 = new Answer();
        $answer17->setQuestion($this->questionRepository->find(6));
        $answer17->setContent('Kylian Mbappé');
        $answer17->setIsCorrect(false);
        $manager->persist($answer17);

        $answer18 = new Answer();
        $answer18->setQuestion($this->questionRepository->find(6));
        $answer18->setContent('Ben Yedder');
        $answer18->setIsCorrect(false);
        $manager->persist($answer18);

        // Concern the Question 7
        $answer19 = new Answer();
        $answer19->setQuestion($this->questionRepository->find(7));
        $answer19->setContent('Boris Diaw');
        $answer19->setIsCorrect(false);
        $manager->persist($answer19);

        $answer20 = new Answer();
        $answer20->setQuestion($this->questionRepository->find(7));
        $answer20->setContent('Tony Parker');
        $answer20->setIsCorrect(true);
        $manager->persist($answer20);

        $answer21 = new Answer();
        $answer21->setQuestion($this->questionRepository->find(7));
        $answer21->setContent('Nicolas Batum');
        $answer21->setIsCorrect(false);
        $manager->persist($answer21);

        // Concern the Question 8
        $answer22 = new Answer();
        $answer22->setQuestion($this->questionRepository->find(8));
        $answer22->setContent('en 2000');
        $answer22->setIsCorrect(true);
        $manager->persist($answer22);

        $answer23 = new Answer();
        $answer23->setQuestion($this->questionRepository->find(8));
        $answer23->setContent('en 2016');
        $answer23->setIsCorrect(false);
        $manager->persist($answer23);

        $answer24 = new Answer();
        $answer24->setQuestion($this->questionRepository->find(8));
        $answer24->setContent('en 1984');
        $answer24->setIsCorrect(false);
        $manager->persist($answer24);

        // Concern the Question 9
        $answer25 = new Answer();
        $answer25->setQuestion($this->questionRepository->find(9));
        $answer25->setContent('Carl Lewis');
        $answer25->setIsCorrect(false);
        $manager->persist($answer25);

        $answer26 = new Answer();
        $answer26->setQuestion($this->questionRepository->find(9));
        $answer26->setContent('Asafa Powell');
        $answer26->setIsCorrect(false);
        $manager->persist($answer26);

        $answer27 = new Answer();
        $answer27->setQuestion($this->questionRepository->find(9));
        $answer27->setContent('Usain Bolt');
        $answer27->setIsCorrect(true);
        $manager->persist($answer27);

        // Concern the Question 10
        $answer28 = new Answer();
        $answer28->setQuestion($this->questionRepository->find(10));
        $answer28->setContent('Zinédine Zidane');
        $answer28->setIsCorrect(false);
        $manager->persist($answer28);

        $answer29 = new Answer();
        $answer29->setQuestion($this->questionRepository->find(10));
        $answer29->setContent('Diego Maradona');
        $answer29->setIsCorrect(false);
        $manager->persist($answer29);

        $answer30 = new Answer();
        $answer30->setQuestion($this->questionRepository->find(10));
        $answer30->setContent('David Beckham');
        $answer30->setIsCorrect(true);
        $manager->persist($answer30);

        // Concern the Question 11
        $answer31 = new Answer();
        $answer31->setQuestion($this->questionRepository->find(11));
        $answer31->setContent('HyperText PreProcessor');
        $answer31->setIsCorrect(true);
        $manager->persist($answer31);

        $answer32 = new Answer();
        $answer32->setQuestion($this->questionRepository->find(11));
        $answer32->setContent('Preprocessor Hyper Text');
        $answer32->setIsCorrect(false);
        $manager->persist($answer32);

        $answer33 = new Answer();
        $answer33->setQuestion($this->questionRepository->find(11));
        $answer33->setContent('pour henry Poirier');
        $answer33->setIsCorrect(false);
        $manager->persist($answer33);

        // Concern the Question 12
        $answer34 = new Answer();
        $answer34->setQuestion($this->questionRepository->find(12));
        $answer34->setContent('Angular');
        $answer34->setIsCorrect(false);
        $manager->persist($answer34);

        $answer35 = new Answer();
        $answer35->setQuestion($this->questionRepository->find(12));
        $answer35->setContent('VueJs');
        $answer35->setIsCorrect(false);
        $manager->persist($answer35);

        $answer36 = new Answer();
        $answer36->setQuestion($this->questionRepository->find(12));
        $answer36->setContent('React');
        $answer36->setIsCorrect(true);
        $manager->persist($answer36);

        // Concern the Question 13
        $answer37 = new Answer();
        $answer37->setQuestion($this->questionRepository->find(13));
        $answer37->setContent('Vrai');
        $answer37->setIsCorrect(true);
        $manager->persist($answer37);

        $answer38 = new Answer();
        $answer38->setQuestion($this->questionRepository->find(13));
        $answer38->setContent('Faux');
        $answer38->setIsCorrect(false);
        $manager->persist($answer38);

        // Concern the Question 14
        $answer39 = new Answer();
        $answer39->setQuestion($this->questionRepository->find(14));
        $answer39->setContent('Jquery');
        $answer39->setIsCorrect(false);
        $manager->persist($answer39);

        $answer40 = new Answer();
        $answer40->setQuestion($this->questionRepository->find(14));
        $answer40->setContent('Doctrine');
        $answer40->setIsCorrect(true);
        $manager->persist($answer40);

        $answer41 = new Answer();
        $answer41->setQuestion($this->questionRepository->find(14));
        $answer41->setContent('Hibernate');
        $answer41->setIsCorrect(false);
        $manager->persist($answer41);

        // Concern the Question 15
        $answer42 = new Answer();
        $answer42->setQuestion($this->questionRepository->find(15));
        $answer42->setContent('Faux');
        $answer42->setIsCorrect(false);
        $manager->persist($answer42);

        $answer43 = new Answer();
        $answer43->setQuestion($this->questionRepository->find(15));
        $answer43->setContent('Vrai');
        $answer43->setIsCorrect(true);
        $manager->persist($answer43);

        // Concern the Question 16
        $answer44 = new Answer();
        $answer44->setQuestion($this->questionRepository->find(16));
        $answer44->setContent('Vrai');
        $answer44->setIsCorrect(false);
        $manager->persist($answer44);

        $answer45 = new Answer();
        $answer45->setQuestion($this->questionRepository->find(16));
        $answer45->setContent('Faux');
        $answer45->setIsCorrect(true);
        $manager->persist($answer45);

        // Concern the Question 17
        $answer46 = new Answer();
        $answer46->setQuestion($this->questionRepository->find(17));
        $answer46->setContent('en 2000');
        $answer46->setIsCorrect(false);
        $manager->persist($answer46);

        $answer47 = new Answer();
        $answer47->setQuestion($this->questionRepository->find(17));
        $answer47->setContent('en 2016');
        $answer47->setIsCorrect(false);
        $manager->persist($answer47);

        // Concern the Question 18
        $answer48 = new Answer();
        $answer48->setQuestion($this->questionRepository->find(18));
        $answer48->setContent('Faux');
        $answer48->setIsCorrect(false);
        $manager->persist($answer48);

        $answer49 = new Answer();
        $answer49->setQuestion($this->questionRepository->find(18));
        $answer49->setContent('Vrai');
        $answer49->setIsCorrect(true);
        $manager->persist($answer49);

        // Concern the Question 19
        $answer50 = new Answer();
        $answer50->setQuestion($this->questionRepository->find(19));
        $answer50->setContent('stocker des archives');
        $answer50->setIsCorrect(false);
        $manager->persist($answer50);

        $answer51 = new Answer();
        $answer51->setQuestion($this->questionRepository->find(19));
        $answer51->setContent('stocker des mots de passe');
        $answer51->setIsCorrect(false);
        $manager->persist($answer51);

        $answer52 = new Answer();
        $answer52->setQuestion($this->questionRepository->find(19));
        $answer52->setContent('reçevoir une requête et retourner une réponse');
        $answer52->setIsCorrect(true);
        $manager->persist($answer52);

        // Concern the Question 20
        $answer53 = new Answer();
        $answer53->setQuestion($this->questionRepository->find(20));
        $answer53->setContent('Symfony');
        $answer53->setIsCorrect(true);
        $manager->persist($answer53);

        $answer54 = new Answer();
        $answer54->setQuestion($this->questionRepository->find(20));
        $answer54->setContent('Laravel');
        $answer54->setIsCorrect(false);
        $manager->persist($answer54);

        $answer55 = new Answer();
        $answer55->setQuestion($this->questionRepository->find(20));
        $answer55->setContent('CodeIgniter');
        $answer55->setIsCorrect(false);
        $manager->persist($answer55);

        // Concern the Question 21
        $answer56 = new Answer();
        $answer56->setQuestion($this->questionRepository->find(21));
        $answer56->setContent('en 1863');
        $answer56->setIsCorrect(false);
        $manager->persist($answer56);

        $answer57 = new Answer();
        $answer57->setQuestion($this->questionRepository->find(21));
        $answer57->setContent('en 1861');
        $answer57->setIsCorrect(true);
        $manager->persist($answer57);

        $answer58 = new Answer();
        $answer58->setQuestion($this->questionRepository->find(21));
        $answer58->setContent('en 1864');
        $answer58->setIsCorrect(false);
        $manager->persist($answer58);

        // Concern the Question 22
        $answer59 = new Answer();
        $answer59->setQuestion($this->questionRepository->find(22));
        $answer59->setContent('Félix Faure');
        $answer59->setIsCorrect(true);
        $manager->persist($answer59);

        $answer60 = new Answer();
        $answer60->setQuestion($this->questionRepository->find(22));
        $answer60->setContent('René Coty');
        $answer60->setIsCorrect(false);
        $manager->persist($answer60);

        $answer61 = new Answer();
        $answer61->setQuestion($this->questionRepository->find(22));
        $answer61->setContent('François Mittérand');
        $answer61->setIsCorrect(false);
        $manager->persist($answer61);

        // Concern the Question 23
        $answer62 = new Answer();
        $answer62->setQuestion($this->questionRepository->find(23));
        $answer62->setContent('4 décembre 1805');
        $answer62->setIsCorrect(false);
        $manager->persist($answer62);

        $answer63 = new Answer();
        $answer63->setQuestion($this->questionRepository->find(23));
        $answer63->setContent('8 décembre 1805');
        $answer63->setIsCorrect(false);
        $manager->persist($answer63);

        $answer64 = new Answer();
        $answer64->setQuestion($this->questionRepository->find(23));
        $answer64->setContent('2 décembre 1805');
        $answer64->setIsCorrect(true);
        $manager->persist($answer64);

        // Concern the Question 24
        $answer65 = new Answer();
        $answer65->setQuestion($this->questionRepository->find(24));
        $answer65->setContent('Jean Jacques');
        $answer65->setIsCorrect(false);
        $manager->persist($answer65);

        $answer66 = new Answer();
        $answer66->setQuestion($this->questionRepository->find(24));
        $answer66->setContent('Edouard Snowden');
        $answer66->setIsCorrect(true);
        $manager->persist($answer66);

        $answer67 = new Answer();
        $answer67->setQuestion($this->questionRepository->find(24));
        $answer67->setContent('René Malville');
        $answer67->setIsCorrect(false);
        $manager->persist($answer67);

        // Concern the Question 25
        $answer68 = new Answer();
        $answer68->setQuestion($this->questionRepository->find(25));
        $answer68->setContent('argentin');
        $answer68->setIsCorrect(true);
        $manager->persist($answer68);

        $answer69 = new Answer();
        $answer69->setQuestion($this->questionRepository->find(25));
        $answer69->setContent('cubain');
        $answer69->setIsCorrect(false);
        $manager->persist($answer69);

        $answer70 = new Answer();
        $answer70->setQuestion($this->questionRepository->find(25));
        $answer70->setContent('chilien');
        $answer70->setIsCorrect(false);
        $manager->persist($answer70);

        // Concern the Question 26
        $answer71 = new Answer();
        $answer71->setQuestion($this->questionRepository->find(26));
        $answer71->setContent('11 novembre 1989');
        $answer71->setIsCorrect(false);
        $manager->persist($answer71);

        $answer72 = new Answer();
        $answer72->setQuestion($this->questionRepository->find(26));
        $answer72->setContent('9 novembre 1989');
        $answer72->setIsCorrect(true);
        $manager->persist($answer72);

        $answer73 = new Answer();
        $answer73->setQuestion($this->questionRepository->find(26));
        $answer73->setContent('10 novembre 1989');
        $answer73->setIsCorrect(false);
        $manager->persist($answer73);

        // Concern the Question 27
        $answer74 = new Answer();
        $answer74->setQuestion($this->questionRepository->find(27));
        $answer74->setContent('18 juin 1942');
        $answer74->setIsCorrect(false);
        $manager->persist($answer74);

        $answer75 = new Answer();
        $answer75->setQuestion($this->questionRepository->find(27));
        $answer75->setContent('18 juin 1944');
        $answer75->setIsCorrect(false);
        $manager->persist($answer75);

        $answer76 = new Answer();
        $answer76->setQuestion($this->questionRepository->find(27));
        $answer76->setContent('18 juin 1940');
        $answer76->setIsCorrect(true);
        $manager->persist($answer76);

        // Concern the Question 28
        $answer77 = new Answer();
        $answer77->setQuestion($this->questionRepository->find(28));
        $answer77->setContent('française');
        $answer77->setIsCorrect(true);
        $manager->persist($answer77);

        $answer78 = new Answer();
        $answer78->setQuestion($this->questionRepository->find(28));
        $answer78->setContent('polonaise');
        $answer78->setIsCorrect(false);
        $manager->persist($answer78);

        $answer79 = new Answer();
        $answer79->setQuestion($this->questionRepository->find(28));
        $answer79->setContent('hongroise');
        $answer79->setIsCorrect(false);
        $manager->persist($answer79);

        // Concern the Question 29
        $answer80 = new Answer();
        $answer80->setQuestion($this->questionRepository->find(29));
        $answer80->setContent('le frère de..');
        $answer80->setIsCorrect(false);
        $manager->persist($answer80);

        $answer81 = new Answer();
        $answer81->setQuestion($this->questionRepository->find(29));
        $answer81->setContent('saint esprit');
        $answer81->setIsCorrect(true);
        $manager->persist($answer81);

        $answer82 = new Answer();
        $answer82->setQuestion($this->questionRepository->find(29));
        $answer82->setContent('esprit sain');
        $answer82->setIsCorrect(true);
        $manager->persist($answer82);

        // Concern the Question 30
        $answer83 = new Answer();
        $answer83->setQuestion($this->questionRepository->find(30));
        $answer83->setContent('En Chine');
        $answer83->setIsCorrect(true);
        $manager->persist($answer83);

        $answer84 = new Answer();
        $answer84->setQuestion($this->questionRepository->find(30));
        $answer84->setContent('En Italie');
        $answer84->setIsCorrect(false);
        $manager->persist($answer84);

        $answer85 = new Answer();
        $answer85->setQuestion($this->questionRepository->find(30));
        $answer85->setContent('Chez Panzani');
        $answer85->setIsCorrect(true);
        $manager->persist($answer85);

        // Concern the Question 31
        $answer86 = new Answer();
        $answer86->setQuestion($this->questionRepository->find(31));
        $answer86->setContent('en 1978');
        $answer86->setIsCorrect(false);
        $manager->persist($answer86);

        $answer87 = new Answer();
        $answer87->setQuestion($this->questionRepository->find(31));
        $answer87->setContent('en 1980');
        $answer87->setIsCorrect(false);
        $manager->persist($answer87);

        $answer88 = new Answer();
        $answer88->setQuestion($this->questionRepository->find(31));
        $answer88->setContent('en 1977');
        $answer88->setIsCorrect(true);
        $manager->persist($answer88);

        // Concern the Question 32
        $answer89 = new Answer();
        $answer89->setQuestion($this->questionRepository->find(32));
        $answer89->setContent('Halle Berry');
        $answer89->setIsCorrect(true);
        $manager->persist($answer89);

        $answer90 = new Answer();
        $answer90->setQuestion($this->questionRepository->find(32));
        $answer90->setContent('Cameron Diaz');
        $answer90->setIsCorrect(false);
        $manager->persist($answer90);

        $answer91 = new Answer();
        $answer91->setQuestion($this->questionRepository->find(32));
        $answer91->setContent('Marion Cotillard');
        $answer91->setIsCorrect(false);
        $manager->persist($answer91);

        // Concern the Question 33
        $answer92 = new Answer();
        $answer92->setQuestion($this->questionRepository->find(33));
        $answer92->setContent('Les Sandwichs');
        $answer92->setIsCorrect(true);
        $manager->persist($answer92);

        $answer93 = new Answer();
        $answer93->setQuestion($this->questionRepository->find(33));
        $answer93->setContent('Les pizzas');
        $answer93->setIsCorrect(false);
        $manager->persist($answer93);

        $answer94 = new Answer();
        $answer94->setQuestion($this->questionRepository->find(33));
        $answer94->setContent('Les oeufs');
        $answer94->setIsCorrect(true);
        $manager->persist($answer94);

        // Concern the Question 34
        $answer95 = new Answer();
        $answer95->setQuestion($this->questionRepository->find(34));
        $answer95->setContent('1994');
        $answer95->setIsCorrect(false);
        $manager->persist($answer95);

        $answer96 = new Answer();
        $answer96->setQuestion($this->questionRepository->find(34));
        $answer96->setContent('1995');
        $answer96->setIsCorrect(true);
        $manager->persist($answer96);

        $answer97 = new Answer();
        $answer97->setQuestion($this->questionRepository->find(34));
        $answer97->setContent('1996');
        $answer97->setIsCorrect(false);
        $manager->persist($answer97);

        // Concern the Question 35
        $answer98 = new Answer();
        $answer98->setQuestion($this->questionRepository->find(35));
        $answer98->setContent('Insaisissables');
        $answer98->setIsCorrect(false);
        $manager->persist($answer98);

        $answer99 = new Answer();
        $answer99->setQuestion($this->questionRepository->find(35));
        $answer99->setContent('This is us');
        $answer99->setIsCorrect(false);
        $manager->persist($answer99);

        $answer100 = new Answer();
        $answer100->setQuestion($this->questionRepository->find(35));
        $answer100->setContent('Le Prestige');
        $answer100->setIsCorrect(true);
        $manager->persist($answer100);

        // Concern the Question 36
        $answer101 = new Answer();
        $answer101->setQuestion($this->questionRepository->find(36));
        $answer101->setContent('Vrai');
        $answer101->setIsCorrect(true);
        $manager->persist($answer101);

        $answer102 = new Answer();
        $answer102->setQuestion($this->questionRepository->find(36));
        $answer102->setContent('Faux');
        $answer102->setIsCorrect(false);
        $manager->persist($answer102);

        // Concern the Question 37
        $answer103 = new Answer();
        $answer103->setQuestion($this->questionRepository->find(37));
        $answer103->setContent('David Lynch');
        $answer103->setIsCorrect(false);
        $manager->persist($answer103);

        $answer104 = new Answer();
        $answer104->setQuestion($this->questionRepository->find(37));
        $answer104->setContent('Christopher Nolan');
        $answer104->setIsCorrect(false);
        $manager->persist($answer104);

        $answer105 = new Answer();
        $answer105->setQuestion($this->questionRepository->find(37));
        $answer105->setContent('Martin Scorcese');
        $answer105->setIsCorrect(true);
        $manager->persist($answer105);

        // Concern the Question 38
        $answer106 = new Answer();
        $answer106->setQuestion($this->questionRepository->find(38));
        $answer106->setContent('Brad Pitt');
        $answer106->setIsCorrect(false);
        $manager->persist($answer106);

        $answer107 = new Answer();
        $answer107->setQuestion($this->questionRepository->find(38));
        $answer107->setContent('Zach Galifianagis');
        $answer107->setIsCorrect(true);
        $manager->persist($answer107);

        $answer108 = new Answer();
        $answer108->setQuestion($this->questionRepository->find(38));
        $answer108->setContent('Bradley Cooper');
        $answer108->setIsCorrect(false);
        $manager->persist($answer108);

        // Concern the Question 39
        $answer109 = new Answer();
        $answer109->setQuestion($this->questionRepository->find(39));
        $answer109->setContent('Mike');
        $answer109->setIsCorrect(false);
        $manager->persist($answer109);

        $answer110 = new Answer();
        $answer110->setQuestion($this->questionRepository->find(39));
        $answer110->setContent('Joey');
        $answer110->setIsCorrect(true);
        $manager->persist($answer110);

        $answer111 = new Answer();
        $answer111->setQuestion($this->questionRepository->find(39));
        $answer111->setContent('David');
        $answer111->setIsCorrect(false);
        $manager->persist($answer111);

        // Concern the Question 40
        $answer112 = new Answer();
        $answer112->setQuestion($this->questionRepository->find(40));
        $answer112->setContent('Christopher Nolan');
        $answer112->setIsCorrect(true);
        $manager->persist($answer112);

        $answer113 = new Answer();
        $answer113->setQuestion($this->questionRepository->find(40));
        $answer113->setContent('David Lynch');
        $answer113->setIsCorrect(false);
        $manager->persist($answer113);

        $answer114 = new Answer();
        $answer114->setQuestion($this->questionRepository->find(40));
        $answer114->setContent('Ron Howard');
        $answer114->setIsCorrect(false);
        $manager->persist($answer114);

        $manager->flush();
    }

    public function getDependencies() : array
    {
        return [
            QuestionFixtures::class
        ];
    }
}
